@props([
    'titleOffer' => 'Título por defecto',
    'descripcionOffer' => 'Esta es una descripción por defecto para la oferta',
])

<div class="offer">
    <img src="assets/img/transporte.png" alt="Icono">
    <h3>{{ $titleOffer }}</h3>
    <p>{{ $descripcionOffer }}</p>
</div>
