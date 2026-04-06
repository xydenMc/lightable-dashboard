<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Dashboard' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .card-stats {
            transition: all 0.3s;
            border-radius: 15px;
        }

        .card-stats:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .trend-up {
            color: #28a745;
        }

        .rating-star {
            color: #ffc107;
            font-size: 20px;
        }

        .user-table tr {
            transition: all 0.2s;
        }

        .user-table tr:hover {
            background-color: #f8f9fa;
        }

        .list-group-item {
            transition: all 0.3s ease;
            border-radius: 12px !important;
            margin-bottom: 5px;
        }

        .list-group-item:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
            cursor: pointer;
        }

        /* Badge styling */
        .badge {
            font-weight: 500;
            border-radius: 20px;
            padding: 6px 12px;
        }

        /* Avatar circle */
        .rounded-circle {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid px-4 py-4">
        <!-- Welcome Row -->
        <div class="row mb-4">
            <div class="col-12">
                <h2>Dashboard</h2>
                <p class="text-muted">HOME</p>
            </div>
        </div>

        <!-- Row 1: 3 Main Cards (Daily, Monthly, Yearly Sales) -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="card card-stats h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Daily Sales</p>
                                <h2 class="mb-2">$<?= number_format($daily_sales, 2) ?></h2>
                                <span class="trend-up"><i class="fas fa-arrow-up"></i> <?= $daily_percent ?>%</span>
                                <small class="text-muted">You made an extra 35,000 this daily</small>
                            </div>
                            <div class="stat-icon bg-primary bg-opacity-10">
                                <i class="fas fa-calendar-day text-primary fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-stats h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Monthly Sales</p>
                                <h2 class="mb-2">$<?= number_format($monthly_sales, 2) ?></h2>
                                <span class="trend-up"><i class="fas fa-arrow-up"></i> <?= $monthly_percent ?>%</span>
                                <small class="text-muted">You made an extra 35,000 this Monthly</small>
                            </div>
                            <div class="stat-icon bg-success bg-opacity-10">
                                <i class="fas fa-calendar-alt text-success fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-stats h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Yearly Sales</p>
                                <h2 class="mb-2">$<?= number_format($yearly_sales, 2) ?></h2>
                                <small class="text-muted">You made an extra 35,000 this Yearly</small>
                            </div>
                            <div class="stat-icon bg-info bg-opacity-10">
                                <i class="fas fa-chart-line text-info fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Row 3: Chart and Rating -->
        <!-- Row: Stats (Kiri) + Chart (Kanan) -->
        <div class="row mb-4">
            <!-- Kolom Kiri: Total Earnings, Ideas, Location (Stacked/Vertikal) -->
            <div class="col-md-5 mb-3">
                <!-- Total Earnings -->
                <div class="card card-stats mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Total Earnings</p>
                                <h2 class="mb-0">$<?= number_format($total_earnings, 2) ?></h2>
                            </div>
                            <div class="stat-icon bg-success bg-opacity-10">
                                <i class="fas fa-money-bill text-success fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Ideas -->
                <div class="card card-stats mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Total Ideas</p>
                                <h2 class="mb-0"><?= number_format($total_ideas) ?></h2>
                            </div>
                            <div class="stat-icon bg-warning bg-opacity-10">
                                <i class="fas fa-lightbulb text-warning fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Location -->
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Total Location</p>
                                <h2 class="mb-0"><?= number_format($total_location) ?></h2>
                            </div>
                            <div class="stat-icon bg-primary bg-opacity-10">
                                <i class="fas fa-map-marker-alt text-primary fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Chart Users From United States -->
            <div class="col-md-7 mb-3">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Users From United States</h5>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary" id="zoomIn"><i class="fas fa-plus"></i></button>
                            <button class="btn btn-sm btn-outline-secondary" id="zoomOut"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="userChart" height="220"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rating Card -->


        <!-- Row: Social Media Stats (1 card per social media) -->
        <div class="row mb-4">

            <!-- CARD FACEBOOK -->
            <div class="col-md-4 mb-3">
                <div class="card card-stats h-100">
                    <div class="card-header bg-primary text-white">
                        <i class="fab fa-facebook-f me-2"></i> Facebook
                    </div>
                    <div class="card-body">
                        <!-- Total Likes -->
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Likes</p>
                                <h3 class="mb-0">12,281</h3>
                            </div>
                            <div class="stat-icon bg-danger bg-opacity-10">
                                <i class="fas fa-heart text-danger"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="trend-up"><i class="fas fa-arrow-up"></i> 7.2%</span>
                        </div>

                        <!-- Target -->
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Target</p>
                                <h3 class="mb-0">35,098</h3>
                            </div>
                            <div class="stat-icon bg-success bg-opacity-10">
                                <i class="fas fa-bullseye text-success"></i>
                            </div>
                        </div>

                        <!-- Duration -->
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Duration</p>
                                <h3 class="mb-0">3,539</h3>
                            </div>
                            <div class="stat-icon bg-info bg-opacity-10">
                                <i class="fas fa-clock text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD INSTAGRAM -->
            <div class="col-md-4 mb-3">
                <div class="card card-stats h-100">
                    <div class="card-header" style="background: linear-gradient(45deg, #f09433, #d62976, #962fbf); color: white;">
                        <i class="fab fa-instagram me-2"></i> Instagram
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Likes</p>
                                <h3 class="mb-0">15,432</h3>
                            </div>
                            <div class="stat-icon bg-danger bg-opacity-10">
                                <i class="fas fa-heart text-danger"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="trend-up"><i class="fas fa-arrow-up"></i> 12.5%</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Target</p>
                                <h3 class="mb-0">50,000</h3>
                            </div>
                            <div class="stat-icon bg-success bg-opacity-10">
                                <i class="fas fa-bullseye text-success"></i>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Duration</p>
                                <h3 class="mb-0">2,150</h3>
                            </div>
                            <div class="stat-icon bg-info bg-opacity-10">
                                <i class="fas fa-clock text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD TIKTOK -->
            <div class="col-md-4 mb-3">
                <div class="card card-stats h-100">
                    <div class="card-header bg-dark text-white">
                        <i class="fab fa-tiktok me-2"></i> TikTok
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Total Likes</p>
                                <h3 class="mb-0">28,901</h3>
                            </div>
                            <div class="stat-icon bg-danger bg-opacity-10">
                                <i class="fas fa-heart text-danger"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="trend-up"><i class="fas fa-arrow-up"></i> 23.8%</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">Target</p>
                                <h3 class="mb-0">100,000</h3>
                            </div>
                            <div class="stat-icon bg-success bg-opacity-10">
                                <i class="fas fa-bullseye text-success"></i>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1">Duration</p>
                                <h3 class="mb-0">5,678</h3>
                            </div>
                            <div class="stat-icon bg-info bg-opacity-10">
                                <i class="fas fa-clock text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 5: Recent Users Table -->
        <!-- Row: Recent Users & Rating (Berdampingan) -->
        <div class="row mb-4">
            <!-- Recent Users List (Kiri) -->
            <div class="col-md-7 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-white border-0 pt-4">
                        <h5 class="mb-0">
                            <i class="fas fa-users text-primary me-2"></i> Recent Users
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <!-- User 1: Quinn Flynn -->
                            <div class="list-group-item border-0 px-0 py-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                                <i class="fas fa-user text-primary fs-5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fw-bold">Quinn Flynn</h6>
                                            <p class="text-muted mb-1 small">
                                                <i class="fab fa-android me-1"></i> Android developer
                                            </p>
                                            <small class="text-muted">
                                                <i class="fas fa-calendar-alt me-1"></i> 11 may 12:30
                                            </small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-success bg-opacity-10 text-success p-2">
                                            <i class="fas fa-check-circle me-1"></i> Active
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- User 2: Garrett Winters -->
                            <div class="list-group-item border-0 px-0 py-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="rounded-circle bg-secondary bg-opacity-10 p-3 me-3">
                                                <i class="fas fa-user text-secondary fs-5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fw-bold">Garrett Winters</h6>
                                            <p class="text-muted mb-1 small">
                                                <i class="fab fa-android me-1"></i> Android developer
                                            </p>
                                            <small class="text-muted">
                                                <i class="fas fa-calendar-alt me-1"></i> 11 may 12:30
                                            </small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-secondary bg-opacity-10 text-secondary p-2">
                                            <i class="fas fa-minus-circle me-1"></i> Inactive
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- User 3: Ashton Cox -->
                            <div class="list-group-item border-0 px-0 py-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="rounded-circle bg-danger bg-opacity-10 p-3 me-3">
                                                <i class="fas fa-user text-danger fs-5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fw-bold">Ashton Cox</h6>
                                            <p class="text-muted mb-1 small">
                                                <i class="fab fa-android me-1"></i> Android developer
                                            </p>
                                            <small class="text-muted">
                                                <i class="fas fa-calendar-alt me-1"></i> 11 may 12:30
                                            </small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-danger bg-opacity-10 text-danger p-2">
                                            <i class="fas fa-times-circle me-1"></i> Blocked
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- User 4: Cedric Kelly -->
                            <div class="list-group-item border-0 px-0 py-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                                <i class="fas fa-user text-success fs-5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fw-bold">Cedric Kelly</h6>
                                            <p class="text-muted mb-1 small">
                                                <i class="fab fa-android me-1"></i> Android developer
                                            </p>
                                            <small class="text-muted">
                                                <i class="fas fa-calendar-alt me-1"></i> 11 may 12:30
                                            </small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-success bg-opacity-10 text-success p-2">
                                            <i class="fas fa-check-circle me-1"></i> Active
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 pb-4">
                        <a href="#" class="text-decoration-none">
                            <i class="fas fa-arrow-right me-1"></i> View all users
                        </a>
                    </div>
                </div>
            </div>

            <!-- Rating Card (Kanan) -->
            <div class="col-md-5 mb-3">
                <div class="card h-100">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">
                            <i class="fas fa-star text-warning me-2"></i> Rating
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- Rating Value -->
                        <div class="text-center mb-4">
                            <h1 class="display-2 fw-bold text-primary"><?= $rating ?><span class="fs-2 text-muted">/5</span></h1>
                            <div class="rating-star mt-2">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <?php if ($i <= floor($rating)): ?>
                                        <i class="fas fa-star fs-3"></i>
                                    <?php elseif ($i - $rating < 1 && $i - $rating > 0): ?>
                                        <i class="fas fa-star-half-alt fs-3"></i>
                                    <?php else: ?>
                                        <i class="far fa-star fs-3"></i>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                            <p class="text-muted mt-2">Based on 554 reviews</p>
                        </div>

                        <!-- Rating Details -->
                        <?php foreach ($rating_details as $star => $count): ?>
                            <div class="d-flex align-items-center mb-2">
                                <div style="width: 60px;">
                                    <span class="fw-bold"><?= $star ?></span>
                                    <i class="fas fa-star text-warning fa-xs"></i>
                                </div>
                                <div class="progress flex-grow-1 mx-2" style="height: 8px; border-radius: 10px;">
                                    <div class="progress-bar bg-warning" style="width: <?= ($count / array_sum($rating_details)) * 100 ?>%; border-radius: 10px;"></div>
                                </div>
                                <div style="width: 50px;" class="text-muted">
                                    <?= number_format($count) ?>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- Total Rating Summary -->
                        <hr>
                        <div class="d-flex justify-content-around text-center mt-3">
                            <div>
                                <h5 class="mb-0 text-success">4.8</h5>
                                <small class="text-muted">Last Month</small>
                            </div>
                            <div>
                                <h5 class="mb-0 text-danger">4.6</h5>
                                <small class="text-muted">This Month</small>
                            </div>
                            <div>
                                <h5 class="mb-0 text-primary">+0.2</h5>
                                <small class="text-muted">Growth</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart.js Script -->
        <script>
            // Sample data for US users chart
            const ctx = document.getElementById('userChart').getContext('2d');
            let userChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Users from United States',
                        data: [650, 720, 800, 750, 820, 900, 880, 950, 1020, 1100, 1150, 1200],
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });

            // Zoom functionality (demo)
            document.getElementById('zoomIn').addEventListener('click', () => {
                alert('Zoom in feature - you can implement real zoom here');
            });

            document.getElementById('zoomOut').addEventListener('click', () => {
                alert('Zoom out feature - you can implement real zoom here');
            });

            document.addEventListener('DOMContentLoaded', function() {
                // Efek klik pada baris tabel
                document.querySelectorAll('.user-table tbody tr').forEach(row => {
                    row.addEventListener('click', function() {
                        const name = this.querySelector('td:first-child strong').innerText;
                        console.log(`Selected user: ${name}`);
                        // Bisa diarahkan ke halaman detail user
                    });
                });

                // Tooltip untuk tombol action
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.forEach(function(tooltipTriggerEl) {
                    new bootstrap.Tooltip(tooltipTriggerEl);
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>