@extends('layouts.app')
@section('content')
   @include('topper')
   @include('navigation')

   
    <!-- About the Founder Hero Section Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden rounded shadow-lg" style="height: 600px;">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/000.jpg" >
                        <!-- <div class="position-absolute bottom-0 start-0 w-100 bg-gradient-dark p-4">
                            <h3 class="text-white mb-1">Megha</h3>
                            <p class="text-white-50 mb-0">Founder & Speech-Language Pathologist</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-4">
                        <h6 class="text-primary text-uppercase mb-2">Meet the Founder</h6>
                        <h1 class="display-5 mb-0">Creating Safe Spaces for Communication</h1>
                    </div>
                    <p class="lead mb-4">Where therapy feels safe, calm, and genuinely supportive — never rushed or overly clinical.</p>
                    <p class="mb-4">I'm Megha, a Speech-Language Pathologist dedicated to transforming the therapy experience. I believe that every voice deserves to be heard, every word matters, and every individual's communication journey is unique and valuable.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0">7+ Years</h6>
                                    <small class="text-muted">Clinical Experience</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-graduation-cap text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0">3rd Rank</h6>
                                    <small class="text-muted">University Level</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About the Founder Hero Section End -->

    <!-- Philosophy & Approach Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h6 class="text-primary text-uppercase mb-2">My Approach</h6>
                <h1 class="display-5 mb-4">Person-Centered, Evidence-Based Care</h1>
                <p class="mb-0">My approach is rooted in understanding each individual first, respecting their pace, and building communication that is meaningful and functional in everyday life.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light h-100 p-5 rounded">
                        <div class="btn-lg-square bg-white rounded-circle mb-4">
                            <i class="fa fa-child fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Early Intervention Focus</h4>
                        <p class="mb-4">Specialized support for children and families during critical developmental stages, with strong emphasis on family involvement and home-based strategies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light h-100 p-5 rounded">
                        <div class="btn-lg-square bg-white rounded-circle mb-4">
                            <i class="fa fa-comments fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Holistic Communication</h4>
                        <p class="mb-4">Working across speech, language, fluency, feeding, and functional communication to support the whole person, not just isolated skills.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light h-100 p-5 rounded">
                        <div class="btn-lg-square bg-white rounded-circle mb-4">
                            <i class="fa fa-heart fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Safe & Supportive Space</h4>
                        <p class="mb-4">Creating an environment where individuals and families feel emotionally safe, heard, and respected throughout their therapy journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Philosophy & Approach End -->

    <!-- Education & Experience Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-primary text-uppercase mb-2">Academic Excellence</h6>
                        <h1 class="display-6 mb-0">Educational Background</h1>
                    </div>
                    
                    <div class="bg-white p-4 mb-4 rounded shadow-sm">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0 btn-lg-square bg-primary rounded">
                                <i class="fa fa-graduation-cap text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">Master's Degree</h5>
                                <p class="text-muted mb-0">Audiology and Speech-Language Pathology</p>
                            </div>
                        </div>
                        <p class="mb-2"><strong>Achievement:</strong> 3rd Rank at University Level</p>
                        <p class="mb-0"><strong>Affiliation:</strong>  Bangalore University</p>
                    </div>

                    <div class="bg-white p-4 rounded shadow-sm">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0 btn-lg-square bg-primary rounded">
                                <i class="fa fa-book text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">Bachelor's Degree</h5>
                                <p class="text-muted mb-0">Audiology and Speech-Language Pathology</p>
                            </div>
                        </div>
                        <p class="mb-0"><strong>Affiliation:</strong> Mangalore University</p>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-primary text-uppercase mb-2">Professional Journey</h6>
                        <h1 class="display-6 mb-0">7+ Years of Experience</h1>
                    </div>

                    <div class="position-relative">
                        <div class="bg-white p-4 mb-4 rounded shadow-sm border-start border-4 border-primary">
                            <h5 class="mb-2"><i class="fa fa-briefcase text-primary me-2"></i>Clinical Supervisor</h5>
                            <p class="mb-2">College affiliated with Mangalore University</p>
                            <p class="text-muted mb-0">Guiding the next generation of speech-language pathologists through evidence-based clinical practice.</p>
                        </div>

                        <div class="bg-white p-4 mb-4 rounded shadow-sm border-start border-4 border-primary">
                            <h5 class="mb-2"><i class="fa fa-hospital text-primary me-2"></i>Therapy Centers & Special Schools</h5>
                            <p class="mb-2">India</p>
                            <p class="text-muted mb-0">Hands-on experience working with diverse populations in clinical and educational settings.</p>
                        </div>

                        <div class="bg-white p-4 rounded shadow-sm border-start border-4 border-primary">
                            <h5 class="mb-2"><i class="fa fa-globe text-primary me-2"></i>Multilingual Populations</h5>
                            <p class="mb-2">United Arab Emirates</p>
                            <p class="text-muted mb-0">Supporting diverse, multicultural families with culturally sensitive, individualized care.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Education & Experience End -->

    <!-- Specialized Training Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h6 class="text-primary text-uppercase mb-2">Specialized Certifications</h6>
                <h1 class="display-5 mb-4">Advanced Training & Expertise</h1>
                <p class="mb-0">Committed to staying current with the latest evidence-based approaches and specialized methodologies in speech-language pathology.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light text-center p-4 rounded h-100">
                        <div class="btn-lg-square bg-white rounded-circle mx-auto mb-4">
                           <i class="fa fa-child fa-2x text-primary"></i>
                        </div>
                        <h5 class="mb-3">NLA Trained</h5>
                        <p class="mb-0">Trained in Natural Language Acquisition to support children who use echolalia in developing meaningful and functional communication.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center p-4 rounded h-100">
                        <div class="btn-lg-square bg-white rounded-circle mx-auto mb-4">
                            <i class="fa fa-tablet-alt fa-2x text-primary"></i>
                        </div>
                        <h5 class="mb-3">AAC Certified (Augmentative & Alternative Communication)</h5>
                        <p class="mb-0">Certified in using Augmentative and Alternative Communication systems to support individuals with limited or no speech in expressing their needs, thoughts, and feelings.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light text-center p-4 rounded h-100">
                        <div class="btn-lg-square bg-white rounded-circle mx-auto mb-4">
                            <i class="fas fa-microphone fa-2x text-primary"></i>
                        </div>
                        <h5 class="mb-3">OPT Level 1 (Oral Placement Therapy)</h5>
                        <p class="mb-0">Trained in oral placement techniques to support speech sound production, articulation, and oral awareness in children.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-light text-center p-4 rounded h-100">
                        <div class="btn-lg-square bg-white rounded-circle mx-auto mb-4">
                            <i class="fas fa-brain fa-2x text-primary"></i>
                        </div>
                        <h5 class="mb-3">OSMI Trained (Oral Sensory-Motor Integration)</h5>
                        <p class="mb-0">Specialized training in sensory-motor integration to support sensory processing, attention, body awareness, and coordinated movement for learning and communication.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.9s">
                <div class="bg-light p-4 rounded d-inline-block">
                    <div class="d-flex align-items-center">
                        <div class="btn-lg-square bg-primary rounded-circle">
                            <i class="fa fa-microscope text-white"></i>
                        </div>
                        <div class="ms-4 text-start">
                            <h5 class="mb-1">Research Contributor</h5>
                            <p class="mb-0">Conducted two pediatric-focused research studies, reflecting commitment to thoughtful, evidence-based practice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Specialized Training End -->

  <!-- Vision & Mission Start -->
