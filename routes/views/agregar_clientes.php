
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cliente</title>
    <link rel="stylesheet" href="../routes/public/agregar_clientes.css">
</head>
<body>
    <div class="container">
        <h2>Agregar Nuevo Cliente</h2>

        <form method="POST" action="../routes/agregar_cliente.php">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Teléfono:</label>
            <input type="text" name="telefono" required>

            <label>Dirección:</label>
            <textarea name="direccion"></textarea>

            <label>Seleccionar Producto:</label>
            <select name="producto_id">
                <?php foreach ($productos as $producto): ?>
                    <option value="<?= $producto['id'] ?>">
                        <?= htmlspecialchars($producto['nombre']) ?> ($<?= $producto['precio'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Cantidad:</label>
            <input type="number" name="cantidad" value="1" min="1" required>

            <button type="submit" class="btn">Registrar Cliente y Compra</button>
        </form>
    </div>
</body>
</html>