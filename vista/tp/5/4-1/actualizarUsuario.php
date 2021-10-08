<?php
include_once '../../../estructura/cabecera.php';

$datos = data_submitted();
$abmUsuario = new AbmUsuario();

$listaUsuario = $abmUsuario->buscar($datos);
$objUsuario = $listaUsuario[0];

?>

<div class="container"></div>