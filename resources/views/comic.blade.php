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

   <div class="bottom_comic_container">
     <div class="bottom_comic_contained">
        <div class="talent_container">
            <h1>Talent</h1>
        </div>

        <div class="specs_container">
            <h1>Specs</h1>
        </div>
     </div>
    </div>

   
@endsection