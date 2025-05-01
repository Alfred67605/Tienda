<link rel="stylesheet" href="../routes/public/productos_listas.css">

<h1>Lista de Productos</h1>
<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Categoría</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
    <tr>
    <td>
    <img src="<?= htmlspecialchars($producto['imagen']) ?>" class="product-img">
</td>
        <td><?= htmlspecialchars($producto['nombre']) ?></td>
        <td><?= htmlspecialchars($producto['descripcion']) ?></td>
        <td>$<?= htmlspecialchars($producto['precio']) ?></td>
        <td><?= htmlspecialchars($producto['categoria']) ?></td> 
        <td>
            <a href="editar_producto.php?id=<?= htmlspecialchars($producto['id']) ?>">✏️ Editar</a>
            <a href="eliminar_producto.php?id=<?= htmlspecialchars($producto['id']) ?>">❌ Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
