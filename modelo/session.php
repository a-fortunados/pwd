<?php
class Session
{
    private $objUsuario;
    private $listaRoles;
    private $mensajeoperacion;

    public function __construct()
    {
        if (session_start()) {
            $this->objUsuario = null;
            $this->listaRoles = [];
            $this->mensajeoperacion = "";
        }
    }
    public function getObjUsuario()
    {
        return $this->objUsuario;
    }

    public function setObjUsuario($objUsuario)
    {
        $this->objUsuario = $objUsuario;
    }

    public function getListaRoles()
    {
        return $this->listaRoles;
    }

    public function setListaRoles($listaRoles)
    {
        $this->listaRoles = $listaRoles;
    }

    public function getMensajeoperacion()
    {
        return $this->mensajeoperacion;
    }

    public function setMensajeoperacion($mensajeoperacion)
    {
        $this->mensajeoperacion = $mensajeoperacion;
    }

    public function validar()
    {
        $inicia = false;
        if (isset($_SESSION['id_usuario'])) {
            $inicia = true;
        }
        return $inicia;
    }

    public function iniciar($usuario, $password)
    {
        $abmUsuario = new AbmUsuario();
        $where = ['usuario_nombre' => $usuario, 'usuario_password' => $password];
        $listaUsuarios = $abmUsuario->buscar($where);
        if ($listaUsuarios >= 1) {
            if ($this->activa()) {
                $_SESSION['id_usuario'] = $listaUsuarios[0]->getIdUsuario();
                $_SESSION['usuario_nombre'] = $listaUsuarios[0]->getUsNombre();
            }
        }
        return $_SESSION;
    }

    public function activa()
    {
        $activa = false;
        if (session_start()) {
            $activa = true;
        }
        return $activa;
    }

    public function getUsuario()
    {
        $abmUsuario = new AbmUsuario();
        $where = ['usuario_nombre' => $_SESSION['usuario_nombre'], 'id_usuario' => $_SESSION['id_usuario']];
        $listaUsuarios = $abmUsuario->buscar($where);
        if ($listaUsuarios >= 1) {
            $usuarioLog = $listaUsuarios[0];
        }
        return $usuarioLog;
    }

    public function getRol()
    {
        $abmRol = new abmRol();
        $abmUsuarioRol = new AbmUsuarioRol();
        $usuario = $this->getUsuario();
        $idUsuario = $usuario->getIdUsuario();
        $param = ['id_usuario' => $idUsuario];
        $listaRolesUsu = $abmUsuarioRol->buscar($param);
        if ($listaRolesUsu > 1) {
            $rol = $listaRolesUsu;
        } else {
            $rol = $listaRolesUsu[0];
        }
        return $rol;
    }

    public function cerrar()
    {
        $cerrar = false;
        if (session_destroy()) {
            $cerrar = true;
        }
        return $cerrar;
    }
}
