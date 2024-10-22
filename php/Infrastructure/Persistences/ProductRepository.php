<?php
include_once '../Application/Contracts/ProductRepositoryInterface.php';
include_once '../Domain/Product.php';
include_once '../Infrastructure/Databases/DatabaseConnection.php';

class ProductRepository implements ProductRepositoryInterface {
    private $db;

    public function __construct() {
        $this->db = DatabaseConnection::getInstance();
    }

    public function create(Product $product) {
        global $pdo;
        $sql = "INSERT INTO products (nombre, precio, cantidad, fecha_creacion, usuario_id) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$product->nombre, $product->precio, $product->cantidad, $product->fecha_creacion, $product->usuario_id]);
   
    }

    public function read($id) {
        global $pdo;
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(Product $product) {
        global $pdo;
        $sql = "UPDATE products SET nombre = ?, precio = ?, cantidad = ?, fecha_creacion = ?, usuario_id = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$product->nombre, $product->precio, $product->cantidad, $product->fecha_creacion, $product->usuario_id, $product->id]);
   
    }

    public function delete($id) {
        global $pdo;
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function readAll() {
        global $pdo;
        $sql = "SELECT * FROM products";
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
