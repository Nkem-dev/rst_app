@extends('layout.app')

@section('content')

<!-- <body> -->
    
    <div class="page-loading">
        <img src="assets/images/loader.gif" alt="" />
    </div><!--page-loading end-->
    
    <!-- <div class="wrapper"> -->
    <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>SIGN UP</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Sign up</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <!-- start sign up -->
        <section class="sec-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="delitaste-form text-center">
                            <div class="lg-text">
                                <h3>Sign Up With</h3>
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
                            <form method="POST" action="{{  route('store_user') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter Your Name">
                                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                        </div><!--input for name-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control"  value="{{ old('email') }}" placeholder="Enter Your Email">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                        </div><!--input for email-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control"  value= "{{ old('address') }}" placeholder="Enter Your Address">
                                            <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                                        </div><!--input for address-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Enter Your Phone Number">
                                            <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                        </div><!--input for phone-->
                                    </div>
                                </div>
                                <h4 class="text-left">Password:</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Password" >
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                        </div><!--input for password-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="confirm_password" class="form-control" value="{{ old('confirm_paassword') }}" placeholder="Confirm Password" >
                                            <span class="text-danger">@error('confirm_password'){{ $message }} @enderror</span>
                                        </div><!--input for confirm password-->
                                    </div>
                                    <!-- <div class="col-md-12"> -->
                                        <!-- <div class="form-group">
                                            <button type="submit" value="Register" class="btn-default w-100">Create Account<span></span></button>
                                        </div> -->
                                        <div class="form-group mb-3">
                            <input type="submit" class="btn btn-fill-out btn-block bg-warning" value="Register">
                            </div>
                            
                                    </div>
                                </div>
                            </form>
                            <div class="btm-tx">
                                <span class="d-block">Already have an account? <a href="sign-in.html" title="">Sign In</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
    <!-- </div>  -->
    <!-- wrapper end -->




<!-- </body>
</html> -->
@endsection