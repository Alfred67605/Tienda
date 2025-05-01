<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online | Bienvenido</title>
    <link rel="stylesheet" href="routes/public/index.css">
</head>
<body>
    <header class="top-bar">
        <div class="logo">🛒 TIENDA ONLINE</div>
        <nav class="nav-links">
            <a href="#">Inicio</a>
            <a href="routes/producto_lista.php">Productos</a>
            <a href="routes/cliente_lista.php">Clientes</a>
            <a href="#">Ofertas</a>
            <a href="#">Contacto</a>
        </nav>
        <input type="text" placeholder="Buscar..." class="search-bar">
    </header>

    <div class="container">
        <aside class="sidebar">
            <h2>Administración</h2>
            <ul>
                <li><a href="routes/producto_lista.php">🛒 Gestionar Productos</a></li>
                <li><a href="routes/cliente_lista.php">👥 Gestionar Clientes</a></li>
                <li><a href="routes/compra_lista.php">🛍 Historial de Compras</a></li>
            </ul>
            <div class="add-section">
                <h3>Acciones Rápidas</h3>
                <a href="routes/agregar_producto.php" class="btn-add">➕ Agregar Producto</a>
                <a href="routes/agregar_cliente.php" class="btn-add">➕ Agregar Cliente</a>
            </div>
        </aside>
        <main class="main-content">
            <section class="banner">
                <h1>¡Bienvenido a TiendaOnline!</h1>
                <p>Los mejores productos al mejor precio.</p>
                <a href="routes/producto_lista.php" class="btn-banner">Explorar Productos</a>
            </section>
            <section class="featured-products">
                <h2>🌟 Productos Destacados</h2>
                <div class="products-grid">
                    <div class="product-card">
                        <img src="routes/img/zapato.jpg" alt="Producto">
                        <p>Zapatos deportivos</p>
                        <span>$49.99</span>
                    </div>
                    <div class="product-card">
                        <img src="routes/img/camisa.jpg" alt="Producto">
                        <p>Camisa casual</p>
                        <span>$29.99</span>
                    </div>
                    <div class="product-card">
                        <img src="routes/img/laptop.jpg" alt="Producto">
                        <p>Laptop gamer</p>
                        <span>$1299.99</span>
                    </div>
                    <div class="product-card">
                        <img src="routes/img/televisor.JFIF" alt="Producto">
                        <p>Televisor</p>
                        <span>$1299.99</span>
                    </div>
                    <div class="product-card">
                        <img src="routes/img/juguete.WEBP" alt="Producto">
                        <p>Camion de Juguete</p>
                        <span>$1299.99</span>
                    </div>
                    <div class="product-card">
                        <img src="routes/img/mochila.jpg" alt="Producto">
                        <p>Mochila</p>
                        <span>$1299.99</span>
                    </div>
                    <div class="product-card">
                        <img src="routes/img/ps5.jpeg" alt="Producto">
                        <p>Play Station 5</p>
                        <span>$1299.99</span>
                    </div>
                </div>
            </section>

            <footer>
                <p>&copy; 2025 TiendaOnline - Todos los derechos reservados</p>
            </footer>
        </main>
    </div>

</body>
</html>