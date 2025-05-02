
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="../routes/public/eliminar_productos.css">
</head>
<body>
    <div class="container">
        <h2 class="warning">¿Seguro que deseas eliminar este producto?</h2>
        <div class="producto-info">
            <p><strong>Nombre:</strong> <?= htmlspecialchars($producto['nombre']) ?></p>
            <p><strong>Descripción:</strong> <?= htmlspecialchars($producto['descripcion']) ?></p>
        </div>

        <form method="POST" class="actions">
            <button type="submit" class="btn btn-danger">Sí, eliminar</button>
            <a href="producto_lista.php" class="btn btn-cancel">Cancelar</a>
        </form>
    </div>
</body>
</html>