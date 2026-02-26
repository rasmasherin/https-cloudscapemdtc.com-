@extends('layouts.app')

@section('content')
@include('topper')
@include('navigation')

<!-- Gallery Section -->
<div class="py-5" style="background-color: #D6C7EF;">
    <div class="container text-center">

        <h1 class="fw-bold mb-3">
            Explore Our Therapy Spaces & Sessions
        </h1>

        <p class="text-muted mb-5">
            A glimpse into our therapy rooms, activities, and child-focused sessions
        </p>

        <div class="row g-4">

            @forelse($images as $img)
                <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="gallery-card">

                        <!-- Fixed Size Image -->
                        <div class="image-wrapper">
                            <img src="{{ asset('storage/'.$img->image) }}"
                                 alt="{{ $img->title ?? 'Gallery Image' }}">
                        </div>

                        @if($img->title)
                            <div class="p-3 text-center">
                                <span class="badge bg-light text-dark">
                                    {{ $img->title }}
                                </span>
                            </div>
                        @endif

                    </div>

                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted">No images available.</p>
                </div>
            @endforelse

        </div>

    </div>
</div>

@include('footer')
@endsection


<style>

/* Card */
.gallery-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: 0.3s ease;
}

.gallery-card:hover {
    transform: translateY(-6px);
}

/* FIXED IMAGE SIZE */
.image-wrapper {
    width: 100%;
    height: 280px;      /* SAME HEIGHT FOR ALL */
    overflow: hidden;
    position: relative;
}

.image-wrapper img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;  /* Crop properly */
    top: 0;
    left: 0;
}

/* Mobile adjustment */
@media (max-width: 576px) {
    .image-wrapper {
        height: 220px;
    }
}

</style>
