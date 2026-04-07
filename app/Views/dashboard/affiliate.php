<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | CodeIgniter 4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fc;
            scroll-behavior: smooth;
        }

        .card-stat {
            border: none;
            border-radius: 1.5rem;
            background: #ffffff;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.02), 0 2px 6px rgba(0, 0, 0, 0.03);
        }

        .card-stat:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.08);
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            background: rgba(99, 102, 241, 0.12);
            border-radius: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #4f46e5;
            font-size: 1.8rem;
        }

        .badge-trend-up {
            background: #e6f9ed;
            color: #2b7e3a;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 0.75rem;
        }

        .table-custom th {
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            color: #5b6e8c;
            border-bottom-width: 1px;
            padding: 1rem 0.5rem 0.8rem 0.5rem;
        }

        .table-custom td {
            vertical-align: middle;
            padding: 0.9rem 0.5rem;
            font-weight: 500;
            color: #1e293b;
            border-bottom: 1px solid #edf2f7;
        }

        .affiliate-avatar {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #eef2ff, #e0e7ff);
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #4f46e5;
            margin-right: 12px;
        }

        .progress-affiliate {
            height: 6px;
            border-radius: 12px;
            background-color: #e2e8f0;
        }

        .progress-affiliate .progress-bar {
            background: #4f46e5;
            border-radius: 12px;
        }

        .card-header-clean {
            background: transparent;
            border-bottom: 1px solid #eef2ff;
            padding: 1.2rem 1.5rem;
            font-weight: 700;
        }

        .top-visitor-item:hover {
            background: #f8fafd;
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: -0.2px;
            color: #0f172a;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
            min-height: 100vh;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }

            .stat-icon {
                width: 44px;
                height: 44px;
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar - SAMA PERSIS DENGAN INDEX -->
    <?= view('layout/sidebar') ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-xl py-4 py-lg-5">
            <!-- Header -->
            <!-- Header - Ganti dengan ini -->
            <!-- Header dengan Breadcrumb -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-1">
                <div>
                    <!-- Breadcrumb navigation -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('/') ?>" class="text-decoration-none text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">
                                Affiliate
                            </li>
                        </ol>
                    </nav>
                    <h1 class="display-6 fw-bold" style="color: #0f172a;">Affiliate <span style="background: linear-gradient(135deg, #4f46e5, #7c3aed); background-clip: text; -webkit-background-clip: text; color: transparent;">Dashboard</span></h1>
                    <p class="text-muted mt-1">Monitor referrals, earnings & top performers — all in one glance.</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <div class="btn-group shadow-sm">
                        <button class="btn btn-light border rounded-3 px-4"><i class="far fa-calendar-alt me-2"></i>This month</button>
                        
                    </div>
                </div>
            </div>
            <!-- Stats Cards -->
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card-stat card p-3 p-xl-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <span class="text-muted text-uppercase small fw-semibold">Referrals</span>
                                <h2 class="mt-2 fw-bold display-6">$<?= $stats['referrals']['value'] ?></h2>
                                <div class="mt-2"><span class="badge-trend-up"><i class="fas fa-arrow-up me-1"></i> <?= $stats['referrals']['growth'] ?></span> <span class="text-muted small ms-2">vs last month</span></div>
                            </div>
                            <div class="stat-icon"><i class="fas fa-<?= $stats['referrals']['icon'] ?>"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-stat card p-3 p-xl-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <span class="text-muted text-uppercase small fw-semibold">Conversion Rate</span>
                                <h2 class="mt-2 fw-bold display-6"><?= $stats['conversion']['value'] ?></h2>
                                <div class="mt-2"><span class="badge-trend-up"><i class="fas fa-arrow-up me-1"></i> <?= $stats['conversion']['growth'] ?></span> <span class="text-muted small ms-2">improved</span></div>
                            </div>
                            <div class="stat-icon"><i class="fas fa-<?= $stats['conversion']['icon'] ?>"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-stat card p-3 p-xl-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <span class="text-muted text-uppercase small fw-semibold">Visits</span>
                                <h2 class="mt-2 fw-bold display-6"><?= $stats['visits']['value'] ?></h2>
                                <div class="mt-2"><span class="badge-trend-up"><i class="fas fa-arrow-up me-1"></i> <?= $stats['visits']['growth'] ?></span> <span class="text-muted small ms-2">weekly trend</span></div>
                            </div>
                            <div class="stat-icon"><i class="fas fa-<?= $stats['visits']['icon'] ?>"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="card-stat card mb-5 p-3 p-lg-4">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h5 class="fw-bold mb-0"><i class="fas fa-chart-simple me-2 text-primary"></i>Affiliate performance (last 6 weeks)</h5>
                    </div>
                    <div class="mt-2 mt-sm-0"><span class="badge bg-light text-dark border px-3 py-2"><i class="far fa-circle-check text-success me-1"></i> real-time overview</span></div>
                </div>
                <div class="mt-3">
                    <canvas id="trendChart" height="100" style="max-height: 280px; width: 100%"></canvas>
                </div>
            </div>

            <!-- Main Content: Affiliates Table + Top Visitors -->
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card-stat card h-100">
                        <div class="card-header-clean d-flex justify-content-between align-items-center">
                            <span class="section-title"><i class="fas fa-trophy me-2 text-warning"></i>Affiliates</span>
                            <a href="#" class="text-decoration-none small fw-semibold">view all <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-custom mb-0">
                                    <thead>
                                        <tr>
                                            <th>Affiliate</th>
                                            <th>Campaign</th>
                                            <th>Earnings</th>
                                            <th>Growth</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($affiliates as $aff): ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="affiliate-avatar"><i class="fas fa-<?= $aff['avatar'] ?>"></i></div> <span class="fw-semibold"><?= $aff['name'] ?></span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-light text-dark px-3 py-2 rounded-pill"><?= $aff['campaign'] ?></span></td>
                                                <td class="fw-bold">$<?= number_format($aff['earnings']) ?></td>
                                                <td><span class="badge-trend-up"><i class="fas fa-arrow-up"></i> <?= $aff['growth'] ?>%</span></td>
                                                <td style="width: 120px;">
                                                    <div class="progress progress-affiliate">
                                                        <div class="progress-bar" style="width: <?= $aff['progress'] ?>%"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card-stat card h-100">
                        <div class="card-header-clean">
                            <span class="section-title"><i class="fas fa-crown me-2 text-warning"></i>Top Visitors</span>
                            <p class="text-muted small mb-0 mt-1">Highest earnings & engagement</p>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <?php foreach ($topVisitors as $visitor): ?>
                                    <div class="list-group-item border-0 d-flex justify-content-between align-items-center py-3 top-visitor-item px-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="affiliate-avatar bg-warning bg-opacity-10"><i class="fas fa-<?= $visitor['avatar'] ?> text-warning"></i></div>
                                            <span class="fw-semibold"><?= $visitor['name'] ?></span>
                                        </div>
                                        <div><span class="fw-bold text-dark">$<?= number_format($visitor['earnings']) ?></span> <span class="badge-trend-up ms-2">+<?= $visitor['growth'] ?>%</span></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-2 pb-3">
                            <div class="alert alert-light border-0 bg-gray-100 rounded-3 p-3 mb-0 small">
                                <i class="fas fa-chart-line text-primary me-2"></i> Top affiliate <strong>Adeline</strong> generated +32% more traffic this week!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="row mt-4 g-4">
                <div class="col-12">
                    <div class="card-stat card p-3 p-lg-4">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-bold mb-0"><i class="fas fa-fire-flame me-2 text-danger"></i>Recent affiliate activities</h6>
                            </div>
                            <div class="mt-2 mt-sm-0"><span class="text-muted small"><i class="far fa-clock"></i> updated 5 minutes ago</span></div>
                        </div>
                        <hr class="my-3">
                        <div class="row g-3 text-center text-md-start">
                            <div class="col-md-4 d-flex align-items-center gap-2"><i class="fas fa-user-plus text-primary"></i> <span>New affiliate: <strong>Sarah K.</strong> joined</span></div>
                            <div class="col-md-4 d-flex align-items-center gap-2"><i class="fas fa-chart-line text-success"></i> <span>Record conversion: +12% yesterday</span></div>
                            <div class="col-md-4 d-flex align-items-center gap-2"><i class="fas fa-trophy text-warning"></i> <span>Top earner Adeline hit $1.8K</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="mt-5 pt-3 text-center text-muted">
                <p class="mb-0"><i class="far fa-copyright me-1"></i> 2025 Affiliate Hub — CodeIgniter 4 Dashboard | All metrics are demo visuals</p>
            </footer>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('trendChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?= json_encode($chartData['labels']) ?>,
                datasets: [{
                    label: 'Referral Revenue (K$)',
                    data: <?= json_encode($chartData['revenue']) ?>,
                    borderColor: '#4f46e5',
                    backgroundColor: 'rgba(79, 70, 229, 0.05)',
                    borderWidth: 3,
                    pointBackgroundColor: '#4f46e5',
                    pointBorderColor: '#fff',
                    pointRadius: 5,
                    tension: 0.3,
                    fill: true,
                }, {
                    label: 'Conversions (%)',
                    data: <?= json_encode($chartData['conversion']) ?>,
                    borderColor: '#f97316',
                    backgroundColor: 'transparent',
                    borderWidth: 2.5,
                    borderDash: [6, 5],
                    pointBackgroundColor: '#f97316',
                    pointRadius: 4,
                    tension: 0.2,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            boxWidth: 12,
                            font: {
                                size: 12,
                                family: 'Inter'
                            }
                        }
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    y: {
                        grid: {
                            color: '#eef2ff'
                        },
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Revenue (K$) / %'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>