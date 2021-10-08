<?php
include_once '../../../../configuracion.php';
include_once '../../../../util/funciones.php';


$datos = data_submitted();
$abmUsuario = new AbmUsuario();
$listaUsuario = $abmUsuario->buscar($datos);
$id = $datos['id_usuario'];
$objUsuario = $listaUsuario[0];

$datos['usuario_nombre'] = $objUsuario->getUsuarioNombre();
$datos['usuario_password'] = $objUsuario->getUsuarioPassword();
$datos['usuario_email'] = $objUsuario->getUsuarioEmail();
$datos['usuario_deshabilitado'] = true;

$exito = $abmUsuario->modificar($datos);
header('Location: index.php');
