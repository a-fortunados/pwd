<?php
include_once '../../../../configuracion.php';

$sesion = new Session();

$usuario = data_submitted();

$sesion->iniciar($usuario['username'], $usuario['password']);
if ($sesion->validar()) {
    header('Location: paginaSegura.php');
} else {
    header('Location: index.php');
}
