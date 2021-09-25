<?php
$titulo = "TP4 - EJ6";
include_once '../../../estructura/cabecera.php';
?>

<div class="main-container">
    <p class="text-center mt-4">
        Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
        los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
        un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
        pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
        Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
    </p>

    <form class="needs-validation" novalidate id="formPersona" name="formPersona" method="post" action="accionNuevaPersona.php" onsubmit="return validarPersona();">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="dni" name="dni" type="number" maxlength="8" minlength="7" placeholder="DNI" required>
                <label for="dni">Ingrese su DNI</label>
                <div class="invalid-feedback">Por favor, ingrese su DNI, sin puntos!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Apellido" required>
                <label for="apellido">Ingrese su apellido</label>
                <div class="invalid-feedback">Por favor, ingrese su apellido!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required>
                <label for="nombre">Ingrese su nombre</label>
                <div class="invalid-feedback">Por favor, ingrese su nombre!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="fechaNacimiento" name="fechaNacimiento" type="date" placeholder="Fecha de Nacimiento" required>
                <label for="fechaNacimiento">Ingrese su fecha de nacimiento</label>
                <div class="invalid-feedback">Por favor, ingrese su fecha de nacimiento!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="telefono" name="telefono" type="number" placeholder="Teléfono" required>
                <label for="telefono">Ingrese su teléfono</label>
                <div class="invalid-feedback">Por favor, ingrese su teléfono!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="domicilio" name="domicilio" type="text" placeholder="Domicilio" required>
                <label for="domicilio">Ingrese su domicilio</label>
                <div class="invalid-feedback">Por favor, ingrese su domicilio!</div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>

<script src="../../../js/validaciones.js"></script>

<?php
include_once '../../../estructura/pie.php';
?>