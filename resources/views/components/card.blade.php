<div class="card" style="width: 18rem;">
    <h5>Volo:{{ $flight['id'] }}-Destinazione:{{ $flight['destination'] }}</h5>
    <p>Partenza ore: {{ $flight['time']['departure'] }}</p>
    @if ($cardVisible)
        <p>Arrivo ore: {{ $flight['time']['arrival'] }}</p>
        <img class="img-fluid" src="{{ $flight['cover'] }}" alt="immagine destinazione">
    @endif
    <a href="/detail/{{ $flight['id'] }}">Dettagli</a>

</div>
