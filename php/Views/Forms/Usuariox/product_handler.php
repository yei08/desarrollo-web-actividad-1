<?php
include_once '../Application/Services/ProductService.php';

$productService = new ProductService();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $usuario_id = $_POST['usuario_id'];

    if ($id) {
        $productService->updateProduct($id, $nombre, $precio, $cantidad, date('Y-m-d'), $usuario_id);
    } else {
        $productService->createProduct($nombre, $precio, $cantidad, date('Y-m-d'), $usuario_id);
    }

    header('Location: product_table.php');
}
?>
