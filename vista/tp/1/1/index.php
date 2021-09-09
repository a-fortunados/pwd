<?php

$titulo = 'TP1 - EJ1';

include_once '../../../estructura/cabecera_tp1.php';

?>

<div class="container-main">
    <div class="row">
        <div class="col">
            <form class="row g-3 needs-validation" novalidate id="form1" name="form1" method="GET" action="verNumero.php">
                <div class="col md-4">
                    <label for="enteredNumber" class="form-label">Ingrese un número</label>
                    <input id="enteredNumber" name="enteredNumber" type="number" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Complete los datos</div>
                </div>
                <input class="btn btn-warning" type="submit" name="Submit" value="Consultar">
            </form>
        </div>
    </div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<?php

include_once '../../../estructura/pie.php';

?>