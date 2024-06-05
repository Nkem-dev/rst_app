@extends('layout.app')

@section('content')




    
    <!-- <div class="page-loading">
        <img src="assets/images/loader.gif" alt="" />
    </div>page-loading end-->
    
    <div class="wrapper"> 

        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>LOGIN</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Login</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="delitaste-form text-center">
                            <div class="lg-text">
                                <h3>Log In With</h3>
                                <ul class="social">
                                    <li><a class="facebook" href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="linkedin" href="#" title=""><i class="fab fa-linkedin"></i></a></li>
                                    <li><a class="twitter" href="#" title=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="#" title=""><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div><!--lg-text end-->
                            <div class="or">
                                <span>or</span>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-2 col-form-label text-md-start">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                                
                            </form>
                            <div class="btm-tx text-left">
                                <span>No account? <a href="sign-up.html" title="">Register now</a></span>
                                <a href="#" title="">Forgot password?   </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        
</div>  <!-- wrapper end -->
@endsection


    