<div class="container-fluid bg-primary py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Left Column -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-white p-5 rounded shadow">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center" style="width:60px; height:60px;">
                            <i class="fa fa-cloud text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h2 class="mb-0">Why Cloudscape?</h2>
                        </div>
                    </div>
                    <p class="mb-4">Cloudscape was created as a space where individuals and families feel heard, respected, and emotionally safe — a place where therapy goes beyond goals and reports.</p>
                    <p class="mb-0">Here, we focus on confidence, connection, and real-life communication that matters in everyday moments.</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <ul class="list-unstyled text-white fs-5">
                    <li class="mb-4">• <strong>Individualized Care:</strong> Understanding each person first, respecting their unique pace and communication style</li>
                    <li class="mb-4">• <strong>Family-Centered Approach:</strong> Partnering with families as active participants in the therapy journey</li>
                    <li class="mb-4">• <strong>Functional Communication:</strong> Building skills that are meaningful and useful in real-life situations</li>
                    <li class="mb-4">• <strong>Evidence-Based Practice:</strong> Combining research-backed methods with compassionate, personalized care</li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <!-- Vision & Mission End -->

    <!-- Call to Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-light rounded p-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-8">
                        <div class="border-start border-5 border-primary ps-4">
                            <h1 class="display-6 mb-3">Let's Start Your Communication Journey</h1>
                            <p class="mb-0">Whether you're seeking support for yourself or a loved one, I'm here to help. Every individual deserves to communicate with confidence and connection.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="contact" class="btn btn-primary py-3 px-5">Book a Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->


    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@include('footer')

@endsection