<?php

$titulo = 'TP1 - EJ1';

include_once '../../../estructura/cabecera_tp1.php';

?>

<div class="container-main">
    <div class="row">
        <div class="col">
            <h3>Verificar número</h3>
            <form class="row g-3 needs-validation" novalidate id="form1" name="form1" method="GET" action="verNumero.php">
                <div class="col-md-4 mb-3">
                    <label for="enteredNumber" class="form-label">Ingrese un número</label>
                    <input id="enteredNumber" name="enteredNumber" type="number" class="form-control" required>
                    <div class="valid-feedback">Campo completo</div>
                    <div class="invalid-feedback">Por favor, ingrese un número!</div>
                </div>
                <div class="col-md-12 mb-3">
                <button class="btn btn-primary" type="submit">Consultar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>