<div class="card" style="width: 18rem;">

    <div class="card-body">
        <h5 class="card-title">Volo: {{ $flight['id'] }}-</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Destinazione: {{ $flight['destination'] }}
        </h6>
        <p class="card-text">Partenza ore: {{ $flight['time']['departure'] }}</p>
        <a href="/detail/{{ $flight['id'] }}">Dettagli</a>
    </div>
</div>
