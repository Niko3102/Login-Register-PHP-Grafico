<?php
require './include/default.php';
try {
    if($auth->logout()){
        session_start();
        session_destroy();
        header("location:index.php");
        exit;
    }
} catch(Exception $e){
    echo $e->getMessage();
}
?>