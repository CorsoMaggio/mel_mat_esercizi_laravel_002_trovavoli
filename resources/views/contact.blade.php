<x-main>
    <x-slot name='title'>
        Form Contatti
    </x-slot>
    <h1>Contattaci!</h1>
    <form action="/invia-email" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">

    </form>

</x-main>
