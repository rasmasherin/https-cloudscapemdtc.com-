@extends('layouts.app')

@section('content')
@include('topper')
@include('navigation')

<style>
    .blog-page {
        background: #FAFAFA;
        padding-bottom: 80px;
    }

    .blog-header {
        background: linear-gradient(135deg, #D8CDEF 0%, #D8CDEF 100%);
        padding: 80px 0;
        text-align: center;
        color:#6C757D;
    }

    .blog-header h1 {
        font-size: 3rem;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    .blog-header p {
        font-size: 1.1rem;
        opacity: 0.9;
    }

    .container {
        max-width: 1200px;
        margin: auto;
        padding: 0 24px;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 32px;
        margin-top: -50px;
    }

    .blog-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0,0,0,.08);
        transition: transform .3s ease;
    }

    .blog-card:hover {
        transform: translateY(-6px);
    }

    .blog-card-image {
        width: 100%;
        height: 200px;
        overflow: hidden;
        background: #E6DFF5;
    }

    .blog-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .blog-card-content {
        padding: 24px;
    }

    .blog-category {
        display: inline-block;
        background: #E6DFF5;
        color: #8C79B9;
        font-size: 12px;
        padding: 6px 12px;
        border-radius: 6px;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .blog-card-content h2 {
        font-size: 1.25rem;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    .blog-excerpt {
        font-size: .9rem;
        color: #666;
        margin-bottom: 18px;
    }

    .read-more {
        text-decoration: none;
        font-weight: 600;
        color: #8C79B9;
        font-size: .85rem;
    }

    @media(max-width: 992px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width: 768px) {
        .blog-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<div class="blog-page">

    <div class="blog-header">
        <h1>Helping Children Thrive – Our Blog</h1>
        <p>Insights, guidance, and support for every child’s journey</p>
    </div>

    <div class="container">
        <div class="blog-grid">

            @foreach($blogs as $blog)
                <div class="blog-card">

                    <div class="blog-card-image">
                        <img src="{{ asset('storage/' . $blog->image) }}"
                             alt="{{ $blog->title }}">
                    </div>

                    <div class="blog-card-content">
                        <span class="blog-category">{{ $blog->category }}</span>

                        <h2>{{ $blog->title }}</h2>

                        <p class="blog-excerpt">{{ $blog->excerpt }}</p>

                        <a href="{{ route('blogs.show', $blog->slug) }}"
                           class="read-more">
                            Read More →
                        </a>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
</div>



@include('footer')
@endsection
