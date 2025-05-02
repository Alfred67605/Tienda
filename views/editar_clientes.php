<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../routes/public/editar_clientes.css">
</head>
<body>
    <div class="container">
        <h2>Editar Cliente</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($cliente['id']) ?>">
            
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?= htmlspecialchars($cliente['nombre']) ?>" required>

            <label>Correo:</label>
            <input type="email" name="correo" value="<?= htmlspecialchars($cliente['correo']) ?>" required>

            <label>Teléfono:</label>
            <input type="text" name="telefono" value="<?= htmlspecialchars($cliente['telefono']) ?>" required>

            <label>Dirección:</label>
            <textarea name="direccion"><?= htmlspecialchars($cliente['direccion']) ?></textarea>

            <button type="submit" class="btn">Actualizar Cliente</button>
        </form>
    </div>
</body>
</html>