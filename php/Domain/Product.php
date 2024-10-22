<?php
class Product {
    public $id;
    public $nombre;
    public $precio;
    public $cantidad;
    public $fecha_creacion;
    public $usuario_id;

    public function __construct($id, $nombre, $precio, $cantidad, $fecha_creacion, $usuario_id) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->fecha_creacion = $fecha_creacion;
        $this->usuario_id = $usuario_id;
    }
}
?>
