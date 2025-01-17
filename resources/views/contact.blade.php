 @extends('layout.app')

 @section('content')
        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Contact us</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-us-section pr-100">
                            <div class="section-title">
                                <span>Be In Touch </span>
                                <h2 class="text-capitalize">Send us a message</h2>
                                <p class="mx-auto mw-100">If you need a consultation regarding colaboration let us know or maybe you have another question don’t be shy send us a message.</p>
                            </div><!--sec-title end-->
                            <form id="contact-form" method="post" action="#">
                                <div class="response"></div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control name half-radius" placeholder="Name*">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control email half-radius" placeholder="Email*">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="button" id="submit" class="btn-default">Submit <span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div><!--contact-us-section end-->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget contact-widget">
                                <div class="numb">
                                    <h5>Phone number:</h5>
                                    <p>+1 654 847 52 25</p>
                                </div>
                                <div class="numb">
                                    <h5>Email:</h5>
                                    <p>info@sitename.com</p>
                                </div>
                                <div class="numb">
                                    <h5>Working hours:</h5>
                                    <p>Mon - Sat: 9:00 am - 10:00 pm <br /> Sun: 10:00 am - 8:00 pm</p>
                                </div>
                            </div><!--contact-widget end-->
                        </div><!--sidebar end-->
                    </div>
                </div>
            </div>
        </section>


    <!-- </div>wrapper end -->

@endsection
