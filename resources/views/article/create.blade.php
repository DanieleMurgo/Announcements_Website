<x-layout>
<x-slot name="title">{{__('tab.createAnn')}}</x-slot>
<div class="container altezza">
    <div class="row">
        <div class="col-12 mt-2">
            <h1 class="text-center text-arancio dimensioni-h2">{{__('article.newAnnouncement')}}</h1>
        </div>
    </div>
        <div class="row mt-5">
            <div class="col-12 mt-5">
            <livewire:create-form />
            </div>
        </div>
</div>
</x-layout>