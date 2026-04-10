<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Finance' ?> | Light Able</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">

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

        /* Main Content */
        .main-content {
            margin-left: 280px;
            padding: 0;
            transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: 100vh;
            margin-top: 70px;
        }

        .main-content.expanded {
            margin-left: 0;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }

        .card-border {
            border-radius: 20px;
            border: 1px solid #e9ecef;
            transition: all 0.3s;
            background: white;
        }

        .card-border:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.08);
        }

        .avtar {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
        }

        .avtar-xs {
            width: 24px;
            height: 24px;
            font-size: 14px;
        }

        .bg-light-primary {
            background: rgba(79, 70, 229, 0.1);
            color: #4f46e5;
        }

        .bg-light-success {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
        }

        .bg-light-info {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
        }

        .bg-light-warning {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
        }

        .bg-light-danger {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .text-sm {
            font-size: 12px;
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

        .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #adb5bd;
            font-size: 18px;
        }

        /* ========== DARK MODE STYLES LENGKAP ========== */
        body.dark-mode {
            background: #0f172a;
        }

        /* Background semua card */
        body.dark-mode .card,
        body.dark-mode .card-border,
        body.dark-mode .card-body,
        body.dark-mode .modal-content {
            background: #1e293b !important;
            border-color: #334155 !important;
        }

        /* Header card */
        body.dark-mode .card-header {
            background: #1e293b !important;
            border-bottom-color: #334155 !important;
        }

        /* Footer card */
        body.dark-mode .card-footer {
            background: #1e293b !important;
            border-top-color: #334155 !important;
        }

        /* Teks umum */
        body.dark-mode,
        body.dark-mode .text-dark,
        body.dark-mode .fw-bold,
        body.dark-mode .fw-semibold,
        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6,
        body.dark-mode p,
        body.dark-mode span,
        body.dark-mode .card-text {
            color: #e2e8f0 !important;
        }

        /* Teks muted */
        body.dark-mode .text-muted,
        body.dark-mode small:not(.text-white):not(.text-primary),
        body.dark-mode .small {
            color: #94a3b8 !important;
        }

        /* Teks putih (yang memang harus putih) */
        body.dark-mode .text-white,
        body.dark-mode .text-white-50 {
            color: #ffffff !important;
        }

        /* Teks primary */
        body.dark-mode .text-primary {
            color: #818cf8 !important;
        }

        /* Teks success (hijau) */
        body.dark-mode .text-success {
            color: #34d399 !important;
        }

        /* Teks danger (merah) */
        body.dark-mode .text-danger {
            color: #f87171 !important;
        }

        .card-border {
            border-radius: 20px !important;
            overflow: hidden;
        }

        /* Teks warning */
        body.dark-mode .text-warning {
            color: #fbbf24 !important;
        }

        /* Angka uang di card */
        body.dark-mode .card-border h3,
        body.dark-mode .card-border h4,
        body.dark-mode .card-border h5,
        body.dark-mode .card-border .fw-bold,
        body.dark-mode h2.fw-bold,
        body.dark-mode .display-6 {
            color: #c7c7c7 !important;
        }

        /* Angka di transactions */
        body.dark-mode .list-group-item h6,
        body.dark-mode .list-group-item .fw-bold {
            color: #e2e8f0 !important;
        }

        /* List group item */
        body.dark-mode .list-group-item {
            background: transparent !important;
            border-color: #334155 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .list-group-item:hover {
            background: #334155 !important;
        }

        /* Dropdown */
        body.dark-mode .dropdown-menu {
            background: #1e293b !important;
            border-color: #334155 !important;
        }

        body.dark-mode .dropdown-item {
            color: #e2e8f0 !important;
        }

        body.dark-mode .dropdown-item:hover {
            background: #334155 !important;
            color: #818cf8 !important;
        }

        /* Button light */
        body.dark-mode .btn-light {
            background: #334155 !important;
            border-color: #475569 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .btn-light:hover {
            background: #475569 !important;
        }

        /* Button outline primary */
        body.dark-mode .btn-outline-primary {
            color: #818cf8 !important;
            border-color: #818cf8 !important;
        }

        body.dark-mode .btn-outline-primary:hover {
            background: #818cf8 !important;
            color: #0f172a !important;
        }

        /* Modal */
        body.dark-mode .modal-header,
        body.dark-mode .modal-footer {
            border-color: #334155 !important;
        }

        body.dark-mode .modal-title {
            color: #e2e8f0 !important;
        }

        body.dark-mode .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        /* Form control */
        body.dark-mode .form-control,
        body.dark-mode .form-select {
            background: #0f172a !important;
            border-color: #334155 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .form-control:focus,
        body.dark-mode .form-select:focus {
            background: #0f172a !important;
            border-color: #818cf8 !important;
            box-shadow: 0 0 0 0.25rem rgba(129, 140, 248, 0.25);
        }

        body.dark-mode .form-label {
            color: #94a3b8 !important;
        }

        /* Progress bar */
        body.dark-mode .progress {
            background-color: #334155 !important;
        }

        body.dark-mode .progress-bar {
            background-color: #818cf8 !important;
        }

        /* Breadcrumb */
        body.dark-mode .breadcrumb-item a {
            color: #94a3b8 !important;
        }

        body.dark-mode .breadcrumb-item.active {
            color: #818cf8 !important;
        }

        body.dark-mode .breadcrumb-item+.breadcrumb-item::before {
            color: #64748b !important;
        }

        /* Border */
        body.dark-mode .border {
            border-color: #334155 !important;
        }

        body.dark-mode .border-bottom {
            border-bottom-color: #334155 !important;
        }

        body.dark-mode .border-top {
            border-top-color: #334155 !important;
        }

        /* Background light */
        body.dark-mode .bg-light {
            background: #334155 !important;
        }

        body.dark-mode .bg-white {
            background: #1e293b !important;
        }

        /* Badge */
        body.dark-mode .badge.bg-light {
            background: #334155 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .badge.bg-white {
            background: #334155 !important;
            color: #e2e8f0 !important;
        }

        /* Table */
        body.dark-mode .table {
            color: #e2e8f0 !important;
        }

        body.dark-mode .table td,
        body.dark-mode .table th {
            border-color: #334155 !important;
        }

       
        /* Scrollbar */
        body.dark-mode ::-webkit-scrollbar-track {
            background: #1e293b;
        }

        body.dark-mode ::-webkit-scrollbar-thumb {
            background: #475569;
        }

        body.dark-mode ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }

        /* ApexCharts di dark mode */
        body.dark-mode .apexcharts-text,
        body.dark-mode .apexcharts-legend-text {
            fill: #e2e8f0 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .apexcharts-tooltip {
            background: #1e293b !important;
            border-color: #334155 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .apexcharts-tooltip-title {
            background: #0f172a !important;
            border-bottom-color: #334155 !important;
            color: #e2e8f0 !important;
        }

        body.dark-mode .apexcharts-grid line {
            stroke: #334155 !important;
        }

        body.dark-mode .apexcharts-xaxis line,
        body.dark-mode .apexcharts-yaxis line {
            stroke: #334155 !important;
        }
        .search-bar .input-group {
    background: #f1f5f9 !important;
    border-radius: 40px !important;
    border: none !important;
    transition: all 0.3s ease-in-out !important;
}

.search-bar .input-group:focus-within {
    background: #ffffff !important;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1) !important;
}

.search-bar input {
    background: transparent !important;
    color: #1e293b !important;
}

.search-bar input::placeholder {
    color: #64748b !important;
}

.search-bar .input-group-text {
    background: transparent !important;
    border: none !important;
    color: #64748b !important;
}

.search-bar .btn-link {
    text-decoration: none !important;
    padding: 0 8px !important;
}

.search-bar kbd {
    background: #e2e8f0 !important;
    color: #475569 !important;
    border-radius: 6px !important;
    padding: 2px 8px !important;
    font-size: 0.7rem !important;
    font-weight: 500 !important;
}

/* Dark mode - PAKSA WARNA YANG BENAR */
body.dark-mode .search-bar .input-group {
    background: #1e293b !important;
    border: 1px solid #334155 !important;
    border-radius: 40px !important;
    box-shadow: none !important;
}

body.dark-mode .search-bar .input-group:hover {
    background: #0f172a !important;
    border-color: #4f46e5 !important;
}

body.dark-mode .search-bar .input-group:focus-within {
    background: #0f172a !important;
    border-color: #4f46e5 !important;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2) !important;
}

body.dark-mode .search-bar input {
    color: #94a3b8 !important;
    background: transparent !important;
}

body.dark-mode .search-bar .input-group:focus-within input,
body.dark-mode .search-bar input:focus {
    color: #ffffff !important;
}

body.dark-mode .search-bar input::placeholder {
    color: #64748b !important;
}

body.dark-mode .search-bar .input-group-text {
    background: transparent !important;
    border: none !important;
}

body.dark-mode .search-bar .input-group-text i {
    color: #64748b !important;
}

body.dark-mode .search-bar .input-group:focus-within .input-group-text i {
    color: #818cf8 !important;
}

body.dark-mode .search-bar kbd {
    background: #0f172a !important;
    color: #94a3b8 !important;
    border: 1px solid #334155 !important;
}

body.dark-mode .search-bar .input-group:focus-within kbd {
    background: #1e293b !important;
    color: #818cf8 !important;
    border-color: #4f46e5 !important;
}

body.dark-mode .search-bar .btn-link {
    color: #94a3b8 !important;
}

body.dark-mode .search-bar .input-group:focus-within .btn-link {
    color: #818cf8 !important;
}
    </style>
</head>

<body>
    <?= view('layout/navbar') ?>
    <?= view('layout/sidebar_new') ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid px-4 py-4">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Finance</li>
                </ol>
            </nav>

            <!-- Header -->
            <div class="page-header mb-4">
                <h2 class="fw-bold mb-0">Finance Dashboard</h2>
                <p class="text-muted">Manage your finances and transactions</p>
            </div>

            <!-- Row 1: My Card & Transactions -->
            <div class="row g-4">
                <div class="col-md-5 col-xxl-4">
                    <!-- My Card -->
                    <div class="card card-border mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="mb-0 fw-bold">My Card</h5>
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
                            <div class="card rounded-4 overflow-hidden mb-3" style="background: linear-gradient(135deg, #1e293b, #0f172a);">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <p class="text-white-50 small mb-0">CARD NAME</p>
                                            <h5 class="text-white">John Smith</h5>
                                        </div>
                                        <div>
                                            <i class="fab fa-cc-visa text-white-50 fs-1"></i>
                                        </div>
                                    </div>
                                    <h4 class="text-white my-3">**** **** **** 8361</h4>
                                    <div class="row">
                                        <div class="col-auto">
                                            <p class="text-white-50 small mb-0">EXP</p>
                                            <h6 class="text-white mb-0">7/30</h6>
                                        </div>
                                        <div class="col-auto">
                                            <p class="text-white-50 small mb-0">CVV</p>
                                            <h6 class="text-white mb-0">455</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="mb-1 fw-bold">$1,480,000</h3>
                                <p class="text-muted mb-0">Total Balance</p>
                            </div>
                        </div>
                    </div>

                    <!-- Transactions List -->
                    <div class="card card-border">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="mb-0 fw-bold">Transactions</h5>
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
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avtar bg-light-primary me-3"><i class="fab fa-apple"></i></div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Apple Inc.</h6>
                                            <small class="text-muted">#ABLE-PRO-T00232</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-0">$210,000</h6>
                                            <small class="text-danger"><i class="fas fa-arrow-down"></i> 10.6%</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avtar bg-light-success me-3"><i class="fab fa-spotify"></i></div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Spotify Music</h6>
                                            <small class="text-muted">#ABLE-PRO-T10232</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-0">-$10,000</h6>
                                            <small class="text-success"><i class="fas fa-arrow-up"></i> 30.6%</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avtar bg-light-info me-3"><i class="fab fa-medium"></i></div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Medium</h6>
                                            <small class="text-muted">06:30 pm</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-0">-$26</h6>
                                            <small class="text-warning"><i class="fas fa-arrows-alt-h"></i> 5%</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avtar bg-light-warning me-3"><i class="fas fa-car"></i></div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Uber</h6>
                                            <small class="text-muted">08:40 pm</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-0">+$210,000</h6>
                                            <small class="text-success"><i class="fas fa-arrow-up"></i> 10.6%</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avtar bg-light-danger me-3"><i class="fas fa-taxi"></i></div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Ola Cabs</h6>
                                            <small class="text-muted">07:40 pm</small>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-0">+$210,000</h6>
                                            <small class="text-success"><i class="fas fa-arrow-up"></i> 10.6%</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-xxl-8">
                    <div class="row g-4">
                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-border h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                        <div>
                                            <h6 class="mb-0">Transactions</h6>
                                            <p class="mb-0 text-muted">2-31 July 2023</p>
                                        </div>
                                        <div class="dropdown">
                                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical f-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="total-line-1-chart"></div>
                                    <div class="d-flex align-items-center justify-content-between gap-2 mt-3">
                                        <h4 class="mb-0">
                                            <small class="text-muted">$</small>
                                            650k
                                        </h4>
                                        <p class="mb-0 text-muted text-sm">Compare to last week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-border h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                        <div>
                                            <h6 class="mb-0">Revenue</h6>
                                            <p class="mb-0 text-muted">2-31 July 2023</p>
                                        </div>
                                        <div class="dropdown">
                                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical f-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="total-line-2-chart"></div>
                                    <div class="d-flex align-items-center justify-content-between gap-2 mt-3">
                                        <h4 class="mb-0">
                                            <small class="text-muted">$</small>
                                            892k
                                        </h4>
                                        <p class="mb-0 text-muted text-sm">Compare to last week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xxl-4">
                            <div class="card card-border h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                        <div>
                                            <h6 class="mb-0">Expenses</h6>
                                            <p class="mb-0 text-muted">2-31 July 2023</p>
                                        </div>
                                        <div class="dropdown">
                                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical f-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="total-line-3-chart"></div>
                                    <div class="d-flex align-items-center justify-content-between gap-2 mt-3">
                                        <h4 class="mb-0">
                                            <small class="text-muted">$</small>
                                            588k
                                        </h4>
                                        <p class="mb-0 text-muted text-sm">Compare to last week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cashflow Card -->
                    <div class="card card-border mt-4 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                                <div>
                                    <h5 class="mb-1 fw-bold">Cashflow</h5>
                                    <p class="mb-0">
                                        <span class="fw-bold text-success">5.44%</span>
                                        <span class="badge bg-success bg-opacity-10 text-success ms-2">5.44%</span>
                                    </p>
                                </div>
                                <select class="form-select rounded-3 form-select-sm w-auto" id="cashflowPeriod">
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly" selected>Monthly</option>
                                    <option value="yearly">Yearly</option>
                                </select>
                            </div>
                            <div id="cashflowBarChart" style="height: 280px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Where your money go -->
            <div class="card card-border mt-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0 fw-bold">Where your money go ?</h5>
                        <button class="btn btn-sm btn-primary rounded-pill">+ Add New</button>
                    </div>
                    <div class="row g-3">
                        <div class="col-6 col-md-3">
                            <div class="card shadow-none border rounded-4 h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="bg-danger bg-opacity-10 p-3 rounded-3">
                                            <i class="fas fa-utensils fs-3 text-danger"></i>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <h6 class="mb-2 fw-semibold">Food & Drink</h6>
                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span class="text-muted small">Spent</span>
                                            <span class="fw-semibold">$1,000</span>
                                        </div>
                                        <div class="progress" style="height: 6px; border-radius: 10px;">
                                            <div class="progress-bar bg-danger" style="width: 65%; border-radius: 10px;"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-1">
                                            <span class="text-muted small">of $1,538</span>
                                            <span class="text-muted small">65%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card shadow-none border rounded-4 h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-3">
                                            <i class="fas fa-plane fs-3 text-primary"></i>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <h6 class="mb-2 fw-semibold">Travel</h6>
                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span class="text-muted small">Spent</span>
                                            <span class="fw-semibold">$400</span>
                                        </div>
                                        <div class="progress" style="height: 6px; border-radius: 10px;">
                                            <div class="progress-bar bg-primary" style="width: 30%; border-radius: 10px;"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-1">
                                            <span class="text-muted small">of $1,333</span>
                                            <span class="text-muted small">30%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card shadow-none border rounded-4 h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                                            <i class="fas fa-shopping-bag fs-3 text-warning"></i>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <h6 class="mb-2 fw-semibold">Shopping</h6>
                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span class="text-muted small">Spent</span>
                                            <span class="fw-semibold">$900</span>
                                        </div>
                                        <div class="progress" style="height: 6px; border-radius: 10px;">
                                            <div class="progress-bar bg-warning" style="width: 52%; border-radius: 10px;"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-1">
                                            <span class="text-muted small">of $1,730</span>
                                            <span class="text-muted small">52%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card shadow-none border rounded-4 h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="bg-success bg-opacity-10 p-3 rounded-3">
                                            <i class="fas fa-heartbeat fs-3 text-success"></i>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <h6 class="mb-2 fw-semibold">Healthcare</h6>
                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span class="text-muted small">Spent</span>
                                            <span class="fw-semibold">$250</span>
                                        </div>
                                        <div class="progress" style="height: 6px; border-radius: 10px;">
                                            <div class="progress-bar bg-success" style="width: 26%; border-radius: 10px;"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-1">
                                            <span class="text-muted small">of $961</span>
                                            <span class="text-muted small">26%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accounts Section -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card card-border">
                        <div class="card-body">
                            <h5 class="mb-3 fw-bold">Accounts</h5>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="card shadow-none border rounded-4">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6 class="mb-0">US Dollar Account</h6>
                                                    <small class="text-muted">**** **** **** 1234</small>
                                                    <h5 class="mt-2 mb-0">$12,920.00</h5>
                                                </div>
                                                <div class="bg-success bg-opacity-10 p-2 rounded-circle">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card shadow-none border rounded-4">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6 class="mb-0">Euro Account</h6>
                                                    <small class="text-muted">**** **** **** 5678</small>
                                                    <h5 class="mt-2 mb-0">€8,450.00</h5>
                                                </div>
                                                <div class="bg-success bg-opacity-10 p-2 rounded-circle">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card shadow-none border rounded-4">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6 class="mb-0">British Pound Account</h6>
                                                    <small class="text-muted">**** **** **** 9012</small>
                                                    <h5 class="mt-2 mb-0">£3,200.00</h5>
                                                </div>
                                                <div class="bg-secondary bg-opacity-10 p-2 rounded-circle">
                                                    <i class="fas fa-minus-circle text-secondary"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-outline-primary w-100 rounded-pill" id="addAccountBtn">
                                    <i class="fas fa-plus me-2"></i> Add New Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="mt-5 pt-3 pb-3 text-center">
                <p class="mb-0 text-muted">
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

    <!-- Add Account Modal -->
    <div class="modal fade" id="addAccountModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Add New Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pt-0">
                    <form id="addAccountForm">
                        <div class="mb-3">
                            <label class="form-label">Account Name</label>
                            <input type="text" class="form-control rounded-3" placeholder="e.g., Savings Account" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Currency</label>
                            <select class="form-select rounded-3">
                                <option value="USD">US Dollar (USD)</option>
                                <option value="EUR">Euro (EUR)</option>
                                <option value="GBP">British Pound (GBP)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Initial Balance</label>
                            <input type="number" class="form-control rounded-3" placeholder="0.00" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-3 py-2">Add Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add Account Modal
        document.getElementById('addAccountBtn').addEventListener('click', function() {
            new bootstrap.Modal(document.getElementById('addAccountModal')).show();
        });

        document.getElementById('addAccountForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Account added successfully!');
            bootstrap.Modal.getInstance(document.getElementById('addAccountModal')).hide();
            this.reset();
        });

        // Chart 1
        var lineChartOptions1 = {
            series: [{
                name: "Transactions",
                data: [28, 45, 35, 50, 30, 60, 45]
            }],
            chart: {
                height: 80,
                type: 'area',
                toolbar: {
                    show: false
                },
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            colors: ['#4f46e5'],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.5,
                    opacityTo: 0
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return '$' + val + 'k';
                    }
                }
            }
        };
        new ApexCharts(document.querySelector("#total-line-1-chart"), lineChartOptions1).render();

        // Chart 2
        var lineChartOptions2 = {
            series: [{
                name: "Revenue",
                data: [35, 50, 42, 65, 55, 70, 60]
            }],
            chart: {
                height: 80,
                type: 'area',
                toolbar: {
                    show: false
                },
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            colors: ['#10b981'],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.5,
                    opacityTo: 0
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return '$' + val + 'k';
                    }
                }
            }
        };
        new ApexCharts(document.querySelector("#total-line-2-chart"), lineChartOptions2).render();

        // Chart 3
        var lineChartOptions3 = {
            series: [{
                name: "Expenses",
                data: [20, 35, 28, 42, 35, 48, 40]
            }],
            chart: {
                height: 80,
                type: 'area',
                toolbar: {
                    show: false
                },
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            colors: ['#ef4444'],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.5,
                    opacityTo: 0
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return '$' + val + 'k';
                    }
                }
            }
        };
        new ApexCharts(document.querySelector("#total-line-3-chart"), lineChartOptions3).render();

        // Cashflow Chart
        var cashflowData = {
            weekly: {
                categories: ['W1', 'W2', 'W3', 'W4'],
                income: [22.5, 28.7, 35.2, 42.9],
                expense: [15.2, 18.5, 22.1, 28.4]
            },
            monthly: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                income: [22.5, 28.7, 35.2, 42.9, 51.3, 67.8, 72.5, 68.2, 75.1, 82.4, 88.9, 95.2],
                expense: [15.2, 18.5, 22.1, 28.4, 35.2, 42.5, 48.1, 52.3, 55.8, 60.2, 65.5, 70.1]
            },
            yearly: {
                categories: ['2020', '2021', '2022', '2023', '2024'],
                income: [245.5, 312.8, 425.3, 568.7, 720.4],
                expense: [185.2, 235.6, 312.4, 425.8, 540.2]
            }
        };

        var cashflowChart;

        function renderCashflowChart(period) {
            var data = cashflowData[period];
            var options = {
                series: [{
                    name: 'Income',
                    data: data.income,
                    color: '#10b981'
                }, {
                    name: 'Expense',
                    data: data.expense,
                    color: '#ef4444'
                }],
                chart: {
                    type: 'bar',
                    height: 240,
                    toolbar: {
                        show: false
                    },
                    animations: {
                        enabled: true,
                        easing: 'easeinout',
                        speed: 800
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '60%',
                        borderRadius: 6
                    }
                },
                xaxis: {
                    categories: data.categories
                },
                yaxis: {
                    title: {
                        text: 'Amount ($K)'
                    },
                    labels: {
                        formatter: function(val) {
                            return '$' + val + 'K';
                        }
                    }
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return '$' + val + 'K';
                        }
                    }
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right'
                }
            };
            if (cashflowChart) {
                cashflowChart.updateOptions(options);
                cashflowChart.updateSeries(options.series);
            } else {
                cashflowChart = new ApexCharts(document.querySelector("#cashflowBarChart"), options);
                cashflowChart.render();
            }
        }
        renderCashflowChart('monthly');
        document.getElementById('cashflowPeriod').addEventListener('change', function(e) {
            renderCashflowChart(e.target.value);
        });
    </script>
</body>

</html>