<x-main>
    <x-slot name='title'>
        Form Contatti
    </x-slot>
    <h1>Contattaci!</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/invia-email" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" value="{{ old('first-name') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="es.Mario" name="first-name">
            @error('first-name')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Surname</label>
            <input type="text" class="form-control" value="{{ old('last-name') }}" id="exampleFormControlInput1"
                placeholder="es.Rossi" name="last-name">
            @error('last-name')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Email address</label>
            <input type="email" value="{{ old('email') }}" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" name="email">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3">{{ old('text') }}</textarea>
            @error('text')
                {{ $message }}
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">invia</button>

    </form>

</x-main>
