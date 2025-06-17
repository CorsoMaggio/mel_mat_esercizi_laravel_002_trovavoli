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
                <x-card :flight="$flight" :cardVisible="false"></x-card>
            @endforeach

        </div>


    </section>

</x-main>
