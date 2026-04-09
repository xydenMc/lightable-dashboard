<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Invoice' ?> | Light Able</title>

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

        .card-border {
            border-radius: 16px;
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

        .trend-up { color: #10b981; }
        .trend-down { color: #ef4444; }

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
    <?= view('layout/sidebar_new') ?>
 <?= view('layout/navbar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid px-4 py-4">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Invoice Dashboard</li>
                </ol>
            </nav>

            <!-- Header -->
            <div class="page-header mb-4">
                <h2 class="fw-bold mb-0" style="color: #0f172a;">Invoice Dashboard</h2>
                <p class="text-muted">Manage invoices, payments, and financial reports</p>
            </div>

            <!-- Row 1: 4 Stats Cards -->
            <div class="row g-3 mb-4">
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-border">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">Total</h6>
                                <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                    <i class="fas fa-arrow-up text-warning"></i> 20.3%
                                </p>
                            </div>
                            <h5 class="mb-2 mt-3 fw-bold">$5,678.09</h5>
                            <div class="d-flex align-items-center gap-1">
                                <h5 class="mb-0">3</h5>
                                <p class="mb-0 text-muted">invoices</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-border">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">Paid</h6>
                                <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                    <i class="fas fa-arrow-down text-danger"></i> -8.73%
                                </p>
                            </div>
                            <h5 class="mb-2 mt-3 fw-bold">$5,678.09</h5>
                            <div class="d-flex align-items-center gap-1">
                                <h5 class="mb-0">5</h5>
                                <p class="mb-0 text-muted">invoices</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-border">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">Pending</h6>
                                <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                    <i class="fas fa-arrow-up text-success"></i> 10.73%
                                </p>
                            </div>
                            <h5 class="mb-2 mt-3 fw-bold">$5,678.09</h5>
                            <div class="d-flex align-items-center gap-1">
                                <h5 class="mb-0">20</h5>
                                <p class="mb-0 text-muted">invoices</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-border">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">Overdue</h6>
                                <p class="mb-0 text-muted d-flex align-items-center gap-1">
                                    <i class="fas fa-arrow-down text-primary"></i> -4.73%
                                </p>
                            </div>
                            <h5 class="mb-2 mt-3 fw-bold">$5,678.09</h5>
                            <div class="d-flex align-items-center gap-1">
                                <h5 class="mb-0">5</h5>
                                <p class="mb-0 text-muted">invoices</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: Chart & Menu Icons -->
            <div class="row g-4 mb-4">
                <div class="col-lg-9">
                    <div class="card card-border">
                        <div class="card-body">
                            <div id="invoiceChart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-border">
                        <div class="card-body">
                            <div class="row g-3 text-center">
                                <div class="col-6">
                                    <div class="card border-0 shadow-none mb-0">
                                        <div class="card-body py-4 px-2 bg-light rounded-3">
                                            <div class="avtar bg-primary rounded-circle mx-auto mb-2">
                                                <i class="fas fa-file-invoice text-white"></i>
                                            </div>
                                            <h6 class="mb-0 mt-2">All Invoices</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card border-0 shadow-none mb-0">
                                        <div class="card-body py-4 px-2 bg-light rounded-3">
                                            <div class="avtar bg-info rounded-circle mx-auto mb-2">
                                                <i class="fas fa-chart-line text-white"></i>
                                            </div>
                                            <h6 class="mb-0 mt-2">Reports</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card border-0 shadow-none mb-0">
                                        <div class="card-body py-4 px-2 bg-light rounded-3">
                                            <div class="avtar bg-success rounded-circle mx-auto mb-2">
                                                <i class="fas fa-dollar-sign text-white"></i>
                                            </div>
                                            <h6 class="mb-0 mt-2">Paid</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card border-0 shadow-none mb-0">
                                        <div class="card-body py-4 px-2 bg-light rounded-3">
                                            <div class="avtar bg-warning rounded-circle mx-auto mb-2">
                                                <i class="fas fa-clock text-white"></i>
                                            </div>
                                            <h6 class="mb-0 mt-2">Pending</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card border-0 shadow-none mb-0">
                                        <div class="card-body py-4 px-2 bg-light rounded-3">
                                            <div class="avtar bg-danger rounded-circle mx-auto mb-2">
                                                <i class="fas fa-times-circle text-white"></i>
                                            </div>
                                            <h6 class="mb-0 mt-2">Cancelled</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card border-0 shadow-none mb-0">
                                        <div class="card-body py-4 px-2 bg-light rounded-3">
                                            <div class="avtar bg-secondary rounded-circle mx-auto mb-2">
                                                <i class="fas fa-pen-fancy text-white"></i>
                                            </div>
                                            <h6 class="mb-0 mt-2">Draft</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 3: Recent Invoice, Total Expenses, Notification -->
            <div class="row g-4">
                <!-- Recent Invoice -->
                <div class="col-xl-4 col-md-6">
                    <div class="card card-border">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-0 fw-bold">Recent Invoice</h5>
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
                        </div>
                        <div class="card-body pt-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="avatar" class="rounded-circle" width="40" height="40">
                                        </div>
                                        <div class="flex-grow-1 mx-3">
                                            <h6 class="mb-1">David Jones <span class="text-muted">- #790841</span></h6>
                                            <p class="mb-0 text-primary fw-bold">$329.20</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <small class="text-muted">5 min ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="avatar" class="rounded-circle" width="40" height="40">
                                        </div>
                                        <div class="flex-grow-1 mx-3">
                                            <h6 class="mb-1">Jenny Jones <span class="text-muted">- #790841</span></h6>
                                            <p class="mb-0 text-primary fw-bold">$329.20</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <small class="text-muted">1 day ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="avatar" class="rounded-circle" width="40" height="40">
                                        </div>
                                        <div class="flex-grow-1 mx-3">
                                            <h6 class="mb-1">Harry Ben <span class="text-muted">- #790841</span></h6>
                                            <p class="mb-0 text-primary fw-bold">$329.20</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <small class="text-muted">3 week ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="avatar" class="rounded-circle" width="40" height="40">
                                        </div>
                                        <div class="flex-grow-1 mx-3">
                                            <h6 class="mb-1">Jenifer Vintage <span class="text-muted">- #790841</span></h6>
                                            <p class="mb-0 text-primary fw-bold">$329.20</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <small class="text-muted">3 week ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 pt-3">
                                    <div class="d-grid">
                                        <button class="btn btn-outline-secondary rounded-pill">View All</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Total Expenses -->
                <div class="col-xl-4 col-md-6">
                    <div class="card card-border">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-0 fw-bold">Total Expenses</h5>
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
                        </div>
                        <div class="card-body">
                            <div id="expensesChart" style="height: 200px;"></div>
                            <div class="mt-3">
                                <div class="d-flex justify-content-between align-items-center mb-2 pending-item" style="cursor: pointer;">
                                    <h6 class="mb-0"><i class="fas fa-circle text-warning me-2"></i> Pending</h6>
                                    <p class="mb-0 fw-bold">$3,202</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2 paid-item" style="cursor: pointer;">
                                    <h6 class="mb-0"><i class="fas fa-circle text-success me-2"></i> Paid</h6>
                                    <p class="mb-0 fw-bold">$45,050</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2 overdue-item" style="cursor: pointer;">
                                    <h6 class="mb-0"><i class="fas fa-circle text-danger me-2"></i> Overdue</h6>
                                    <p class="mb-0 fw-bold">$25,000</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center draft-item" style="cursor: pointer;">
                                    <h6 class="mb-0"><i class="fas fa-circle text-secondary me-2"></i> Draft</h6>
                                    <p class="mb-0 fw-bold">$7,694</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notification -->
                <div class="col-xl-4 col-md-12">
                    <div class="card card-border">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-0 fw-bold">Notification</h5>
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
                        </div>
                        <div class="card-body pt-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avtar bg-light-success rounded-circle me-3">
                                            <i class="fas fa-download text-success"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Johnny sent you an invoice billed <strong class="text-primary">$1,000</strong>.</h6>
                                            <small class="text-muted">2 August</small>
                                        </div>
                                        <a href="#" class="text-muted"><i class="fas fa-link"></i></a>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avtar bg-light-primary rounded-circle me-3">
                                            <i class="fas fa-file-invoice text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Sent an invoice to Aida Bugg amount of <strong class="text-primary">$200</strong>.</h6>
                                            <small class="text-muted">7 hours ago</small>
                                        </div>
                                        <a href="#" class="text-muted"><i class="fas fa-link"></i></a>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avtar bg-light-danger rounded-circle me-3">
                                            <i class="fas fa-exclamation-triangle text-danger"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">There was a failure to your setup</h6>
                                            <small class="text-muted">7 hours ago</small>
                                        </div>
                                        <a href="#" class="text-muted"><i class="fas fa-link"></i></a>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 pt-3">
                                    <div class="d-grid">
                                        <button class="btn btn-outline-secondary rounded-pill">View All</button>
                                    </div>
                                </li>
                            </ul>
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
        // Invoice Chart
        var invoiceOptions = {
            series: [{ name: 'Income', data: [31, 40, 28, 51, 42, 85, 77, 60, 55, 68, 45, 70] }, { name: 'Expenses', data: [11, 32, 45, 32, 34, 52, 41, 38, 44, 58, 35, 48] }],
            chart: { type: 'area', height: 320, toolbar: { show: false } },
            colors: ['#4f46e5', '#f59e0b'],
            stroke: { curve: 'smooth', width: 2 },
            fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.3, opacityTo: 0.1 } },
            xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] },
            tooltip: { shared: true }
        };
        new ApexCharts(document.querySelector("#invoiceChart"), invoiceOptions).render();

        // Expenses Chart (Donut)
        var expensesOptions = {
            series: [3202, 45050, 25000, 7694],
            chart: { type: 'donut', height: 200 },
            labels: ['Pending', 'Paid', 'Overdue', 'Draft'],
            colors: ['#f59e0b', '#10b981', '#ef4444', '#6c757d'],
            legend: { show: false },
            dataLabels: { enabled: false },
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                        labels: {
                            show: true,
                            name: { show: true, fontSize: '14px', fontWeight: 600, offsetY: -10 },
                            value: { show: true, fontSize: '18px', fontWeight: 'bold', color: '#1e293b', offsetY: 10, formatter: function(val) { return '$' + val.toLocaleString(); } },
                            total: { show: true, label: 'Total', fontSize: '12px', color: '#6c757d', formatter: function(w) { var total = w.globals.seriesTotals.reduce((a, b) => a + b, 0); return '$' + total.toLocaleString(); } }
                        }
                    }
                }
            },
            tooltip: { y: { formatter: function(val) { return '$' + val.toLocaleString(); } } }
        };

        var expensesChart = new ApexCharts(document.querySelector("#expensesChart"), expensesOptions);
        expensesChart.render();

        function updateCenterText(label, value) {
            expensesChart.updateOptions({
                plotOptions: {
                    pie: {
                        donut: {
                            labels: {
                                name: { formatter: function() { return label; } },
                                value: { formatter: function() { return '$' + value.toLocaleString(); } }
                            }
                        }
                    }
                }
            });
        }

        document.querySelector('.pending-item').addEventListener('click', function() { updateCenterText('Pending', 3202); });
        document.querySelector('.paid-item').addEventListener('click', function() { updateCenterText('Paid', 45050); });
        document.querySelector('.overdue-item').addEventListener('click', function() { updateCenterText('Overdue', 25000); });
        document.querySelector('.draft-item').addEventListener('click', function() { updateCenterText('Draft', 7694); });
    </script>
</body>

</html>