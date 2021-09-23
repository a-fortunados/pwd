<?php

$titulo = 'TP1 - EJ2';

include_once '../../../estructura/cabecera.php';

?>
<div class="container-main">
    <div class="row">
        <div class="col">
            <form class="mb-3 needs-validation" novalidate id="form1" name="form1" method="GET" action="calcularHoras.php">
                <h3>Horas de cursada para Programación Web Dinámica</h3>
                <div class="row mb-3">
                    <h5>Lunes</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioLunes" name="horaInicioLunes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinLunes" name="horaFinLunes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <h5>Martes</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioMartes" name="horaInicioMartes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinMartes" name="horaFinMartes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <h5>Miércoles</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioMiercoles" name="horaInicioMiercoles" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinMiercoles" name="horaFinMiercoles" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <h5>Jueves</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioJueves" name="horaInicioJueves" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinJueves" name="horaFinJueves" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <h5>Viernes</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioViernes" name="horaInicioViernes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinViernes" name="horaFinViernes" min="08:00" max="00:00" class="form-control" required>
                        <div class="valid-feedback">Campo Completo</div>
                        <div class="invalid-feedback">Por favor, ingrese el horario!</div>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Calcular</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>