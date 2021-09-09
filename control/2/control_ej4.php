<?php
class control_ej4
{
    public function crearTexto($array)
    {
        $campos = ["Titulo: ", "Actores: ", "Director: ", "Guion: ", "Produccion: ", "Año: ", "Nacionalidad: ", "Genero: ", "Duracion: ", "Restricciones de edad: "];
        $i = 0;
        $texto = "";
        foreach ($array as $dato) {
            $texto .= "<b>" . $campos[$i] . "</b>$dato<br>";
            $i++;
        }
        return $texto;
    }
}
