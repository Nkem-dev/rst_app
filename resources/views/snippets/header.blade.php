<header>
            <div class="container-fluid">
                <div class="header-content d-flex flex-wrap align-items-center">
                    <div class="logo">
                            <img src="assets/images/logo.png" alt="">
                    </div><!--logo end-->
                    <nav>
                        <ul class="pl-5 ml-5">
                            <li><a class="nav-link" href="">Home</a></li>
                            <li><a href="about.html" title="">About Us</a></li>
                            <li><a href="#" title="">Restaurant</a>
                                <ul>
                                    <li><a href="cart.html" title="">Cart</a></li>
                                    <li><a href="checkout.html" title="">Checkout</a></li>
                                    <li><a href="profile.html" title="">My profile</a></li>
                                    <li><a href="faqs.html" title="">FAQs</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="">Blog</a></li>
                            <li><a href="/contact" title="">Contact Us</a></li>
                        </ul>
                    </nav><!--navigation end-->
                    <div>
                    @auth
                <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-animation="slideInLeft" data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">Logout</a>

                <form action="{{ route('logout') }}" method="POST" class="d-none" id="logout-form">
                    @csrf
                </form>

                 @else
                 <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase animated slideInLeft" href="/new_user" data-animation="slideInLeft" data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">SIGN UP</a>

                <a class="btn btn-fill-out log rounded-0 staggered-animation text-uppercase animated slideInLeft" href="{{ route('login') }}" data-animation="slideInLeft" data-animation-delay="1.5s" style="animation-delay: 1.5s; opacity: 1;">LOGIN</a>
                @endauth

                    </div>


                    <div class="menu-btn">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div><!--menu-bar end-->
                    <ul class="oth-lnks ml-5">
                        <li><a href="#" title="" class="search-icon"><img src="assets/images/icons/search.svg" alt=""></a></li>
                        <li><a href="#" title="" class="cart-ico"><img src="assets/images/icons/cart.svg" alt=""></a><span class="cart-item-num">0</span></li>
                    </ul><!--oth-lnks end-->
                </div><!--header-content end-->
                <div class="search-bar">
                    <div class="container">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                    </div>    
                </div><!--search-bar end-->
            </div>
        </header>