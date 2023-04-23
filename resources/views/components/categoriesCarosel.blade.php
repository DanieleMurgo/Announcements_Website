<div class="row d-md-none mt-4">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">

    <div class="carousel-item active mycarousel  ">
        @foreach($categories1 as $category)
    <div class="card cardHead my-3" style="width: 14rem;">
        <div class="card-body">
            <a class="text-decoration-none" href="{{ route('categoryshow',$category)  }}">
                <h4 class="card-title text-white fw-bold fs-5">{{ Str::of($category->getNameByLocale())->before(' ')}}
                </h4>
            </a>
        </div>
    </div>
    @endforeach
    </div>
    <div class="carousel-item mycarousel">
        @foreach($categories2 as $category)
        <div class="card cardHead my-3" style="width: 14rem;">
        <div class="card-body">
            <a class="text-decoration-none" href="{{ route('categoryshow',$category)  }}">
                <h4 class="card-title text-white fw-bold fs-5">{{ Str::of($category->getNameByLocale())->before(' ')}}
                </h4>
            </a>
        </div>
    </div>
      @endforeach
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>