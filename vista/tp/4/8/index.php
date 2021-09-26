<?php
$titulo = "TP4 - EJ8";
include_once '../../../estructura/cabecera.php';
?>

<div class="container">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                        Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <form class="needs-validation" novalidate id="patente-documento" name="patente-documento" method="post" action="accionCambioDuenio.php" onsubmit="return validarCambio();">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="patente" name="patente" type="text" placeholder="patente" required>
                <label for="patente">Ingrese una patente</label>
                <div class="invalid-feedback">Por favor, ingrese una patente!</div>
            </div>
        </div>
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