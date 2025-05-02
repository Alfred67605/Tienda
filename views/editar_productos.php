<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../routes/public/editar_productos.css">
</head>
<body>
    <div class="container">
        <h2>Editar Producto</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= htmlspecialchars($producto['id']) ?>">

            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required>

            <label>Descripción:</label>
            <textarea name="descripcion"><?= htmlspecialchars($producto['descripcion']) ?></textarea>

            <label>Precio:</label>
            <input type="number" step="0.01" name="precio" value="<?= htmlspecialchars($producto['precio']) ?>" required>

            <label>Categoría:</label>
            <select name="categoria_id">
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id'] ?>" <?= ($producto['categoria_id'] == $categoria['id']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($categoria['nombre']) ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Imagen:</label>
            <input type="file" name="imagen">
            <p>Imagen actual:</p>
            <div class="imagen-preview">
                <img src="../views/img/<?= htmlspecialchars($producto['imagen'] ?? 'default.jpg') ?>" width="100">
            </div>

            <button type="submit" class="btn">Actualizar Producto</button>
        </form>
    </div>
</body>
</html>