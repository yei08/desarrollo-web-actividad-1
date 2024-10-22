<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Fecha Creación</th>
            <th>ID Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['nombre'] ?></td>
            <td><?= $product['precio'] ?></td>
            <td><?= $product['cantidad'] ?></td>
            <td><?= $product['fecha_creacion'] ?></td>
            <td><?= $product['usuario_id'] ?></td>
            <td>
                <a href="edit_product.php?id=<?= $product['id'] ?>">Editar</a>
                <a href="delete_product.php?id=<?= $product['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
