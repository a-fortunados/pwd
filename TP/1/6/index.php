<?php

$titulo = 'TP1 - EJ6';

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
    <div>
        <form id="form5" name="form5" method="post" action="mostrarDatos.php">
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

                <tr>
                    <td>Deporte(s) que practica:&nbsp;</td>
                    <td>
                        <ul>
                            <li><input type="checkbox" name='dep[]' value="futbol">Futbol</li>
                            <li><input type="checkbox" name='dep[]' value="basket">Basket</li>
                            <li><input type="checkbox" name='dep[]' value="tennis">Tennis</li>
                            <li><input type="checkbox" name='dep[]' value="voley">Voley</li>
                        </ul>
                    </td>
                </tr>
            </table>

            <input id="eje5" name="eje5" type="submit" value="Enviar">
        </form>
    </div>
</div>

<?php

include_once '../../2/vista/estructura/pie.php';

?>