<?php
$titulo = "TP4 - EJ4";
include_once '../../../estructura/cabecera.php';
?>

<div class="main-container">
    <p class="text-center mt-4">
        Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
    </p>

    <form class="needs-validation" novalidate id="patente" name="patente" method="post" action="accionAutos.php">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="patente" name="patente" type="text" placeholder="patente" required>
                <label for="patente">Ingrese una patente</label>
                <div class="invalid-feedback">Por favor, ingrese una patente!</div>
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