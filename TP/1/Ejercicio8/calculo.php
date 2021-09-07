<?php

$edad = $_GET['edad'];
$estudiante = $_GET['estudiante'];

if ($edad < 12 && $estudiante == 'si') {
    $precio = 160;
} else if ($edad >= 12 && $estudiante == 'si') {
    $precio = 180;
}else {
    $precio = 300;
}

echo "El precio es de: $".$precio;