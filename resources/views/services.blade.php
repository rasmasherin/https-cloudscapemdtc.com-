@extends('layouts.app')

@section('content')
@include('topper')
@include('navigation')

<!-- Services Details Section -->
<div class="container-fluid bg-light py-5">
    <div class="container py-4">

        <div class="text-center mx-auto mb-5" style="max-width:800px;">
            <h6 class="text-uppercase mb-2" style="color:#5a4a6f;letter-spacing:2px;font-weight:600;">
                What We Offer
            </h6>
            <h1 class="display-5 mb-3" style="color:#5a4a6f;font-weight:700;">
                Our Comprehensive Therapy Services
            </h1>
            <p class="text-muted">
                We provide specialized therapeutic interventions tailored to each child.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-white h-100 shadow-sm position-relative overflow-hidden rounded">

                        <!-- Image -->
                        <div class="service-img-wrapper position-relative overflow-hidden">
                            @if($service->image)
                                <img class="img-fluid w-100"
                                     src="{{ asset('storage/'.$service->image) }}"
                                     alt="{{ $service->title }}">
                            @endif

                            <div class="service-overlay position-absolute w-100 h-100 top-0 start-0 d-flex align-items-center justify-content-center">
                                @if($service->icon)
                                    <img src="{{ asset('storage/'.$service->icon) }}"
                                         style="width:60px;height:60px;">
                                @endif
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-4">
                            <h5 style="color:#5a4a6f;font-weight:600;">
                                {{ $service->title }}
                            </h5>

                            <!-- Short Description -->
                            <p class="text-muted" style="font-size:14px;" id="short-desc-{{ $service->id }}">
                                {{ \Illuminate\Support\Str::limit($service->description, 120) }}
                            </p>

                            <!-- Full Description -->
                            <p class="text-muted d-none" style="font-size:14px;" id="full-desc-{{ $service->id }}">
                                {{ $service->description }}
                            </p>

                            <!-- Square Highlight Button -->
                            <button class="read-more-square"
                                    onclick="toggleDesc({{ $service->id }}, this)">
                                Read More
                            </button>

                            <!-- Features -->
                            @if($service->features)
                                <ul class="list-unstyled mt-3">
                                    @foreach($service->features as $feature)
                                        <li class="mb-2 d-flex align-items-start">
                                            <i class="fas fa-check-circle me-2" style="color:#5a4a6f;"></i>
                                            <span style="font-size:13px;">
                                                {{ $feature }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>

@include('appointment')
@include('footer')

<!-- Square Highlight Button Style -->


<!-- JS for Read More / Read Less -->
<script>
function toggleDesc(id, btn) {
    const shortDesc = document.getElementById('short-desc-' + id);
    const fullDesc = document.getElementById('full-desc-' + id);

    if (fullDesc.classList.contains('d-none')) {
        shortDesc.classList.add('d-none');
        fullDesc.classList.remove('d-none');
        btn.textContent = 'Read Less';
    } else {
        fullDesc.classList.add('d-none');
        shortDesc.classList.remove('d-none');
        btn.textContent = 'Read More';
    }
}
</script>

@endsection
