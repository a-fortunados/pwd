<?php
// include_once '../modelo/auto.php';
class AbmAuto
{

    private function cargarObjeto($parametro)
    {
        $auto = null;
        if (array_key_exists('patente', $parametro)) {
            $auto = new Auto();
            $auto->setear($parametro['patente'], $parametro['marca'], $parametro['modelo'],
                $parametro['dniDuenio']);
        }
        return $auto;
    }

    private function cargarObjetoConClave($parametro)
    {
        $obj = null;
        if (isset($parametro['patente'])) {
            $obj = new auto();
            $obj->setear($parametro['patente'], null, null, null);
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
        $parametro['patente'] = null;
        $objAuto = $this->cargarObjeto($parametro);
        if ($objAuto != null and $objAuto->insertar()) {
            $respuesta = true;
        }
        return $respuesta;
    }

    public function baja($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objAuto = $this->cargarObjetoConClave($parametro);
            if ($objAuto != null and $objAuto->eliminar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function modificar($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objAuto = $this->cargarObjeto($parametro);
            if ($objAuto != null and $objAuto->modificar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function buscar($param)
    {
        $where = " true ";
        if ($param != null) {
            if (isset($param['patente'])) {
                $where .= " and patente =" . $param['patente'];
            }

            if (isset($param['marca'])) {
                $where .= " and marca ='" . $param['marca'];
            }

            if (isset($param['modelo'])) {
                $where .= " and modelo ='" . $param['modelo'];
            }

            if (isset($param['dniDuenio'])) {
                $where .= " and dniDuenio ='" . $param['dniDuenio'];
            }

        }
        $arreglo = auto::listar($where);
        return $arreglo;
    }

}
