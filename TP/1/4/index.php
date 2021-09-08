<?php 

$titulo = 'TP1 - EJ4';

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
    <div>
        <form id="form4" name="form4" method="get" action="edad.php">
            <p>Nombre: <input type="text" name="nombre" size="100" placeholder="Escriba su nombre completo"></p>
            <p>Apellido: <input type="text" name="apellido" size="100" placeholder="Escriba todos sus apellidos"></p>
            <p>Edad: <input type="number" name="edad" min="1" placeholder="Escriba su edad, debe ser mayor a 1"></p>
            <p>Dirección: <textarea name="direccion" id="direccion" rows="2" cols="100" placeholder="Escriba su direccion completa"></textarea></p>

            <input id="eje4" name="eje4" type="submit" value="Enviar">
        </form>
    </div>
</div>

<?php

include_once '../../2/vista/estructura/pie.php';

?>