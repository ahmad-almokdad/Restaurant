<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Baron Restaurant</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+971 544444444</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> 11AM - 23PM</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">

                <ul>
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>


            </div>
        </div>
    </div>



    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a  href="">{{ __('messages.Baron') }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
           <a href="" class="logo me-auto me-lg-0"><img src="assets/img/logo1.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{ __('messages.home') }}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{ __('messages.about') }}</a></li>
                    <li><a class="nav-link scrollto" href="#menu">{{ __('messages.menu') }}</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">{{ __('messages.gallery') }}</a></li>

                    <li><a class="nav-link scrollto" href="#contact">{{ __('messages.contact') }}</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="#book-a-table"
                class="book-a-table-btn scrollto d-none d-lg-flex">{{ __('messages.reservation') }}</a>

        </div>
    </header><!-- End Header -->



    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">




                    <div class="carousel-item active "
                        style="background-image: url(uploads/slider/{{ $sliders[0]['image'] }});">

                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">
                                    <span>{{ $sliders[0]['title'] }}</span> </h2>
                                <p class="animate__animated animate__fadeInUp">{{ $sliders[0]['sub_title'] }}.</p>
                                <div>
                                    <a href="#menu"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">{{ __('messages.menu') }}</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">{{ __('messages.reservation') }}</a>
                                </div>
                                <div class=" d-flex align-items-center justify-content-center position-relative"
                                    data-aos="zoom-in" data-aos-delay="200">
                                    <a href="https://youtu.be/KVfJfL8Jfmk" class="glightbox play-btn"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @foreach ($sliders as $item)
                        @if ($loop->index != 0)
                            <div class="carousel-item  "
                                style="background-image: url(uploads/slider/{{ $item->image }});">

                                <div class="carousel-container">
                                    <div class="carousel-content">
                                        <h2 class="animate__animated animate__fadeInDown">
                                            <span>{{ $item->title }}</span> </h2>
                                        <p class="animate__animated animate__fadeInUp">{{ $item->sub_title }}.</p>
                                        <div>
                                            <a href="#menu"
                                                class="btn-menu animate__animated animate__fadeInUp scrollto">{{ __('messages.menu') }}</a>
                                            <a href="#book-a-table"
                                                class="btn-book animate__animated animate__fadeInUp scrollto">{{ __('messages.Reservation') }}</a>
                                        </div>
                                        <div class=" d-flex align-items-center justify-content-center position-relative"
                                            data-aos="zoom-in" data-aos-delay="200">
                                            <a href="https://youtu.be/KVfJfL8Jfmk"
                                                class="glightbox play-btn"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif
                    @endforeach



                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="assets/img/gallery/back.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</li>
                            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</li>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('messages.why') }}</h2>
                    <p>{{ __('messages.whychoose') }}</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                          
                          <h4> <span>Repellat Nihil</span> </h4> 
                            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero
                                placeat</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                           
                          <h4> <span>Repellat Nihil</span> </h4> 
                            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire
                                leno para dest</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            
                        <h4> <span>Repellat Nihil</span> </h4> 
                            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam
                                quis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                  <h2>{{ __('messages.menu') }}</h2>
                  <p>{{ __('messages.ourmenu') }}</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">

                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($categories as $item)
                                <li data-filter=".filter-{{ $item->name }}">{{ $item->name }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($items as $item)
                        <div class="col-lg-6 menu-item filter-{{ $item->name }}">
                            <img src="uploads/item/{{ $item->image }}" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">{{ $item->name }} </a><span>{{ $item->price }} AED</span>
                            </div>
                            <div class="menu-ingredients">
                                {{ $item->description }}
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Menu Section -->

    
       


        <!-- ======= Book A Table Section ======= -->

        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('messages.Reservation') }}</h2>
                    <p>{{ __('messages.Reservationtable') }}</p>
                </div>

                <form action="{{ route('reservation.reserve') }}" method="post" role="form" class="email-form"
                    data-aos="fade-up" data-aos-delay="100">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('messages.name') }}"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group ">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="{{ __('messages.phone') }}"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group ">


                            <input type="text" placeholder="{{ __('messages.date') }}" name="dateandtime" class="form-control"
                                id="date" onfocus="(this.type='datetime-local')">

                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="number" class="form-control" name="num_of_people" id="num_of_people"
                                placeholder="{{ __('messages.people') }}" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <select class="form-control" aria-label="Default select example">
                                <option selected>{{ __('messages.restype') }}</option>
                                <option value="1">Dinner</option>
                                <option value="2">private</option>
                                <option value="3">Birthday</option>
                                <option value="3">Vip</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <textarea class="form-control" name="messege" rows="3" placeholder="{{ __('messages.message') }}"></textarea>
                            <div class="validate"></div>
                        </div>



                    </div>


                    <div class="text-center"><button type="submit">{{ __('messages.reservation') }}</button></div>
                </form>

            </div>
        </section>


        <!-- End Book A Table Section -->



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{{ __('messages.Gallery') }}</h2>
                    <p>{{ __('messages.Galleryphoto') }}</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">
                    @foreach ($images as $item)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="uploads/gallery/{{ $item->url }}" class="gallery-lightbox"
                                    data-gall="gallery-item">
                                    <img src="uploads/gallery/{{ $item->url }}" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    @endforeach




                </div>

            </div>
        </section><!-- End Gallery Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('messages.Contact') }}</h2>
                    <p>{{ __('messages.ContactUs') }}</p>
                </div>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>{{ __('messages.Location') }}</h4>
                                <p>Business Bay - Dubai - United Arab Emirates</p>
                            </div>

                            <div class="open-hours">
                                <i class="bi bi-clock"></i>
                                <h4>Open Hours:</h4>
                                <p>

                                  {{ __('messages.Monday') }}  9AM–3AM<br>
                                  {{ __('messages.Tuesday') }} 9AM–3AM<br>
                                  {{ __('messages.Wednesday') }} 9AM–2AM<br>
                                  {{ __('messages.Thursday') }}  9AM–5AM<br>
                                  {{ __('messages.Friday') }} 9AM–1AM<br>
                                  {{ __('messages.Saturday') }}  9AM–2AM<br>
                                  {{ __('messages.Sunday') }}  9AM–1AM<br>
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>{{ __('messages.Email') }}</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>{{ __('messages.Call') }}</h4>
                                <p>+971 56 220 9935</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <iframe style="border:0; width: 100%; height: 350px; border-radius: 20px; "
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14441.836022567655!2d55.28276849659581!3d25.187738761026047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f683b951ab2ed%3A0x1f8bcf090f4d8b98!2sBaron%20Gourmet!5e0!3m2!1sen!2s!4v1647853827555!5m2!1sen!2s"
                            frameborder="0" allowfullscreen></iframe>


                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!-- <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Baron</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div> -->

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>In&Out Group</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Baron-restaurant-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



</body>

</html>
