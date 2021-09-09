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
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
</div>

<?php

include_once '../../../estructura/pie.php';

?>