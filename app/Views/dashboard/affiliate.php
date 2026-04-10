<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | Light Able</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <style>
        /* ========== FIX WARNA ANGKA DI MODE DARK ========== */
        body.dark-mode {
            --text-light: #e2e8f0;
            --text-primary-light: #818cf8;
            --text-success-light: #34d399;
            --text-warning-light: #fbbf24;
        }

        body.dark-mode .fw-bold,
        body.dark-mode .fw-semibold,
        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6,
        body.dark-mode .card h2,
        body.dark-mode .card h3,
        body.dark-mode .card .fw-bold,
        body.dark-mode .table-custom td,
        body.dark-mode .card-body .fw-bold {
            color: var(--text-light) !important;
        }

        /* Angka uang ($) jadi warna ungu terang */
        body.dark-mode .card-stat h2,
        body.dark-mode .card-stats h2,
        body.dark-mode .card-border h5,
        body.dark-mode .card-border h3,
        body.dark-mode .display-6 {
            color: var(--text-primary-light) !important;
        }

        /* Trend positif (hijau) */
        body.dark-mode .trend-up,
        body.dark-mode .text-success {
            color: var(--text-success-light) !important;
        }

        /* Trend negatif (merah) */
        body.dark-mode .trend-down,
        body.dark-mode .text-danger {
            color: #f87171 !important;
        }

        body.dark-mode .search-bar .input-group {
            background: #1e293b !important;
            border: 1px solid #334155 !important;
        }

        body.dark-mode .search-bar .input-group:focus-within {
            background: #0f172a !important;
            border-color: #4f46e5 !important;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2) !important;
        }

        body.dark-mode .search-bar input {
            background: transparent !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .search-bar input::placeholder {
            color: #64748b !important;
        }

        body.dark-mode .search-bar .input-group-text {
            background: transparent !important;
            border: none !important;
            color: #94a3b8 !important;
        }

        body.dark-mode .search-bar kbd {
            background: #0f172a !important;
            color: #94a3b8 !important;
            border: 1px solid #334155 !important;
        }

        body.dark-mode .search-bar .btn-link {
            color: #94a3b8 !important;
        }

        body.dark-mode .search-bar .btn-link:hover {
            color: #818cf8 !important;
        }

        /* Perbaikan agar search bar tidak terpotong */
        .search-bar {
            width: 320px;
        }

        .search-bar .input-group {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .search-bar input {
            flex: 1;
            min-width: 0;
        }

        .search-bar .btn-link {
            white-space: nowrap;
        }

        @media (max-width: 992px) {
            .search-bar {
                width: 250px;
            }
        }
/* ========== CUSTOM SCROLLBAR ========== */
/* Light Mode */
::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-track {
    background: #e2e8f0;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #94a3b8;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: #64748b;
}

/* Dark Mode */
body.dark-mode ::-webkit-scrollbar-track {
    background: #1e293b;
}

body.dark-mode ::-webkit-scrollbar-thumb {
    background: #475569;
}

body.dark-mode ::-webkit-scrollbar-thumb:hover {
    background: #64748b;
}

/* Firefox */
* {
    scrollbar-width: thin;
}

body.dark-mode {
    scrollbar-color: #475569 #1e293b;
}
        @media (max-width: 768px) {
            .search-bar {
                width: auto;
                margin: 0 10px;
            }
        }

        /* Total balance / earning utama (kuning) */
        body.dark-mode .card .text-center h3,
        body.dark-mode .total-earnings {
            color: var(--text-warning-light) !important;
        }

        /* Main Content */
        .main-content {
            margin-left: 280px;
            padding: 0;
            transition: margin-left 0.3s ease;
            min-height: 100vh;
            margin-top: 70px;
        }

        /* Dark Mode untuk Cards dan Elemen Lain di View */
        body.dark-mode .card,
        body.dark-mode .card-stat,
        body.dark-mode .card-border,
        body.dark-mode .card-stats {
            background: #1e293b !important;
            border-color: #334155 !important;
        }

        body.dark-mode .card-header {
            background: transparent !important;
            border-bottom-color: #334155 !important;
        }

        body.dark-mode .card-footer {
            background: transparent !important;
            border-top-color: #334155 !important;
        }

        body.dark-mode .text-muted {
            color: #94a3b8 !important;
        }

        body.dark-mode .text-dark {
            color: #e2e8f0 !important;
        }

        body.dark-mode .bg-light {
            background: #334155 !important;
        }

        body.dark-mode .bg-white {
            background: #1e293b !important;
        }

        body.dark-mode .table,
        body.dark-mode .table-custom td,
        body.dark-mode .table-custom th {
            color: #e2e8f0;
            border-color: #334155;
        }

        body.dark-mode .list-group-item {
            background: transparent;
            color: #e2e8f0;
            border-color: #334155;
        }

        body.dark-mode .list-group-item:hover {
            background: #334155;
        }

        body.dark-mode .progress {
            background-color: #334155;
        }

        body.dark-mode .border {
            border-color: #334155 !important;
        }

        body.dark-mode .btn-light {
            background: #334155;
            border-color: #475569;
            color: #e2e8f0;
        }

        body.dark-mode .btn-light:hover {
            background: #475569;
            color: white;
        }

        body.dark-mode .alert-light {
            background: #334155;
            border-color: #475569;
            color: #e2e8f0;
        }

        body.dark-mode .badge.bg-light {
            background: #334155 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .badge.bg-white {
            background: #334155 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .breadcrumb-item a {
            color: #94a3b8;
        }

        body.dark-mode .breadcrumb-item.active {
            color: #818cf8;
        }

        body.dark-mode .breadcrumb-item+.breadcrumb-item::before {
            color: #64748b;
        }

        body.dark-mode .dropdown-menu {
            background: #1e293b;
            border-color: #334155;
        }

        body.dark-mode .dropdown-item {
            color: #cbd5e1;
        }

        body.dark-mode .dropdown-item:hover {
            background: #334155;
            color: #e2e8f0;
        }

        body.dark-mode .modal-content {
            background: #1e293b;
            border-color: #334155;
        }

        body.dark-mode .modal-header,
        body.dark-mode .modal-footer {
            border-color: #334155;
        }

        body.dark-mode .form-control,
        body.dark-mode .form-select {
            background: #0f172a;
            border-color: #334155;
            color: #e2e8f0;
        }

        body.dark-mode .form-control:focus,
        body.dark-mode .form-select:focus {
            background: #0f172a;
            color: #e2e8f0;
        }

        body.dark-mode .input-group-text {
            background: #334155;
            border-color: #475569;
            color: #cbd5e1;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }

        .main-content {
            margin-left: 280px;
            padding: 0;
            transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: 100vh;
            margin-top: 70px;
        }

        /* Saat sidebar collapsed (hilang), main content melebar ke kiri */
        .main-content.expanded {
            margin-left: 0;
        }

        /* Responsive untuk mobile */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }

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
    </style>
</head>

<body>
    <?= view('layout/navbar') ?>
    <?= view('layout/sidebar_new') ?>
    

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-xl py-4 py-lg-5">
            <!-- Header -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-1">
                <div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>