<?php

class control_ej2
{
    public function recorrerYArmarArray()
    {
        $i = 0;
        $j = 0;
        $sumaHoras = 0;
        $coleccionHorarios = [];
        foreach ($_GET as $hora) {
            if ($j == 0) {
                if (!empty($hora)) {
                    $coleccionHorarios[$i] = $hora . " a ";
                    $inicio = $hora;
                    $timeInicio = explode(":", $hora);
                    $inicio = $this->stringToTime($timeInicio);
                } else {
                    $coleccionHorarios[$i] = "- a -";
                }
                $j++;
            } else {
                $j = 0;
                if (!empty($inicio)) {
                    $coleccionHorarios[$i] .= $hora;
                    $timeFin = explode(":", $hora);
                    $fin = $this->stringToTime($timeFin);
                    $totalHoras = $this->calcularDiferencia($inicio, $fin);
                    $sumaHoras += $totalHoras;
                }
                $i++;
            }
        }
        $this->mostrarDatos($coleccionHorarios, $sumaHoras);
    }

    public function mostrarDatos($coleccionHorarios, $sumaHoras)
    {
        $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
        for ($i = 0; $i < count($coleccionHorarios) - 1; $i++) {
            echo $dias[$i] . ": " . $coleccionHorarios[$i] . "<br>";
        }

        echo "<h1>HORAS TOTALES: $sumaHoras</h1>";
    }

    public function stringToTime($array)
    {
        $horas = intval($array[0]);
        $minutos = intval($array[count($array) - 1]);

        if ($horas == 0) {
            $horas = 24;
        }

        $total = ($horas * 60) + $minutos;
        return $total;
    }

    public function calcularDiferencia($ini, $fin)
    {
        $resta = $fin - $ini;
        $horas = $resta / 60;
        return $horas;
    }
}
