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
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid px-4 py-4">
        <!-- Welcome Row -->
        <div class="row mb-4">
            <div class="col-12">
                <h2>Dashboard</h2>
                <p class="text-muted">Welcome back, Admin! Here's what's happening today.</p>
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

        <!-- Row 2: Earnings, Ideas, Location Cards -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="card card-stats">
                    <div class="card-body">
                        <p class="text-muted mb-1">Total Earnings</p>
                        <h3>$<?= number_format($total_earnings, 2) ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-stats">
                    <div class="card-body">
                        <p class="text-muted mb-1">Total Ideas</p>
                        <h3><?= $total_ideas ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-stats">
                    <div class="card-body">
                        <p class="text-muted mb-1">Total Location</p>
                        <h3><?= $total_location ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Chart and Rating -->
        <div class="row mb-4">
            <!-- Chart Card -->
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
                        <canvas id="userChart" height="250"></canvas>
                    </div>
                </div>
            </div>

            <!-- Rating Card -->
            <div class="col-md-5 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Rating</h5>
                        <div class="text-center mb-3">
                            <h1 class="display-4"><?= $rating ?>/5</h1>
                            <div class="rating-star">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <?php if ($i <= floor($rating)): ?>
                                        <i class="fas fa-star"></i>
                                    <?php elseif ($i - $rating < 1 && $i - $rating > 0): ?>
                                        <i class="fas fa-star-half-alt"></i>
                                    <?php else: ?>
                                        <i class="far fa-star"></i>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                        </div>

                        <?php foreach ($rating_details as $star => $count): ?>
                            <div class="d-flex align-items-center mb-2">
                                <div style="width: 50px;"><?= $star ?> star</div>
                                <div class="progress flex-grow-1 mx-2" style="height: 8px;">
                                    <div class="progress-bar" style="width: <?= ($count / array_sum($rating_details)) * 100 ?>%"></div>
                                </div>
                                <div style="width: 50px;"><?= $count ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 4: Additional Stats Cards -->
        <div class="row mb-4">
            <!-- Card Total Likes -->
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">
                                    <i class="fas fa-heart text-danger me-1"></i> Total Likes
                                </p>
                                <h3 class="mb-2 fw-bold"><?= number_format($total_likes) ?></h3>
                            </div>
                            <div class="rounded-circle bg-danger bg-opacity-10 p-3">
                                <i class="fas fa-heart text-danger fs-4"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="trend-up">
                                <i class="fas fa-arrow-up"></i> 7.2%
                            </span>
                            <small class="text-muted">
                                <i class="fas fa-chart-line"></i> +892 dari bulan lalu
                            </small>
                        </div>
                        <div class="mt-3">
                            <div class="progress" style="height: 5px; border-radius: 10px;">
                                <div class="progress-bar bg-danger" style="width: 72%; border-radius: 10px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Target -->
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">
                                    <i class="fas fa-bullseye text-success me-1"></i> Target
                                </p>
                                <h3 class="mb-2 fw-bold"><?= number_format($target) ?></h3>
                            </div>
                            <div class="rounded-circle bg-success bg-opacity-10 p-3">
                                <i class="fas fa-flag-checkered text-success fs-4"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-success">
                                <i class="fas fa-check-circle"></i> 85% tercapai
                            </span>
                            <small class="text-muted">
                                <i class="fas fa-calendar"></i> Sisa 15 hari
                            </small>
                        </div>
                        <div class="mt-3">
                            <div class="progress" style="height: 5px; border-radius: 10px;">
                                <div class="progress-bar bg-success" style="width: 85%; border-radius: 10px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Duration -->
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <p class="text-muted mb-1">
                                    <i class="fas fa-clock text-info me-1"></i> Duration
                                </p>
                                <h3 class="mb-2 fw-bold"><?= number_format($duration) ?></h3>
                            </div>
                            <div class="rounded-circle bg-info bg-opacity-10 p-3">
                                <i class="fas fa-hourglass-half text-info fs-4"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>
                                <i class="fas fa-hourglass-start"></i> 120 hari berjalan
                            </span>
                            <small class="text-muted">
                                <i class="fas fa-hourglass-end"></i> 45 hari tersisa
                            </small>
                        </div>
                        <div class="mt-3">
                            <div class="progress" style="height: 5px; border-radius: 10px;">
                                <div class="progress-bar bg-info" style="width: 73%; border-radius: 10px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 5: Recent Users Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Recent Users</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table user-table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($recent_users as $user): ?>
                                    <tr>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['role'] ?></td>
                                        <td><?= $user['time'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>