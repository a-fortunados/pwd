<?php

$titulo = 'TP3 - EJ1';

include_once '../../../estructura/cabecera.php';

?>

<div class="container-main">
    <div class="row">
        <div class="col">
            <h3>Subir archivo tipo .doc o .pdf</h3>
            <form class="needs-validation" action="subidaArchivo.php" enctype="multipart/form-data" method="POST" id="formularioUno" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="archivos">Seleccione un archivo</label>
                        <input type="file" name="archivo" id="archivo" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf" required>
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