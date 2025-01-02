@props(['titleAd' => 'Titulo del anuncio', 'buttonAd' => 'Boton del anuncio'])

<div class="ad">
    <img src="assets/img/promocionMueble.png" alt="Anuncio">
    <div>
        <h2>{{ $titleAd }}</h2>
        <button>{{ $buttonAd }}</button>
    </div>
</div>
