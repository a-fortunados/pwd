<?php
$titulo = 'TP1 - EJ2';

include_once '../../../estructura/cabecera_tp1.php';
include '../../../../control/1/control_ej2.php';

$control = new control_ej2();
?>
<div class="container-main">

    <?php
echo $control->recorrerYArmarArray($_GET);
?>

</div>

<?php
include_once '../../../estructura/pie.php';
