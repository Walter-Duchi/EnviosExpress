@props([
    'NameProduct' => 'Nombre del Producto',
    'PriceProduct' => 'Precio de Producto',
])


<div class="Product">
    <img src="assets/uploads/" alt="Imagen del Producto">
    <p>{{ $NameProduct }}</p>
    <p>{{ $PriceProduct }}</p>
    <button type="button">Agregar al carrito</button>
</div>
