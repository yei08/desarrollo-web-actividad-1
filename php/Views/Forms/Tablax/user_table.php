<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Rol</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nombre'] ?></td>
            <td><?= $user['apellidos'] ?></td>
            <td><?= $user['rol'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['telefono'] ?></td>
            <td><?= $user['estado'] ?></td>
            <td>
                <a href="edit_user.php?id=<?= $user['id'] ?>">Editar</a>
                <a href="delete_user.php?id=<?= $user['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
