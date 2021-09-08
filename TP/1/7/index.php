<?php

$titulo = 'TP1 - EJ7';

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
    <form id="form7" name="form7" method="get" action="operacion.php">
        <table>
            <tr>
                <td>Ingrese un número:&nbsp;</td>
                <td><input type="text" name="number1"></td>
            </tr>

            <tr>
                <td>Ingrese otro número:&nbsp;</td>
                <td><input type="text" name="number2"></td>
            </tr>

            <tr>
                <td>Elija una operación:&nbsp;</td>
                <td>
                    <select name="opcion">
                        <option value="SUMA">SUMA</option>
                        <option value="RESTA">RESTA</option>
                        <option value="MULTIPLICACION">MULTIPLICACIÓN</optionvalue>
                    </select>
                </td>
            </tr>
        </table>

        <input id="eje7" name="eje7" type="submit" value="Calcular">
    </form>
</div>

<?php

include_once '../../2/vista/estructura/pie.php';

?>