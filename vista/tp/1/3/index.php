<?php

$titulo = 'TP1 - EJ3';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div class="row">
        <div class="col">
            <form class="row g-3 needs-validation" novalidate id="form3" name="form3" method="post" action="mostrarDatos.php">
                <div>
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" size="50" placeholder="Escriba su nombre completo" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Complete los datos</div>
                </div>
                <div>
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" size="50" placeholder="Escriba todos sus apellidos" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Complete los datos</div>
                </div>
                <div>
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" name="edad" size="50" min="1" placeholder="Escriba su edad" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Complete los datos</div>
                </div>
                <div>
                    <label for="direccion" class="form-label">Dirección</label>
                    <input name="direccion" id="direccion" size="50" placeholder="Escriba su dirección completa" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Complete los datos</div>
                </div>

                <input class="btn btn-warning" id="eje3" name="eje3" type="submit" value="Enviar">
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