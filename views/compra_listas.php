<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Compras</title>
    <link rel="stylesheet" href="../routes/public/compra_listas.css">
</head>
<body>
    <div class="container">
        <h2>Historial de Compras</h2>
        <div class="table-container">
            <table>
            <a href="../index.php" class="btn-atras">🔙 ATRÁS</a>
                <thead>
                    <tr>
                        <th>CLIENTE</th>
                        <th>PRODUCTO</th>
                        <th>CANTIDAD</th>
                        <th>FECHA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($compras as $compra): ?>
                        <tr>
                            <td><?= htmlspecialchars($compra['cliente']) ?></td>
                            <td><?= htmlspecialchars($compra['producto']) ?></td>
                            <td><?= htmlspecialchars($compra['cantidad']) ?></td>
                            <td><?= htmlspecialchars($compra['fecha']) ?></td> 
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>