<?php

$titulo = 'TP1 - EJ8';

include_once '../../../estructura/cabecera.php';

?>
<div class="container">
    <div>
        <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
            <div class="card-body p-4">
                <figure class="mb-0">
                    <blockquote class="blockquote">
                        <p class="bp-2 fs-6">
                            La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.
                        </p>
                    </blockquote>
                </figure>
            </div>
        </div>

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