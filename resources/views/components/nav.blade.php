<nav class="navbar navbar-expand-xl  nav-custom fixed-top py-3 @if(Route::currentRouteName() != 'home') nav_bg @endif ">
  <div class="container-fluid d-flex larghezza-mobile">
    <a class="navbar-brand logo text-white d-flex justify-content-start" href="{{route('home')}}">
      <img class="img-fluid" src="/img/logo-modificato.png" alt="logo"><span class="posizione-scritta-logo">PRESTO.IT</span>
    </a>
    @if(Route::currentRouteName() != 'home') 
    <form action="{{route('articles.search')}}" class="nav-link posizione-ricerca search-form">
      <div class="search-bar-container active circle-nav ">
          <i class="fa-solid fa-magnifying-glass magnifier fs-5"></i>
          <input name="searched" type="text" class="input input-search-bar" placeholder="Cerca...">
          <button class="botton-search circle-nav d-none" type="submit"><i class="fa-solid fa-arrow-right fs-4"></i></button>
      </div>
    </form>
    @endif
    <button class="navbar-toggler position-hamburgher ml-auto menu-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse nav_media navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav position-hamburgher-element mx-auto mb-2 mb-lg-0 d-flex justify-content-center">
        <li class="nav-item margin-nav @guest margin-nav-guest @endguest">
          <a class="nav-link @if(Route::currentRouteName() == 'home') active margin-nav @endif fs-5 text-white py-1" aria-current="page" href="{{route('home')}}"><i class="fa-solid fa-house"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::currentRouteName() == 'article.index') active @endif fs-5 text-white py-1 margin-link" href="{{ route('article.index') }}"><i class="fa-solid fa-tags"></i> {{__('nav.announcements')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::currentRouteName() == 'about') active @endif fs-5 text-white py-1" href="{{ route('about') }}"><i class="fa-solid fa-users"></i> About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-5 text-white py-1 ms-md-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-flag"></i> {{__('nav.language')}}
          </a>
          <ul class="dropdown-menu bgcustom  ">
            <li class="li-fs"><x-locale lang="it"/><li>
            <li  class="li-fs"><x-locale lang="en"/><li>
            <li  class="li-fs"><x-locale lang="es"/><li>
          </ul>
        </li>
        
      </ul>
      <ul class="navbar-nav position-hamburgher-element ml-auto mb-2 mb-lg-0 d-flex justify-content-end">
      @guest
        <li class="nav-item margin-nav">
          <a class="fs-5 margin-nav nav-link @if(Route::currentRouteName() == 'login') active @endif text-white py-1" href="{{route('login')}}"><i class="fa-solid fa-door-open myicons"></i>  {{__('nav.login')}}</a>
        </li>
        <li class="nav-item">
          <a class="fs-5 nav-link @if(Route::currentRouteName() == 'register') active @endif text-white py-1" href="{{route('register')}}"> <i class="fa-solid fa-id-card myicons"></i> {{__('nav.register')}}</a>
        </li>
        @endguest
        @auth
        <li class="nav-item d-flex">
          <a href="{{route('article.create')}}" class="nav-link text-white fs-5 pt-3 pb-2 mb-1 @if (Auth::user()->is_revisor) d-none @endif "><i class="fa-solid fa-plus fs-5"></i> {{__('nav.newAnnouncement')}}</a>

          <!-- Sezione pagina dell'utente loggato -->
          @if (Auth::user()->is_revisor)
          <a class="nav-link text-white  fs-5 ms-md-5 pt-3 pb-2 mb-1" href="{{route('revisor.index')}}">
          {{__('nav.revisor')}}
          <span class="position absolute text-arancio-simple"> {{App\Models\Article::toBeRevisionedCount()}}
          <span class="visually-hidden">messaggi non letti</span>
          </span>
          </a>
          @endif
          <a class="nav-link @if(Route::currentRouteName() == '') active @endif text-white fs-5 d-flex pb-0" href="{{ route('user.profile') }}">
            <div class="user mb-0 pb-2 margin-div-user">
              <img src="{{Storage::url(Auth::user()->img)}}"alt="user" />
              <p class=" pt-1 mb-0 pb-0"> {{Auth::user()->name}}</p>   
            </div>
          </a>
          
          <!-- Logout -->
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="mt-1 p-1 text-arancio-simple iconNav"><i class=" fa-solid fa-person-through-window fs-4 my-1 pt-2 "></i></button>
          </form>
        </li>
        @endauth

      </ul>
    </div>
  </div>
</nav>

