<?php

$titulo = 'TP1 - EJ7';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <?php

    $opcion = $_GET["opcion"];
    $num1 = $_GET["number1"];
    $num2 = $_GET["number2"];
    switch ($opcion) {
        case "SUMA":
            $suma = $num1 + $num2;
            $calculo = $num1 . " + " . $num2 . " = " . $suma;
            break;
        case "RESTA":
            $resta = $num1 - $num2;
            $calculo = $num1 . " - " . $num2 . " = " . $resta;
            break;
        case "MULTIPLICACION":
            $multiplicacion = $num1 * $num2;
            $calculo = $num1 . " x " . $num2 . " = " . $multiplicacion;
            break;
    }

    echo $calculo;

    ?>
</div>
<?php

include_once '../../../estructura/pie.php';
?>