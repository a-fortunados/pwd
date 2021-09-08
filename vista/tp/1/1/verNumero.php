<?php
$titulo = "TP1 - EJ1";
include_once '../../../estructura/cabecera_tp1.php';
include '../../../../control/1/control_ej1.php';

$control = new control_ej1();
$texto = $control->readNumber($_GET);
?>

<div class="container-main">
    <?php
    echo "<p>$texto</p>";
    echo "<a href='index.php'>Consultar otro número</a><br/>";
    ?>
</div>

<?php
include_once '../../../estructura/pie.php';
