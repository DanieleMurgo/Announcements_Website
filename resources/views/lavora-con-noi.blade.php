<x-layout>
    <x-slot name="title">{{__('job.offer')}}</x-slot>
    <div class="container">
        <div class="row d-flex justify-content-between ">
            <div class="col-12 text-center altezza">
                <h1 class="title-lavoraConNoi">{{__('job.offer')}}</h1>
            </div>
            <div class="col-12 col-md-5 mt-5 fs-5">
                <p class="textcolor fs-5">{{__('job.pOne')}} <br>
                {{__('job.pTwo')}} <br>
                {{__('job.pThree')}}</p>
            </div>
            <div class="col-12 col-md-5 mt-5 ">
            <form method="POST" action="{{route('become_revisor')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label fs-4">{{__('job.aboutYou')}}</label>
                    <textarea class="form-control" name="about" id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn mt-3 text-white" type="submit">{{__('job.becomeRev')}}</button>
            </form>
            </div>
            
        </div>
    </div>
</x-layout>