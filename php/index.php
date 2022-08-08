<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>PHP</h1>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo '<a href="' . $i . '.php">' . $i . '</a><br>';
    }
    ?>
</body>