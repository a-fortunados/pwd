<?php
$titulo = "TP4 - EJ9";
include_once '../../../estructura/cabecera.php';
?>

<div class="container">
    <p class="text-center mt-4">
        Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
        numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
        busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
        formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
        documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
        persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
        antes generada, no se puede acceder directamente a las clases del ORM.
    </p>

    <form class="needs-validation" novalidate id="documento" name="documento" method="post" action="accionBuscarPersona.php" onSubmit="return validarDNI();">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="documento" name="documento" type="text" placeholder="DNI" required>
                <label for="DNI">Ingrese su documento</label>
                <div class="invalid-feedback">Por favor, ingrese su documento!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="Buscar">Buscar</button>
            </div>
        </div>
    </form>
</div>

<script src="../../../js/validaciones.js"></script>

<?php
include_once '../../../estructura/pie.php';
?>