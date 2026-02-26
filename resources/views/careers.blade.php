@extends('layouts.app')

@section('content')
@include('topper')
@include('navigation')

<!-- ================= HERO SECTION ================= -->
<div class="position-relative overflow-hidden"
     style="background: linear-gradient(135deg, #E6DFF5 0%, #D4C8ED 100%);
            padding: 80px 0 60px;">

    <div class="container text-center position-relative" style="z-index: 2;">
        <span class="badge px-4 py-2 mb-3"
              style="background: rgba(255, 255, 255, 0.4);
                     color: #4A3F6B;
                     border-radius: 50px;
                     font-weight: 600;
                     font-size: 0.95rem;
                     letter-spacing: 0.5px;">
            <i class="fas fa-briefcase me-2"></i>Join Our Team
        </span>

        <h1 class="display-4 fw-bold mb-3" style="color: #4A3F6B; letter-spacing: -1px;">
            Build Your Career With Us
        </h1>

        <p class="text-muted mb-0" style="max-width: 650px; margin: auto; font-size: 1.1rem; line-height: 1.6;">
            Make a difference in people's lives while growing professionally in a supportive environment
        </p>
    </div>
</div>

<!-- ================= WHY JOIN US SECTION ================= -->
<div class="container py-5" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="text-center mb-5">
        <h2 class="fw-bold mb-3" style="color: #4A3F6B; font-size: 2.2rem; letter-spacing: -0.5px;">
            Why Join Our Team?
        </h2>
        <p class="text-muted mb-0" style="font-size: 1.05rem; max-width: 600px; margin: auto;">
            We believe in creating an environment where you can thrive and make an impact
        </p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-3 col-md-6">
            <div class="text-center p-4 h-100 bg-white" 
                 style="box-shadow: 0 8px 30px rgba(186, 167, 223, 0.15); border-radius: 12px; transition: all 0.3s ease; border: 1px solid rgba(186, 167, 223, 0.1);"
                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 40px rgba(186, 167, 223, 0.25)';"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(186, 167, 223, 0.15)';">
                <div class="d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 70px; height: 70px; background: linear-gradient(135deg, #E6DFF5 0%, #BAA7DF 100%); border-radius: 12px; box-shadow: 0 4px 15px rgba(186, 167, 223, 0.3);">
                    <i class="fas fa-heart" style="color: #4A3F6B; font-size: 1.8rem;"></i>
                </div>
                <h5 class="fw-bold mb-2" style="color: #4A3F6B; font-size: 1.2rem;">Meaningful Work</h5>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                    Make a real impact in people's lives every day
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="text-center p-4 h-100 bg-white" 
                 style="box-shadow: 0 8px 30px rgba(186, 167, 223, 0.15); border-radius: 12px; transition: all 0.3s ease; border: 1px solid rgba(186, 167, 223, 0.1);"
                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 40px rgba(186, 167, 223, 0.25)';"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(186, 167, 223, 0.15)';">
                <div class="d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 70px; height: 70px; background: linear-gradient(135deg, #E6DFF5 0%, #BAA7DF 100%); border-radius: 12px; box-shadow: 0 4px 15px rgba(186, 167, 223, 0.3);">
                    <i class="fas fa-graduation-cap" style="color: #4A3F6B; font-size: 1.8rem;"></i>
                </div>
                <h5 class="fw-bold mb-2" style="color: #4A3F6B; font-size: 1.2rem;">Growth & Learning</h5>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                    Continuous training and professional development
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="text-center p-4 h-100 bg-white" 
                 style="box-shadow: 0 8px 30px rgba(186, 167, 223, 0.15); border-radius: 12px; transition: all 0.3s ease; border: 1px solid rgba(186, 167, 223, 0.1);"
                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 40px rgba(186, 167, 223, 0.25)';"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(186, 167, 223, 0.15)';">
                <div class="d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 70px; height: 70px; background: linear-gradient(135deg, #E6DFF5 0%, #BAA7DF 100%); border-radius: 12px; box-shadow: 0 4px 15px rgba(186, 167, 223, 0.3);">
                    <i class="fas fa-users" style="color: #4A3F6B; font-size: 1.8rem;"></i>
                </div>
                <h5 class="fw-bold mb-2" style="color: #4A3F6B; font-size: 1.2rem;">Great Team</h5>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                    Work with passionate and supportive colleagues
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="text-center p-4 h-100 bg-white" 
                 style="box-shadow: 0 8px 30px rgba(186, 167, 223, 0.15); border-radius: 12px; transition: all 0.3s ease; border: 1px solid rgba(186, 167, 223, 0.1);"
                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 40px rgba(186, 167, 223, 0.25)';"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(186, 167, 223, 0.15)';">
                <div class="d-inline-flex align-items-center justify-content-center mb-3" 
                     style="width: 70px; height: 70px; background: linear-gradient(135deg, #E6DFF5 0%, #BAA7DF 100%); border-radius: 12px; box-shadow: 0 4px 15px rgba(186, 167, 223, 0.3);">
                    <i class="fas fa-balance-scale" style="color: #4A3F6B; font-size: 1.8rem;"></i>
                </div>
                <h5 class="fw-bold mb-2" style="color: #4A3F6B; font-size: 1.2rem;">Work-Life Balance</h5>
                <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                    Flexible schedules and supportive policies
                </p>
            </div>
        </div>
    </div>
