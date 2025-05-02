<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../routes/public/cliente_listas.css">
</head>
<body>
    <div class="container">
        <h2>Lista de Clientes</h2>
        <div class="table-container">
            <table>
            <a href="../index.php" class="btn-atras">🔙 ATRÁS</a>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>TELÉFONO</th>
                        <th>DIRECCIÓN</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente): ?>
                        <tr>
                            <td><?= htmlspecialchars($cliente['id']) ?></td>
                            <td><?= htmlspecialchars($cliente['nombre']) ?></td>
                            <td><?= htmlspecialchars($cliente['correo']) ?></td>
                            <td><?= htmlspecialchars($cliente['telefono']) ?></td>
                            <td><?= htmlspecialchars($cliente['direccion']) ?></td>
                            <td class="acciones">
                                <a href="editar_cliente.php?id=<?= $cliente['id'] ?>" class="btn btn-editar">✏ Editar</a>
                                <a href="eliminar_cliente.php?id=<?= $cliente['id'] ?>" class="btn btn-eliminar" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">🗑 Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
