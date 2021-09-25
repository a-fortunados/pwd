<?php
$titulo = "TP4 - EJ7";
include_once '../../../estructura/cabecera.php';
?>

<div class="main-container">
    <p class="text-center mt-4">
        Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
        todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
        “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
        antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
        link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
        no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
        control antes generada, no se puede acceder directamente a las clases del ORM.
    </p>
    <div class="container px-3 my-3 mb-3">
        <form class="needs-validation" novalidate id="formPersona" name="formPersona" method="post" action="accionNuevoAuto.php">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input class="form-control" id="patente" name="patente" type="text" placeholder="Patente" required>
                    <label for="dni">Ingrese su patente</label>
                    <div class="invalid-feedback">Por favor, ingrese su patente!</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input class="form-control" id="marca" name="marca" type="text" placeholder="Marca" required>
                    <label for="dni">Ingrese la marca del vehiculo</label>
                    <div class="invalid-feedback">Por favor, ingrese la marca!</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input class="form-control" id="modelo" name="modelo" type="text" placeholder="Modelo" required>
                    <label for="dni">Ingrese el modelo del vehiculo</label>
                    <div class="invalid-feedback">Por favor, ingrese su modelo!</div>
                </div>
            </div>
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
            <div class="col-md-4">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include_once '../../../estructura/pie.php';
?>