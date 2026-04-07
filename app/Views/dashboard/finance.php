<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Finance' ?> | CodeIgniter 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fc;
        }

        .card-stats {
            transition: all 0.3s;
            border-radius: 20px;
            border: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02), 0 1px 2px rgba(0, 0, 0, 0.03);
        }

        .card-stats:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.08);
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .trend-up {
            color: #10b981;
        }

        .trend-down {
            color: #ef4444;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
            min-height: 100vh;
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

        .credit-card {
            background: linear-gradient(135deg, #1e293b, #0f172a);
            border-radius: 24px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .credit-card::before {
            content: "";
            position: absolute;
            top: -50%;
            right: -20%;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .credit-card::after {
            content: "";
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 50%;
        }

        .transaction-item {
            transition: all 0.2s;
            border-radius: 12px;
            cursor: pointer;
        }

        .transaction-item:hover {
            background-color: #f8fafc;
            transform: translateX(5px);
        }

        .progress-custom {
            height: 8px;
            border-radius: 10px;
            background-color: #e2e8f0;
        }

        .progress-custom .progress-bar {
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body class="bg-light">
    <!-- Sidebar -->
    <?= view('layout/sidebar') ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid px-4 py-4">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Finance</li>
                </ol>
            </nav>

            <!-- Header -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                <div>
                    <h1 class="display-6 fw-bold" style="color: #0f172a;">Finance <span style="background: linear-gradient(135deg, #4f46e5, #7c3aed); background-clip: text; -webkit-background-clip: text; color: transparent;">Dashboard</span></h1>
                    <p class="text-muted">Manage your finances, transactions, and balance</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <div class="btn-group shadow-sm">
                        <button class="btn btn-light border rounded-3 px-4"><i class="far fa-calendar-alt me-2"></i>This month</button>
                    </div>
                </div>
            </div>

            <!-- Row 1: Credit Card + Stats Cards -->
            <!-- Row 1: Credit Card + Stats Cards -->
            <div class="row g-4 mb-4">
                <!-- My Card (tanpa Total Balance) -->
                <div class="col-md-6">
                    <div class="credit-card p-4" style="background: linear-gradient(135deg, #1e293b, #0f172a); border-radius: 24px; color: white;">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div>
                                <small class="text-white-50">My Card</small>
                            </div>
                            <div>
                                <i class="fab fa-cc-visa fs-1 text-white-50"></i>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="text-white-50 small mb-1">CARD NUMBER</p>
                            <h5 class="text-white mb-0" style="letter-spacing: 2px;">**** **** **** 8361</h5>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <small class="text-white-50">CARD NAME</small>
                                <p class="text-white mb-0 fw-semibold">JOHN SMITH</p>
                            </div>
                            <div class="col-3">
                                <small class="text-white-50">EXP</small>
                                <p class="text-white mb-0 fw-semibold">7/30</p>
                            </div>
                            <div class="col-3">
                                <small class="text-white-50">CVV</small>
                                <p class="text-white mb-0 fw-semibold">455</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards (Income, Expense, Compare) -->
                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <p class="text-muted mb-1">Total Income</p>
                                    <h3 class="mb-2">$8,520</h3>
                                    <span class="trend-up"><i class="fas fa-arrow-up"></i> 10.6%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <p class="text-muted mb-1">Total Expenses</p>
                                    <h3 class="mb-2">$3,930</h3>
                                    <span class="trend-down"><i class="fas fa-arrow-down"></i> 5.2%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="text-muted mb-1">Compare to last week</p>
                                            <h4 class="mb-0 text-success">+5.44%</h4>
                                        </div>
                                        <div class="stat-icon bg-success bg-opacity-10">
                                            <i class="fas fa-chart-line text-success fs-4"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 1.5: Total Balance (Card Terpisah) -->
            <div class="row g-4 mb-4">
                <div class="col-md-12">
                    <div class="card card-stats">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted">Total Balance</small>
                                    <h2 class="fw-bold text-dark mb-0">$1.480.000</h2>
                                </div>
                                <div class="stat-icon bg-primary bg-opacity-10">
                                    <i class="fas fa-wallet text-primary fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards (Income, Expense, Compare) -->
            
        <!-- Row 2: Cashflow FULL -->
        <div class="row g-4 mb-4">
            <div class="col-md-12">
                <div class="card card-stats">
                    <div class="card-header bg-transparent border-0 pt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="fas fa-chart-line me-2 text-success"></i> Cashflow</h5>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light border rounded-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Monthly <i class="fas fa-chevron-down ms-1"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Weekly</a></li>
                                <li><a class="dropdown-item" href="#">Monthly</a></li>
                                <li><a class="dropdown-item" href="#">Yearly</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Left Side: Percentage -->
                            <div class="col-md-5">
                                <div class="row g-3 mb-4">
                                    <div class="col-6">
                                        <div class="bg-light rounded-3 p-3 text-center">
                                            <i class="fas fa-arrow-up text-success mb-1"></i>
                                            <p class="text-muted small mb-0">Income</p>
                                            <h4 class="text-success mb-0">5.44%</h4>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-light rounded-3 p-3 text-center">
                                            <i class="fas fa-arrow-down text-danger mb-1"></i>
                                            <p class="text-muted small mb-0">Expense</p>
                                            <h4 class="text-danger mb-0">5.44%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side: Progress -->
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small">Income</span>
                                        <span class="small fw-bold text-success">$8,520 (68%)</span>
                                    </div>
                                    <div class="progress progress-custom" style="height: 8px;">
                                        <div class="progress-bar bg-success" style="width: 68%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="small">Expense</span>
                                        <span class="small fw-bold text-danger">$3,930 (32%)</span>
                                    </div>
                                    <div class="progress progress-custom" style="height: 8px;">
                                        <div class="progress-bar bg-danger" style="width: 32%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Weekly Overview Bar Chart -->
                        <div class="mt-4">
                            <p class="small text-muted mb-2">Weekly Overview</p>
                            <div class="d-flex align-items-end gap-2" style="height: 80px;">
                                <div style="flex: 1; background: #4f46e5; height: 40px; border-radius: 8px;"></div>
                                <div style="flex: 1; background: #4f46e5; height: 35px; border-radius: 8px;"></div>
                                <div style="flex: 1; background: #4f46e5; height: 45px; border-radius: 8px;"></div>
                                <div style="flex: 1; background: #4f46e5; height: 60px; border-radius: 8px;"></div>
                            </div>
                            <div class="d-flex justify-content-around mt-2">
                                <small class="text-muted">Week 1</small>
                                <small class="text-muted">Week 2</small>
                                <small class="text-muted">Week 3</small>
                                <small class="text-muted">Week 4</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Recent Transactions & Spending Chart -->
        <div class="row g-4 mb-4">
            <div class="col-md-7">
                <div class="card card-stats">
                    <div class="card-header bg-transparent border-0 pt-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="fas fa-history me-2 text-primary"></i> Recent Transactions</h5>
                        <a href="#" class="text-decoration-none small">View all <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item border-0 px-4 py-3 transaction-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                            <i class="fas fa-shopping-cart text-primary"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Amazon Purchase</h6>
                                            <small class="text-muted">06:30 pm</small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-danger">-$129.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item border-0 px-4 py-3 transaction-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                            <i class="fas fa-dollar-sign text-success"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Salary Deposit</h6>
                                            <small class="text-muted">08:40 pm</small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-success">+$3,500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item border-0 px-4 py-3 transaction-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3">
                                            <i class="fas fa-utensils text-warning"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Restaurant</h6>
                                            <small class="text-muted">07:40 pm</small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-danger">-$45.50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item border-0 px-4 py-3 transaction-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-info bg-opacity-10 p-3 me-3">
                                            <i class="fas fa-exchange-alt text-info"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Transfer to Savings</h6>
                                            <small class="text-muted">2-31 July 2023</small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-danger">-$500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card card-stats h-100">
                    <div class="card-header bg-transparent border-0 pt-4">
                        <h5 class="mb-0"><i class="fas fa-chart-simple me-2 text-primary"></i> Spending by Category</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="spendingChart" height="200"></canvas>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-circle text-primary me-2"></i> Shopping</span>
                                <span>65%</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-circle text-success me-2"></i> Food</span>
                                <span>30%</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-circle text-warning me-2"></i> Bills</span>
                                <span>52%</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span><i class="fas fa-circle text-info me-2"></i> Entertainment</span>
                                <span>26%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 4: Recent Activity -->
        <div class="row">
            <div class="col-12">
                <div class="card card-stats">
                    <div class="card-header bg-transparent border-0 pt-4">
                        <h5 class="mb-0"><i class="fas fa-bell me-2 text-primary"></i> Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="fas fa-calendar-day text-primary fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Today</h6>
                                        <p class="text-muted small mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="fas fa-calendar-day text-success fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Yesterday</h6>
                                        <p class="text-muted small mb-0">Jonny aber invites to join the challenge - Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        // Spending Chart (Doughnut)
        const spendingCtx = document.getElementById('spendingChart').getContext('2d');
        new Chart(spendingCtx, {
            type: 'doughnut',
            data: {
                labels: ['Shopping', 'Food', 'Bills', 'Entertainment'],
                datasets: [{
                    data: [65, 30, 52, 26],
                    backgroundColor: ['#4f46e5', '#10b981', '#f59e0b', '#3b82f6'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>