<?php

session_start();
// var_dump($_SESSION);

include __DIR__ . '/./functions.php';

// var_dump($_SESSION["password_length"]);
$password_length = $_SESSION["password_length"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>La tua password è:</h2>
    <p><?php echo generate_password($password_length); ?></p>
</body>
</html>