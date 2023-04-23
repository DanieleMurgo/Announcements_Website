<x-layout>

<x-slot name="title">Login</x-slot>
<section class="vh-100 mt-4">
  <div class="container py-1 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-9">
        <div class="card-form" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="/img/login.webp"
                alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-5  p-lg-5 text-black">

             <form  method="POST" action="{{route('login')}}">
                    @csrf

                  <div class="d-flex align-items-center mb-5">
                    <span class="h1 fw-bold mb-0 text-arancio-simple">PRESTO</span>
                  </div>

                  <h5 class="fw-normal mb-1 pb-3 text-arancio-simple fw-bold" style="letter-spacing: 1px;">{{__('nav.login')}}</h5>

                  <div class="form-outline mb-1">
                    <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" value="{!!old('email')!!}"/>
                    <label class="form-label" for="form2Example17">Email</label>
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-outline mb-1">
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" value="{!!old('password')!!}"/>
                    <label class="form-label" for="form2Example27">Password</label>
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="pt-1 mt-4 mb-5">
                    <button class="btn text-white" type="submit">{{__('nav.login')}}</button>
                  </div>

                  <p class="mb-3 pb-lg-2" style="color: #393f81;">{{__('auth.noAccount')}} <a href="{{route('register')}}"
                      style="color: #393f81;">{{__('auth.registerHere')}}i</a></p>
                  <a href="{{route('terms')}}" class="small text-muted">Terms of use.</a>
                  <a href="{{route('privacy')}}" class="small text-muted">Privacy policy</a>
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
