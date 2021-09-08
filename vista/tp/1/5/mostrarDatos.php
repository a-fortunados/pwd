<?php

$titulo = 'TP1 - EJ5';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$estudios = $_POST['estudio'];
$sexo = $_POST['sexo'];
$texto = "Hola yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;
$cadena = $estudios. ", ". $sexo;

echo "$texto<br>";
echo "<br>$cadena";

?>
</div>
<?php

include_once '../../../estructura/pie.php';