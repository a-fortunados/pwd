<?php

$titulo = 'TP1 - EJ6';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div>
        <form id="form5" name="form5" method="get" action="mostrarDatos.php" class="mb-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
                <div class="invalid-feedback">Por favor, ingrese su nombre!</div>
            </div>

            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" required>
                <div class="invalid-feedback">Por favor, ingrese su apellido!</div>
            </div>

            <div class="col-md-4">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" min="1" class="form-control" name="edad" id="edad" required>
                <div class="invalid-feedback">Por favor, ingrese su edad!</div>
            </div>

            <div class="col-md-4">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" required>
                <div class="invalid-feedback">Por favor, ingrese su dirección!</div>
            </div>

            <br>

            <!-- TODO: checkbox verification -->
            <div class="col-md-4">
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
                    <div class="invalid-feedback">Por favor, seleccione que deporte(s) practica!</div>
                </div>
            </div>

            <br>

            <div class="col-12">
                <button class="btn btn-primary" name="eje5" type="submit">Enviar</button>
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