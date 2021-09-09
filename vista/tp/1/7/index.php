<?php

$titulo = 'TP1 - EJ7';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div>
        <h3>Operación entre números</h3>
        <form class="mb-3 needs-validation" novalidate id="form5" name="form5" method="post" action="mostrarDatos.php">
            <div class="col-md-4 mb-3">
                <label for="number1" class="form-label">Número 1</label>
                <input type="number" class="form-control" id="number1" required>
                <div class="valid-feedback">Campo completo</div>
                <div class="invalid-feedback">Por favor, ingrese un número!</div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="number2" class="form-label">Número 2</label>
                <input type="number" class="form-control" id="number2" required>
                <div class="valid-feedback">Campo completo</div>
                <div class="invalid-feedback">Por favor, ingrese un número!</div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="operacion" class="form-label">Operación</label>
                <select class="form-select" id="operacion" required>
                    <option selected disabled value="">Seleccione...</option>
                    <option value="SUMA">SUMA</option>
                    <option value="RESTA">RESTA</option>
                    <option value="MULTIPLICACION">MULTIPLICACIÓN</option>
                </select>
                <div class="invalid-feedback">Por favor, seleccione de una operación!</div>
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