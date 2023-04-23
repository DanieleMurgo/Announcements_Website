<x-layout>

    <x-slot name="title">{{__('tab.register')}}</x-slot>
    <section class="margin-register">
        <div class="container h-100 mt-5">
            <div class="row d-flex justify-content-center align-items-center vh-100">
                <div class="col col-xl-9">
                    <div class="card-form" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="/img/register.jpg" alt="login form" class="img-fluid h-100"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="d-flex align-items-center mb-2 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3 text-arancio-simple"></i>
                                            <span class="h1 fw-bold mb-0 text-arancio-simple">PRESTO</span>
                                        </div>

                                        <h5 class="fw-normal mb-2 pb-3 mt-4 text-arancio-simple fw-bold"
                                            style="letter-spacing: 1px;">{{__('nav.register')}}</h5>

                                        <div class="form-outline mb-2">
                                            <input type="text" name="name" class="form-control form-control-lg"
                                                value="{!!old('name')!!}" />
                                            <label class="form-label">{{__('auth.name')}}</label>
                                            @error('name')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="email" name="email" id="form2Example17"
                                                class="form-control form-control-lg" value="{!!old('email')!!}" />
                                            <label class="form-label" for="form2Example17">Email</label>
                                            @error('email')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="password" name="password" id="form2Example27"
                                                class="form-control form-control-lg" value="{!!old('password')!!}" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                            @error('password')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="password" name="password_confirmation" id="form2Example27"
                                                class="form-control form-control-lg" />
                                            <label class="form-label"
                                                for="form2Example27">{{__('auth.confirmPw')}}</label>
                                            @error('password_confirmation')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mt-2 mb-2">
                                            <input type="file" name="img"
                                                class="form-control form-control-lg input-size" />
                                            <label class="form-label">{{__('auth.profileImg')}}</label>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div class="pt-1 mt-1 ">
                                                <button class="btn text-white fs-5"
                                                    type="submit">{{__('nav.register')}}</button>
                                            </div>
                                            <div class="pt-1  mt-4">
                                                <a href="{{route('terms')}}" class="small text-muted">Terms of use.</a>
                                                <a href="{{route('privacy')}}" class="small text-muted">Privacy
                                                    policy</a>
                                            </div>

                                        </div>

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