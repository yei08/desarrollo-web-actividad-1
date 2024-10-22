<?php
include_once '../Application/Contracts/ProductServiceInterface.php';
include_once '../Infrastructure/Persistences/ProductRepository.php';

class ProductService implements ProductServiceInterface {
    private $productRepository;

    public function __construct() {
        $this->productRepository = new ProductRepository();
    }

    public function createProduct($nombre, $precio, $cantidad, $fecha_creacion, $usuario_id) {
        $product = new Product(null, $nombre, $precio, $cantidad, $fecha_creacion, $usuario_id);
        return $this->productRepository->create($product);
    }

    public function getProduct($id) {
        return $this->productRepository->read($id);
    }

    public function updateProduct($id, $nombre, $precio, $cantidad, $fecha_creacion, $usuario_id) {
        $product = new Product($id, $nombre, $precio, $cantidad, $fecha_creacion, $usuario_id);
        return $this->productRepository->update($product);
    }

    public function deleteProduct($id) {
        return $this->productRepository->delete($id);
    }

    public function getAllProducts() {
        return $this->productRepository->readAll();
    }
}
?>
