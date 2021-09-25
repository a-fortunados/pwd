<?php
$titulo = "TP3 - EJ2";
include_once '../../../estructura/cabecera.php';
include_once '../../../../modelo/conector/base_datos.php';
include_once '../../../../modelo/auto.php';
include_once '../../../../control/4/abm_auto.php';

?>

<div class="container-main">

<?php
$obj = new AbmAuto();
$lista = $obj->buscar(null);

if (count($lista) <= 0) {
    echo '<h3>No hay autos cargados</h3>';
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

    foreach ($lista as $var) {
        echo "<tr>
                <th scope='row'>{$var->getPatente()}</th>
                <td>{$var->getMarca()}</td>
                <td>{$var->getModelo()}</td>
                <td>{$var->getObjDuenio()}</td>
            </tr>";
    }

    echo '</table>';
}
?>

</div>

<?php
include_once '../../../estructura/pie.php';
?>