<?php
$titulo = "TP3 - EJ3";
include_once '../../../estructura/cabecera.php';
?>

<div class="container mt-3">

<?php
$obj = new AbmPersona();
$lista = $obj->buscar(null);

if (count($lista) <= 0) {
    echo '<h3>No hay autos cargados</h3>';
} else {
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
    foreach ($lista as $persona) {
        echo "<tr>
                    <th scope='row'>{$persona->getNroDni()}</th>
                    <td>{$persona->getApellido()}</td>
                    <td>{$persona->getNombre()}</td>
                    <td>{$persona->getFechaNac()}</td>
                    <td>{$persona->getTelefono()}</td>
                    <td>{$persona->getDomicilio()}</td>
                </tr>";
    }
    echo '</table>';
}
?>

<form class="needs-validation" novalidate id="nroDni" name="nroDni" method="post" action="autosPersona.php" onclick="return validarPatente();">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="nroDni" name="nroDni" type="text" placeholder="DNI" required>
                <label for="patente">Ingrese un DNI</label>
                <div class="invalid-feedback">Por favor, ingrese un DNI!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="Listar">Listar</button>
            </div>
        </div>
    </form>

</div>

<?php
include_once '../../../estructura/pie.php';
?>