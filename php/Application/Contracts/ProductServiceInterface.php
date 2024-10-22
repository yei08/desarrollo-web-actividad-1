<?php

interface ProductServiceInterface {
    public function createProduct($nombre, $precio, $cantidad, $fecha_creacion, $usuario_id);
    public function getProduct($id);
    public function updateProduct($id, $nombre, $precio, $cantidad, $fecha_creacion, $usuario_id);
    public function deleteProduct($id);
    public function getAllProducts();
}
?>
