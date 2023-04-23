<div class="container mt-5 container-revisor">
    <div class="row my-2">
        <div class="col-12">
            <button 
                wire:click="toggleShowImages"
                class="btn text-white">{{ $showImages == true ? 'mostra dettagli' : 'mostra immagini' }}</button>
        </div>
    </div>
    @if($showImages)
        @foreach($article->images as $image)
        <div class="row row-revisor mt-4">
            <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
                <img src="{{$image->getUrl(640,440)}}" class="img-fluid img-revisor" />
            </div>
            <div class="col-12 col-md-4 my-4">
                <h5 class="tc-accent text-center text-arancio-simple">Tags</h5>
                <div class=" text-center">
                    @if($image->labels)
                        @foreach($image->labels as $label)
                        <p class="d-inline">{{$label}},</p>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-4 my-4 ">
                <div class="card-body d-flex align-items-center flex-column ">
                    <h5 class="tc-accent text-arancio-simple">Revisione Immagini</h5>
                    <div class="padding-custom">
                        <p>Adulti: <span class=" largspan {{$image->adult}}"></span>
                        </p>
                        <p>Satira: <span class="{{$image->spoof}}"></span>
                        </p>
                        <p>Medicina: <span class="{{$image->medical}}"></span>
                        </p>
                        <p>Violenza: <span class="{{$image->violence}}"></span>
                        </p>
                        <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <div class="row row-revisor mt-4">
            <div class="row">
                <div class="col col-12 col-md-4 my-4 text-center">
                    <h4 class="text-arancio-simple">Titolo</h4>
                    <p class="textcolor fs-5">{{$article->title}}</p>
                </div>
                <div class="col col-12 col-md-4 my-4 text-center ">
                    <h4 class="text-arancio-simple">Prezzo</h4>
                    <p class="textcolor fs-5">{{$article->price}}€</p>
                </div>
                <div class="col col-12 col-md-4 my-4 text-center ">
                    <h4 class="text-arancio-simple">categoria</h4>
                    <p class="textcolor fs-5">{{$article->category->name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-4 text-center ">
                    <h4 class="text-arancio-simple">Descrizione</h4>
                    <div class="description-scrollable">
                        <p class="textcolor fs-5">{{ $article->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center">
            <div class="d-flex mt-5">
                <form class="mx-4" action="{{route('revisor.accept_article', ['article'=>$article])}}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn text-white wbotton"><i class="fa-solid fa-check"></i> Accetta</button>
                </form>
                <form class="mx-4" action="{{route('revisor.reject_article', ['article'=>$article])}}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn text-white wbotton"><i class="fa-solid fa-trash"></i> Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
</div>

