<?php require_once("../../../database/connect.php") ?>

<?php require_once("../../middlewares/auth/alreadyAuth.php") ?>

<?php 
    if(isset($_GET["login_error"])) {
        $messageError = "Parece que seu usuário não existe. Tente novamente.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css"/>
    <title>Tela de login</title>
</head>
<body>

    <div id="container" >
        <?php 
            if(isset($messageError)) {
                echo "<div id='errorMessage'> <strong> $messageError  <strong> </div>";
            }
        ?>
        
        <form action="../../middlewares/signin.php" method="POST">
            <input type="email" name="username" placeholder="Digite seu e-mail." />
            <input type="password" name="password" placeholder="Digite sua senha." />
            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>