<?php

function generate_password($length) {
    $characters = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM,./;'<>?:!@#$%^&*()-_=+";
    $password = "";

    for($x = 0; $x < $length; $x++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}