<?php

$i = 0;
$j = 0;
$sumaHoras = 0;
$coleccionHorarios = [];
$dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
foreach ($_GET as $hora) {
    if ($j == 0) {
        if (!empty($hora)) {
            $coleccionHorarios[$i] = $hora . " a ";
            $inicio = $hora;
            $timeInicio = explode(":", $hora);
            $inicio = stringToTime($timeInicio);
        } else {
            $coleccionHorarios[$i] = "- a -";
        }
        $j++;
    } else {
        $j = 0;
        if (!empty($inicio)) {
            $coleccionHorarios[$i] .= $hora;
            $timeFin = explode(":", $hora);
            $fin = stringToTime($timeFin);
            $totalHoras = calcularDiferencia($inicio, $fin);
            $sumaHoras += $totalHoras;
        }
        $i++;
    }
}

for ($i = 0; $i < count($coleccionHorarios); $i++) {
    echo $dias[$i] . ": " . $coleccionHorarios[$i] . "<br>";
}

echo "<h1>HORAS TOTALES: $sumaHoras</h1>";

function stringToTime($array)
{
    $horas = intval($array[0]);
    $minutos = intval($array[1]);

    if ($horas == 0) {
        $horas = 24;
    }

    $total = ($horas * 60) + $minutos;
    return $total;
}

function calcularDiferencia($ini, $fin)
{
    $resta = $fin - $ini;
    $horas = $resta / 60;
    return $horas;
}
