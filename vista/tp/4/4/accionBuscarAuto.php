<?php
$titulo = "TP4 - EJ4";
include_once "../../../estructura/cabecera.php";
include_once '../../../../modelo/conector/base_datos.php';
include_once '../../../../modelo/auto.php';
include "../../../../control/4/abm_auto.php";
?>

<div class="container-main">
    <?php
    $control = new AbmAuto();
    $resultadoBusqueda = $control->buscar($_POST);
    if (count($resultadoBusqueda) <= 0) {
        echo "<h3>No hay vehiculos con la patente ingresada</h3>";
    } else {
        echo "<table class='table'>";
        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<th scope='col'>Patente</th>";
        echo "<th scope='col'>Marca</th>";
        echo "<th scope='col'>Modelo</th>";
        echo "<th scope='col'>DNI Dueño</th>";
        echo "</tr>";
        echo "</thead>";

        foreach ($resultadoBusqueda as $vehiculo) {
            echo "<tr>
                    <th scope='row'>{$vehiculo->getPatente()}</th>
                    <td>{$vehiculo->getMarca()}</td>
                    <td>{$vehiculo->getModelo()}</td>
                    <td>{$vehiculo->getObjDuenio()}</td>
                </tr>";
        }
        echo '</table>';
    }
    ?>
</div>

<?php
include_once "../../../estructura/pie.php";
?>