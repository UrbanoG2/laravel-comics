@extends('guest.layout.base') 

@section('comic_title')
    DC Comics | Comic
@endsection

@section('main_content')
   <div class="single_comic_container">
       <div class="single_comic_contained">
            <h1>{{ $comic["title"] }}</h1>
            <div class="comic_main_info">
                <p> {{ $comic["description"] }} </p>
                <img src="{{ $comic["thumb"] }}" alt="">
            </div>
       </div>
   </div>
@endsection