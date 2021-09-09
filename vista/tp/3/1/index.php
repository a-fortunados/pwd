<?php

$titulo = 'TP3 - EJ1';

include_once '../../../estructura/cabecera_tp3.php';

?>

<div class="container-main">
    <div class="row">
        <div class="col">
            <form action="subidaArchivo.php" enctype="multipart/form-data" method="POST" id="formularioUno">
                <input type="file" name="archivo" id="archivo" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf">
                Ingrese un archivo
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>