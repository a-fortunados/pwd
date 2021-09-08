<?php

$titulo = 'TP1 - EJ2';

include_once '../../../vista/estructura/cabecera.php';

?>
<div class="container-main">
    <form id="form1" name="form1" method="GET" action="calcularHoras.php">
        <h4>Horas de cursada para Programación Web Dinámica</h4>
        <table>
            <tr>
                <td>Lunes</td>
                <td>Hora inicio:</td>
                <td><input type="time" id="horaInicioLunes" name="horaInicioLunes" min="08:00" max="22:00"></td>
                <td>Hora fin:</td>
                <td><input type="time" id="horaFinLunes" name="horaFinLunes" min="08:00" max="00:00"></td>
            </tr>

            <tr>
                <td>Martes</td>
                <td>Hora inicio:</td>
                <td><input type="time" id="horaInicioMartes" name="horaInicioMartes" min="08:00" max="22:00"></td>
                <td>Hora fin:</td>
                <td><input type="time" id="horaFinMartes" name="horaFinMartes" min="08:00" max="00:00"></td>
            </tr>

            <tr>
                <td>Miercoles</td>
                <td>Hora inicio:</td>
                <td><input type="time" id="horaInicioMiercoles" name="horaInicioMiercoles" min="08:00" max="22:00"></td>
                <td>Hora fin:</td>
                <td><input type="time" id="horaFinMiercoles" name="horaFinMiercoles" min="08:00" max="00:00"></td>
            </tr>

            <tr>
                <td>Jueves</td>
                <td>Hora inicio:</td>
                <td><input type="time" id="horaInicioJueves" name="horaInicioJueves" min="08:00" max="22:00"></td>
                <td>Hora fin:</td>
                <td><input type="time" id="horaFinJueves" name="horaFinJueves" min="08:00" max="00:00"></td>
            </tr>

            <tr>
                <td>Viernes</td>
                <td>Hora inicio:</td>
                <td><input type="time" id="horaInicioViernes" name="horaInicioViernes" min="08:00" max="22:00"></td>
                <td>Hora fin:</td>
                <td><input type="time" id="horaFinViernes" name="horaFinViernes" min="08:00" max="00:00"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Calcular"></td>
            </tr>
        </table>
    </form>
</div>

<?php

include_once '../../../vista/estructura/pie.php';

?>