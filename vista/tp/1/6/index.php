<?php

$titulo = 'TP1 - EJ6';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div>
        <h3>Mostrar Datos</h3>
        <form class="mb-3 needs-validation" novalidate id="form5" name="form5" method="get" action="mostrarDatos.php">
            <div class="col-md-4 mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba su nombre completo" required>
                <div class="valid-feedback">Campo completo</div>
                <div class="invalid-feedback">Por favor, ingrese su nombre!</div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Escriba todos sus apellidos" required>
                <div class="valid-feedback">Campo completo</div>
                <div class="invalid-feedback">Por favor, ingrese su apellido!</div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" min="1" class="form-control" name="edad" id="edad" placeholder="Escriba su edad" required>
                <div class="valid-feedback">Campo completo</div>
                <div class="invalid-feedback">Por favor, ingrese su edad!</div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Escriba su dirección" required>
                <div class="valid-feedback">Campo completo</div>
                <div class="invalid-feedback">Por favor, ingrese su dirección!</div>
            </div>

            <!-- TODO: checkbox verification -->
            <div class="col-md-4 mb-3">
                <label for="dep[]">Deporte(s) que practica</label>
                <div class="form-check">
                    <input class="form-check-input" name="dep[]" type="checkbox" value="futbol" id="futbol">
                    <label class="form-check-label" for="futbol">Futbol</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="dep[]" type="checkbox" value="basket" id="basket">
                    <label class="form-check-label" for="basket">Basket</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="dep[]" type="checkbox" value="tennis" id="tennis">
                    <label class="form-check-label" for="tennis">Tennis</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="dep[]" type="checkbox" value="voley" id="voley">
                    <label class="form-check-label" for="voley">Voley</label>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Por favor, seleccione que deporte(s) practica!</div>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <button class="btn btn-primary" name="eje5" type="submit">Enviar</button>
            </div>
        </form>
    </div>

    <script>
        validacion();
    </script>
</div>

<?php

include_once '../../../estructura/pie.php';

?>