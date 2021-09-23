<?php
$titulo = "TP3 - EJ2";
include_once '../../../estructura/cabecera.php';
?>

<div class="container-main">
    <div class="row">
        <div class="col">
            <h3>Subir archivos tipo .txt</h3>
            <form class="needs-validation" novalidate action="mostrarContenido.php" method="post" enctype="multipart/form-data" name="formulario1">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="archivo">Seleccione un archivo</label>
                        <input type="file" name="archivo" id="archivo" accept=".txt" required>
                        <div class="invalid-feedback">Por favor, subir un archivo!</div>
                    </div>
                </div>
                <button class="btn-primary bt-3" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once '../../../estructura/pie.php';
?>