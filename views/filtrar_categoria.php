<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos por Categoría</title>
    <link rel="stylesheet" href="../routes/public/categorias.css">
</head>
<body>
    <div class="container">
        <h2>📦 Todos los Productos</h2>

        <?php if ($categoria_id === 'all'): ?>
            <?php while ($fila_categoria = mysqli_fetch_assoc($categorias)): ?>
                <h3 class="category-title">🗂 <?= htmlspecialchars($fila_categoria['nombre']) ?></h3>
                <div class="products-grid">
                    <?php
                    $categoria_id_actual = $fila_categoria['id'];
                    $sql_productos = "SELECT * FROM producto WHERE categoria_id = $categoria_id_actual";
                    $productos_categoria = mysqli_query($conexion, $sql_productos);

                    if (mysqli_num_rows($productos_categoria) > 0):
                        while ($producto = mysqli_fetch_assoc($productos_categoria)): ?>
                            <div class="product-card">
                            <img src="<?= htmlspecialchars($producto['imagen']) ?>" class="product-img">
                                <p><?= htmlspecialchars($producto['nombre']) ?></p>
                                <span>$<?= htmlspecialchars($producto['precio']) ?></span>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="empty-category">No hay productos en esta categoría.</p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="products-grid">
                <?php while ($producto = mysqli_fetch_assoc($resultado)): ?>
                    <div class="product-card">
                    <img src="<?= htmlspecialchars($producto['imagen']) ?>" class="product-img">
                        <p><?= htmlspecialchars($producto['nombre']) ?></p>
                        <span>$<?= htmlspecialchars($producto['precio']) ?></span>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <a href="listado_categorias.php" class="btn-back">⬅ Volver a Categorías</a>
    </div>
</body>
</html>