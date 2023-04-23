in RevisorController riga 38
$name = $request->input('name');
    $email = $request->input('email');
    $about = $request->input('about');

lavoracon noi.blade action del form
{{route('become_revisor')}}

BecomeRevisor.php
riga 24 public $about;
riga 25 , $about
riga 28  $this->about = $about;

web.php riga 25
Route::post('/become_revisor', [RevisorController::class, 'becomeRevisor'])->name('become_revisor');



@if (session('message'))
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 altezza position-absolute">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
    @endif
<x-nav />



    <div class="min-vh-100">{{ $slot }}</div>
    
<x-footer />


<x-layout>

<x-slot name="title">Login</x-slot>

<div class="container">
    <div class="row">
        <div class="col-12 altezza text-center">
            <h1>Login</h1>
        </div>
        <div class="row">
            <div class="col-12 mt-5">
                <form  method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                    </div>
                    <button type="submit" class="btn text-white">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</x-layout>


<x-layout>

<x-slot name="title">Login</x-slot>
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

             <form  method="POST" action="{{route('login')}}">
                    @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</x-layout>

@if(strlen($article->title)>12)
                {{substr($article->title, 0, 12)}}...
                @else 
                {{$article->title}}
                @endif



    public function updateCategory($category_id)
    {
        $selectedCategory = Category::find($category_id);
        $this->selectedCategory = $selectedCategory;
    }

    $this->selectedCategory=$categories->first();


      public $selectedCategory;



      <form class="mt-5" method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            @error('napassword')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="exampleInputPassword1">
                            @error('passsword confirmation')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn text-white">Registrati</button>
                    </form>


 

 {{$article->images()->first()->getUrl(400,300)}}






 /* card flip */

