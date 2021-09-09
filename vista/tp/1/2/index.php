<?php

$titulo = 'TP1 - EJ2';

include_once '../../../estructura/cabecera_tp1.php';

?>
<div class="container-main">
    <div class="row">
        <div class="col">
            <form class="row g-3 needs-validation" novalidate id="form1" name="form1" method="GET" action="calcularHoras.php">
                <h4>Horas de cursada para Programación Web Dinámica</h4>
                <div class="col-md-4">
                    Lunes<br>
                    <div class="col-md">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioLunes" name="horaInicioLunes" min="08:00" max="22:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                    <div class="col-md">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinLunes" name="horaFinLunes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>

                <div class="col-md-4">
                    Martes<br>
                    <div class="col-md">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioMartes" name="horaInicioMartes" min="08:00" max="22:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                    <div class="col-md">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinMartes" name="horaFinMartes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>

                <div class="col-md-4">
                    Miércoles<br>
                    <div class="col-md">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioMiercoles" name="horaInicioMiercoles" min="08:00" max="22:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                    <div class="col-md">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinMiercoles" name="horaFinMiercoles" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>
                <div class="col-md-6">
                    Jueves<br>
                    <div class="col-md">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioJueves" name="horaInicioJueves" min="08:00" max="22:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                    <div class="col-md">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinJueves" name="horaFinJueves" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>
                <div class="col-md-6">
                    Viernes<br>
                    <div class="col-md">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioViernes" name="horaInicioViernes" min="08:00" max="22:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                    <div class="col-md">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinViernes" name="horaFinViernes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>
                <div class="mb-3">
                    <input class="btn btn-warning" type="submit" name="Submit" value="Calcular">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    validacion();
</script>

<?php

include_once '../../../estructura/pie.php';

?>