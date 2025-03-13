<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="mb-0 text-primary text-uppercase"><i class="fa fa-cut me-3"></i>HairCut</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="p-4 navbar-nav ms-auto p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('services') }}" class="nav-item nav-link">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="m-0 dropdown-menu">
                    <a href="{{ route('price') }}" class="dropdown-item">Pricing Plan</a>
                    <a href="{{ route('our-team') }}" class="dropdown-item">Our Barber</a>
                    <a href="{{ route('working-hour') }}" class="dropdown-item">Working Hours</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>

        <!-- User Authentication Links -->
        @guest
            <a href="{{ route('login') }}" class="py-2 btn btn-primary rounded-0 px-lg-4 d-none d-lg-block ms-4">
                <i class="fa fa-sign-in-alt me-2"></i>Login
            </a>
            <a href="{{ route('register') }}" class="py-2 btn btn-primary rounded-0 px-lg-4 d-none d-lg-block ms-4">
                <i class="fa fa-user-plus me-2"></i>Register
            </a>
        @else
            @if (Auth::user()->role == 'admin')
                <a href="{{ route('admin.dashboard') }}"
                    class="py-2 btn btn-primary rounded-0 px-lg-4 d-none d-lg-block ms-4">
                    <i class="fa fa-tachometer-alt me-2"></i>Admin Dashboard
                </a>
            @elseif(Auth::user()->role == 'staff')
                <a href="{{ route('staff.dashboard') }}"
                    class="py-2 btn btn-primary rounded-0 px-lg-4 d-none d-lg-block ms-4">
                    <i class="fa fa-tachometer-alt me-2"></i>Staff Dashboard
                </a>
            @else
                <a href="{{ route('customer.dashboard') }}"
                    class="py-2 btn btn-primary rounded-0 px-lg-4 d-none d-lg-block ms-4">
                    <i class="fa fa-tachometer-alt me-2"></i>User Dashboard
                </a>
            @endif
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="py-2 btn btn-primary rounded-0 px-lg-4 d-none d-lg-block ms-4">
                    <i class="fa fa-sign-out-alt me-2"></i>Logout
                </button>
            </form>
        @endguest
    </div>
</nav>
