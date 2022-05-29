<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guest Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- link collegamento al sass/scss --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    {{-- Esercizio di oggi: Boolpress API
        Nome repo: laravel-api
        Descrizione:
        Copiando in una nuova repo il progetto di boolpress che avete già iniziato, implementate
        quello che abbiamo visto insieme stamattina a lezione:
        nello specifico l'implementazione di un'api da back-office, il recupero da front-office via VueJS
        e la visualizzazione dei dati recuperati (senza necessità di abbellimento particolari).
        Se volete sperimentare con elementi estetici a vostro piacere, sentitevi comunque libere e liberi.
        Funzionalità richieste (api + front-office light):
        Esposizione di Api da back-office via Laravel Route
        Implementazione di Vue per front-office
        Recuperare via Axios i dati dell'api in Vue
        Mostrare i dati in una pagina accessibile alle utenze non registrate (guests)
        anche via console va benissimo. --}}
    <body>
        <section id="guest-home-wrapper">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ route('home') }}">Home</a>
                            {{-- <a href="{{ route('admin.posts.index') }}">Posts</a>
                            <a href="{{ url('/home') }}">Category</a> --}}
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </section>

        <div id="root">
            <App/>
        </div>

        <script src="{{asset('js/front.js')}}"></script>
    </body>
</html>
