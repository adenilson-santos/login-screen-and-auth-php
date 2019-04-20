<?php require_once("../../database/connect.php") ?>

<?php 
    session_start();

    if(!isset($_POST["username"]) || !isset($_POST["password"])) {
        return;
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $signin = "SELECT * ";
    $signin .= "FROM users ";
    $signin .= "WHERE username = '{$username}' and password = '{$password}' ";

    $access = mysqli_query($connect, $signin);

    if(!$access) {
        die("Falha ao conectar-se com o banco de dados.");
    }

    $user = mysqli_fetch_assoc($access);

    if(empty($user)) {
        header("location:../views/login/?login_error");
    } else {
        $_SESSION["user_session"] = $user;

        if($user["admin"] == "0") {
            return header("location:../views/dashboard/user");
        }

        return header("location:../views/dashboard/admin");
    }

?>