<?php

if ($_GET) {
    $enteredNumber = $_GET['enteredNumber'];

    if ($enteredNumber > 0) {
        echo "<span>$enteredNumber es <B>positivo</B>.</span><br />";
        echo "<a href='http://localhost/pwd/TP/1/'>Consultar otro número</a><br />";
        echo "<a href='http://localhost/pwd/'>Seleccionar otro ejercicio</a>";
    } elseif ($enteredNumber < 0) {
        echo "<span>$enteredNumber es <B>negativo</B>.</span><br />";
        echo "<a href='http://localhost/pwd/TP/1/'>Consultar otro número</a><br />";
        echo "<a href='http://localhost/pwd/'>Seleccionar otro ejercicio</a>";
    } elseif ($enteredNumber == 0) {
        echo "<span>$enteredNumber es <B>neutro</B>.</span><br />";
        echo "<a href='http://localhost/pwd/TP/1/'>Consultar otro número</a><br />";
        echo "<a href='http://localhost/pwd/'>Seleccionar otro ejercicio</a>";
    }
} else {
    echo "<h2>No se recibieron datos!</h2><br />";
    echo "<a href='http://localhost/pwd/TP/1/'>Volver</a>";
    echo "<a href='http://localhost/pwd/'>Seleccionar otro ejercicio</a>";
}
