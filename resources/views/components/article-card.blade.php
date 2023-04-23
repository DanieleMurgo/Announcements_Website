<div class="card-2 h-100">
    <div class="card-header-2">
        <a class="text-decoration-none" href="{{route('article.show', $article)}}">
            <img class="img-1" src="{{Storage::url($article->images()->first()->path)}}" alt="back-cover-image" />
            @if($article->images()->skip(1)->first())
            <img class="img-2" src="{{ Storage::url($article->images()->skip(1)->first()->path) }}" alt="cover-image" />
            @else
            <img class="img-2" src="{{ Storage::url($article->images()->first()->path) }}" alt="back-cover-image" />
            @endif
        </a>
    </div>
    <div class="card-body-2">
        <a class="text-decoration-none" href="{{route('categoryshow', $article->category)}}">
            <span class="tag">{{$article->category->name}}</span>
        </a>
        <h4 class="mt-3">
            <strong>{{$article->title}}</strong>
        </h4>
        <p class="fs-3">
            Prezzo: <span class="text-arancio-simple">{{$article->price}} €</span>
        </p>
        <p class="mb-4">
            {!!substr($article->description, 0, 40)!!}...
        </p>
        <div class="user">
            <img src="{{Storage::url($article->user->img)}}" alt="user" />
            <div class="user-info">
                <h5>{{$article->user->name}}</h5>
                <small> <i class="fa-solid fa-calendar-days"></i> {{$article->created_at->format('d/m/y')}}</small>
            </div>
        </div>
    </div>
</div>