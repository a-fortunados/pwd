<?php

$titulo = 'TP1 - EJ8';

include_once '../../../vista/estructura/cabecera.php';

?>
<div class="container-main">
    <form id="form8" name="form8" method="get" action="calculo.php">
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
    </form>
</div>

<?php

include_once '../../../vista/estructura/pie.php';

?>