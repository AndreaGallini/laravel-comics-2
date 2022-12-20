<header class="header">
    <div class="header_top">
        <div class="container-lg text-uppercase text-white d-flex header_inner_top">
            <p>dc power by visa</p>
            <p class="padding_left">Additonal dc sites</p>
        </div>
    </div>
    <div class="header_main container-lg">
        <div class="header_left">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <div class="header_center">
            <nav class="navbar navbar-expand-lg navbar-light ">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'contacts' ? 'active' : '' }}"
                                href="{{ route('contacts') }}">Contacts </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'movies' ? 'active' : '' }}"
                                href="#">movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'tv' ? 'active' : '' }}"
                                href="#">tv</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'games' ? 'active' : '' }}"
                                href="#">games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link"
                                {{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}
                                href="#">collectibles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'videos' ? 'active' : '' }}"
                                href="#">videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link  {{ Route::currentRouteName() == 'fans' ? 'active' : '' }}"
                                href="#">fans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my_link {{ Route::currentRouteName() == 'news' ? 'active' : '' }}"
                                href="#">news</a>
                        </li>
                        <li class="nav-item dropdown my_link">
                            <a class="nav-link dropdown-toggle my_link {{ Route::currentRouteName() == 'shop' ? 'active' : '' }}"
                                href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Shop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item my_link" href="#">Action</a>
                                <a class="dropdown-item my_link" href="#">Another action</a>
                                <a class="dropdown-item my_link" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_right">
            <form action="#">
                <input type="text" name="" id="" placeholder="search">
                <button type="submit">Cerca</button>
            </form>
        </div>
    </div>

</header>
