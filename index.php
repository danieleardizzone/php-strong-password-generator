<?php

$password_length = intval($_GET['password_length']) ?? '';
// var_dump($password_length);

function generate_password($length) {
    $characters = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM,./;'<>?:!@#$%^&*()-_=+";
    $password = "";

    for($x = 0; $x < $length; $x++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

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

    <?php if($password_length === 0) { ?>
        <p><strong>Inserisci un numero</strong></p>
    <?php } elseif($password_length > 0) { ?>
        <p><strong>Strong password: </strong><?php echo generate_password($password_length) ?></p>
    <?php } ?>
</body>
</html>