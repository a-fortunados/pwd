<?php
include_once 'conector/BaseDatos.php';
class usuario
{
    private $idusuario;
    private $usnombre;
    private $uspass;
    private $usmail;
    private $usdeshabilitado;
    private $mensajeOperacion;

    public function __construct()
    {
        $this->idusuario = "";
        $this->usnombre = "";
        $this->uspass = "";
        $this->usmail = "";
        $this->usdeshabilitado = "";
        $this->mensajeOperacion = "";
    }
    public function getIdusuario()
    {
        return $this->idusuario;
    }
    public function getUsnombre()
    {
        return $this->usnombre;
    }
    public function getUspass()
    {
        return $this->uspass;
    }
    public function getUsmail()
    {
        return $this->usmail;
    }
    public function getUsdeshabilitado()
    {
        return $this->usdeshabilitado;
    }
    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    public function setUsnombre($usnombre)
    {
        $this->usnombre = $usnombre;
    }
    public function setUspass($uspass)
    {
        $this->uspass = $uspass;
    }
    public function setUsmail($usmail)
    {
        $this->usmail = $usmail;
    }
    public function setUsdeshabilitado($usdeshabilitado)
    {
        $this->usdeshabilitado = $usdeshabilitado;
    }
    public function setMensajeOperacion($mensajeOperacion)
    {
        $this->mensajeOperacion = $mensajeOperacion;
    }

    public function setear($idusuario, $usnombre, $uspass, $usmail, $usdeshabilitado)
    {
        $this->setIdusuario($idusuario);
        $this->setUsnombre($usnombre);
        $this->setUspass($uspass);
        $this->setUsmail($usmail);
        $this->setUsdeshabilitado($usdeshabilitado);
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatosUsuarios();
        $sql = "SELECT * FROM 'usuario' WHERE idusuario = " . $this->getIdusuario();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear(
                        $row['idusuario'],
                        $row['usnombre'],
                        $row['uspass'],
                        $row['usmail'],
                        $row['usdeshabilitado']
                    );
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatosUsuarios();
        $sql = "UPDATE usuario SET usnombre = '{$this->getUsnombre()}', uspass = '{$this->getUspass()}' ,usmail = {$this->getUsmail()} WHERE idusuario = '" . $this->getIdusuario() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Usuario->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Usuario->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatosUsuarios();
        $sql = "DELETE FROM 'usuario' WHERE idusuario = '" . $this->getIdusuario() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Usuario->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Usuario->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatosUsuarios();
        $sql = "SELECT * FROM usuario ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $objUsuario = new usuario();
                    $objUsuario->setear(
                        $row['idusuario'],
                        $row['usnombre'],
                        $row['uspass'],
                        $row['usmail'],
                        $row['usdeshabilitado']
                    );
                    array_push($arreglo, $objUsuario);
                }
            }
        } else {
            $this->setMensajeOperacion("Tabla->listar: " . $base->getError());
        }
        return $arreglo;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatosUsuarios();
        $sql = "INSERT INTO usuario (usnombre, uspass, usmail) VALUES('" . $this->getUsnombre() . "', '" . $this->getUspass() . "' , '" . $this->getUsmail() . "')";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setIdusuario($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Usuario->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Usuario->insertar: " . $base->getError());
        }
        return $resp;
    }
}
