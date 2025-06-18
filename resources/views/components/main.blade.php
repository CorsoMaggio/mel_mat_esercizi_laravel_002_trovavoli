<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ $css ?? '' }}
    <title>{{ $title ?? 'Homepage' }}</title>


    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TrovaVoli</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="/">Home</a>

                        <a class="nav-link" aria-current="page" href="/contact">Contatti</a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            {{ $slot }}
        </main>
        {{ $js ?? '' }}

</body>

</html>


</header>
