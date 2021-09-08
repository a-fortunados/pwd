<?php

$titulo = 'TP1 - EJ3';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div>

        <form id="form3" name="form3" method="post" action="mostrarDatos.php">
            <table>
                <tr>
                    <td>Nombre:&nbsp;</td>
                    <td><input type="text" name="nombre" size="50" placeholder="Escriba su nombre completo"></td>
                </tr>

                <tr>
                    <td>Apellido:&nbsp;</td>
                    <td><input type="text" name="apellido" size="50" placeholder="Escriba todos sus apellidos"></td>
                </tr>

                <tr>
                    <td>Edad:&nbsp;</td>
                    <td><input type="number" name="edad" size="50" min="1" placeholder="Escriba su edad, debe ser mayor a 1"></td>
                </tr>

                <tr>
                    <td>Dirección:&nbsp;</td>
                    <td><input name="direccion" id="direccion" size="50" placeholder="Escriba su direccion completa"></td>
                </tr>
            </table>

            <input id="eje3" name="eje3" type="submit" value="Enviar">
        </form>
    </div>
    </div>

<?php

include_once '../../../estructura/pie.php';

?>