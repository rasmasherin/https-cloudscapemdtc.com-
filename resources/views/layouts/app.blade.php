<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Plasery - Plastic Surgery Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Main Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>

    @yield('content')

    <!-- Social Floating Buttons -->
    <div class="social-float">

        <a href="https://wa.me/7994341956" target="_blank" class="social-btn whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <a href="https://www.instagram.com/cloudscape_mdtc_?igsh=MTB1eHE1ODVuZ3E3Mw%3D%3D&utm_source=qr"
           target="_blank" class="social-btn instagram">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="mailto:cloudscapemdtc@gmail.com" class="social-btn email">
            <i class="fas fa-envelope"></i>
        </a>

        <a href="tel:+917994341956" class="social-btn contact">
            <i class="fas fa-phone-alt"></i>
        </a>

        <a href="https://www.google.com/maps/search/Cloudscape+Multidisciplinary+Therapy+Centre"
           target="_blank" class="social-btn location">
            <i class="fas fa-map-marker-alt"></i>
        </a>

        <a href="https://facebook.com/yourpage" target="_blank" class="social-btn facebook">
            <i class="fab fa-facebook-f"></i>
        </a>

        <div class="social-toggle" onclick="toggleSocials()">
            <i class="fas fa-comment-dots"></i>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    @yield('script')

    <script>
        function toggleSocials() {
            document.querySelector('.social-float').classList.toggle('active');
        }

        const videoModal = document.getElementById('videoModal');
        const video = document.getElementById('modalVideo');
        const source = video?.querySelector('source');

        if (videoModal) {
            videoModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const videoPath = button.getAttribute('data-video');
                source.src = videoPath;
                video.load();
            });

            videoModal.addEventListener('hidden.bs.modal', function () {
                video.pause();
                source.src = '';
            });
        }
    </script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
