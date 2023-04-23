<div class=" d-none d-md-block d-flex align-items-center  text-center">
<div class="row mt-4 align-items-center justify-content-center text-center">
                    @foreach($categories as $category)
                    <div class="col-12 col-md-6 my-2 d-flex justify-content-center text-center ">
                        <div class="card cardHead" style="width: 14rem;">
                            <div class="card-body">
                                <a class="text-decoration-none" href="{{ route('categoryshow',$category)  }}">
                                    <h4 class="card-title text-white fw-bold fs-5">{{ Str::of($category->getNameByLocale())->before(' ')}}
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>