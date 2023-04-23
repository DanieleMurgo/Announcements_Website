<x-layout>
    <x-slot name="title">{{__('tab.catShow')}}</x-slot>
    <div class="container altezza">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-center ">
                <h1 class=" text-arancio dimensioni-title-category">{{strtoupper($category->getNameByLocale())}}</h1>
            </div>
        </div>
        <div class="row justify-content-around">
            @forelse ($articles as $article)
            <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
                <x-article-card :article="$article" />
            </div>
            @empty
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 col-12 text-center alert alert-warning alert-dismissible fade show fs-3"
                    role="alert">
                    <p>{{__('article.noArticles')}}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @auth
                <div class="col-12 d-flex justify-content-center text-center mx-3">
                    <a href="{{route('article.create')}}" class="btn btn-custom text-white fs-4 mt-3 d-flex">{{__('nav.newAnnouncement')}} <i class="fa-solid fa-plus fs-5"></i></a>
                </div>
                <div class="col-12 justify-content-center text-center mx-3 my-3 ">
                    <img class="minions-none" src="/img/user.gif" alt="">
                </div>
                @endauth
            </div>
            @endforelse
        </div>
    </div>
</x-layout>