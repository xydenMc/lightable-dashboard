<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Helpdesk' ?> | Light Able</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Public Sans', 'Inter', sans-serif;
            background: #f5f7fc;
        }

        .card-border-top {
            border-top: 4px solid #7dd3fc;
            border-radius: 16px;
            transition: all 0.3s;
            background: white;
        }

        .card-border-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.1);
        }

        .satisfaction-card {
            background: white;
            border-radius: 24px;
            transition: all 0.3s;
        }

        .satisfaction-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.1);
        }

        .latest-scroll {
            max-height: 380px;
            overflow-y: auto;
        }

        .activity-item {
            transition: all 0.3s;
            border-radius: 16px;
            cursor: pointer;
        }

        .activity-item:hover {
            background-color: #f0f9ff;
            transform: translateX(8px);
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .breadcrumb-item a {
            color: #6c757d;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #4f46e5;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <?= view('layout/sidebar_new') ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid px-4 py-4">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Helpdesk</li>
                </ol>
            </nav>

            <!-- Header -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                <div>
                    <h2 class="fw-bold mb-0" style="color: #0f172a;">Helpdesk Dashboard</h2>
                    <p class="text-muted mt-1">Manage support tickets and customer satisfaction</p>
                </div>
            </div>

            <!-- 3 Support Cards -->
            <div class="row g-4 mb-4">
                <div class="col-xl-4 col-md-6">
                    <div class="card card-border-top border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h2 class="fw-bold mb-2">350</h2>
                                    <span class="text-info fw-semibold">Support Requests</span>
                                    <p class="mb-0 mt-2 text-muted small">Total number of support requests that come in.</p>
                                </div>
                                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                                    <i class="fas fa-headset text-info fs-3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3">
                            <div class="row text-center">
                                <div class="col border-end">
                                    <h5 class="mb-0 fw-bold">10</h5>
                                    <small class="text-muted">Open</small>
                                </div>
                                <div class="col border-end">
                                    <h5 class="mb-0 fw-bold">5</h5>
                                    <small class="text-muted">Running</small>
                                </div>
                                <div class="col">
                                    <h5 class="mb-0 fw-bold">3</h5>
                                    <small class="text-muted">Solved</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="card card-border-top border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h2 class="fw-bold mb-2">500</h2>
                                    <span class="text-primary fw-semibold">Agent Response</span>
                                    <p class="mb-0 mt-2 text-muted small">Total number of agent responses.</p>
                                </div>
                                <div class="bg-primary bg-opacity-10 p-3 rounded-3">
                                    <i class="fas fa-user-tie text-primary fs-3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3">
                            <div class="row text-center">
                                <div class="col border-end">
                                    <h5 class="mb-0 fw-bold">50</h5>
                                    <small class="text-muted">Open</small>
                                </div>
                                <div class="col border-end">
                                    <h5 class="mb-0 fw-bold">75</h5>
                                    <small class="text-muted">Running</small>
                                </div>
                                <div class="col">
                                    <h5 class="mb-0 fw-bold">30</h5>
                                    <small class="text-muted">Solved</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-12">
                    <div class="card card-border-top border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h2 class="fw-bold mb-2">800</h2>
                                    <span class="text-success fw-semibold">Support Resolved</span>
                                    <p class="mb-0 mt-2 text-muted small">Total number of resolved tickets.</p>
                                </div>
                                <div class="bg-success bg-opacity-10 p-3 rounded-3">
                                    <i class="fas fa-check-double text-success fs-3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3">
                            <div class="row text-center">
                                <div class="col border-end">
                                    <h5 class="mb-0 fw-bold">80</h5>
                                    <small class="text-muted">Open</small>
                                </div>
                                <div class="col border-end">
                                    <h5 class="mb-0 fw-bold">60</h5>
                                    <small class="text-muted">Running</small>
                                </div>
                                <div class="col">
                                    <h5 class="mb-0 fw-bold">90</h5>
                                    <small class="text-muted">Solved</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customer Satisfaction with PIE Chart -->
            <div class="row g-4 mb-4">
                <div class="col-xl-7 col-md-12">
                    <div class="satisfaction-card p-4 shadow-sm h-100">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h4 class="fw-bold text-primary mb-1">Customer Satisfaction</h4>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm rounded-pill dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fas fa-chart-line me-1"></i> This Month
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6 text-center">
                                <div id="satisfactionPieChart" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span><i class="fas fa-circle" style="color: #38bdf8;"></i> Very Poor</span>
                                        <span class="fw-bold">35.5%</span>
                                    </div>
                                    <div class="progress" style="height: 6px; border-radius: 10px;">
                                        <div class="progress-bar" style="width: 35.5%; background-color: #38bdf8;"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span><i class="fas fa-circle" style="color: #7dd3fc;"></i> Satisfied</span>
                                        <span class="fw-bold">26.9%</span>
                                    </div>
                                    <div class="progress" style="height: 6px; border-radius: 10px;">
                                        <div class="progress-bar" style="width: 26.9%; background-color: #7dd3fc;"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span><i class="fas fa-circle" style="color: #bae6fd;"></i> Very Satisfied</span>
                                        <span class="fw-bold">21.5%</span>
                                    </div>
                                    <div class="progress" style="height: 6px; border-radius: 10px;">
                                        <div class="progress-bar" style="width: 21.5%; background-color: #bae6fd;"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span><i class="fas fa-circle" style="color: #e0f2fe;"></i> Poor</span>
                                        <span class="fw-bold">16.1%</span>
                                    </div>
                                    <div class="progress" style="height: 6px; border-radius: 10px;">
                                        <div class="progress-bar" style="width: 16.1%; background-color: #e0f2fe;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest Activity -->
                <div class="col-xl-5 col-md-12">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-header bg-transparent border-0 d-flex align-items-center justify-content-between pt-4">
                            <h5 class="mb-0 fw-bold">
                                <i class="fas fa-clock text-primary me-2"></i>Latest Activity
                            </h5>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">Weekly</a></li>
                                    <li><a class="dropdown-item" href="#">Monthly</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="latest-scroll">
                            <div class="card-body pt-0">
                                <div class="activity-item d-flex align-items-center p-3 mb-2">
                                    <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                                        <i class="fas fa-ticket-alt text-primary fs-5"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">New ticket #12345 created</h6>
                                        <small class="text-muted"><i class="far fa-clock me-1"></i> 5 minutes ago</small>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">New</span>
                                </div>

                                <div class="activity-item d-flex align-items-center p-3 mb-2">
                                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                                        <i class="fas fa-check-circle text-success fs-5"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Ticket #12340 resolved by Agent Mike</h6>
                                        <small class="text-muted"><i class="far fa-clock me-1"></i> 15 minutes ago</small>
                                    </div>
                                    <span class="badge bg-success rounded-pill">Resolved</span>
                                </div>

                                <div class="activity-item d-flex align-items-center p-3 mb-2">
                                    <div class="bg-warning bg-opacity-10 p-3 rounded-3 me-3">
                                        <i class="fas fa-comment text-warning fs-5"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">New comment on ticket #12338</h6>
                                        <small class="text-muted"><i class="far fa-clock me-1"></i> 1 hour ago</small>
                                    </div>
                                    <span class="badge bg-warning rounded-pill">Comment</span>
                                </div>

                                <div class="activity-item d-flex align-items-center p-3 mb-2">
                                    <div class="bg-danger bg-opacity-10 p-3 rounded-3 me-3">
                                        <i class="fas fa-exclamation-triangle text-danger fs-5"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Ticket #12335 escalated to senior agent</h6>
                                        <small class="text-muted"><i class="far fa-clock me-1"></i> Yesterday, 3:30 PM</small>
                                    </div>
                                    <span class="badge bg-danger rounded-pill">Escalated</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center pb-4">
                            <a href="#" class="text-primary text-decoration-none">View all Feeds <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media Sources -->
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <h5 class="mb-0 fw-bold">
                                <i class="fab fa-facebook-f text-primary me-2"></i> Facebook Source
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted">Page Profile</span>
                                    <span class="fw-bold">25%</span>
                                </div>
                                <div class="progress" style="height: 6px; border-radius: 10px;">
                                    <div class="progress-bar bg-primary" style="width: 25%;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted">Favorite</span>
                                    <span class="fw-bold">85%</span>
                                </div>
                                <div class="progress" style="height: 6px; border-radius: 10px;">
                                    <div class="progress-bar bg-primary" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted">Like Story</span>
                                    <span class="fw-bold">65%</span>
                                </div>
                                <div class="progress" style="height: 6px; border-radius: 10px;">
                                    <div class="progress-bar bg-primary" style="width: 65%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <h5 class="mb-0 fw-bold">
                                <i class="fab fa-twitter text-info me-2"></i> Twitter Source
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted">Wall Profile</span>
                                    <span class="fw-bold">85%</span>
                                </div>
                                <div class="progress" style="height: 6px; border-radius: 10px;">
                                    <div class="progress-bar bg-info" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted">Favorite</span>
                                    <span class="fw-bold">25%</span>
                                </div>
                                <div class="progress" style="height: 6px; border-radius: 10px;">
                                    <div class="progress-bar bg-info" style="width: 25%;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted">Like Tweets</span>
                                    <span class="fw-bold">65%</span>
                                </div>
                                <div class="progress" style="height: 6px; border-radius: 10px;">
                                    <div class="progress-bar bg-info" style="width: 65%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tickets Answered Card -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-4 bg-primary rounded-start-4 d-flex align-items-center justify-content-center" style="min-height: 120px;">
                                    <i class="fas fa-book-open text-white fs-1"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-3">
                                        <h2 class="fw-bold mb-1">379</h2>
                                        <p class="text-muted mb-0">Tickets <span class="text-primary fw-bold">Answered</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="mt-5 pt-3 pb-3 text-center">
                <p class="mb-0 text-muted" style="font-family: 'Inter', sans-serif; font-size: 0.8rem;">
                    © 2026
                    <strong class="text-primary">Davin Loise</strong>
                    <span class="mx-1">&</span>
                    <strong class="text-primary">Amins Project Team</strong>
                    <span class="mx-2">•</span>
                    All rights reserved.
                </p>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var pieOptions = {
            series: [35.5, 26.9, 21.5, 16.1],
            chart: { type: 'pie', height: 280, toolbar: { show: false } },
            labels: ['Very Poor', 'Satisfied', 'Very Satisfied', 'Poor'],
            colors: ['#38bdf8', '#7dd3fc', '#bae6fd', '#e0f2fe'],
            legend: { show: false },
            dataLabels: { enabled: true, style: { fontSize: '12px', fontWeight: 'bold' }, formatter: function(val, opts) { return opts.w.config.series[opts.seriesIndex] + '%'; } },
            tooltip: { y: { formatter: function(val) { return val + '%'; } } }
        };
        new ApexCharts(document.querySelector("#satisfactionPieChart"), pieOptions).render();
    </script>
</body>

</html>