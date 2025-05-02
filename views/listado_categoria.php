<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorías</title>
    <link rel="stylesheet" href="../routes/public/index.css">
    <link rel="stylesheet" href="../routes/public/categorias.css">
</head>
<body>
    <div class="container">
    <div class="category-header">
    <h2>📂 Selecciona una Categoría</h2>
    </div>
    <ul class="category-list">
            <li><a href="filtrar_categoria.php?categoria=all" class="btn-all">📦 Ver Todos los Productos</a></li>
            <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                <li><a href="filtrar_categoria.php?categoria=<?= $fila['id'] ?>">
                    <?= htmlspecialchars($fila['nombre']) ?>
                </a></li>
            <?php endwhile; ?>
        </ul>
        <a href="../index.php" class="btn-back">⬅ Volver al Inicio</a>
    </div>
</body>
</html>