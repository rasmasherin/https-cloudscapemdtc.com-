<!-- Premium Navigation Bar Section -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom" style="background-color:#8C79B9;">
    <div class="container-fluid px-4 px-lg-5">
        <!-- Premium Logo Section -->
        <a href="" class="navbar-brand">
            <div class="d-flex align-items-center">
                <div class="brand-logo-wrapper">
                    <!-- Logo Image -->
                    <img src="{{asset('img/cloudlogo.png')}}" alt="Cloudscape Logo" class="brand-logo-img">
                    <div class="logo-pulse"></div>
                </div>
                <div class="brand-text ms-3">
                    <h2 class="brand-name mb-0" style="color: #f3f3f3;">CLOUDSCAPE</h2>
                    <h6 class="mb-0" style="font-size: 13px;">MULTIDISCIPLINARY THERAPY CENTRE</h6>


                    <span class="nav-link-text" style="color: #ffffff;"></span>
                </div>
            </div>
        </a>

        <!-- Enhanced Mobile Toggle -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="toggler-line"></span>
            <span class="toggler-line"></span>
            <span class="toggler-line"></span>
        </button>

        <!-- Premium Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
               <li class="nav-item">
    <a href="{{ route('home') }}"
       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
        <span class="nav-link-text" style="color:#ffffff;">Home</span>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('about') }}"
       class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
        <span class="nav-link-text" style="color:#ffffff;">About Us</span>
    </a>
</li>

<a href="{{ route('services.index') }}"
   class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
   <span class="nav-link-text" style="color:#ffffff;">Services</span>
</a>


<li class="nav-item">
    <a href="{{ route('careers') }}"
       class="nav-link {{ request()->routeIs('careers') ? 'active' : '' }}">
        <span class="nav-link-text" style="color:#ffffff;">Careers</span>
    </a>
</li>

  <li class="nav-item">
                    <a href="{{ route('gallery') }}"
                       class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">
                        <span class="nav-link-text" style="color:#ffffff;">Gallery</span>
                    </a>
                </li>

<li class="nav-item">
    <a href="{{ route('blogs.index') }}"
   class="nav-link {{ request()->routeIs('blogs.*') ? 'active' : '' }}">

        <span class="nav-link-text" style="color:#ffffff;">Blogs</span>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('contact') }}"
       class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
        <span class="nav-link-text" style="color:#ffffff;">Contact Us</span>
    </a>
</li>



            </ul>

            <!-- Premium Action Buttons -->
            <!-- <div class="navbar-actions d-flex flex-column flex-lg-row gap-3 align-items-stretch align-items-lg-center">
                <a href="tel:7994341956" class="btn btn-outline-gradient">
                    <span class="btn-icon"><i class="fa fa-phone-alt"></i></span>
                    <span class="btn-text">Call Now</span>
                    <span class="btn-shine"></span>
                </a>
                <a href="#" class="btn btn-gradient">
                    <span class="btn-icon"><i class="fa fa-calendar-check"></i></span>
                    <span class="btn-text">Book Appointment</span>
                    <span class="btn-shine"></span>
                </a>
            </div> -->
        </div>
    </div>
</nav>