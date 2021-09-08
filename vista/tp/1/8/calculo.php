<?php

$titulo = 'TP1 - EJ8';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
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

?>
</div>
<?php

include_once '../../../estructura/pie.php';