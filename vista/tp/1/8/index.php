<?php

$titulo = 'TP1 - EJ8';

include_once '../../../estructura/cabecera.php';

?>
<div class="container-main">
    <div>
        <h3>Cine Cinem@s</h3>
        <form class="mb-3 needs-validation" novalidate id="form5" name="form5" method="post" action="calculo.php">
            <div class="col-md-4 mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" min="1" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" required>
                <div class="valid-feedback">Campo completo</div>
                <div class="invalid-feedback">Por favor, ingrese su edad!</div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="estudiante">¿Es estudiante?</label>
                <input type="radio" class="form-check-input" name="estudiante" value="si" required>Sí
                <input type="radio" class="form-check-input" name="estudiante" value="no" required>No
                <div class="valid-feedback">Campo completo</div>
                <div class="invalid-feedback">Por favor, seleccione una opción!</div>
            </div>

            <div class="col-md-12 mb-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>