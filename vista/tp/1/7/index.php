<?php

$titulo = 'TP1 - EJ7';

include_once '../../../estructura/cabecera.php';

?>
<div class="container">
    <div>
        <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
            <div class="card-body p-4">
                <figure class="mb-0">
                    <blockquote class="blockquote">
                        <p class="bp-2 fs-6">
                            Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación.
                        </p>
                    </blockquote>
                </figure>
            </div>
        </div>

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
                <div class="invalid-feedback">Por favor, seleccione una operación!</div>
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