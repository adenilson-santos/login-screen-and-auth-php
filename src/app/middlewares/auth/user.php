<?php 
    session_start();
    if(!isset($_SESSION["user_session"])) {
        return header("location:../../login");
    } else {
        if($_SESSION["user_session"]["admin"] == 1) {
            return header("location:../admin");
        } 
    }
?>