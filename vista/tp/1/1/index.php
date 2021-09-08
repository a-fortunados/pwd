<?php

$titulo = 'TP1 - EJ1';

include_once '../../../vista/estructura/cabecera.php';

?>

<div class="container-main">
    <form id="form1" name="form1" method="GET" action="verNumero.php">
        <table>
            <tr>
                <td>Numero:</td>
                <td><input id="enteredNumber" name="enteredNumber" type="number"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Consultar"></td>
            </tr>
        </table>
    </form>
</div>

<?php

include_once '../../../vista/estructura/pie.php';

?>