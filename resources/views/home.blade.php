<!DOCTYPE html>
    <html lang="en">

        <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Breadom</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        {{-- <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- =======================================================
        * Template Name: Baker - v4.7.0
        * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
        </head>

        <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top header-transparent">
            <div class="container d-flex align-items-center justify-content-between">

            {{-- <h1 class="logo"><a href="index.html">Breadom</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="home.blade.php" class="logo"><img src="{{ asset('pics/logo.jpg') }}" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#products">Products</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container position-relative">
            <h1>Welcome to Breadom</h1>
            <h2>We are a lovely bakery situated in Utako, Abuja</h2>
            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('pics/background4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>About Us</h3>
                        <p>
                            In 2015, Breadom Bakery opened its first kiosk location in Utako, Abuja. From its inception, Breadom Bakery is known as bakery unique for our delicious bread types and cakes. We take pride in using natural ingredients in our bread, cakes and pies.
                            Our cakes are as deliciously wholesome as they are beautifully decorated. Choose from our signature cupcakes, weekly and holiday specials or custom created pies.
                        </p>
                    </div>
                </div>

            </div>
            </section><!-- End About Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-6 col-6 text-center">
                        <span>{{ $count }}</span>
                        <p>Customers</p>
                    </div>

                    <div class="col-lg-6 col-6 text-center">
                        <span>{{ $sales }}</span>
                        <p>Sales</p>
                    </div>

                </div>

            </div>
            </section><!-- End Counts Section -->

            <!-- ======= Services Section ======= -->
            <section id="products" class="products">
            <div class="container">

                <div class="section-title">
                    <h2>Products</h2>
                    <p>These are the categories of products we sell</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <i class='bx bx-baguette'></i>
                            </div>
                            <h4><a href="">Bread</a></h4>
                            <p>We have wide variety of bread types</p>
                            <ul>
                                <li>Small Bread</li>
                                <li>Small Medium Bread</li>
                                <li>Lehem Loaf</li>
                                <li>Show Bread</li>
                                <li>Cinnamon Bread</li>
                                <li>Coconut Bread</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <i class='bx bx-cake' ></i>
                            </div>
                            <h4><a href="">Cakes</a></h4>
                            <p>We have different types of cakes that come in different flavours</p>
                            <ul>
                                <li>Strawberry cupcakes/cakes</li>
                                <li>Vanilla cupcakes/cakes</li>
                                <li>Banana cupcakes/cakes</li>
                                <li>Red Velvet cupcakes/cakes</li>
                                <li>Chocolate cupcakes/cakes</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <i class='bx bx-pie-chart'></i>
                            </div>
                            <h4><a href="">Pie</a></h4>
                            <p>We have a number of pie types</p>
                            <ul>
                                <li>Meat Pie</li>
                                <li>Pudding</li>
                                <li>Fish Pie</li>
                                <li>Apple Pie</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            </section><!-- End Services Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
            <div class="container">

                <div class="text-center">
                <h3>Follow Us on Instagram</h3>
                <p> Follow us on instagram and get constant updates and uploads to stay informed</p>
                <a class="cta-btn" href="https://www.instagram.com/breadville_bakery/">Follow Us</a>
                </div>

            </div>
            </section><!-- End Cta Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-title">
                <h2>Testimonials</h2>
                <p>These are feedbacks given by customers who have enjoyed our services</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @if ($messages->count())
                            @foreach ($messages as $message)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $message->message }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="pics/profile.png" class="testimonial-img" alt="">
                                        <h3>{{ $message->name }}</h3>
                                    </div>
                                </div><!-- End testimonial item -->
                            @endforeach
                            {{ $messages->links() }}
                        @else
                            <p style="text-align: center; font-size: 20px; color:aliceblue">There are no testimonials</p>
                        @endif

                    </div>
                <div class="swiper-pagination"></div>

            </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title">
                        <h2>Portfolio</h2>
                        <p>Pictures of activities that go on</p>
                    </div>
                    <div class="row portfolio-container">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="pics/image.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="pics/image0.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="pics/image1.jpg" class="img-fluid" alt="">
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                <h2>Team</h2>
                <p>This is our ever trustworthy team who make sure you get maximum service the breadom way</p>
                </div>

                <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Adenike Abdulai</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Shaibu</h4>
                        <span>Product Manager</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Abdul</h4>
                        <span>Head of Production</span>
                    </div>
                    </div>
                </div>

                </div>

            </div>
            </section><!-- End Team Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                <h2>Contact</h2>
                <p>Reach out to us and share your experiences</p>
                </div>

                <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>214 Shettima Munguno Crescent, Behind Berger Yard, Utako, Abuja</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>ayoade_nike@yahoo.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+234 80 3356 5785</p>
                        </div>
                    </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="{{ route('home') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

                </div>

            </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 footer-contact">
                            <h3>Breadom</h3>
                            <p>
                                214 Shettima Munguno Crescent<br>
                                 Behind Berger Yard<br>
                                  Utako, Abuja
                             <br><br>
                            <strong>Phone:</strong> +234 80 3356 5785<br>
                            <strong>Email:</strong>ayoade_nike@yahoo.com<br>
                            </p>
                        </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our Products</h4>
                        <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Bread</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cake</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Pie</a></li>
                        </ul>
                    </div>

                    </div>
                </div>
            </div>
            <div class="container d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <a id="loginbtn" href="{{ route('login') }}">Login</a>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        </body>

    </html>