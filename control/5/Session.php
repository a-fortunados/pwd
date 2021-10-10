<?php
class Session
{
    //ATRIBUTOS
    private $baseDatos;
    private $mensajeError;
    private $username;
    private $password;

    //CONSTRUCTOR
    public function __construct()
    {
        if (@session_start()) {
        }
    }

    public function iniciar($usuario, $pass)
    {
        // session_start();
        $exito = false;
        if ($usuario != null && $pass != null) {
            $this->username = $usuario;
            $this->password =  $pass; //md5($pass);
            echo $this->password . "<br>";
            $exito = true;
        }
        return $exito;
    }

    /**
     * Evalua que el usuario ya haya sido inicializado
     * Si no fue inicializado busca en la base de datos si ya está registrado. Sino devuelve false
     */
    public function validar()
    {
        $exito = false;
        if ($this->username != null && $this->password != null) {
            if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
                $sql = "SELECT COUNT(*) FROM usuario WHERE usuario_nombre = '{$this->username}' AND usuario_pass = '{$this->password}'";
                $this->baseDatos = new BaseDatos();
                $resultado = $this->baseDatos->query($sql);
                $row = $resultado->fetch(PDO::FETCH_ASSOC);
                if ($row['COUNT(*)'] != 0) {
                    $exito = true;
                    $_SESSION['username'] = $this->username;
                    $_SESSION['password'] = md5($this->password);
                    $_SESSION['activa'] = true;
                }
            }
        }
        return $exito;
    }

    public function activa()
    {
        return isset($_SESSION['activa']);
    }

    public function getUsuario()
    {
        return $_SESSION['username'];
    }

    public function getRol()
    {
        return $_SESSION['rol'];
    }

    public function cerrar()
    {
        return session_destroy();
    }
}
