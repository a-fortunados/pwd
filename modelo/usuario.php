<?php
include_once 'conector/BaseDatos.php';
class usuario
{
    private $idUsuario;
    private $usuarioNombre;
    private $usuarioPassword;
    private $usuarioEmail;
    private $usuarioDeshabilitado;
    private $mensajeOperacion;

    public function __construct()
    {
        $this->idUsuario = "";
        $this->usuarioNombre = "";
        $this->usuarioPassword = "";
        $this->usuarioEmail = "";
        $this->usuarioDeshabilitado = "";
        $this->mensajeOperacion = "";
    }
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function getUsuarioNombre()
    {
        return $this->usuarioNombre;
    }
    public function getUsuarioPassword()
    {
        return $this->usuarioPassword;
    }
    public function getUsuarioEmail()
    {
        return $this->usuarioEmail;
    }
    public function getUsuarioDeshabilitado()
    {
        return $this->usuarioDeshabilitado;
    }
    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
    public function setUsuarioNombre($usuarioNombre)
    {
        $this->usuarioNombre = $usuarioNombre;
    }
    public function setUsuarioPassword($usuarioPassword)
    {
        $this->usuarioPassword = $usuarioPassword;
    }
    public function setUsuarioEmail($usuarioEmail)
    {
        $this->usuarioEmail = $usuarioEmail;
    }
    public function setUsuarioDeshabilitado($usuarioDeshabilitado)
    {
        $this->usuarioDeshabilitado = $usuarioDeshabilitado;
    }
    public function setMensajeOperacion($mensajeOperacion)
    {
        $this->mensajeOperacion = $mensajeOperacion;
    }

    public function setear($idUsuario, $usuarioNombre, $usuarioPassword, $usuarioEmail, $usuarioDeshabilitado)
    {
        $this->setIdusuario($idUsuario);
        $this->setUsuarioNombre($usuarioNombre);
        $this->setUsuarioPassword($usuarioPassword);
        $this->setUsuarioEmail($usuarioEmail);
        $this->setUsuarioDeshabilitado($usuarioDeshabilitado);
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatosUsuarios();
        $sql = "SELECT * FROM 'usuario' WHERE idUsuario = " . $this->getIdUsuario();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear(
                        $row['idUsuario'],
                        $row['usnombre'],
                        $row['usuarioPassword'],
                        $row['usuarioEmail'],
                        $row['usuarioDeshabilitado']
                    );
                }
            }
        } else {
            $this->setMensajeOperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatosUsuarios();
        $sql = "UPDATE usuario SET usuarioNombre = '{$this->getUsuarioNombre()}', usuarioPassword = '{$this->getUsuarioPassword()}' ,usuarioEmail = {$this->getUsuarioEmail()} WHERE idUsuario = '" . $this->getIdUsuario() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Usuario->modificar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Usuario->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatosUsuarios();
        $sql = "DELETE FROM 'usuario' WHERE idUsuario = '" . $this->getIdUsuario() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensajeOperacion("Usuario->eliminar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Usuario->eliminar: " . $base->getError());
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
                        $row['idUsuario'],
                        $row['usuarioNombre'],
                        $row['usuarioPassword'],
                        $row['usuarioEmail'],
                        $row['usuarioDeshabilitado']
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
        $sql = "INSERT INTO usuario (usuarioNombre, usuarioPassword, usuarioEmail) VALUES('" . $this->getUsuarioNombre() . "', '" . $this->getUsuarioPassword() . "' , '" . $this->getUsuarioEmail() . "')";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setIdUsuario($elid);
                $resp = true;
            } else {
                $this->setMensajeOperacion("Usuario->insertar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Usuario->insertar: " . $base->getError());
        }
        return $resp;
    }
}
