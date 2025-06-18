<x-main>
    <x-slot name='title'>
        Form Contatti
    </x-slot>
    <h1>Contattaci!</h1>
    <form action="/invia-email" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="es.Mario"
                name="first-name">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Surname</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="es.Rossi"
                    name="last-name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
                    name="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">invia</button>

    </form>

</x-main>
