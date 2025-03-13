<div class="pt-5 mt-5 container-fluid bg-secondary text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="mb-4 text-uppercase">Get In Touch</h4>
                <div class="mb-2 d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square bg-dark me-3">
                        <span class="fa fa-map-marker-alt text-primary"></span>
                    </div>
                    <span>Dhaka, Bangladesh</span>
                </div>
                <div class="mb-2 d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square bg-dark me-3">
                        <span class="fa fa-phone-alt text-primary"></span>
                    </div>
                    <span>+012 345 67890</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square bg-dark me-3">
                        <span class="fa fa-envelope-open text-primary"></span>
                    </div>
                    <span>info@example.com</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="mb-4 text-uppercase">Quick Links</h4>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('services') }}">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="mb-4 text-uppercase">Newsletter</h4>
                <div class="mb-4 position-relative">
                    <input class="py-3 border-0 form-control w-100 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">SignUp</button>
                </div>
                <div class="pt-1 d-flex m-n1">
                    <a class="m-1 btn btn-lg-square btn-dark text-primary" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="m-1 btn btn-lg-square btn-dark text-primary" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="m-1 btn btn-lg-square btn-dark text-primary" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="m-1 btn btn-lg-square btn-dark text-primary" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                    &copy; <a class="border-bottom" href="#">{{ config('app.name') }}</a>, All Right Reserved.
                </div>
                <div class="text-center col-md-6 text-md-end">
                    Developed By <a class="border-bottom" href="https://htmlcodex.com">Al Mamon</a>
                </div>
            </div>
        </div>
    </div>
</div>
