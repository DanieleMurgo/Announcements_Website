<x-layout>

    <div class="container-fluid sfondo-profilo p-0">
        <section class="banner">
            <div>
                <h2>{{ Auth::user()->name }}</h2>
                <h3 class="my-4">Benvenuto nella tua area personale</h3>
            </div>
            <img src="{{Storage::url(Auth::user()->img)}}" />
        </section>
        <section>
            <h2 class="d-flex justify-content-center dimensione-titolo-card-utente">I tuoi annunci</h2>
        </section>

    </div>
    <div class="container my-5">
        <div class="row my-5 justify-content-around ">
            @forelse(Auth::user()->articles as $article)
            <div class="col-12 col-md-4 my-2 my-5   ">
                @if($article->is_accepted == null)
                <p class="text-warning ms-3">Articolo in revisione</p>
                <x-article-card :article="$article" />
                @elseif($article->is_accepted == 0)
                <p class="text-danger ms-3">Articolo rifiutato</p>
                <x-article-card :article="$article" />
                @else
                <p class="text-success ms-3">Articolo accettato</p>
                <x-article-card :article="$article" />
                @endif
            </div>
            @empty
            <div class="row justify-content-center mt-5">
                <div class=" col-md-6 col-12 text-center alert alert-warning alert-dismissible fade show fs-3"
                    role="alert">
                    <p>Nessun articolo caricato</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforelse
            </div>
        </div>

</x-layout>