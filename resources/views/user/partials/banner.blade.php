<!-- Start Banner 
============================================= -->
<div class="auto-height bg-fixed banner-style-one">
    <div class="container">
        <div class="double-items">
            <div class="row align-center">

                <div class="col-lg-6 info">
                    <h1 class="text-invisible">WELCOME</h1>
                    <h2>Hey <img src="{{ asset('assets/img/shape/4.png') }}" alt="Icon"> I'm <span>{{ $user->username }}</span></h2>
                    <h3 class="title">
                        <span class="header-caption" id="page-top">
                            <!-- type headline start-->
                            <span class="cd-headline clip is-full-width">
                                <!-- ROTATING TEXT -->
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">{{ $user->first_title }}</b>
                                    <b class="is-hidden">{{ $user->second_title }}</b>
                                    <b class="is-hidden">{{ $user->third_title }}</b>
                                </span>
                            </span>
                            <!-- type headline end -->
                        </span>
                    </h3>
                    <div class="button mt-55">
                        <a class="btn btn-md circle btn-theme effect" href="#resume">My Resume</a>
                    </div>
                </div>
                <style>
    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 20px; /* Adjust this value to change the corner rounding */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    .large-image {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .shape-center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    .shape-image {
        max-width: 100%;
        height: auto;
        opacity: 0.7; /* Adjust this value to change the overlay intensity */
    }

    /* Optional: Add a hover effect */
    .image-container:hover .large-image {
        transform: scale(1.05);
    }
</style>
                <div class="col-lg-6 thumb" data-wow-delay="900ms">
    @php
        $user = Auth::user();
        $profileImage = $user && $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/img/illustration/1.png');
    @endphp
    
    <div class="image-container">
        <img class="wow fadeInDown large-image rounded" src="{{ $profileImage }}" alt="Profile Image">
        <div class="shape-center">
            <img src="{{ asset('assets/img/shape/7.png') }}" alt="Shape" class="shape-image">
        </div>
    </div>
</div>


                
            </div>
            <div class="personal-social">
                <ul>
                    <li class="facebook">
                        <a href="{{ $user->facebook_url }}">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="behance">
                        <a href="{{ $user->behance_url }}">
                            <i class="fab fa-behance"></i>
                        </a>
                    </li>
                    <li class="dribbble">
                        <a href="{{ $user->dribbble_url }}">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->