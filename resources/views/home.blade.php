{{-- dico dove deve fare riferimento questo file .php --}}

@extends('guest.layout.base') 

@section('page_title')
    DC Comics | Home
@endsection


{{-- creao l'html in una sezione che richiamerò nella base.php --}}
@section('main_content')
    <main>

        <div class="main_jumbo">
            
        </div>
        <div class="cards_container">
            <div class="cards_contained">
                @foreach ($thumbnails as $thumb)
                    <div class="card_container">
                        <img src="{{ $thumb["thumb"] }} " alt="">
                        <h2> {{ $thumb["title"] }} </h2>
                    </div>
                @endforeach
               
            </div>
        </div>
    
        <div class="bottom_section">
            <div class="bottom_section_contained">
                <ul class="main_list">
                    <li><img src="img/buy-comics-digital-comics.png" alt=""><a href="">digital comics</a></li>
    
                    <li><img src="img/buy-comics-merchandise.png" alt=""><a href="">dc merchandise</a></li>
    
                    <li><img src="img/buy-comics-subscriptions.png" alt=""><a href="">subscription</a></li>
    
                    <li><img src="img/buy-comics-shop-locator.png" alt=""><a href="">comic shop locator</a></li>
    
                    <li><img src="img/buy-dc-power-visa.svg" alt=""><a href="">dc power visa</a></li>
              </ul>
            </div>
           
        </div>
    </main>
@endsection    

