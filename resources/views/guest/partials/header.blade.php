<header>
    <div class="header-container">
        <div class="logo-container">
            <img src="img\dc-logo.png" alt="">
        </div>
        <ul>
            <li>
                <a href="{{route("characters")}}" class="{{"characters" === Route::currentRouteName() ? "active" : "" }}">characters</a>
            </li>

            <li>
                <a href="{{route("comics")}}" class="{{"comics" === Route::currentRouteName() ? "active" : "" }}">comics</a>
            </li>

            <li>
                <a href="{{route("movies")}}" class="{{"movies" === Route::currentRouteName() ? "active" : "" }}">movies</a>
            </li>

             <li>
                <a href="{{route("tv")}}" class="{{"tv" === Route::currentRouteName() ? "active" : "" }}">tv</a>
            </li>

            <li>
                <a href="{{route("games")}}" class="{{"games" === Route::currentRouteName() ? "active" : "" }}">games</a>
            </li>

            <li>
                <a href="{{route("collectibles")}}" class="{{"collectibles" === Route::currentRouteName() ? "active" : "" }}">collectibles</a>
            </li>

            <li>
                <a href="{{route("videos")}}" class="{{"videos" === Route::currentRouteName() ? "active" : "" }}">videos</a>
            </li>

            <li>
                <a href="{{route("fans")}}" class="{{"fans" === Route::currentRouteName() ? "active" : "" }}">fans</a>
            </li>
            
            <li>
                <a href="{{route("news")}}" class="{{"news" === Route::currentRouteName() ? "active" : "" }}">news</a>
            </li>

            <li>
                <a href="{{route("shop")}}" class="{{"shop" === Route::currentRouteName() ? "active" : "" }}">shop</a>
            </li>
        </ul>

        <div class="search">
            <input type="text" placeholder="Search">
            <button><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></button>
        </div> 
   </div>

    <div class="main_jumbo">

    </div>
</header>