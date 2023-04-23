<header class="masthead">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12">
            </div>
            <div class="col-md-6 col-12 mt-5 d-flex align-items-center flex-column justify-content-center text-center box-destra">
                <div class="row">
                    <h1 class="mytitle testo_3d">PRESTO.IT</h1>
                    <p class="lead fs-3 textcolor">{{ __('ui.welcome') }}</p>
                </div>
                <div class="row align-items-center flex-column text-center">
                    <div class="col-12 sezione-crea d-flex justify-content-center">
                    @auth
                    <a href="{{route('article.create')}}" class="btn btn_header text-white fs-4 p-2 ms-md-5 spostaBottone">{{__('nav.newAnnouncement')}}
                        <i class="fa-solid fa-plus fs-5"></i></a>
                    @endauth
                    <form action="{{route('articles.search')}}" class="mt-1 position-botton-search @guest position-botton-search-guest @endguest">
                        <div class="search-bar-container active mx-4">
                            <i class="fa-solid fa-magnifying-glass magnifier fs-5"></i>
                            <input name="searched" type="text" class="input input-search-bar" placeholder="Cerca...">
                            <button class="botton-search d-none" type="submit"><i class="fa-solid fa-arrow-right fs-4"></i></button>
                        </div>
                     </form>
                    </div>
                </div>
                <x-categoriesGrid :categories="$categories"/>
                <x-categoriesCarosel :categories1="$categories->slice(0,5)" :categories2="$categories->slice(5)"/>
            </div>
        </div>
    </div>
</header>