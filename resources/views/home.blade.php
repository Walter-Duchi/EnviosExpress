<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <main>
        <!-- Slider -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><img src="assets/img/camera.png" alt="itemSlide"></div>
                <div class="slide"><img src="assets/img/headphone.png" alt="itemSSlide"></div>
                <div class="slide"><img src="assets/img/electronic.png" alt="itemSlide"></div>
                <div class="slide"><img src="assets/img/phone.png" alt="itemSlide"></div>
            </div>
            <!-- Botones para mover de promociones -->
            <button class="prev" onclick="moverSlide(-1)">&#10094;</button>
            <button class="sgn" onclick="moverSlide(1)">&#10095;</button>
        </div>

        <section id="servicios">
            <h2>Ofrecemos</h2>
            <div class="banner">
                <div class="section">
                    <img src="assets/img/transporte.png" alt="Envío gratuito">
                    <h3>Envío gratuito</h3>
                    <p>En compras superiores a $50</p>
                </div>
                <div class="section">
                    <img src="assets/img/dolar.png" alt="Garantía de devolución de dinero">
                    <h3>Garantía de devolución de dinero</h3>
                    <p>30 días de garantía</p>
                </div>
                <div class="section">
                    <img src="assets/img/auriculares.png" alt="Soporte técnico">
                    <h3>Soporte técnico</h3>
                    <p>24 horas de soporte</p>
                </div>
                <div class="section">
                    <img src="assets/img/tarjeta.png" alt="Pago Seguro">
                    <h3>Pagos seguros</h3>
                    <p>Se aceptan todas las tarjetas</p>
                </div>
            </div>
        </section>

        <section class="productos">
            <h2>Los más populares</h2>
            <div class="listaProductos">
            </div>
        </section>

        <section class="productos">
            <h2>Nuevos productos</h2>
            <div class="listaProductos">
            </div>
        </section>

        <section class="productos">
            <h2>Lo más vendido</h2>
            <div class="listaProductos">
            </div>
        </section>
        
        <div class="bannerPublicitario">
            <img src="assets/img/promocionMueble.png" alt="Nuevo Producto">
            <div>
                <h2>Obten un descuento en tu primera orden de $20</h2>
                <button>Comprar por categoría</button>
            </div>
        </div>
    </main>
</body>
</html>
