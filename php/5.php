<?php
session_start();

if (isset($_POST["username"])) {
    $_SESSION["username"] = $_POST["username"];
}

if (isset($_POST["logout"])) {
    unset($_SESSION["username"]);
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <form action="5.php" method="post">
        <input type="text" name="username">
        <input type="submit">
    </form>
    <?php

    if (isset($_SESSION["username"])) {
        echo '<hr>こんにちは、' . $_SESSION["username"] . 'さん<br>';
        echo '<form method="post"><input type="submit" name="logout" value="リセット"></from>';
    }
    ?>
</body>

</html>