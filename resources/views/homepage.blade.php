<x-main>

    <div class="p-5 text-center bg-body-secondary">
        <div class="container py-5">
            <h1 class="text-body-emphasis">Benvenuto sulla homepage!</h1>
            <p class="col-lg-7 mx-auto lead">
                Dai pure un'ochhiata ai nostri voli ed esplora le numerose offerte di oggi.
            </p>
        </div>
    </div>

    <section>


        <h2>Anteprima voli di oggi:</h2>

        <div class="card-group">
            @foreach ($flights as $flight)
                <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Volo: {{ $flight['id'] }}-</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Destinazione: {{ $flight['destination'] }}
                        </h6>
                        <p class="card-text">Partenza ore: {{ $flight['time']['departure'] }}</p>
                        <a href="/detail/{{ $flight['id'] }}">Dettagli</a>
                    </div>
                </div>
            @endforeach

        </div>


    </section>

</x-main>
