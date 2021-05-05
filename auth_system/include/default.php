<?php
ini_set("display_errors",1);
error_reporting();

session_start();
require './include/db.php';
require './include/AuthSys.php';
require './lib/PHPMailer-master/src/POP3.php';
require './lib/PHPMailer-master/src/SMTP.php';
require './lib/PHPMailer-master/src/PHPMailer.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$auth = new AsthSys($PDO, $mail);
if($auth->utenteLoggato()){
    echo "<li class='nav-item dropdown'>";
    echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownBlog' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
    echo "Utente</a>";    
    echo "<div class='dropdown-menu dropdown-menu-right active' aria-labelledby='navbarDropdownBlog'>";  
    echo "<a class='dropdown-item' href='profilo.php'>Profilo</a>";
    echo "<a class='dropdown-item' href='logout.php'>Logout</a>";
    echo  "</div>";    
    echo  "</li>";  
                       
}
?>