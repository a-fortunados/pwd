<?php 

$titulo = 'TP1 - EJ7';

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
    <form id="form7" name="form7" method="get" action="operacion.php">
        <p>Ingrese un número: <input type="text" name="number1"></p>
        <p>Ingrese otro número: <input type="text" name="number2"></p>
        <p>Elija una operación
            <select name="opcion">
                <option value="SUMA">SUMA</option>
                <option value="RESTA">RESTA</option>
                <option value="MULTIPLICACION">MULTIPLICACIÓN</optionvalue>
            </select>
        </p>

        <input id="eje7" name="eje7" type="submit" value="Calcular">
    </form>
</div>

<?php

include_once '../../2/vista/estructura/pie.php';

?>