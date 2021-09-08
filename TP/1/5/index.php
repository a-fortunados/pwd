<?php 

$titulo = 'TP1 - EJ5';

include_once '../../2/vista/estructura/cabecera.php';

?>
<div class="container-main">
    <div>
        <form id="form5" name="form5" method="post" action="mostrarDatos.php">
            <p>Nombre: <input type="text" name="nombre" size="100" placeholder="Escriba su nombre completo"></p>
            <p>Apellido: <input type="text" name="apellido" size="100" placeholder="Escriba todos sus apellidos"></p>
            <p>Edad: <input type="number" name="edad" min="1" placeholder="Escriba su edad"></p>
            <p>Dirección: <textarea name="direccion" id="direccion" rows="2" cols="100" placeholder="Escriba su dirección completa"></textarea></p>
            <p>Nivel de estudio:
                <input type="radio" name="estudio" value="No tiene estudios">
                <label>No tiene estudios</label>
                <input type="radio" name="estudio" value="Estudios primarios">
                <label>Estudios primarios</label>
                <input type="radio" name="estudio" value="Estudios secundarios">
                <label>Estudios secundarios</label>
            </p>
            <p>Sexo:
                <input type="radio" name="sexo" value="Femenino">
                <label>Femenino</label>
                <input type="radio" name="sexo" value="Masculino">
                <label>Masculino</label>
            </p>
            <br><br>
            <input id="eje5" name="eje5" type="submit" value="Enviar">
        </form>
    </div>
</div>

<?php

include_once '../../2/vista/estructura/pie.php';

?>