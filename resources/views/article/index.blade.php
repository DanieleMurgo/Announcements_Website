<x-layout>
    <x-slot name="title">{{__('tab.bacheca')}}</x-slot>
    <div class="container altezza">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-center ">
                <h1 class="dimensioni-h2">{{__('article.allAnnouncements')}}</h1>
            </div>
        </div>
        <div class="row mt-5 justify-content-around">
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 mb-5 d-flex justify-content-center">
                {{ $article->name }}
                <x-article-card :article="$article" />
            </div>
            @empty
            <div class="row justify-content-center">
                <div class=" col-md-6 col-12 text-center alert alert-warning alert-dismissible fade show fs-3"
                    role="alert">
                    <p>{{__('article.noAnnouncements')}}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @auth
                <div class="col-12 d-flex justify-content-center text-center mx-3">
                    <a href="{{route('article.create')}}"
                        class="btn text-white fs-4 mt-3 d-flex">{{__('nav.newAnnouncement')}} <i
                            class="fa-solid fa-plus fs-5"></i></a>
                </div>
                <div class="col-12 justify-content-center text-center mx-3 my-3 ">
                    <img src="/img/user.gif" alt="" class="img-fluid">
                </div>
                @endauth
            </div>
            @endforelse
</div>
</div>

        <!-- {{-- Pagination --}} -->
        <div class="d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
</x-layout>