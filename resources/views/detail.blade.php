<!doctype html>
<x-main>
    <x-slot name='title'>
        Dettagli
    </x-slot>
    <x-slot name='css'></x-slot>
    <h1>Dettaglio voli</h1>
    <section>


        <x-card :flight="$flight" :cardVisible="true"></x-card>


    </section>

</x-main>
