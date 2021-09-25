<?php

class AbmPersonas
{

    private function cargarObjeto($parametro)
    {
        $persona = null;
        if (array_key_exists('nroDni', $parametro)) {
            $persona = new Persona_class();
            $persona->setear($parametro['nroDni'], $parametro['nombre'], $parametro['apellido'],
                $parametro['domicilio'], $parametro['fechaNac'], $parametro['telefono']);
        }
        return $persona;
    }

    private function cargarObjetoConClave($parametro)
    {
        $obj = null;
        if (isset($parametro['nroDni'])) {
            $obj = new Persona_class();
            $obj->setear($parametro['nroDni'], null, null, null, null, null);
        }
        return $obj;
    }

    private function seteadosCamposClaves($parametro)
    {
        $resp = false;
        if (isset($parametro['id'])) {
            $resp = true;
        }
        return $resp;
    }

    public function alta($parametro)
    {
        $respuesta = false;
        $parametro['nroDni'] = null;
        $objPersona = $this->cargarObjeto($parametro);
        if ($objPersona != null and $objPersona->insertar()) {
            $respuesta = true;
        }
        return $respuesta;
    }

    public function baja($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objPersona = $this->cargarObjetoConClave($parametro);
            if ($objPersona != null and $objPersona->eliminar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function modificar($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objPersona = $this->cargarObjeto($parametro);
            if ($objPersona != null and $objPersona->modificar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function buscar()
    {
        $where = " true ";
        // if ($param <> null){
        //     if  (isset($param['nroDni']))
        //         $where.=" and nroDni =".$param['nroDni'];
        //     if  (isset($param['nombre']))
        //         $where.=" and nombre ='".$param['nombre'];
        //     if  (isset($param['apellido']))
        //         $where.=" and apellido ='".$param['apellido'];
        //     if  (isset($param['fechaNac']))
        //         $where.=" and fechaNac ='".$param['fechaNac'];
        //     if  (isset($param['telefono']))
        //         $where.=" and telefono ='".$param['telefono'];
        //     if  (isset($param['domicilio']))
        //         $where.=" and domicilio ='".$param['domicilio']."'";
        // }
        $obj = new Persona_class();
        $arreglo = $obj->listar($where);

        // $arreglo = [];

        // $arreglo = Persona::listar();
        return $arreglo;
    }

}
