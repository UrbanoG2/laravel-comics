{{-- dico dove deve fare riferimento questo file .php --}}

@extends('guest.layout.base') 

@section('page_title')
    DC Comics | Home
@endsection


{{-- creao l'html in una sezione che richiamerò nella base.php --}}
@section('main_content')
    <div class="cards_container">
        cards
    </div>

    <div class="bottom-section">
        sezione di sotto
    </div>
@endsection    

