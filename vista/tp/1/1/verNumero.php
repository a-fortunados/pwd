<?php

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
<?php
if ($_GET) {
    $enteredNumber = $_GET['enteredNumber'];

    if ($enteredNumber > 0) {
        echo "<span>$enteredNumber es <B>positivo</B>.</span><br />";
        echo "<a href='http://localhost/pwd/TP/1/1/'>Consultar otro número</a><br />";
        
    } elseif ($enteredNumber < 0) {
        echo "<span>$enteredNumber es <B>negativo</B>.</span><br />";
        echo "<a href='http://localhost/pwd/TP/1/1/'>Consultar otro número</a><br />";
    } else {
        echo "<span>0 es <B>neutro</B>.</span><br />";
        echo "<a href='http://localhost/pwd/TP/1/1/'>Consultar otro número</a><br />";
    }
} else {
    echo "<h2>No se recibieron datos!</h2><br />";
    echo "<a href='http://localhost/pwd/TP/1/1/'>Volver</a>";
}
?>
</div>
<?php

include_once '../../2/vista/estructura/pie.php';