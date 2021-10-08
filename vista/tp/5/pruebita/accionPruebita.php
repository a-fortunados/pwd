<?php
include_once '../../../estructura/cabecera.php';
$sesion = new Session();

$usuario = data_submitted();

$sesion->iniciar($usuario['username'], $usuario['password']);
if ($sesion->validar()) {
    echo "BIENN<br>";
    echo $_SESSION['username'] . "<br>";
} else {
    echo "CACA NENE CACA<br>";
}

if ($sesion->activa()) {
    echo "ACTIVA<br>";
} else {
    echo "INACTIVA<br>";
}

$control = new control_tp5();

if ($control->existeSesion()) {
    echo "EXISTE SESION<br>";
} else {
    echo "NO EXISTE SESION<br>";
}
