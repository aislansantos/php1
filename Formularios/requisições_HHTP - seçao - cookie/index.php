<?php
session_start();

require('../header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>

<a href="apagar.php">Apagar Cookie</a>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="recebedor.php" method="post">
        <label for="">
            Nome:
            <br />
            <input type="text" name="nome" id="">
        </label>
        <br />
        <label for="">
            E-mail:
            <br />
            <input type="text" name="email" id="">
        </label>
        <br />
        <label for="">
            Idade:
            <br />
            <input type="text" name="idade" id="">
        </label>

        <br />
        <br />

        <input type="submit" value="Enviar">

    </form>
</body>

</html>