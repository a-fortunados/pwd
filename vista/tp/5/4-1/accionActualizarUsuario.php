<?php
$titulo = "TP5 - EJ4-2";
include_once "../../../../util/funciones.php";
include_once "../../../../configuracion.php";

$datos = data_submitted();
$abmUsuario = new AbmUsuario();

$usuarioBuscado = ['id_usuario' => $datos['id_usuario']];

$listaUsuario = $abmUsuario->buscar($usuarioBuscado);
print_r($listaUsuario);
$objUsuario = $listaUsuario[0];

$datos['usuario_deshabilitado'] = $objUsuario->getUsuarioDeshabilitado();

$abmUsuario->modificar($datos);

header('Location: index.php');
