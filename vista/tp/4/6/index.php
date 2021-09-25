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

    <form class="needs-validation" novalidate id="patente" name="patente" method="post" action="accionAutos.php">
        <div class="form-floating mb-3">
            <input class="form-control" id="patente" name="patente" type="text" placeholder="patente" required>
            <label for="patente">Ingrese una patente</label>
            <div class="invalid-feedback">Por favor, ingrese una patente!</div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" value="Listar">Listar</button>
        </div>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
?>