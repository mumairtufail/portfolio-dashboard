<!-- Start Portfolio Section -->
<div id="portfolio" class="portfolio-style-six-area default-padding-top">
    <div class="shape-animated-right">
        <img src="{{ asset('assets/img/shape/1.webp') }}" alt="Shape">
    </div>
    
    <style>
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .pf-item {
            display: flex;
            flex-direction: column;
            height: 250px; /* Fixed height for smaller cards */
        }

        .pf-item .overlay-content {
            position: relative;
            flex-grow: 1;
            overflow: hidden;
            border-radius: 8px;
            height: 100%; /* Ensure full height of card */
        }

        .pf-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        .pf-item .overlay-content .content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .pf-item .overlay-content .content .title h5 {
            margin: 5px 0;
            font-size: 16px; /* Smaller font size for title */
        }

        .pf-item .overlay-content .content .title span {
            font-size: 12px; /* Smaller font size for project type */
        }

        .heading-left .title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .heading-left .sub-title {
            color: #ff5e14;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .fun-fact .timer {
            font-size: 2rem;
            font-weight: bold;
            color: #ff5e14;
        }

        .fun-fact .medium {
            font-size: 1rem;
        }

        @media (max-width: 992px) {
            .portfolio-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .portfolio-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="container">
        <div class="heading-left">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="left-info">
                        <h5 class="sub-title">Recent Work</h5>
                        <h2 class="title">Look at my portfolio and <br> give me your feedback</h2>
                        <div class="heading-shape">
                            <img src="{{ asset('assets/img/shape/10.png') }}" alt="Shape">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="right-info">
                        <div class="fun-factor-default">
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="{{ $user->portfolios->count() }}" data-speed="2000">{{ $user->portfolios->count() }}</div>
                                </div>
                                <span class="medium">Completed Project{{ $user->portfolios->count() != 1 ? 's' : '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-grid">
            @foreach($user->portfolios as $portfolio)
            <div class="pf-item">
                <div class="overlay-content">
                    <img src="{{ asset('storage/' . $portfolio->image_path) }}" alt="{{ $portfolio->title }}">
                    <div class="content">
                        <div class="title">
                            <span>{{ $portfolio->getStackArrayAttribute()[0] ?? 'Project' }}</span>
                            <h5><a href="#" data-bs-toggle="modal" data-bs-target="#projectModal{{ $portfolio->id }}">{{ $portfolio->title }}</a></h5>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#projectModal{{ $portfolio->id }}"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @foreach($user->portfolios as $portfolio)
    <!-- Start Projects Single Modal -->
    <div class="modal fade" id="projectModal{{ $portfolio->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="project-details-items">
                        <div class="project-thumb">
                            <img src="{{ asset('storage/' . $portfolio->image_path) }}" alt="{{ $portfolio->title }}">
                        </div>
                        <div class="top-info">
                            <div class="row">
                                <div class="col-xl-12 left-info">
                                    <div class="project-info mt-md-50 mt-xs-40 mb-40">
                                        <div class="content">
                                            <ul class="project-basic-info">
                                                <li>
                                                    Client <span>{{ $user->name }}</span>
                                                </li>
                                                <li>
                                                    Project Type <span>{{ implode(', ', $portfolio->getStackArrayAttribute()) }}</span>
                                                </li>
                                                <li>
                                                    Date <span>{{ $portfolio->formatted_completion_date }}</span>
                                                </li>
                                                <li>
                                                    Project URL <span><a href="{{ $portfolio->project_url }}" target="_blank">Visit Project</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h2>{{ $portfolio->title }}</h2>
                                    <p>{{ $portfolio->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects Single Modal -->
    @endforeach
</div>
<!-- End Portfolio Section -->