<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- linko l'unico e solo file .css che abbiamo con l'asset--}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>@yield('page_title')</title>
</head>
<body>
    <div class="container">
        @include('guest.partials.header')

        {{-- richiamo la sezione creata in home.blade, perchè quella sarà la pagina di partenza  --}}
        @yield('main_content')

        @include('guest.partials.footer')

    </div>
</body>
</html>