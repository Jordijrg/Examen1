<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
function ctrlVerificarPasswd($request, $response, $container)
{
    $contraseniaCorrecta = 'hola';

if (isset($_POST['password'])) {
    $passwordIngresada = $_POST['password'];

    if ($passwordIngresada === $contraseniaCorrecta) {
        $_SESSION['identified'] = true;
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
}

