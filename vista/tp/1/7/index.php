<?php

$titulo = 'TP1 - EJ7';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div>
        <form id="form5" name="form5" method="post" action="mostrarDatos.php" class="mb-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="number1" class="form-label">Número 1</label>
                <input type="number" class="form-control" id="number1" required>
                <div class="invalid-feedback">Por favor, ingrese un número!</div>
            </div>

            <div class="col-md-4">
                <label for="number2" class="form-label">Número 2</label>
                <input type="number" class="form-control" id="number2" required>
                <div class="invalid-feedback">Por favor, ingrese un número!</div>
            </div>

            <div class="col-md-3">
                <label for="operacion" class="form-label">Operación</label>
                <select class="form-select" id="operacion" required>
                    <option selected disabled value="">Seleccione...</option>
                    <option value="SUMA">SUMA</option>
                    <option value="RESTA">RESTA</option>
                    <option value="MULTIPLICACION">MULTIPLICACION</option>
                </select>
                <div class="invalid-feedback">Por favor, seleccione de una operación!</div>
            </div>

            <br>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
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