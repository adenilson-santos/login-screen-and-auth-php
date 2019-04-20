<?php 

    session_start();
        
    if(isset($_SESSION["user_session"])) {
    
        if($_SESSION["user_session"]["admin"] == 0) {
            return header("location:../dashboard/user");
        } else {
            return header("location:../dashboard/admin");
        }

    } 
?>