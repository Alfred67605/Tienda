<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Cliente</title>
    <link rel="stylesheet" href="../routes/public/eliminar_clientes.css">
</head>
<body>
    <div class="container">
        <h2 class="warning">¿Seguro que deseas eliminar este cliente?</h2>
        <div class="cliente-info">
            <p><strong>Nombre:</strong> <?= htmlspecialchars($cliente['nombre']) ?></p>
            <p><strong>Correo:</strong> <?= htmlspecialchars($cliente['correo']) ?></p>
        </div>

        <form method="POST" class="actions">
            <button type="submit" class="btn btn-danger">Sí, eliminar</button>
            <a href="cliente_lista.php" class="btn btn-cancel">Cancelar</a>
        </form>
    </div>
</body>
</html>