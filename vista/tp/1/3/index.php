<?php

$titulo = 'TP1 - EJ3';

include_once '../../../estructura/cabecera.php';

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
                <div class="card-body p-4">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                            <p class="bp-2 fs-6">
                                Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida. Cambiar el método Post por Get y analizar las diferencias.
                            </p>
                        </blockquote>
                    </figure>
                </div>
            </div>

            <form class="mb-3 needs-validation" novalidate id="form3" name="form3" method="post" action="mostrarDatos.php">
                <div class="col-md-4 mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" size="50" placeholder="Escriba su nombre completo" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Por favor, ingrese su nombre!</div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" size="50" placeholder="Escriba todos sus apellidos" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Por favor, ingrese su apellido!</div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" name="edad" size="50" min="1" placeholder="Ingrese su edad" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Por favor, ingrese su edad!</div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input name="direccion" id="direccion" size="50" placeholder="Escriba su dirección completa" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Por favor, ingrese su dirección!</div>
                </div>
                <div class="col-md-12 mb-3">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>