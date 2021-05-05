<?php
class AsthSys
{
    private $PDO;
    private $mail;

    public function __construct($PDOconn, $mail){
        $this->PDO = $PDOconn;
        $this->mail = $mail;
    }

    public function confermaRegistrazione($id, $token){
        try {
            $q = "SELECT id FROM Utenti WHERE id = :id AND token = :token";
            $rq = $this->PDO->prepare($q);
            $rq->bindParam(":id", $id, PDO::PARAM_INT);
            $rq->bindParam(":token", $token, PDO::PARAM_STR);
            $rq->execute();
            if($rq->rowCount() == 0){
                return FALSE;
            }
            $this->PDO->query("UPDATE Utenti SET attivato = 1 WHERE id = $id");
            return TRUE;
        }catch(PDOException $e){
            return FALSE;
        }

    }

    public function usernameExists($in_uname){
        $q = "SELECT * FROM utenti WHERE (username = :uname)";
        $rq =  $this->PDO->prepare($q);
        $rq->bindParam(":uname", $in_uname, PDO::PARAM_STR);
        $rq->execute();
        if ($rq->rowCount() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function checkModuli($post){
        if (!(ctype_alnum($post['uname']) && mb_strlen($post['uname']) >= 8 && mb_strlen($post['uname']) <= 12)) {
            throw new Exception("Username non valida\n(Lunghezza tra 8 e 12 caratteri)");
        }

        if (!preg_match('/^[a-zA-Z0-9_\-\$@#!]{8,}$/', $post['pwd'])) {
            throw new Exception("Password non valida\n(La password può contenere solo lettere, numeri e $,@,#,!");
        }

        if (strcmp($post['pwd'], $post['re_pwd']) !== 0) {
            throw new Exception("Password e conferma non coincidono!");
        }

        if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email non valida");
        }

        if (mb_strlen($post['nome']) == 0) {
            throw new Exception("Nome non indicato!");
        }
    }

    public function addUser($post, $pwd_hash, $token): int{
        $q = "INSERT INTO utenti (username, password, nome, email, token) VALUES(:uname, :pwd, :nome, :email, :token)";
        $rq = $this->PDO->prepare($q);
        $rq->bindParam(":uname", $post['uname'], PDO::PARAM_STR);
        $rq->bindParam(":pwd", $pwd_hash, PDO::PARAM_STR);
        $rq->bindParam(":nome", $post['nome'], PDO::PARAM_STR);
        $rq->bindParam(":email", $post['email'], PDO::PARAM_STR);
        $rq->bindParam(":token", $token, PDO::PARAM_STR);
        $rq->execute();
        return $this->PDO->lastInsertId();
    }

    public function registraNuovoUtente($post) {
        
        foreach ($post as $key => $value) {
            $post[$key] = trim($value);
        }

        try {
            if ($this->usernameExists($post['uname'])) {
                return "L'username indicata è gia presente";
            }
            $this->checkModuli($post);
            $pwd_hash = password_hash($post['pwd'], PASSWORD_DEFAULT);
            $token = bin2hex(random_bytes(32));
            $id = $this->addUser($post, $pwd_hash, $token);

            //Invio mail con link attivazione
            $queryString = ['id' => $id, 'token' => $token];
            $linkAttivazione = "http://localhost/Progetto_Scuola/Login-Register-PHP/auth_system/attivazione.php?"
            . http_build_query($queryString);
            $this->inviaEmailAttivazione($post['email'], $linkAttivazione);
        }
        catch (PDOException $e) {
            return "Sembra esserci un problema. Riprova tra alcuni minuti";
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
        return "Sei stato correttamente registrato";
    }

    public function inviaEmailAttivazione($toEmail, $linkAttivazione){
        $mail = &$this->mail;
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = $mail::ENCRYPTION_SMTPS;
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->IsHTML(true);
        $mail->Username = "prova12345prova12345prova12345@gmail.com";
        $mail->Password = "prova12345";
        $mail->SetFrom("$toEmail","Email di conferma Account");
        $mail->AddAddress($toEmail);
        $mail->Subject = "Attivazione Account";
        $mail->Body = "<h3>E' necessario confermare la registrazione</h3>"
        . "<p>Clicca al seuente link: <a href= '$linkAttivazione'>Conferma Registrazione</a></p>";
        if (!$mail->send()){
            throw new Exception($mail->ErrorInfo);
        }
        return TRUE;
    }
    public function login(string $username, string $password){
        try {
            //controllo corripondenza username e password
            $q = "SELECT * FROM utenti WHERE username = :username";
            $rq = $this->PDO->prepare($q);
            $rq->bindParam(":username", $username, PDO::PARAM_STR);
            $rq->execute();
            if ($rq->rowCount() == 0) {
                throw new Exception("I dati forniti non sono validi per il login (NAME)");
            }
            $record = $rq->fetch(PDO::FETCH_ASSOC);
            if($record['attivato'] == 0) {
                throw new Exception("Login non consentito.");
            }
            //var_dump($record);
            if (!password_verify($password, $record['password'])) {
                throw new Exception("I dati forniti non sono validi per il login (PASS)");
            }

            $this->PDO->query("DELETE FROM UtentiLoggati WHERE user_id ={$record['id']}");

            //logghiamo l'utente
            $session_id = session_id();
            $user_id = $record['id'];
            $q = "INSERT INTO utentiLoggati (session_id, user_id) VALUES (:sessionid, :userid)";
            $rq = $this->PDO->prepare($q);
            $rq->bindParam(":sessionid", $session_id, PDO::PARAM_STR);
            $rq->bindParam(":userid", $user_id, PDO::PARAM_INT);
            $rq->execute();

            return TRUE;
        } catch (PDOException $e) {
            echo "Errore login!";
        }
    }

    public function logout(){
        try {
            $q = "DELETE FROM utentiLoggati WHERE session_id = :sessionid";
            $rq = $this->PDO->prepare($q);
            $session_id = session_id();
            $rq->bindParam(":sessionid", $session_id, PDO::PARAM_STR);
            $rq->execute();
        } catch (PDOException $e) {
            echo "Errore logout";
        }
        return TRUE;
    }

    public function utenteLoggato(){
        $q = "SELECT * FROM utentiLoggati WHERE session_id = :sessionid";
        $rq = $this->PDO->prepare($q);
        $session_id = session_id();
        $rq->bindParam(":sessionid", $session_id, PDO::PARAM_STR);
        $rq->execute();
        if ($rq->rowCount() == 0) {
            return FALSE;
        }
        return TRUE;
    }
}