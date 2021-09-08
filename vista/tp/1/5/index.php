<?php

$titulo = 'TP1 - EJ5';

include_once '../../../vista/estructura/cabecera.php';

?>
<div class="container-main">
    <div>
        <form id="form5" name="form5" method="post" action="mostrarDatos.php">
            <table>
                <tr>
                    <td>Nombre:&nbsp;</td>
                    <td><input type="text" name="nombre" size="40" placeholder="Escriba su nombre completo"></td>
                </tr>

                <tr>
                    <td>Apellido:&nbsp;</td>
                    <td><input type="text" name="apellido" size="40" placeholder="Escriba todos sus apellidos"></td>
                </tr>

                <tr>
                    <td>Edad:&nbsp;</td>
                    <td><input type="number" name="edad" size="40" min="1" placeholder="Escriba su edad, debe ser mayor a 1"></td>
                </tr>

                <tr>
                    <td>Dirección:&nbsp;</td>
                    <td><input name="direccion" id="direccion" size="40" placeholder="Escriba su direccion completa"></td>
                </tr>

                <tr>
                    <td>Nivel de estudio:&nbsp;</td>
                    <td>
                        <ul>
                            <li><input type="radio" name="estudio" value="No tiene estudios">No tiene estudios</li>
                            <li><input type="radio" name="estudio" value="Estudios primarios">Estudios primarios</li>
                            <li><input type="radio" name="estudio" value="Estudios secundarios">Estudios secundarios</li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>Sexo:&nbsp;</td>
                    <td>
                        <ul>
                            <li><input type="radio" name="sexo" value="Femenino">Femenino</li>
                            <li><input type="radio" name="sexo" value="Masculino">Masculino</li>
                        </ul>
                    </td>
                </tr>
            </table>

            <input id="eje5" name="eje5" type="submit" value="Enviar">
        </form>
    </div>
</div>

<?php

include_once '../../../vista/estructura/pie.php';

?>