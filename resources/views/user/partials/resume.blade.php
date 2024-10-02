<!-- Start Resume 
============================================= -->
<div id="resume" class="resume-area default-padding-top">
    <div class="shape-right-top-extra">
        <img src="{{ asset('assets/img/shape/14.png') }}" alt="Shape">
    </div>
    <div class="container">
        <div class="experience-content-box">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">

                    <div class="nav nav-tabs text-center resume-tab-navs" id="nav-tab" role="tablist">

                        <button class="nav-link active" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                            Biography <strong>01</strong>
                        </button>
                        <button class="nav-link" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                            Skills <strong>02</strong>
                        </button>
                        <button class="nav-link" id="nav-id-3" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">
                            Education <strong>03</strong>
                        </button>

                    </div>

                    <div class="tab-content resume-tab-content" id="nav-tabContent">
                        <!-- Single Item -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="biography-table">
                                        <li>
                                            <h5>Name</h5>
                                            <p>
                                                {{ $user->username }}
                                            </p>
                                        </li>
                                        <li>
                                            <h5>Birthday</h5>
                                            <p>
                                                {{ $user->birthday }}
                                            </p>
                                        </li>
                                        <li>
                                            <h5>Age</h5>
                                            <p>
                                                {{ \Carbon\Carbon::parse($user->birthday)->age }}
                                            </p>
                                        </li>
                                        <li>
                                            <h5>Address</h5>
                                            <p>
                                                {{ $user->address }}
                                            </p>
                                        </li>
                                        <li>
                                            <h5>Email</h5>
                                            <p>
                                                {{ $user->email }}
                                            </p>
                                        </li>
                                        <li>
                                            <h5>Phone</h5>
                                            <p>
                                                {{ $user->phone }}
                                            </p>
                                        </li>
                                        <li>
                                            <h5>Skype</h5>
                                            <p>
                                                {{ $user->skype }}
                                            </p>
                                        </li>
                                        <li>
                                            <h5>Freelance</h5>
                                            <p>
                                                {{ $user->freelance_status }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                            <div class="row align-center">
                                <div class="col-lg-12">
                                    <ul class="skill-table">
                                        @foreach($user->technicalSkills as $skill)
                                            <li>
                                                <div class="row align-center">
                                                    <div class="col-lg-2">
                                                        <div class="icon">
                                                            <i class="{{ $skill->icon }}"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <h4>{{ $skill->name }}</h4>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="progress-box">
                                                            <h5>{{ $skill->proficiency }}%</h5>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" data-width="{{ $skill->proficiency }}"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-id-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="education-table">
                                        @foreach($user->educations as $education)
                                            <li>
                                                <h4>{{ $education->degree }} in {{ $education->field_of_study }}</h4>
                                                <h5>{{ $education->institution }}</h5>
                                                <span>{{ $education->start_date }} - {{ $education->end_date }}</span>
                                                <p>
                                                    {{ $education->description }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Resume -->