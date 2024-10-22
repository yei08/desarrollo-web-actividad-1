<?php
include_once '../Application/Contracts/UserRepositoryInterface.php';
include_once '../Domain/User.php';
include_once '../Infrastructure/Databases/DatabaseConnection.php';

class UserRepository implements UserRepositoryInterface {
    private $db;

    public function __construct() {
        $this->db = DatabaseConnection::getInstance();
    }

    public function create(User $user) {
        global $pdo;
        $sql = "INSERT INTO users (password, nombre, apellidos, rol, email, telefono, estado, fecha_registro) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$user->password, $user->nombre, $user->apellidos, $user->rol, $user->email, $user->telefono, $user->estado, $user->fecha_registro]);
   
    }

    public function read($id) {
        global $pdo;
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(User $user) {
        global $pdo;
        $sql = "UPDATE users SET password = ?, nombre = ?, apellidos = ?, rol = ?, email = ?, telefono = ?, estado = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$user->password, $user->nombre, $user->apellidos, $user->rol, $user->email, $user->telefono, $user->estado, $user->id]);
   
    }

    public function delete($id) {
        global $pdo;
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function readAll() {
        global $pdo;
        $sql = "SELECT * FROM users";
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
