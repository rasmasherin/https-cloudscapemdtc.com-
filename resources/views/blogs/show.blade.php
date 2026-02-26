@extends('layouts.app')

@section('content')
@include('topper')
@include('navigation')

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&display=swap');

:root {
    --primary: #8C79B9;
    --secondary: #4A3F6B;
    --accent: #EFEAFB;
    --bg-light: #F7F6FC;
    --text-dark: #2D2A3A;
    --text-medium: #5A5568;
    --text-light: #7C7888;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* PAGE */
.blog-detail {
    background: #FAFAFA;
    padding-bottom: 100px;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* HERO */
.blog-hero {
    background: linear-gradient(135deg, #E6DFF5 0%, #D4C8ED 100%);
    padding: 120px 20px 160px;
    position: relative;
    overflow: hidden;
}

.blog-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(140, 121, 185, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(239, 234, 251, 0.2) 0%, transparent 50%);
    pointer-events: none;
}

.blog-hero-content {
    max-width: 900px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.blog-category {
    display: inline-block;
    background: #4A3F6B;
    backdrop-filter: blur(10px);
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    color: #ffffff;
    margin-bottom: 24px;
    font-family: 'Inter', sans-serif;
}

.blog-hero h1 {
    font-size: 42px;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.03em;
    color: #4A3F6B;
    margin-bottom: 24px;
    font-family: 'Inter', sans-serif;
}

.blog-meta {
    display: flex;
    align-items: center;
    gap: 24px;
    font-size: 13px;
    color: #101112;
    font-family: 'Inter', sans-serif;
    font-weight: 500;
}

.blog-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.blog-meta svg {
    width: 16px;
    height: 16px;
    opacity: 0.85;
}

/* CONTAINER */
.blog-container {
    max-width: 1140px;
    margin: -120px auto 0;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

/* FEATURED IMAGE */
.blog-featured-image {
    width: 100%;
    height: 480px;
    object-fit: cover;
    border-radius: 18px;
    box-shadow: 
        0 30px 70px rgba(74, 63, 107, 0.3),
        0 10px 24px rgba(74, 63, 107, 0.15);
    margin-bottom: 60px;
    background: #E8E6F0;
}

/* CONTENT WRAPPER */
.blog-content-wrapper {
    display: grid;
    grid-template-columns: 1fr 340px;
    gap: 50px;
    align-items: start;
}

/* MAIN CONTENT */
.blog-content {
    background: #E6DFF5;
    padding: 70px 80px;
    border-radius: 14px;
    box-shadow: 
        0 4px 24px rgba(74, 63, 107, 0.08),
        0 1px 3px rgba(74, 63, 107, 0.04);
    font-family: 'Merriweather', Georgia, 'Times New Roman', serif;
    font-size: 17px;
    line-height: 1.8;
    color: #2D2A3A;
    font-weight: 400;
}

/* DROP CAP */
.blog-content > p:first-of-type::first-letter {
    font-size: 64px;
    font-weight: 900;
    float: left;
    line-height: 0.85;
    margin: 6px 14px 0 0;
    color: #8C79B9;
    font-family: 'Inter', sans-serif;
}

/* PARAGRAPHS */
.blog-content p {
    margin-bottom: 26px;
    text-align: justify;
}

.blog-content p:last-child {
    margin-bottom: 0;
}

/* STRONG/BOLD */
.blog-content strong,
.blog-content b {
    font-weight: 700;
    color: #4A3F6B;
}

/* EMPHASIS/ITALIC */
.blog-content em,
.blog-content i {
    font-style: italic;
    color: var(--text-medium);
}

/* LINKS */
.blog-content a {
    color: #8C79B9;
    text-decoration: none;
    font-weight: 600;
    border-bottom: 2px solid rgba(140, 121, 185, 0.3);
    transition: all 0.2s ease;
}

.blog-content a:hover {
    color: #4A3F6B;
    border-bottom-color: #4A3F6B;
}

/* HEADINGS */
.blog-content h2 {
    font-family: 'Inter', sans-serif;
    font-size: 28px;
    font-weight: 800;
    margin-top: 60px;
    margin-bottom: 22px;
    color: #4A3F6B;
    position: relative;
    padding-bottom: 16px;
    letter-spacing: -0.02em;
    line-height: 1.3;
}

.blog-content h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #8C79B9, #4A3F6B);
    border-radius: 3px;
}

.blog-content h3 {
    font-family: 'Inter', sans-serif;
    font-size: 22px;
    font-weight: 700;
    margin-top: 48px;
    margin-bottom: 18px;
    color: #4A3F6B;
    letter-spacing: -0.01em;
    line-height: 1.4;
}

.blog-content h4 {
    font-family: 'Inter', sans-serif;
    font-size: 19px;
    font-weight: 600;
    margin-top: 40px;
    margin-bottom: 14px;
    color: #4A3F6B;
    line-height: 1.45;
}

/* BLOCKQUOTE */
.blog-content blockquote {
    background: linear-gradient(135deg, #EFEAFB 0%, #F7F6FC 100%);
    border-left: 5px solid #8C79B9;
    padding: 30px 36px;
    border-radius: 10px;
    margin: 45px 0;
    font-style: italic;
    font-size: 18px;
    color: #4A3F6B;
    position: relative;
    line-height: 1.7;
    font-weight: 400;
}

.blog-content blockquote::before {
    content: '"';
    font-size: 75px;
    font-family: 'Merriweather', Georgia, serif;
    color: rgba(140, 121, 185, 0.18);
    position: absolute;
    top: 12px;
    left: 20px;
    line-height: 1;
    font-weight: 700;
}

.blog-content blockquote p {
    margin: 0;
    position: relative;
    z-index: 1;
}

/* LISTS */
.blog-content ul,
.blog-content ol {
    margin: 26px 0;
    padding-left: 28px;
}

.blog-content ul li,
.blog-content ol li {
    margin-bottom: 12px;
    line-height: 1.75;
    padding-left: 6px;
}

.blog-content ul li::marker {
    color: #8C79B9;
    font-size: 1.1em;
}

.blog-content ol li::marker {
    color: #8C79B9;
    font-weight: 700;
    font-family: 'Inter', sans-serif;
}

/* CODE */
.blog-content code {
    background: #F7F6FC;
    padding: 3px 7px;
    border-radius: 4px;
    font-family: 'Monaco', 'Courier New', monospace;
    font-size: 14px;
    color: #8C79B9;
    border: 1px solid #EFEAFB;
}

.blog-content pre {
    background: #2D2A3A;
    padding: 20px;
    border-radius: 8px;
    overflow-x: auto;
    margin: 30px 0;
}

.blog-content pre code {
    background: transparent;
    padding: 0;
    color: #EFEAFB;
    border: none;
    font-size: 13px;
    line-height: 1.6;
}

/* HORIZONTAL RULE */
.blog-content hr {
    border: none;
    height: 2px;
    background: linear-gradient(90deg, transparent, #EFEAFB, transparent);
    margin: 45px 0;
}

/* IMAGES IN CONTENT */
.blog-content img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 30px 0;
    box-shadow: 0 8px 24px rgba(74, 63, 107, 0.12);
}

/* SIDEBAR */
.blog-sidebar {
    position: sticky;
    top: 30px;
}

.sidebar-section {
    background: #FFFFFF;
    padding: 0;
    border-radius: 14px;
    box-shadow: 
        0 4px 24px rgba(74, 63, 107, 0.08),
        0 1px 3px rgba(74, 63, 107, 0.04);
    margin-bottom: 26px;
    overflow: hidden;
}

.sidebar-header {
    padding: 20px 24px;
    background: linear-gradient(135deg, #4A3F6B 0%, #8C79B9 100%);
    border-bottom: 3px solid #8C79B9;
}

.sidebar-header h3 {
    font-size: 16px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    color: #FFFFFF;
    margin: 0;
    font-family: 'Inter', sans-serif;
}

.sidebar-content {
    padding: 10px;
}

/* MORE BLOGS LIST */
.more-blogs-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.blog-item {
    display: flex;
    gap: 14px;
    padding: 14px;
    border-radius: 10px;
    transition: all 0.3s ease;
    cursor: pointer;
    text-decoration: none;
    color: inherit;
    margin-bottom: 8px;
}

.blog-item:hover {
    background: #F7F6FC;
    transform: translateX(4px);
}

.blog-item-image {
    width: 75px;
    height: 75px;
    border-radius: 8px;
    object-fit: cover;
    flex-shrink: 0;
    background: #E8E6F0;
}

.blog-item-content {
    flex: 1;
    min-width: 0;
}

.blog-item-title {
    font-family: 'Inter', sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: #4A3F6B;
    margin-bottom: 5px;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.blog-item-date {
    font-family: 'Inter', sans-serif;
    font-size: 11px;
    color: #7C7888;
    font-weight: 500;
}

/* NO BLOGS MESSAGE */
.no-blogs-message {
    padding: 26px 18px;
    text-align: center;
    color: #7C7888;
    font-size: 13px;
    font-family: 'Inter', sans-serif;
}

/* AUTHOR BOX */
.author-box {
    background: linear-gradient(135deg, #F7F6FC 0%, #EFEAFB 100%);
    padding: 26px;
    border-radius: 12px;
    margin-top: 50px;
    border: 2px solid #EFEAFB;
}

.author-box h4 {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #4A3F6B;
    margin: 0 0 8px 0;
}

.author-box p {
    font-size: 14px;
    line-height: 1.6;
    color: #5A5568;
    margin: 0;
    font-family: 'Inter', sans-serif;
    text-align: left;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .blog-content-wrapper {
        grid-template-columns: 1fr;
    }

    .blog-sidebar {
        position: static;
    }

    .blog-content {
        padding: 55px 65px;
    }
}

@media (max-width: 768px) {
    .blog-hero {
        padding: 90px 20px 130px;
    }

    .blog-hero h1 {
        font-size: 32px;
    }

    .blog-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
        font-size: 12px;
    }

    .blog-featured-image {
        height: 280px;
        margin-bottom: 45px;
    }

    .blog-content {
        padding: 40px 28px;
        font-size: 16px;
    }

    .blog-content h2 {
        font-size: 24px;
        margin-top: 48px;
    }

    .blog-content h3 {
        font-size: 20px;
    }

    .blog-content h4 {
        font-size: 18px;
    }

    .blog-content > p:first-of-type::first-letter {
        font-size: 52px;
        margin: 5px 10px 0 0;
    }
}

@media (max-width: 480px) {
    .blog-hero h1 {
        font-size: 28px;
    }

    .blog-content {
        padding: 32px 22px;
        font-size: 15px;
    }

    .blog-content h2 {
        font-size: 22px;
    }

    .blog-item {
        flex-direction: column;
    }

    .blog-item-image {
        width: 100%;
        height: 140px;
    }
}
</style>

<div class="blog-detail">

    {{-- HERO --}}
    <div class="blog-hero">
        <div class="blog-hero-content">
            @if(isset($blog->category))
            <span class="blog-category">{{ $blog->category }}</span>
            @endif
            <h1>{{ $blog->title }}</h1>
            <div class="blog-meta">
                <div class="blog-meta-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    {{ $blog->created_at->format('F d, Y') }}
                </div>
                @if(isset($blog->author))
                <div class="blog-meta-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    {{ $blog->author }}
                </div>
                @endif
                @if(isset($blog->reading_time))
                <div class="blog-meta-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    {{ $blog->reading_time }} min read
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="blog-container">

        @if(isset($blog->image))
            <img
                src="{{ asset('storage/' . $blog->image) }}"
                alt="{{ $blog->title }}"
                class="blog-featured-image"
            >
        @endif

        <div class="blog-content-wrapper">
            <article class="blog-content">
                {!! nl2br(e($blog->content)) !!}

                {{-- Optional Author Box --}}
                @if(isset($blog->author) && isset($blog->author_bio))
                <div class="author-box">
                    <h4>About {{ $blog->author }}</h4>
                    <p>{{ $blog->author_bio }}</p>
                </div>
                @endif
            </article>

            <aside class="blog-sidebar">
                {{-- MORE BLOGS SECTION --}}
                <div class="sidebar-section">
                    <div class="sidebar-header">
                        <h3>More Blogs</h3>
                    </div>
                    <div class="sidebar-content">
                        @php
                            // Get other blogs excluding current one, ONLY with images, with status = 1
                            $moreBlogs = \App\Models\Blog::where('id', '!=', $blog->id)
                                ->where('status', 1)
                                ->whereNotNull('image')
                                ->where('image', '!=', '')
                                ->orderBy('created_at', 'desc')
                                ->get();
                        @endphp

                        @if($moreBlogs->count() > 0)
                            <ul class="more-blogs-list">
                                @foreach($moreBlogs as $moreBlog)
                                <li>
                                    <a href="{{ url('/blogs/' . $moreBlog->slug) }}" class="blog-item">
                                        <img 
                                            src="{{ asset('storage/' . $moreBlog->image) }}" 
                                            alt="{{ $moreBlog->title }}"
                                            class="blog-item-image"
                                        >
                                        <div class="blog-item-content">
                                            <h4 class="blog-item-title">{{ $moreBlog->title }}</h4>
                                            <span class="blog-item-date">{{ $moreBlog->created_at->format('M d, Y') }}</span>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        @else
                            <div class="no-blogs-message">
                                <p>No more blogs available at the moment.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </aside>
        </div>

    </div>
</div>

@include('footer')
@endsection