</div>

<!-- ================= CURRENT OPENINGS ================= -->
<div class="container py-5" style="margin-top: 30px;">
    <div class="text-center mb-5">
        <h2 class="fw-bold mb-3" style="color: #4A3F6B; font-size: 2.2rem; letter-spacing: -0.5px;">
            Current Openings
        </h2>
        <p class="text-muted mb-0" style="font-size: 1.05rem;">
            Explore opportunities that match your skills and passion
        </p>
    </div>

    <div class="row g-4 justify-content-center">
        @forelse($careers as $career)
        <div class="col-lg-6">
            <div class="p-4 bg-white h-100"
                 style="box-shadow: 0 8px 30px rgba(186, 167, 223, 0.15);
                        border-radius: 12px;
                        border-left: 5px solid #BAA7DF;
                        transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 12px 40px rgba(186, 167, 223, 0.25)';"
                 onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 8px 30px rgba(186, 167, 223, 0.15)';">

                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-2" style="color: #4A3F6B; font-size: 1.4rem;">
                            {{ $career->title }}
                        </h4>
                        <p class="text-muted mb-0" style="font-size: 0.95rem;">
                            <i class="fas fa-map-marker-alt me-2" style="color: #BAA7DF;"></i>
                            {{ $career->location ?? 'Location not specified' }}
                        </p>
                    </div>

                    <span class="badge px-3 py-2 ms-3"
                          style="background: linear-gradient(135deg, #E6DFF5, #BAA7DF);
                                 color: #4A3F6B;
                                 font-weight: 600;
                                 font-size: 0.85rem;
                                 white-space: nowrap;">
                        {{ $career->job_type }}
                    </span>
                </div>

                <p class="text-muted mb-3" style="font-size: 0.95rem; line-height: 1.6;">
                    {{ $career->description }}
                </p>

                <div class="mb-4">
                    @foreach([$career->experience, $career->qualification] as $item)
                        @if($item)
                            <span class="badge me-2 mb-2"
                                  style="background: rgba(186, 167, 223, 0.15);
                                         color: #4A3F6B;
                                         font-weight: 500;
                                         padding: 6px 12px;
                                         font-size: 0.85rem;
                                         border-radius: 6px;">
                                {{ $item }}
                            </span>
                        @endif
                    @endforeach

                    @if($career->skills)
                        @foreach(explode(',', $career->skills) as $skill)
                            <span class="badge me-2 mb-2"
                                  style="background: rgba(186, 167, 223, 0.15);
                                         color: #4A3F6B;
                                         font-weight: 500;
                                         padding: 6px 12px;
                                         font-size: 0.85rem;
                                         border-radius: 6px;">
                                {{ trim($skill) }}
                            </span>
                        @endforeach
                    @endif
                </div>

                <button class="btn fw-semibold text-white"
                        style="background: linear-gradient(135deg, #BAA7DF, #9D88C7);
                               border: none;
                               padding: 10px 24px;
                               border-radius: 8px;
                               font-size: 0.95rem;
                               box-shadow: 0 4px 15px rgba(186, 167, 223, 0.3);
                               transition: all 0.3s ease;"
                        onclick='scrollToApplication(@json($career->title))'>
                    <i class="fas fa-arrow-right me-2"></i>Apply Now
                </button>
            </div>
        </div>
        @empty
            <div class="col-12 text-center">
                <div class="p-5">
                    <i class="fas fa-briefcase fa-3x mb-3" style="color: #BAA7DF; opacity: 0.5;"></i>
                    <p class="text-muted mb-0" style="font-size: 1.1rem;">
                        No job openings available right now. Check back soon!
                    </p>
                </div>
            </div>
        @endforelse
    </div>
