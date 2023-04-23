<x-layout>

    

    <x-masthead />
    <div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center textarancio">
           <h2 class="dimensioni-h2">{{__('ui.lastAnnouncements')}}</h2>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-around">
    @foreach ($articles as $article)
        <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
           <x-article-card :article="$article" />
        </div>
    @endforeach 
    </div>
</div>

</x-layout>