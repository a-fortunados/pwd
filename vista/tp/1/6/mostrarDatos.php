<?php

$titulo = 'TP1 - EJ6';

include_once '../../../estructura/cabecera_tp1.php';
include '../../../../control/1/control_ej6.php';

$control = new control_ej6();
$texto = $control->armadoDatos($_GET);
$cadena = $control->armadoCheckboxes($_GET);

?>
<div class="container-main">
    <?php

echo "$texto<br>";
echo $cadena;

?>
</div>
<?php

include_once '../../../estructura/pie.php';
