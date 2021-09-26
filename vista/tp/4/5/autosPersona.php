<?php
$titulo = "TP4 - EJ5";
include_once "../../../estructura/cabecera.php";
include_once '../../../../modelo/conector/base_datos.php';
include_once '../../../../modelo/auto.php';
include_once "../../../../control/4/abm_auto.php";
include_once "../../../../modelo/persona.php";
include_once "../../../../control/4/abm_persona.php";
include_once "../../../../util/funciones.php";

$datos = data_submitted();
?>

<div class="container">
    <?php
    $abmPersona = new AbmPersona();
    $abmAuto = new AbmAuto();

    $lista = $abmPersona->buscar($datos);

    if (count($lista) <= 0) {
        echo "<h3>El DNI ingresado no se encuentra registrado</h3>";
    } else {
        $arrayAuto = [
            "dniDuenio" => $datos["nroDni"]
        ];
        $listaAutos = $abmAuto->buscar($arrayAuto);

        if (count($listaAutos) <= 0) {
            echo "<h3>La persona ingresada no tiene autos a su nombre</h3>";
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

            foreach ($listaAutos as $var) {
                echo "<tr>
                        <th scope='row'>{$var->getPatente()}</th>
                        <td>{$var->getMarca()}</td>
                        <td>{$var->getModelo()}</td>
                        <td>{$var->getObjDuenio()}</td>
                    </tr>";
            }
            echo '</table>';
        }
    }
    ?>
</div>

<?php
include_once "../../../estructura/pie.php";
?>