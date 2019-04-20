<?php 
    session_start();
    unset($_SESSION["user_session"]);
    return header("location:../views/login");
?>