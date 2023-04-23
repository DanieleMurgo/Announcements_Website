<x-layout>
    <x-slot name="title">Bacheca</x-slot>
    <div class="container altezza ">
        <div class="row">
            <div class="col-12 text-center dimensioni-h2">
                <h1 class="dimensione-h1 mt-2">{{$article->title}}</h1>
            </div>
        </div>
        <div class="row mt-4 justify-content-between">
            <div class="col-12 col-md-6 pb-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($article->images as $image)
                        <div class="swiper-slide">
                            <img src="{{$image->getUrl(640,440)}}" class="img-fluid" />
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-12 col-md-5 margine-dettaglio">
                <h5 class="textcolor fw-bold "><strong class="text-arancio-simple">{{__('article.price')}}: </strong>€
                    {{ $article->price }}</h5>
                <div class="description-scrollable">
                    <h5 class="textcolor fw-bold"><strong class="text-arancio-simple">{{__('article.description')}}:
                        </strong>{{ $article->description }}</h5>
                </div>
                <a class="text-decoration-none" href="{{ route('categoryshow',$article->category)  }}">
                    <h5 class=" mt-5  fw-bold textcolor"><strong class="text-arancio-simple">{{__('article.category')}}:
                        </strong>{{$article->category->name}}</h5>
                </a>
            </div>
        </div>
        @auth
        @if (Auth::user()->is_revisor)
        <form class="mx-4" action="{{route('revisor.review_article', ['article'=>$article])}}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn text-white wbotton"><i class="fa-solid fa-check"></i> Manda in revisione</button>
        </form>
        @else
        @endif
        @endauth
    </div>

</x-layout>