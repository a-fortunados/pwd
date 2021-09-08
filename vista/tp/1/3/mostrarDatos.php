<?php

$titulo = 'TP1 - EJ3';

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$texto = "Hola yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;

echo $texto;

?>
</div>
<?php

include_once '../../2/vista/estructura/pie.php';