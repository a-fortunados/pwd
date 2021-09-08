<?php 

$titulo = 'TP1 - EJ6';

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
    <div>
        <form id="form5" name="form5" method="post" action="mostrarDatos.php">
            <p>Nombre: <input type="text" name="nombre" size="100" placeholder="Escriba su nombre completo"></p>
            <p>Apellido: <input type="text" name="apellido" size="100" placeholder="Escriba todos sus apellidos"></p>
            <p>Edad: <input type="number" name="edad" min="1" placeholder="Escriba su edad"></p>
            <p>Dirección: <textarea name="direccion" id="direccion" rows="2" cols="100" placeholder="Escriba su dirección completa"></textarea></p>

            <p>Deporte(s) que practica:
                <input type="checkbox" name='dep[]' value="futbol">Futbol
                <input type="checkbox" name='dep[]' value="basket">Basket
                <input type="checkbox" name='dep[]' value="tennis">Tennis
                <input type="checkbox" name='dep[]' value="voley">Voley
            </p>

            <br><br>

            <input id="eje5" name="eje5" type="submit" value="Enviar">
        </form>
    </div>
</div>

<?php

include_once '../../2/vista/estructura/pie.php';

?>