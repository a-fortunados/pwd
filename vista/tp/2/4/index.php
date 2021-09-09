<?php
$titulo = "TP2 - EJ3";
include_once '../../../estructura/cabecera_tp2.php';
?>

<div class="container-main">
    <div class="card">
        <div class="card-header">
            <div class="fs-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                </svg><B>&nbsp;Cinem@s</B>
            </div>
        </div>

        <div class="card-body">
            <form class="needs-validation" enctype="multipart/form-data" novalidate name="form-ej3" action="mostrarDatos.php" method="post">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="Titulo" class="mb-2"><B>Título</B></label>
                        <input type="text" name="Titulo" id="Titulo" class="form-control" placeholder="Título" required>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="Actores" class="mb-2"><B>Actores</B></label>
                        <input type="text" name="Actores" id="Actores" class="form-control" placeholder="Actores" required>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="Director" class="mb-2"><B>Director</B></label>
                        <input type="text" name="Director" id="Director" class="form-control" placeholder="Director" required>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="Guion" class="mb-2"><B>Guión</B></label>
                        <input type="text" name="Guion" id="Guion" class="form-control" placeholder="Guión" required>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="Produccion" class="mb-2"><B>Producción</B></label>
                        <input type="text" name="Produccion" id="Produccion" class="form-control" required>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>

                    <div class="col-md-1 mb-2">
                        <label for="Año" class="mb-2"><B>Año</B></label>
                        <input type="text" name="Año" id="Año" class="form-control" required>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="Nacionalidad" class="mb-2"><B>Nacionalidad</B></label>
                        <input type="text" name="Nacionalidad" id="Nacionalidad" class="form-control" required>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <label for="Genero" class="mb-2"><B>Género</B></label>
                        <select class="form-select" id="Genero" name="Genero" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="comedia">Comedia</option>
                            <option value="drama">Drama</option>
                            <option value="terror">Terror</option>
                            <option value="romanticas">Románticas</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="otras">Otras</option>
                        </select>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-2">
                        <label for="Duracion" class="mb-2"><B>Duración</B></label>
                        <input type="text" name="Duracion" id="Duracion" class="form-control" required><small>(minutos)</small>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Complete los datos</div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="row">
                            <label for="restricciones" class="mb-2"><B>Restricciones de edad</B></label>
                        </div>

                        <input type="radio" class="form-check-input" name="restricciones" value="atp" required>Todos los públicos
                        <input type="radio" class="form-check-input" name="restricciones" value="m7" required>Mayores de 7
                        <input type="radio" class="form-check-input" name="restricciones" value="m18" required>Mayores de 18
                        <div class="invalid-feedback">Por favor, seleccione una opción!</div>
                    </div>
                </div>

                <div class="row">
                    <label for="sinopsis" class="mb-2"><B>Sinopsis</B></label>
                    <textarea name="sinopsis" id="sinopsis" rows="4" required></textarea>
                </div>

                <div class="row">
                    <label for="poster" class="mb-2"><b>Póster</b></label>
                    <input type="file" class="form-control" name="poster" id="poster" accept="image/*" required>
                    <div class="invalid-feedback">Por favor, seleccione una imágen</div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-10">
                    </div>

                    <div class="row col-md-1">
                        <button class="btn btn-primary" type="submit" value="enviar">Enviar</button>
                    </div>

                    <div class="row col-md-1">
                        <button class="btn btn-secondary" type="reset" value="borrar">Borrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once '../../../estructura/pie.php';
?>