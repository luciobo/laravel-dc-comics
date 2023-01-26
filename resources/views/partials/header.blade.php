<header class="">
    <nav class="">
        <div class="bg-primary">
            <div class="container text-light d-flex justify-content-end">
                <span class="px-3">DC POWER VISA</span>
                <span class="px-3">ADDICTIONAL DC SITE</span>
            </div>
        </div>
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <img class="w-75 py-2" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div>
                <ul class="m-0 d-flex list-unstyled ">
                    <li class="p-3">
                        <a  href="{{ route('home') }}" 
                        class="{{Route::currentRouteName() === "home" ? "text-primary" : "text-secondary"}}">HOME</a>
                    </li>
                    <li class="p-3">
                        <a href="{{ route('comics.index') }}"
                        class="{{Route::currentRouteName() === "about" ? "text-primary" : "text-secondary"}}">COMICS</a>
                    </li>
                </ul>
            </div>
            <div>
                <input class="border-bottom border-0 border-primary text-end w-75" placeholder="search">
            </div>
        </div>
        </div>
    </nav>

    
</header>