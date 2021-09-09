<?php

$titulo = 'TP1 - EJ8';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div>
        <form id="form5" name="form5" method="post" action="calculo.php" class="mb-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" min="1" class="form-control" id="edad" name="edad" required>
                <div class="invalid-feedback">Por favor, ingrese su edad!</div>
            </div>

            <div class="col-md-4">
                <label for="estudiante">¿Es estudiante?</label>
                <input type="radio" class="form-check-input" name="estudiante" value="si" required>Sí
                <input type="radio" class="form-check-input" name="estudiante" value="no" required>No
                <div class="invalid-feedback">Por favor, seleccione una opción!</div>
            </div>

            <br>

            <div class="col-12">
                <!-- FIX: no muestra resultados -->
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>

    <!-- <form id="form8" name="form8" method="get" action="calculo.php">
        <table>
            <tr>
                <td>Ingrese se edad:&nbsp;</td>
                <td><input type="number" name="edad"></td>
            </tr>

            <tr>
                <td>¿Es estudiante?&nbsp;</td>
                <td>
                    <ul>
                        <li><input type="radio" name="estudiante" value="si">Sí</li>
                        <li><input type="radio" name="estudiante" value="no">No</li>
                    </ul>
                </td>
            </tr>
        </table>

        <input id="eje8" name="eje8" type="submit" value="Enviar">
    </form> -->
</div>

<script>
    validacion();
</script>

<?php

include_once '../../../estructura/pie.php';

?>