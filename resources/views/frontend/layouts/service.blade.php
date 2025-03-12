<div class="py-5 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="px-4 py-1 d-inline-block bg-secondary text-primary">Services</p>
            <h1 class="text-uppercase">What We Provide</h1>
        </div>
        <div class="row g-4">
            @foreach ($services as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="p-5 overflow-hidden service-item position-relative bg-secondary d-flex h-100 ps-0">
                        <div class="flex-shrink-0 bg-dark d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="frontend/img/haircut.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="mb-3 text-uppercase">{{ $item->name }}</h3>
                            <p>{{ $item->description }}</p>
                            <span class="text-uppercase text-primary">From ${{ $item->price }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- lear More button -->
        <div class="d-flex justify-content-center mt-5">
            <a href="" class="py-2 btn btn-primary rounded-0 px-lg-4 d-none d-lg-block ms-4 wow fadeInUp"
                data-wow-delay="0.5s">Learn More</a>
        </div>

    </div>
</div>
