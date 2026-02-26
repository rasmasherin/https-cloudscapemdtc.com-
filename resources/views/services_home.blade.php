

<div class="container-fluid py-5" style="background:#f3eefc;">
    <div class="container py-4">

        <!-- Section Heading -->
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h6 class="text-uppercase mb-2"
                style="color:#5a4a6f;letter-spacing:2px;font-weight:600;">
                What We Offer
            </h6>

            <h1 class="display-5 mb-3"
                style="color:#5a4a6f;font-weight:700;">
                Our Comprehensive Therapy Services
            </h1>

            <p class="text-muted">
                We provide specialized therapeutic interventions tailored to each child.
            </p>
        </div>

        <!-- Services -->
        <div class="row g-4 justify-content-center">
            @foreach($services as $index => $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $index + 1 }}s">
                    <div class="service-item bg-white h-100 shadow-sm position-relative overflow-hidden rounded-4">

                        <!-- Image -->
                        <div class="service-img-wrapper position-relative overflow-hidden rounded-top-4">
                            @if($service->image)
                                <img class="img-fluid w-100"
                                     src="{{ asset('storage/'.$service->image) }}"
                                     alt="{{ $service->title }}"
                                     style="transition: transform 0.4s ease;">
                            @endif

                            <!-- Overlay -->
                            <div class="service-overlay position-absolute w-100 h-100 top-0 start-0
                                        d-flex align-items-center justify-content-center">
                                @if($service->icon)
                                    <img src="{{ asset('storage/'.$service->icon) }}"
                                         style="width:60px;height:60px;">
                                @endif
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-4">
                            <h5 class="mb-3"
                                style="color:#5a4a6f;font-weight:600;">
                                {{ $service->title }}
                            </h5>

                            <!-- Short description -->
                            <p class="text-muted mb-4" style="font-size:14px;">
                                {{ Str::limit($service->description, 90) }}
                            </p>

                            <!-- Read More -->
                            <a href="{{ route('services.index') }}"
                               class="btn fw-bold"
                               style="
                                   font-size:14px;
                                   padding:10px 22px;
                                   border-radius:6px;
                                   background:linear-gradient(135deg,#937acc,#8C79B9);
                                   color:#fff;
                                   transition:all 0.3s ease;
                                   text-decoration:none;
                               "
                               onmouseover="this.style.transform='translateY(-2px)';
                                            this.style.boxShadow='0 4px 12px rgba(140,121,185,0.4)';"
                               onmouseout="this.style.transform='translateY(0)';
                                           this.style.boxShadow='none';">
                                Read More
                            </a>
                        </div>

                        <!-- Bottom Accent -->
                        <div style=""></div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="row mt-5">
            <div class="col-12 text-center wow fadeInUp">
                <div class="p-4 rounded-4 shadow-lg"
                     style="background:linear-gradient(135deg,#937acc,#8C79B9);">

                    <h4 class="fw-bold mb-2 text-white">
                        Ready to Get Started?
                    </h4>

                    <p class="text-white mb-3">
                        Schedule a consultation with our expert team.
                    </p>

                    <a href="{{ route('home') }}#appointment"
                       class="btn btn-light px-4 py-2 rounded-pill"
                       style="color:#8e74af;font-weight:600;">
                        Book an Appointment
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Custom CSS -->
<!-- <style>
    .service-item:hover .service-img-wrapper img {
        transform: scale(1.05);
    }

    .service-overlay {
        background: rgba(140, 121, 185, 0.15);
        transition: background 0.3s ease;
    }

    .service-item:hover .service-overlay {
        background: rgba(162, 140, 214, 0.25);
    }
</style> -->

