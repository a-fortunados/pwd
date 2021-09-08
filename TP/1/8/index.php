<?php 

$titulo = 'TP1 - EJ8';

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
    <form id="form8" name="form8" method="get" action="calculo.php">
        <p>Ingrese su edad: <input type="number" name="edad"></p>
        <p>Es estudiante:
            <input type="radio" name="estudiante" value="si">
            <label>Si</label>
            <input type="radio" name="estudiante" value="no">
            <label>No</label>
        </p>

        <input id="eje8" name="eje8" type="submit" value="Enviar">
    </form>
</div>

<?php

include_once '../../2/vista/estructura/pie.php';

?>