<div class="container">
    <div class="row ">
        <div class="col-12 col-md-6">
            <form wire:submit.prevent="store">
                <div class="mb-5">
                    <label class="form-label fs-3">{{__('article.title')}}</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title">
                    @error('title')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="form-label fs-3">{{__('article.price')}}</label>
                    <input type="number" step="0.10" class="form-control @error('price') is-invalid @enderror"
                        wire:model="price">
                    @error('price')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="form-label fs-3">{{__('article.category')}}</label>
                    <select id="category_id" wire:model="category_id"
                        class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">{{__('article.catSelect')}}</option>
                        @foreach($categories as $category)
                        <option class="bg-light" value="{{$category->id}}">{{$category->getNameByLocale()}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="form-label fs-3">{{__('article.img')}}</label>
                    <input name="images" type="file" multiple
                        class="form-control @error('temporary_images.*') is-invalid @enderror"
                        wire:model="temporary_images" placeholder="Img" />
                    @error('temporary_images.*')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                @if(!empty($images))
                <div class="row">
                    <div class="col-12 mb-3">
                        <p class="text-arancio-dark fs-3">{{__('article.photo')}}:</p>
                        <div class="row border border-4 border-info rounded shadow py-4">
                            @foreach ($images as $key => $image)
                            <div class="col-12 col-md-4 my-3 d-flex justify-content-center flex-column">
                                <img alt="" class="img-preview img-fluid mx-auto rounded shadow"
                                    src="{{ $image->temporaryUrl() }}">
                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                    wire:click="removeImage( {{$key}} )">{{__('article.cancel')}}</button>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <div class="mb-5">
                    <label class="form-label fs-3">{{__('article.description')}}</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description"
                        cols="30" rows="10"></textarea>
                    @error('description')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- bottone per pubblicare -->
                <button type="submit" class="btn text-white">{{__('article.publish')}}</button>
            </form>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-center margin-top-card">
            <div class="card-2  altezza-card-form my-sticky-top ">
                <div class="card-header-2">
                    <a class="text-decoration-none" href="#">
                        @if($imgPreview)
                        <img src="{{ $imgPreview->temporaryUrl() }}" alt="rover" />
                        @endif
                    </a>
                </div>
                <div class="card-body-2">
                    <a class="text-decoration-none" href="#">
                        <span class="tag">{{$category_name}}</span>

                    </a>
                    <h4 class="mt-3">
                        <strong>{!! substr($title, 0, 15) !!}..</strong>
                    </h4>
                    <p class="fs-3">
                    {{__('article.price')}}: <span class="text-arancio-simple">{{$price}}€</span>
                    </p>
                    <p class="mb-4">
                        {!! substr($description, 0, 40) !!}...
                    </p>
                    <div class="user">
                        <img src="{{Storage::url(Auth::user()->img)}}" alt="user" />
                        <div class="user-info">
                            <h5>{{Auth::user()->name}}</h5>
                            <small> <i class="fa-solid fa-calendar-days"></i></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fine row -->
    </div>
    <!-- fine container -->
</div>