<?php
class User {
    public $id;
    public $password;
    public $nombre;
    public $apellidos;
    public $rol;
    public $email;
    public $telefono;
    public $estado;
    public $fecha_registro;

    public function __construct($id, $password, $nombre, $apellidos, $rol, $email, $telefono, $estado, $fecha_registro) {
        $this->id = $id;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->rol = $rol;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->estado = $estado;
        $this->fecha_registro = $fecha_registro;
    }
}
?>
