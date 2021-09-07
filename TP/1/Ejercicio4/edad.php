<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$direccion = $_GET['direccion'];
$texto ="";
if ($edad >=18) {
        $texto =  "Hola yo soy ".$nombre." ".$apellido.", soy mayor de edad y vivo en ".$direccion;
}else {
        $texto = "Hola yo soy ".$nombre." ".$apellido.", NO soy mayor de edad y vivo en ".$direccion;
}

echo $texto;