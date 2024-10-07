<!-- Start About 
============================================= -->
<div id="about" class="about-style-six-area default-padding-top">
    <div class="container">
        <div class="row align-center">
            <div class="about-style-six col-lg-5">
                <div class="thumb">
                    @php
                        $user = Auth::user();
                        $profileImage = $user && $user->profile_image 
                            ? asset('storage/' . $user->profile_image) 
                            : asset('assets/img/illustration/3.png');
                    @endphp
                    <img class="wow fadeInUp" src="{{ $profileImage }}" alt="{{ $user->name ?? 'Profile' }} Thumb">
                </div>
            </div>
            <div class="about-style-six col-lg-6 offset-lg-1">
                <h4 class="sub-title">About Me</h4>
                <h2 class="title">I can develop <br> that help people</h2>
                <p>
                    @if($user && $user->bio)
                        {{ $user->bio }}
                    @else
                        Hi, my name is {{ $user->name ?? 'John Doe' }} and I began using WordPress when it first began. I've spent most of my waking hours for the last ten years designing, programming and operating WordPress sites. One of my specialties is taking an idea from scratch and creating a full-fledged platform. I go beyond to produce sites with a unique touch.
                    @endif
                </p>
                <div class="skill-list">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fab fa-wordpress"></i>
                            </div>
                            <div class="content">
                                <h4>Professional WordPress Developer</h4>
                                <span>Top Rated – Upwork</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div class="content">
                                <h4>Senior HTML Developer</h4>
                                <span>Level Two Seller -  Fiverr</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->