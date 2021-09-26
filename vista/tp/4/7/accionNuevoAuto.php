<?php
$titulo = "TP4 - EJ7";
include_once "../../../estructura/cabecera.php";
include_once '../../../../modelo/conector/base_datos.php';
include_once '../../../../modelo/auto.php';
include_once "../../../../control/4/abm_auto.php";
include_once "../../../../modelo/persona.php";
include_once "../../../../control/4/abm_persona.php";
?>

<div class="container mt-3">
    <?php
$abmPersona = new AbmPersona();
$array = [
    "nroDni" => $_POST["dniDuenio"],
];
$encontrado = $abmPersona->buscar($array);
if (count($encontrado) <= 0) {
    echo "<h3>El DNI ingresado no se encuentra registrado. <a href='../6'>Registrese aquí</a></h3>";
} else {
    $abmAuto = new AbmAuto();
    $exito = $abmAuto->alta($_POST);
    if ($exito) {
        $resultadoBusqueda = $abmAuto->buscar(null);
        echo "<h3>Persona cargada correctamente</h3>";
        echo "<table class='table'>";
        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<th scope='col'>DNI</th>";
        echo "<th scope='col'>Apellido</th>";
        echo "<th scope='col'>Nombre</th>";
        echo "<th scope='col'>Fecha Nacimiento</th>";
        echo "<th scope='col'>Teléfono</th>";
        echo "<th scope='col'>Domicilio</th>";
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
}
?>
</div>