/* .cards {
  position: relative;
  transition: transform 0.5s;
  transform-style: preserve-3d;
}

.card-front,
.card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.card-back {
  transform: rotateY(180deg);
  background-color: black;
}

.cards:active {
  transform: rotateY(180deg);
}

.cards:active .card-front {
  display: none;
}

.cards:active .card-back {
  display: block;
} */







    <div class="container altezza">
        <div class="row">
            <div class="col-12 text-center text-arancio-simple">
                <h2 class="title-lavoraConNoi">{{$article_to_check->title}}</h2>
            </div>
        </div>
        <div class="row mt-4 justify-content-between">
            <div class="col-12 col-md-6 pb-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($article_to_check->images as $image)
                        <div class="swiper-slide">
                            <img src="{{$image->getUrl(640,440)}}" class="img-fluid" />
                        </div>

                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                @foreach($article_to_check->images as $image)
                <div class="col-md-3 border-end">
                <img src="{{$image->getUrl(640,440)}}" class="img-fluid" />
                    <h5 class="tc-accent mt-3">Tags</h5>
                    <div class="p-2">
                        @if($image->labels)
                        @foreach($image->labels as $label)
                        <p class="d-inline">{{$label}},</p>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body">
                        <h5 class="tc-accent">Revisione Immagini</h5>
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
                @endforeach
            </div>

            <div class="col-12 col-md-5 margine-dettaglio">

                <h5 class="textcolor fw-bold "><strong class="text-arancio-simple">Prezzo: </strong>€
                    {{ $article_to_check->price }}</h5>
                <div class="description-scrollable">
                    <h5 class="textcolor fw-bold"><strong class="text-arancio-simple">Descrizione:
                        </strong>{{ $article_to_check->description }}</h5>
                </div>
                <a class="text-decoration-none" href="{{ route('categoryshow',$article_to_check->category)  }}">
                    <h5 class=" mt-5  fw-bold textcolor"><strong class="text-arancio-simple">Categoria:
                        </strong>{{$article_to_check->category->name}}</h5>
                </a>
                <div class="d-flex mt-5">
                    <form class="me-3" action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn text-white wbotton"><i class="fa-solid fa-check"></i> Accetta</button>
                    </form>
                    <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn text-white wbotton"><i class="fa-solid fa-trash"></i> Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>






















        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="altezza text-center title-revisore">
                    {{$article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($article_to_check)


    
    <div class="container mt-5 container-revisor">
    <td><button onclick="showImages()">Mostra Immagini</button></td>
      <td><button onclick="showInfo()">Mostra Informazioni</button></td>
      <table id="table-images" style="display: none;">
        @foreach($article_to_check->images as $image)
        <div class="row row-revisor mt-4">
                <div class="col-12 col-md-4 my-4 ">
                <img src="{{$image->getUrl(640,440)}}" class="img-fluid img-revisor" />
                </div>
                <div class="col-12 col-md-4 my-4">
                <h5 class="tc-accent text-center">Tags</h5>
                    <div class=" text-center" >
                        @if($image->labels)
                        @foreach($image->labels as $label)
                        <p class="d-inline">{{$label}},</p>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-12 col-md-4 my-4 ">
                    <div class="card-body d-flex align-items-center flex-column ">
                        <h5 class="tc-accent">Revisione Immagini</h5>
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
        </table>
        <table id="table-info" style="display: none;">
            <h2>Descrizine</h2>
            <h2>Paragrafo</h2>

        </table>
    </div>


    @endif
    </div>









tabella java 

    <div class="container altezza">
    <div class="row">
    <button onclick="showImages()">Mostra Immagini</button>
<button onclick="showInfo()">Mostra Informazioni</button>

<!-- Table HTML -->
<table id="table-images" class="table">
  <thead>
    <tr>
      <th>Immagine</th>
      <th>Tags</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="immagine1.jpg"></td>
      <td>Tag1, Tag2, Tag3</td>
    </tr>
    <tr>
      <td><img src="immagine2.jpg"></td>
      <td>Tag4, Tag5, Tag6</td>
    </tr>
  </tbody>
</table>

<table id="table-info" class="table">
  <thead>
    <tr>
      <th>Informazioni</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Descrizione dell'immagine 1</td>
    </tr>
    <tr>
      <td>Descrizione dell'immagine 2</td>
    </tr>
  </tbody>
</table>
    </div>
</div>



//   const tableImg = document.getElementById("table-images");
//   const tableDes = document.getElementById("table-info");

//   function showImages() {
//     tableImg.classList.toggle('d-none');
//   }

//   function showInfo() {
//     tableDes.classList.toggle('d-none');
//   }













    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="altezza text-center title-revisor">
                    {{$article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($article_to_check)
    <div class="container mt-5 container-revisor">
        @foreach($article_to_check->images as $image)
        <div class="row row-revisor mt-4">
                <div class="col-12 col-md-4 my-4 ">
                <img src="{{$image->getUrl(640,440)}}" class="img-fluid img-revisor" />
                </div>
                <div class="col-12 col-md-4 my-4">
                <h5 class="tc-accent text-center text-arancio-simple">Tags</h5>
                    <div class=" text-center" >
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
        <div class="row row row-revisor mt-4">
            <div class="row">
            <div class="col col-12 col-md-4 my-4 text-center">
            <h4 class="text-arancio-simple">Titolo</h4>
            <p class="textcolor fs-5">{{$article_to_check->title}}</p>  
            </div>
            <div class="col col-12 col-md-4 my-4 text-center ">
            <h4 class="text-arancio-simple">Prezzo</h4>
            <p class="textcolor fs-5">{{$article_to_check->price}}€</p>    
            </div>
            <div class="col col-12 col-md-4 my-4 text-center ">
            <h4 class="text-arancio-simple">categoria</h4>
            <p class="textcolor fs-5">{{$article_to_check->category->name}}</p>    
            </div>
            </div>
            <div class="row">
            <div class="col-12 my-4 text-center ">
            <h4 class="text-arancio-simple">Descrizione</h4>
            <div class="description-scrollable">
            <p class="textcolor fs-5">{{ $article_to_check->description }}</p> 
            </div>   
            </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
            <div class="d-flex mt-5">
                    <form class="mx-4" action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn text-white wbotton"><i class="fa-solid fa-check"></i> Accetta</button>
                    </form>
                    <form class="mx-4" action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn text-white wbotton"><i class="fa-solid fa-trash"></i> Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endif
    </div>