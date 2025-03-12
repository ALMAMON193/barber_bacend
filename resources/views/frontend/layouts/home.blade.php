@extends('frontend.app')
@section('title', 'Home')
@section('content')
    <!-- Carousel Start -->
    <div class="p-0 mb-5 container-fluid wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="frontend/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="px-5 mx-sm-5" style="max-width: 900px;">
                            <h1 class="mb-4 text-white display-2 text-uppercase animated slideInDown">We Will Keep You
                                An Awesome Look</h1>
                            <h4 class="mb-4 text-white text-uppercase animated slideInDown"><i
                                    class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</h4>
                            <h4 class="mb-4 text-white text-uppercase animated slideInDown"><i
                                    class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</h4>
                            <a href="{{ route('register') }}"
                                class="py-2 px-4 btn btn-primary rounded-0 animated slideInDown">Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="frontend/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="px-5 mx-sm-5" style="max-width: 900px;">
                            <h1 class="mb-4 text-white display-2 text-uppercase animated slideInDown">Luxury Haircut at
                                Affordable Price</h1>
                            <h4 class="mb-4 text-white text-uppercase animated slideInDown"><i
                                    class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</h4>
                            <h4 class="mb-4 text-white text-uppercase animated slideInDown"><i
                                    class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="frontend/img/about.jpg" alt="">
                        <div class="p-5 w-50 bg-secondary" style="margin-top: -25%;">
                            <h1 class="mb-3 text-uppercase text-primary">25 Years</h1>
                            <h2 class="mb-0 text-uppercase">Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="px-4 py-1 d-inline-block bg-secondary text-primary">About Us</p>
                    <h1 class="mb-4 text-uppercase">More Than Just A Haircut. Learn More About Us!</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                        erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam
                        rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor
                        eos.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="mb-3 text-uppercase">Since 1990</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                amet diam et eos.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3 text-uppercase">1000+ clients</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                amet diam et eos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    @include('frontend.layouts.service')
    <!-- Service End -->


    <!-- Price Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-5 bg-secondary h-100 d-flex flex-column justify-content-center">
                        <p class="px-4 py-1 d-inline-flex bg-dark text-primary me-auto">Price & Plan</p>
                        <h1 class="mb-4 text-uppercase">Check Out Our Barber Services And Prices</h1>
                        <div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Haircut</h6>
                                <span class="text-uppercase text-primary">$29.00</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Beard Trim</h6>
                                <span class="text-uppercase text-primary">$35.00</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Mans Shave</h6>
                                <span class="text-uppercase text-primary">$23.00</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Hair Dyeing</h6>
                                <span class="text-uppercase text-primary">$19.00</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Mustache</h6>
                                <span class="text-uppercase text-primary">$15.00</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between">
                                <h6 class="mb-0 text-uppercase">Stacking</h6>
                                <span class="text-uppercase text-primary">$39.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="frontend/img/price.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->


    <!-- Team Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="px-4 py-1 d-inline-block bg-secondary text-primary">Our Barber</p>
                <h1 class="text-uppercase">Meet Our Barber</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden team-img position-relative">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center bg-secondary">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden team-img position-relative">
                            <img class="img-fluid" src="frontend/img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center bg-secondary">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden team-img position-relative">
                            <img class="img-fluid" src="frontend/img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center bg-secondary">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden team-img position-relative">
                            <img class="img-fluid" src="frontend/img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center bg-secondary">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Working Hours Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="frontend/img/open.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5 bg-secondary h-100 d-flex flex-column justify-content-center">
                        <p class="px-4 py-1 d-inline-flex bg-dark text-primary me-auto">Working Hours</p>
                        <h1 class="mb-4 text-uppercase">Professional Barbers Are Waiting For You</h1>
                        <div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Monday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Tuesday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Wednesday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Thursday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between border-bottom">
                                <h6 class="mb-0 text-uppercase">Friday</h6>
                                <span class="text-uppercase">09 AM - 09 PM</span>
                            </div>
                            <div class="py-2 d-flex justify-content-between">
                                <h6 class="mb-0 text-uppercase">Sat / Sun</h6>
                                <span class="text-uppercase text-primary">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Hours End -->


    <!-- Testimonial Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="px-4 py-1 d-inline-block bg-secondary text-primary">Testimonial</p>
                <h1 class="text-uppercase">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center testimonial-item"
                    data-dot="<img class='img-fluid' src='frontend/img/testimonial-1.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore
                        sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at
                        rebum justo sea clita.</span>
                </div>
                <div class="text-center testimonial-item"
                    data-dot="<img class='img-fluid' src='frontend/img/testimonial-2.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore
                        sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at
                        rebum justo sea clita.</span>
                </div>
                <div class="text-center testimonial-item"
                    data-dot="<img class='img-fluid' src='frontend/img/testimonial-3.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore
                        sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at
                        rebum justo sea clita.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
