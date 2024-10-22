<form method="POST" action="product_handler.php">
    <input type="hidden" name="id" value="<?= isset($product['id']) ? $product['id'] : '' ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= isset($product['nombre']) ? $product['nombre'] : '' ?>">
    <label for="precio">Precio:</label>
    <input type="text" name="precio" value="<?= isset($product['precio']) ? $product['precio'] : '' ?>">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" value="<?= isset($product['cantidad']) ? $product['cantidad'] : '' ?>">
    <label for="usuario_id">ID Usuario:</label>
    <input type="number" name="usuario_id" value="<?= isset($product['usuario_id']) ? $product['usuario_id'] : '' ?>">
    <button type="submit">Guardar</button>
</form>
