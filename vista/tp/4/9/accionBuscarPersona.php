<?php
$titulo = "TP4 - EJ9";
include_once "../../../estructura/cabecera.php";

$datos = data_submitted();
$dni = $datos["nroDni"];
?>

<div class="container">
    <?php
    $datos = data_submitted();

    $abmPersona = new AbmPersona();
    $arrayPersona = [
        "nroDni" => $datos["nroDni"]
    ];

    $personaEncontrada = $abmPersona->buscar($arrayPersona);

    if (count($personaEncontrada) <= 0) {
        echo "<h3>El DNI ingresado no se encuentra registrado</h3>";
    } else {
        echo "<form class='needs-validation' novalidate id='formPersona' name='formPersona' method='post' action='actualizarDatosPersona.php' onsubmit='return validarPersona();'>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='nroDni' name='nroDni' type='number' maxlength='8' minlength='7' readonly value='$dni' required>
                <label for='nroDni'>Ingrese su DNI</label>
                <div class='invalid-feedback'>Por favor, ingrese su DNI, sin puntos!</div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='apellido' name='apellido' type='text' placeholder='Apellido' required>
                <label for='apellido'>Ingrese su apellido</label>
                <div class='invalid-feedback'>Por favor, ingrese su apellido!</div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='nombre' name='nombre' type='text' placeholder='Nombre' required>
                <label for='nombre'>Ingrese su nombre</label>
                <div class='invalid-feedback'>Por favor, ingrese su nombre!</div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='fechaNac' name='fechaNac' type='date' placeholder='Fecha de Nacimiento' required>
                <label for='fechaNac'>Ingrese su fecha de nacimiento</label>
                <div class='invalid-feedback'>Por favor, ingrese su fecha de nacimiento!</div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='telefono' name='telefono' type='number' placeholder='Teléfono' required>
                <label for='telefono'>Ingrese su teléfono</label>
                <div class='invalid-feedback'>Por favor, ingrese su teléfono!</div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='domicilio' name='domicilio' type='text' placeholder='Domicilio' required>
                <label for='domicilio'>Ingrese su domicilio</label>
                <div class='invalid-feedback'>Por favor, ingrese su domicilio!</div>
            </div>
        </div>
        <div class='col-md-4 mb-3'>
            <div class='d-grid'>
                <button class='btn btn-primary' type='submit'>Enviar</button>
            </div>
        </div>
    </form>";
    }
    ?>
</div>

<?php
include_once "../../../estructura/pie.php";
