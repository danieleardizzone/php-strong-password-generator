<?php

session_start();

$min_characters = 8;
$max_characters = 20;

// $_SESSION["password_length"] = intval($_GET['password_length']) ?? '';
// var_dump($password_length);

$password_length = intval($_GET['password_length']) ?? '';

$_SESSION["password_length"] = $password_length;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>
    <h1>Password generator</h1>

    <form action="" method="GET">
        <input type="text" name="password_length">
        <input type="submit" value="Invia">
    </form>

    <?php if($password_length === 0 || $password_length < $min_characters || $password_length > $max_characters) { ?>
        <p><strong>Inserisci un numero</strong> compreso tra <?php echo $min_characters ?> e <?php echo $max_characters ?></p>
    <?php } elseif($password_length > 0) { header('Location: ./password.php'); }?>
</html>