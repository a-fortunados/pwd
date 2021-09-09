<?php

$titulo = 'TP1 - EJ4';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div class="row">
        <div class="col">
            <h3>Mostrar Datos</h3>
            <form class="mb-3 needs-validation" novalidate id="form4" name="form4" method="post" action="mostrarDatos.php">
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
                    <div class="invalid-feedback">Por favor, ingrese su apellido</div>
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

<script>
    validacion();
</script>

<?php

include_once '../../../estructura/pie.php';

?>