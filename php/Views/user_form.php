<form method="POST" action="user_handler.php">
    <input type="hidden" name="id" value="<?= isset($user['id']) ? $user['id'] : '' ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= isset($user['nombre']) ? $user['nombre'] : '' ?>">
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" value="<?= isset($user['apellidos']) ? $user['apellidos'] : '' ?>">
    <label for="rol">Rol:</label>
    <input type="text" name="rol" value="<?= isset($user['rol']) ? $user['rol'] : '' ?>">
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= isset($user['email']) ? $user['email'] : '' ?>">
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" value="<?= isset($user['telefono']) ? $user['telefono'] : '' ?>">
    <label for="estado">Estado:</label>
    <input type="text" name="estado" value="<?= isset($user['estado']) ? $user['estado'] : '' ?>">
    <label for="password">Contraseña:</label>
    <input type="password" name="password">
    <button type="submit">Guardar</button>
</form>
