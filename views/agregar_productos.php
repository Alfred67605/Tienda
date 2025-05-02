<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="../routes/public/agregar_productos.css">
</head>
<body>
    <div class="container">
        <h2>Agregar Nuevo Producto</h2>

        <form method="POST" action="../routes/agregar_producto.php" enctype="multipart/form-data">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Descripción:</label>
            <textarea name="descripcion"></textarea>

            <label>Precio:</label>
            <input type="number" step="0.01" name="precio" required>

            <label>Categoría:</label>
            <select name="categoria_id">
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id'] ?>">
                        <?= htmlspecialchars($categoria['nombre']) ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Imagen:</label>
            <input type="file" name="imagen" required>

            <button type="submit" class="btn">Registrar Producto</button>
        </form>
    </div>
</body>
</html>