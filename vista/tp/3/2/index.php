<?php
$titulo = "TP3 - EJ2";
include_once '../../../estructura/cabecera_tp3.php';
?>

<div class="container-main">
    <div class="row">
        <div class="col">
            <form class="needs-validation" novalidate action="mostrarContenido.php" method="post" enctype="multipart/form-data" name="formulario1">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="archivo">Seleccione un archivo</label>
                        <input type="file" name="archivo" id="archivo" accept=".txt" required>
                        <div class="valid-feedback">Campo completo</div>
                        <div class="invalid-feedback">Campo incompleto</div>
                    </div>
                </div>
                <input class="btn-primary bt-3" type="submit" value="Enviar">
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