</div>

<!-- ================= APPLICATION FORM (only shown when jobs exist) ================= -->
@if($careers->count() > 0)
<div class="container py-5" id="applicationForm" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="p-5 bg-white" 
                 style="box-shadow: 0 10px 40px rgba(186, 167, 223, 0.15); 
                        border-radius: 16px;
                        border: 1px solid rgba(186, 167, 223, 0.1);">
                <div class="text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center p-3 mb-3" 
                         style="background: linear-gradient(135deg, #E6DFF5 0%, #BAA7DF 100%); 
                                border-radius: 12px;
                                box-shadow: 0 4px 15px rgba(186, 167, 223, 0.3);">
                        <i class="fas fa-file-alt fa-2x" style="color: #4A3F6B;"></i>
                    </div>
                    <h2 class="fw-bold mb-3" style="color: #4A3F6B; font-size: 2rem; letter-spacing: -0.5px;">
                        Submit Your Application
                    </h2>
                    <p class="text-muted mb-0" style="font-size: 1.05rem; max-width: 600px; margin: auto;">
                        Fill out the form below and we'll get back to you soon
                    </p>
                </div>
                
                <form action="{{route('career.apply')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold mb-2" style="color: #4A3F6B; font-size: 0.9rem;">
                                <i class="fas fa-user me-2" style="color: #BAA7DF;"></i>Full Name
                            </label>
                            <input type="text" name="full_name" class="form-control" placeholder="John Doe" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold mb-2" style="color: #4A3F6B; font-size: 0.9rem;">
                                <i class="fas fa-envelope me-2" style="color: #BAA7DF;"></i>Email
                            </label>
                            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold mb-2" style="color: #4A3F6B; font-size: 0.9rem;">
                                <i class="fas fa-phone me-2" style="color: #BAA7DF;"></i>Phone
                            </label>
                            <input type="tel" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold mb-2" style="color: #4A3F6B; font-size: 0.9rem;">
                                <i class="fas fa-briefcase me-2" style="color: #BAA7DF;"></i>Position Applying For
                            </label>
                            <input type="text" name="position" id="positionInput" class="form-control" placeholder="Enter desired position" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold mb-2" style="color: #4A3F6B; font-size: 0.9rem;">
                                <i class="fas fa-graduation-cap me-2" style="color: #BAA7DF;"></i>Highest Qualification
                            </label>
                            <input type="text" name="qualification" class="form-control" placeholder="Master's / Diploma / Degree" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold mb-2" style="color: #4A3F6B; font-size: 0.9rem;">
                                <i class="fas fa-clock me-2" style="color: #BAA7DF;"></i>Years of Experience
                            </label>
                            <select name="experience" class="form-select" required>
                                <option selected disabled>Select experience...</option>
                                <option value="0-1">0-1 years</option>
                                <option value="1-3">1-3 years</option>
                                <option value="3-5">3-5 years</option>
                                <option value="5+">5+ years</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold mb-2" style="color: #4A3F6B; font-size: 0.9rem;">
                                <i class="fas fa-file-upload me-2" style="color: #BAA7DF;"></i>Upload Resume (PDF)
                            </label>
                            <input type="file" name="resume" class="form-control" accept=".pdf" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold mb-2" style="color: #4A3F6B; font-size: 0.9rem;">
                                <i class="fas fa-comment-dots me-2" style="color: #BAA7DF;"></i>Cover Letter / Additional Information
                            </label>
                            <textarea name="cover_letter" class="form-control" rows="4" placeholder="Tell us why you'd be a great fit..."></textarea>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button class="btn fw-semibold text-white" type="submit"
                                    style="background: linear-gradient(135deg, #BAA7DF, #9D88C7);
                                           border: none;
                                           padding: 12px 36px;
                                           border-radius: 8px;
                                           font-size: 1rem;
                                           box-shadow: 0 4px 15px rgba(186, 167, 223, 0.3);
                                           transition: all 0.3s ease;">
                                <i class="fas fa-paper-plane me-2"></i>Submit Application
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

@include('footer')

<script>
function scrollToApplication(position = '') {
    if (position) {
        document.getElementById('positionInput').value = position;
    }
    document.getElementById('applicationForm').scrollIntoView({ behavior: 'smooth' });
}
</script>

@endsection