@extends('frontend.layouts.main')
@section('title', 'Buy Tickets')
@section('main-container')

    <!--Page Title-->

    <section class="page-title" style="background-image:url(frontend/images/background/5.jpg);">

        <div class="auto-container">

            <h1>Buy Ticket</h1>

            <ul class="bread-crumb clearfix">

                <li><a href="index-2.html">Home</a></li>

                <li>Buy Ticket</li>

            </ul>

        </div>

    </section>

    <!--End Page Title-->



    <!-- Buy Ticket  -->

    <section class="buy-ticket">

        <div class="anim-icons full-width">

            <span class="icon icon-circle-blue wow fadeIn"></span>

            <span class="icon icon-circle-1 wow zoomIn"></span>

        </div>

        <div class="auto-container">

            <div class="row">

                <!-- Content Column -->

                <div class="content-column col-lg-8 col-md-12 col-sm-12 order-2">

                    <div class="inner-column">

                        <h2>Day Pass <span>$35.99</span></h2>

                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua
                            enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo
                            consequat.duis aute irure dolor in repre hen derit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur cepteur sint occaecat cupidatat eaque ipsa quae illo proident sunt in
                            culpa qui officia deserunt mollit anim id est laborum perspiciatis</p>

                        <p>derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat
                            cupidatat eaque ipsa quae illo proident sunt in culpa qui officia deserunt mollit anim id est
                            laborum perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore laudant rem
                            aperiam eaque ipsa quae ab illo inventore veritatis quasi architecto.</p>

                        <h3>Benefits of Day Pass package</h3>

                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua
                            enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo
                            consequat.</p>

                        <ul class="list-style-one">

                            <li>Multiple Announcements during the event.</li>

                            <li>Logo & company details on the WordCamp.</li>

                            <li>Dedicated blog post thanking each Gold.</li>

                            <li>Acknowledgment and opening and closing.</li>

                        </ul>

                        <h3>Day Pass Features</h3>

                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua
                            enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo
                            consequat.duis aute irure dolor in repre hen.</p>

                    </div>

                </div>



                <!-- Form Column -->

                <div class="form-column col-lg-4 col-md-12 col-sm-12">

                    <div class="inner-column">

                        <div class="ticket-form">

                            <form method="post" action="https://expert-themes.com/html/eventrox/contact.html">

                                <div class="form-group">

                                    <input type="text" name="username" placeholder="Your Name" required="">

                                </div>



                                <div class="form-group">

                                    <input type="email" name="email" placeholder="Your Email" required="">

                                </div>



                                <div class="form-group">

                                    <input type="phone" name="email" placeholder="Phone" required="">

                                </div>



                                <div class="form-group">

                                    <input type="number" name="qty" placeholder="Quantity" required="">

                                </div>



                                <div class="form-group">

                                    <input type="checkbox" name="terms" id="term" required="">

                                    <label for="term">I accept the <span>Terms &amp; Conditions</span></label>

                                </div>



                                <div class="form-group">

                                    <button class="theme-btn btn-style-three" type="submit" name="Submit"><span
                                            class="btn-title">Purchase</span></button>

                                </div>

                            </form>

                        </div>



                        <!-- Follow Us -->

                        <div class="follow-us">

                            <h3>Follow Us</h3>

                            <ul class="social-icon-two social-icon-colored">

                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>

                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>

                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>

                            </ul>

                        </div>



                        <div class="support-box">
                            <h3>Call for Support</h3>
                            <p>Me old mucker spend a penny cack nice one a blinding shot young delinquent.</p>
                            <div class="number"><span class="fa fa-phone-volume"></span> <a href="%2b1234567890.html">+123
                                    456 7890</a></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Buy Ticket  -->
@endsection
