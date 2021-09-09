<?php

$titulo = 'TP1 - EJ5';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div>
        <form id="form5" name="form5" method="post" action="mostrarDatos.php" class="mb-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" required>
                <div class="invalid-feedback">Por favor, ingrese su nombre!</div>
            </div>

            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" required>
                <div class="invalid-feedback">Por favor, ingrese su apellido!</div>
            </div>

            <div class="col-md-4">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" min="1" class="form-control" id="edad" required>
                <div class="invalid-feedback">Por favor, ingrese su edad!</div>
            </div>

            <div class="col-md-4">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" required>
                <div class="invalid-feedback">Por favor, ingrese su dirección!</div>
            </div>

            <div class="col-md-4">
                <label for="estudio">Nivel de estudio</label>
                <select class="form-select" id="estudio" required>
                    <option selected disabled value="">Seleccione...</option>
                    <option value="No tiene estudios">No tiene estudios</option>
                    <option value="Estudios primarios">Estudios primarios</option>
                    <option value="Estudios secundarios">Estudios secundarios</option>
                </select>
                <div class="invalid-feedback">Por favor, ingrese su nivel!</div>
            </div>

            <div class="col-md-4">
                <label for="sexo">Sexo</label>
                <select class="form-select" id="sexo" required>
                    <option selected disabled value="">Seleccione...</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                </select>
                <div class="invalid-feedback">Por favor, ingrese su sexo!</div>
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