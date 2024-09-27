@extends('UserSide.partials.app')

@section('title', 'Dashboard')

@section('content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Earnings Card -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-primary">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-dollar-square"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">All Earnings</h6>
                                <small class="text-muted">Total Revenue</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h4 class="mb-0">$3,020</h4>
                            <span class="badge bg-light-primary">
                                <i class="ti ti-arrow-up-right"></i> 30.6%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Views Card -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-warning">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-presentation-chart"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Page Views</h6>
                                <small class="text-muted">This Month</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h4 class="mb-0">290K+</h4>
                            <span class="badge bg-light-warning">
                                <i class="ti ti-arrow-up-right"></i> 30.6%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Tasks Card -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-success">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-task-square"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Total Tasks</h6>
                                <small class="text-muted">All Tasks</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h4 class="mb-0">839</h4>
                            <span class="badge bg-light-success">
                                <i class="ti ti-arrow-up-right"></i> New
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Activities -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Recent Activities</h5>
                    </div>
                    <div class="card-body">
                        <!-- Add your recent activities content here -->
                        <p>No recent activities to display.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Add any necessary JavaScript for charts or interactivity
</script>
@endpush