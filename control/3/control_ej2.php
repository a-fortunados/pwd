<?php
class control_ej2
{
    public function leerArchivoTxt($datosArchivos)
    {
        if ($datosArchivos['archivo']['error'] <= 0) {
            $nombre = $datosArchivos['archivo']['name'];
            echo "Nombre: " . $datosArchivos['archivo']['name'] . "<br/>";
            echo "Tipo: " . $datosArchivos['archivo']['type'] . "<br/>";
            echo "Tamanio: " . ($datosArchivos['archivo']['size'] / 1024) . "kB<br/>";
            echo "Carpeta Temporal: " . $datosArchivos['archivo']['tmp_name'] . "<br/>";
            $dir = '../../../archivos/';
            $exito = false;

            if (!copy($datosArchivos['archivo']['tmp_name'], $dir . $datosArchivos['archivo']['name'])) {
                echo "ERROR: No se pudo cargar el archivo";
            } else {
                $exito = true;
                echo "El archivo: " . $datosArchivos['archivo']['name'] . " se ha copiado con exito <br/>";
            }
        } else {
            echo "ERROR: No se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }

        if ($exito) {
            $texto = file_get_contents($dir . $nombre);
        }
        return $texto;
    }
}
