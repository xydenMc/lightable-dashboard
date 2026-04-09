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
    </style>
</head>

<body>
    <!-- Sidebar -->
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
                <h2 class="fw-bold mb-0" style="color: #0f172a;">Finance Dashboard</h2>
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
                    <div class="row">
                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-border">
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
                            <div class="card card-border">
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
                            <div class="card card-border mt-3">
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
                                        <i class="fas fa-utensils fs-1 text-primary"></i>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <h6 class="mb-3 fw-semibold">Food & Drink</h6>
                                    <div class="bg-dark p-3 pt-4 rounded-4">
                                        <div class="progress bg-white bg-opacity-25" style="height: 6px">
                                            <div class="progress-bar bg-white" style="width: 65%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span class="text-white small">65%</span>
                                            <span class="text-white small">$1000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card shadow-none border rounded-4 h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <i class="fas fa-plane fs-1 text-primary"></i>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <h6 class="mb-3 fw-semibold">Travel</h6>
                                    <div class="bg-dark p-3 pt-4 rounded-4">
                                        <div class="progress bg-white bg-opacity-25" style="height: 6px">
                                            <div class="progress-bar bg-white" style="width: 30%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span class="text-white small">30%</span>
                                            <span class="text-white small">$400</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card shadow-none border rounded-4 h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <i class="fas fa-shopping-bag fs-1 text-primary"></i>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <h6 class="mb-3 fw-semibold">Shopping</h6>
                                    <div class="bg-dark p-3 pt-4 rounded-4">
                                        <div class="progress bg-white bg-opacity-25" style="height: 6px">
                                            <div class="progress-bar bg-white" style="width: 52%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span class="text-white small">52%</span>
                                            <span class="text-white small">$900</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card shadow-none border rounded-4 h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <i class="fas fa-heartbeat fs-1 text-primary"></i>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light rounded-circle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <h6 class="mb-3 fw-semibold">Healthcare</h6>
                                    <div class="bg-dark p-3 pt-4 rounded-4">
                                        <div class="progress bg-white bg-opacity-25" style="height: 6px">
                                            <div class="progress-bar bg-white" style="width: 26%"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span class="text-white small">26%</span>
                                            <span class="text-white small">$250</span>
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
            series: [{ name: "Transactions", data: [28, 45, 35, 50, 30, 60, 45] }],
            chart: { height: 80, type: 'area', toolbar: { show: false }, sparkline: { enabled: true } },
            stroke: { curve: 'smooth', width: 2 },
            colors: ['#4f46e5'],
            fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.5, opacityTo: 0 } },
            tooltip: { y: { formatter: function(val) { return '$' + val + 'k'; } } }
        };
        new ApexCharts(document.querySelector("#total-line-1-chart"), lineChartOptions1).render();

        // Chart 2
        var lineChartOptions2 = {
            series: [{ name: "Revenue", data: [35, 50, 42, 65, 55, 70, 60] }],
            chart: { height: 80, type: 'area', toolbar: { show: false }, sparkline: { enabled: true } },
            stroke: { curve: 'smooth', width: 2 },
            colors: ['#10b981'],
            fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.5, opacityTo: 0 } },
            tooltip: { y: { formatter: function(val) { return '$' + val + 'k'; } } }
        };
        new ApexCharts(document.querySelector("#total-line-2-chart"), lineChartOptions2).render();

        // Chart 3
        var lineChartOptions3 = {
            series: [{ name: "Expenses", data: [20, 35, 28, 42, 35, 48, 40] }],
            chart: { height: 80, type: 'area', toolbar: { show: false }, sparkline: { enabled: true } },
            stroke: { curve: 'smooth', width: 2 },
            colors: ['#ef4444'],
            fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.5, opacityTo: 0 } },
            tooltip: { y: { formatter: function(val) { return '$' + val + 'k'; } } }
        };
        new ApexCharts(document.querySelector("#total-line-3-chart"), lineChartOptions3).render();

        // Cashflow Chart
        var cashflowData = {
            weekly: { categories: ['W1', 'W2', 'W3', 'W4'], income: [22.5, 28.7, 35.2, 42.9], expense: [15.2, 18.5, 22.1, 28.4] },
            monthly: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'], income: [22.5, 28.7, 35.2, 42.9, 51.3, 67.8, 72.5, 68.2, 75.1, 82.4, 88.9, 95.2], expense: [15.2, 18.5, 22.1, 28.4, 35.2, 42.5, 48.1, 52.3, 55.8, 60.2, 65.5, 70.1] },
            yearly: { categories: ['2020', '2021', '2022', '2023', '2024'], income: [245.5, 312.8, 425.3, 568.7, 720.4], expense: [185.2, 235.6, 312.4, 425.8, 540.2] }
        };

        var cashflowChart;
        function renderCashflowChart(period) {
            var data = cashflowData[period];
            var options = {
                series: [{ name: 'Income', data: data.income, color: '#10b981' }, { name: 'Expense', data: data.expense, color: '#ef4444' }],
                chart: { type: 'bar', height: 240, toolbar: { show: false }, animations: { enabled: true, easing: 'easeinout', speed: 800 } },
                plotOptions: { bar: { horizontal: false, columnWidth: '60%', borderRadius: 6 } },
                xaxis: { categories: data.categories },
                yaxis: { title: { text: 'Amount ($K)' }, labels: { formatter: function(val) { return '$' + val + 'K'; } } },
                tooltip: { y: { formatter: function(val) { return '$' + val + 'K'; } } },
                legend: { position: 'top', horizontalAlign: 'right' }
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