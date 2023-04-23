<x-layout>
<x-slot name="title">{{__('tab.revIndex')}}</x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="altezza text-center title-revisor">
                    {{$article_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($article_to_check)
        <livewire:revisor-article-dashboard :article="$article_to_check" />
    @endif
    </div>


</x-layout>