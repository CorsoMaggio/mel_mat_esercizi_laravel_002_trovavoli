<!doctype html>
<x-main>
    <h1>Dettaglio voli</h1>
    <section>


        <div class="card">
            <div class="card-body">
                <h3>Volo:{{ $flight['id'] }}-Destinazione:{{ $flight['destination'] }}</h3>
                <p>Partenza ore: {{ $flight['time']['departure'] }}</p>
                <p>Arrivo ore: {{ $flight['time']['arrival'] }}</p>
                <img class="img-fluid" src="{{ $flight['cover'] }}" alt="immagine destinazione">
            </div>
        </div>


    </section>
</x-main>
