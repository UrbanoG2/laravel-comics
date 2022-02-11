<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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