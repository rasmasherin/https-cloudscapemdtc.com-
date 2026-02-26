<!-- HERO SECTION -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-12 col-lg-8 text-center text-lg-start position-relative">

                <h1 class="display-5 display-lg-4 fw-bold mb-4">
                    MULTIDISCIPLINARY
                    <span style="color:#937acc; font-weight:600;">THERAPY CENTRE</span>
                </h1>

               <p class="mb-1 fs-6 text-dark d-none d-md-block" style="color:#413e48;">
    We provide comprehensive, multidisciplinary therapy services
</p>
<p class="mb-1 fs-6 text-dark d-none d-md-block" style="color:#413e48;">
    Designed to support individuals at every stage of recovery
</p>
<p class="mb-1 fs-6 text-dark d-none d-md-block" style="color:#413e48;">
    Development, growth, rehabilitation, and enhanced quality of life
</p>
<p class="mb-4 fs-6 text-dark d-none d-md-block" style="color:#413e48;">
    For patients of all ages
</p>


                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-start gap-3 pt-3 pt-lg-5">
                    <a href="{{ route('home') }}#appointment"
                       class="btn btn-primary py-3 px-4 px-lg-5">
                        Schedule Consultation
                    </a>

                    <!-- PLAY BUTTON -->
                    <button type="button"
                        class="btn-play"
                        data-bs-toggle="modal"
                        data-bs-target="#videoModal"
                        data-video="/img/vdo.mp4">
                        <span></span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- VIDEO MODAL -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark border-0">
            <div class="modal-body p-0 position-relative">
                <button type="button"
                        class="btn-close btn-close-white video-close-btn"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>

                <div class="ratio ratio-16x9">
                    <video id="modalVideo" controls autoplay>
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT TO AUTO LOAD VIDEO -->
<script>
document.querySelectorAll('[data-bs-target="#videoModal"]').forEach(button => {
    button.addEventListener('click', function() {
        const videoSrc = this.getAttribute('data-video');
        const modalVideo = document.getElementById('modalVideo');
        modalVideo.querySelector('source').src = videoSrc;
        modalVideo.load();
        modalVideo.play();
    });
});

document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
    const modalVideo = document.getElementById('modalVideo');
    modalVideo.pause();
    modalVideo.currentTime = 0;
});
</script>
