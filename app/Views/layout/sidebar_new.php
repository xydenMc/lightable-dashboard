<?php
// Helper function untuk mengecek active menu
function isActive($segments) {
    $currentUri = current_url();
    foreach ((array)$segments as $segment) {
        if (strpos($currentUri, $segment) !== false) {
            return true;
        }
    }
    return false;
}
?>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg fixed-top" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); box-shadow: 0 4px 20px rgba(0,0,0,0.1); z-index: 1000;">
    <div class="container-fluid px-4">
        <!-- Toggle Button -->
        <button class="btn btn-link d-lg-none text-white" type="button" id="sidebarToggle">
            <i class="fas fa-bars fs-4"></i>
        </button>
        
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-white" href="<?= base_url('/') ?>">
            <i class="fas fa-chart-line me-2"></i>Light Able
        </a>
        
        <!-- Search Bar -->
        <div class="search-bar mx-auto d-none d-md-block" style="width: 300px;">
            <div class="input-group">
                <span class="input-group-text bg-dark border-0 text-white-50">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control bg-dark border-0 text-white" placeholder="Search..." id="globalSearch">
                <button class="btn btn-dark border-0" type="button" id="searchShortcut">
                    <kbd class="bg-secondary text-white">Ctrl</kbd>+<kbd class="bg-secondary text-white">K</kbd>
                </button>
            </div>
        </div>
        
        <!-- Right Side Icons -->
        <div class="d-flex align-items-center gap-3">
            <div class="dropdown">
                <button class="btn btn-link text-white position-relative" data-bs-toggle="dropdown">
                    <i class="fas fa-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 p-0" style="width: 320px;">
                    <div class="p-3 border-bottom bg-gradient-primary text-white rounded-top">
                        <h6 class="mb-0 fw-bold">Notifications</h6>
                    </div>
                    <div class="notification-list" style="max-height: 400px; overflow-y: auto;">
                        <a href="#" class="dropdown-item d-flex align-items-center gap-3 p-3 border-bottom">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-circle">
                                <i class="fas fa-user-plus text-primary"></i>
                            </div>
                            <div>
                                <p class="mb-0 small">New user registered</p>
                                <small class="text-muted">5 minutes ago</small>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center gap-3 p-3 border-bottom">
                            <div class="bg-success bg-opacity-10 p-2 rounded-circle">
                                <i class="fas fa-chart-line text-success"></i>
                            </div>
                            <div>
                                <p class="mb-0 small">Sales increased by 25%</p>
                                <small class="text-muted">1 hour ago</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="dropdown">
                <button class="btn btn-link text-white" data-bs-toggle="dropdown">
                    <i class="fas fa-cog fs-5"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0">
                    <li>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                            Dark Mode
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="darkModeToggle">
                            </div>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                </ul>
            </div>
            
            <div class="dropdown">
                <button class="btn btn-link dropdown-toggle d-flex align-items-center gap-2 text-white text-decoration-none" data-bs-toggle="dropdown">
                    <img src="https://ui-avatars.com/api/?name=Davin+Loise&background=4f46e5&color=fff&rounded=true&bold=true" class="rounded-circle" width="35" height="35">
                    <span class="d-none d-sm-inline">Davin Loise</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle me-2"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-shield-alt me-2"></i> Privacy</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar Navigation -->
<div class="sidebar position-fixed" style="width: 280px; left: 0; top: 70px; bottom: 0; overflow-y: auto; z-index: 999; background: linear-gradient(180deg, #1a1a2e 0%, #0f3460 100%);">
    <div class="p-3">
        <!-- User Info -->
        <div class="text-center mb-4 pb-3 border-bottom border-secondary">
            <img src="https://ui-avatars.com/api/?name=Davin+Loise&background=4f46e5&color=fff&rounded=true&size=100&bold=true" class="rounded-circle mb-3 border border-3 border-primary" width="80" height="80">
            <h6 class="mb-0 fw-bold text-white">Davin Loise</h6>
            <small class="text-white-50">Administrator</small>
            <div class="mt-2">
                <span class="badge bg-success"><i class="fas fa-circle me-1" style="font-size: 8px;"></i> Online</span>
            </div>
        </div>
        
        <!-- Search Mobile -->
        <div class="d-md-none mb-3">
            <div class="input-group">
                <input type="text" class="form-control bg-dark border-0 text-white" placeholder="Search menu...">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="nav flex-column">
            
            <!-- ==================== NAVIGASI ==================== -->
            <div class="nav-section mb-3">
                <div class="text-uppercase small text-white-50 mb-2 px-3 fw-bold">
                    <i class="fas fa-compass me-2"></i> NAVIGASI
                </div>
                
                <!-- Dashboard -->
                <div class="nav-item mb-1">
                    <a href="<?= base_url('/') ?>" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 transition <?= (current_url() == base_url('/') || current_url() == base_url('/dashboard')) ? 'active bg-primary text-white' : 'text-white-50' ?>" data-bs-toggle="tooltip" title="Dashboard">
                        <i class="fas fa-tachometer-alt fs-5" style="width: 24px;"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
                
                <!-- Analytics Dropdown -->
                <?php 
                    $isAnalyticsActive = isActive(['/affiliate', '/finance', '/helpdesk', '/invoice']);
                ?>
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#analyticsMenu" aria-expanded="<?= $isAnalyticsActive ? 'true' : 'false' ?>">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-chart-line fs-5" style="width: 24px;"></i>
                            <span>Analytics</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1 <?= $isAnalyticsActive ? 'show' : '' ?>" id="analyticsMenu">
                        <a href="<?= base_url('/affiliate') ?>" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 <?= (current_url() == base_url('/affiliate')) ? 'active bg-primary text-white' : 'text-white-50' ?>">
                            <i class="fas fa-link" style="width: 20px;"></i>
                            <span>Affiliate</span>
                        </a>
                        <a href="<?= base_url('/finance') ?>" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 <?= (current_url() == base_url('/finance')) ? 'active bg-primary text-white' : 'text-white-50' ?>">
                            <i class="fas fa-coins" style="width: 20px;"></i>
                            <span>Finance</span>
                        </a>
                        <a href="<?= base_url('/helpdesk') ?>" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 <?= (current_url() == base_url('/helpdesk')) ? 'active bg-primary text-white' : 'text-white-50' ?>">
                            <i class="fas fa-headset" style="width: 20px;"></i>
                            <span>Helpdesk</span>
                        </a>
                        <a href="<?= base_url('/invoice') ?>" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 <?= (current_url() == base_url('/invoice')) ? 'active bg-primary text-white' : 'text-white-50' ?>">
                            <i class="fas fa-file-invoice" style="width: 20px;"></i>
                            <span>Invoice</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- ==================== WIDGET ==================== -->
            <div class="nav-section mb-3">
                <div class="text-uppercase small text-white-50 mb-2 px-3 fw-bold">
                    <i class="fas fa-puzzle-piece me-2"></i> WIDGET
                </div>
                
                <div class="nav-item mb-1">
                    <a href="<?= base_url('/statistics') ?>" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 <?= (current_url() == base_url('/statistics')) ? 'active bg-primary text-white' : 'text-white-50' ?>">
                        <i class="fas fa-chart-bar fs-5" style="width: 24px;"></i>
                        <span>Statistics</span>
                    </a>
                </div>
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                        <i class="fas fa-users" style="width: 24px;"></i>
                        <span>User</span>
                    </a>
                </div>
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                        <i class="fas fa-database" style="width: 24px;"></i>
                        <span>Data</span>
                    </a>
                </div>
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                        <i class="fas fa-chart-pie" style="width: 24px;"></i>
                        <span>Chart</span>
                    </a>
                </div>
            </div>
            
            <!-- ==================== APPLICATION ==================== -->
            <div class="nav-section mb-3">
                <div class="text-uppercase small text-white-50 mb-2 px-3 fw-bold">
                    <i class="fas fa-th-large me-2"></i> APPLICATION
                </div>
                
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                        <i class="fas fa-calendar-alt" style="width: 24px;"></i>
                        <span>Calendar</span>
                    </a>
                </div>
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                        <i class="fas fa-comments" style="width: 24px;"></i>
                        <span>Chat</span>
                    </a>
                </div>
                
                <!-- Gallery Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#galleryMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-images" style="width: 24px;"></i>
                            <span>Gallery</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="galleryMenu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-th" style="width: 20px;"></i>
                            <span>Grid</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-th-large" style="width: 20px;"></i>
                            <span>Masonry</span>
                        </a>
                    </div>
                </div>
                
                <!-- Ecommerce Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#ecommerceMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-shopping-cart" style="width: 24px;"></i>
                            <span>Ecommerce</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="ecommerceMenu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-tag" style="width: 20px;"></i>
                            <span>Product</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-info-circle" style="width: 20px;"></i>
                            <span>Product Detail</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-list" style="width: 20px;"></i>
                            <span>Product List</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-plus-circle" style="width: 20px;"></i>
                            <span>Product Add</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-credit-card" style="width: 20px;"></i>
                            <span>Checkout</span>
                        </a>
                    </div>
                </div>
                
                <!-- Helpdesk Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#helpdeskAppMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-life-ring" style="width: 24px;"></i>
                            <span>Helpdesk</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="helpdeskAppMenu">
                        <a href="<?= base_url('/helpdesk') ?>" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-chart-line" style="width: 20px;"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-ticket-alt" style="width: 20px;"></i>
                            <span>Ticket</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-user-friends" style="width: 20px;"></i>
                            <span>Customer</span>
                        </a>
                    </div>
                </div>
                
                <!-- Invoice 1 Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#invoice1Menu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-file-invoice" style="width: 24px;"></i>
                            <span>Invoice 1</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="invoice1Menu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-list-ul" style="width: 20px;"></i>
                            <span>List</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-plus-circle" style="width: 20px;"></i>
                            <span>Create</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-eye" style="width: 20px;"></i>
                            <span>Preview</span>
                        </a>
                    </div>
                </div>
                
                <!-- Invoice 2 Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#invoice2Menu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-file-invoice-dollar" style="width: 24px;"></i>
                            <span>Invoice 2</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="invoice2Menu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-chart-line" style="width: 20px;"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-plus-circle" style="width: 20px;"></i>
                            <span>Create</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-info-circle" style="width: 20px;"></i>
                            <span>Details</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-list-ul" style="width: 20px;"></i>
                            <span>List</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-edit" style="width: 20px;"></i>
                            <span>Edit</span>
                        </a>
                    </div>
                </div>
                
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                        <i class="fas fa-envelope" style="width: 24px;"></i>
                        <span>Mail</span>
                        <span class="badge bg-danger ms-auto">New</span>
                    </a>
                </div>
                
                <!-- Membership Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#membershipMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-id-card" style="width: 24px;"></i>
                            <span>Membership</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="membershipMenu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-chart-line" style="width: 20px;"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-list" style="width: 20px;"></i>
                            <span>List</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-tags" style="width: 20px;"></i>
                            <span>Pricing</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-cog" style="width: 20px;"></i>
                            <span>Setting</span>
                        </a>
                    </div>
                </div>
                
                <!-- Online Courses Dropdown (Nested) -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#coursesMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-graduation-cap" style="width: 24px;"></i>
                            <span>Online Courses</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="coursesMenu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-chart-line" style="width: 20px;"></i>
                            <span>Dashboard</span>
                        </a>
                        <!-- Teacher Submenu -->
                        <div class="nav-item ms-3">
                            <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#teacherSubmenu">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="fas fa-chalkboard-teacher" style="width: 20px;"></i>
                                    <span>Teacher</span>
                                </div>
                                <i class="fas fa-chevron-down small transition-icon"></i>
                            </a>
                            <div class="collapse ms-3 mt-1" id="teacherSubmenu">
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-list" style="width: 16px;"></i>
                                    <span>List</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-paper-plane" style="width: 16px;"></i>
                                    <span>Apply</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-plus" style="width: 16px;"></i>
                                    <span>Add</span>
                                </a>
                            </div>
                        </div>
                        <!-- Student Submenu -->
                        <div class="nav-item ms-3">
                            <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#studentSubmenu">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="fas fa-user-graduate" style="width: 20px;"></i>
                                    <span>Student</span>
                                </div>
                                <i class="fas fa-chevron-down small transition-icon"></i>
                            </a>
                            <div class="collapse ms-3 mt-1" id="studentSubmenu">
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-list" style="width: 16px;"></i>
                                    <span>List</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-paper-plane" style="width: 16px;"></i>
                                    <span>Apply</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-plus" style="width: 16px;"></i>
                                    <span>Add</span>
                                </a>
                            </div>
                        </div>
                        <!-- Courses Submenu -->
                        <div class="nav-item ms-3">
                            <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#coursesSubmenu">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="fas fa-book" style="width: 20px;"></i>
                                    <span>Courses</span>
                                </div>
                                <i class="fas fa-chevron-down small transition-icon"></i>
                            </a>
                            <div class="collapse ms-3 mt-1" id="coursesSubmenu">
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-eye" style="width: 16px;"></i>
                                    <span>View</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-plus" style="width: 16px;"></i>
                                    <span>Add</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- User Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#userMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-user-circle" style="width: 24px;"></i>
                            <span>User</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="userMenu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-id-card" style="width: 20px;"></i>
                            <span>Account Profile</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fab fa-facebook" style="width: 20px;"></i>
                            <span>Social media</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-address-card" style="width: 20px;"></i>
                            <span>User Card</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-list" style="width: 20px;"></i>
                            <span>User List</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-users" style="width: 20px;"></i>
                            <span>Team</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- ==================== PAGES ==================== -->
            <div class="nav-section mb-3">
                <div class="text-uppercase small text-white-50 mb-2 px-3 fw-bold">
                    <i class="fas fa-file-alt me-2"></i> PAGES
                </div>
                
                <!-- Authentication Dropdown (Nested Level 2) -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#authMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-shield-alt" style="width: 24px;"></i>
                            <span>Authentication</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="authMenu">
                        <!-- Authentication 1 Submenu -->
                        <div class="nav-item ms-2">
                            <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#auth1Submenu">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="fas fa-lock" style="width: 20px;"></i>
                                    <span>Authentication 1</span>
                                </div>
                                <i class="fas fa-chevron-down small transition-icon"></i>
                            </a>
                            <div class="collapse ms-3 mt-1" id="auth1Submenu">
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-sign-in-alt" style="width: 16px;"></i>
                                    <span>Login</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-user-plus" style="width: 16px;"></i>
                                    <span>Register</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-key" style="width: 16px;"></i>
                                    <span>Forget Password</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-sync-alt" style="width: 16px;"></i>
                                    <span>Reset Password</span>
                                </a>
                                <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                                    <i class="fas fa-check-circle" style="width: 16px;"></i>
                                    <span>Code verification</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Maintenance Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#maintenanceMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-tools" style="width: 24px;"></i>
                            <span>Maintenance</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="maintenanceMenu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-exclamation-triangle" style="width: 20px;"></i>
                            <span>Error 404</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-wifi" style="width: 20px;"></i>
                            <span>Connection Lost</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-hard-hat" style="width: 20px;"></i>
                            <span>Under Construction</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-hourglass-half" style="width: 20px;"></i>
                            <span>Coming-Soon</span>
                        </a>
                    </div>
                </div>
                
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                        <i class="fas fa-phone-alt" style="width: 24px;"></i>
                        <span>Contact Us</span>
                    </a>
                </div>
                
                <!-- Search Dropdown -->
                <div class="nav-item mb-1">
                    <a href="#" class="nav-link d-flex align-items-center justify-content-between py-2 px-3 rounded-3 text-white-50" data-bs-toggle="collapse" data-bs-target="#searchMenu">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-search" style="width: 24px;"></i>
                            <span>Search</span>
                        </div>
                        <i class="fas fa-chevron-down small transition-icon"></i>
                    </a>
                    <div class="collapse ms-4 mt-1" id="searchMenu">
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-search" style="width: 20px;"></i>
                            <span>Search Page</span>
                        </a>
                        <a href="#" class="nav-link d-flex align-items-center gap-3 py-2 px-3 rounded-3 text-white-50">
                            <i class="fas fa-address-book" style="width: 20px;"></i>
                            <span>Contact Search</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Upgrade Card -->
        <div class="mt-4 p-3 bg-primary bg-opacity-10 rounded-3 text-center border border-primary">
            <i class="fas fa-crown fs-1 text-warning mb-2"></i>
            <h6 class="fw-bold text-white">Upgrade to Pro</h6>
            <small class="text-white-50 d-block mb-2">Get more features</small>
            <button class="btn btn-primary btn-sm w-100 rounded-pill">Upgrade Now</button>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white rounded-4">
            <div class="modal-body p-0">
                <div class="p-3 border-bottom border-secondary">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-0 text-white-50">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control bg-transparent border-0 text-white shadow-none" placeholder="Search menu..." id="searchInput" autofocus>
                    </div>
                </div>
                <div id="searchResults" class="p-2" style="max-height: 400px; overflow-y: auto;"></div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Sidebar Styles */
    .sidebar {
        transition: transform 0.3s ease;
        scrollbar-width: thin;
        scrollbar-color: #4f46e5 #1a1a2e;
    }
    
    .sidebar::-webkit-scrollbar {
        width: 5px;
    }
    
    .sidebar::-webkit-scrollbar-track {
        background: #1a1a2e;
    }
    
    .sidebar::-webkit-scrollbar-thumb {
        background: #4f46e5;
        border-radius: 10px;
    }
    
    .nav-link {
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }
    
    .nav-link:hover:not(.active) {
        background: rgba(79, 70, 229, 0.2);
        transform: translateX(5px);
        color: white !important;
    }
    
    .nav-link.active {
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: white !important;
        box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
    }
    
    .transition-icon {
        transition: transform 0.3s ease;
    }
    
    [aria-expanded="true"] .transition-icon {
        transform: rotate(180deg);
    }
    
    .collapse {
        transition: all 0.3s ease;
    }
    
    .nav-section {
        animation: fadeInUp 0.5s ease;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Main Content Adjustment */
    body {
        padding-top: 70px;
        background: #f5f7fc;
        font-family: 'Poppins', 'Inter', sans-serif;
    }
    
    .main-content {
        margin-left: 280px;
        padding: 20px;
        min-height: calc(100vh - 70px);
        transition: margin-left 0.3s ease;
    }
    
    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
            top: 70px;
        }
        .sidebar.show {
            transform: translateX(0);
        }
        .main-content {
            margin-left: 0;
        }
    }
    
    /* Dark Mode */
    body.dark-mode {
        background: #0f172a;
    }
    
    body.dark-mode .card,
    body.dark-mode .modal-content {
        background: #1e293b !important;
        color: #e2e8f0 !important;
    }
    
    /* Tooltip */
    .tooltip {
        font-size: 0.75rem;
    }
    
    /* Badge styles */
    .badge {
        font-weight: 500;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Sidebar Toggle for Mobile
    document.getElementById('sidebarToggle')?.addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('show');
    });
    
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Search functionality
    const menuData = [
        { name: 'Dashboard', url: '<?= base_url('/') ?>', icon: 'tachometer-alt', section: 'Navigasi' },
        { name: 'Affiliate', url: '<?= base_url('/affiliate') ?>', icon: 'link', section: 'Navigasi' },
        { name: 'Finance', url: '<?= base_url('/finance') ?>', icon: 'coins', section: 'Navigasi' },
        { name: 'Helpdesk', url: '<?= base_url('/helpdesk') ?>', icon: 'headset', section: 'Navigasi' },
        { name: 'Invoice', url: '<?= base_url('/invoice') ?>', icon: 'file-invoice', section: 'Navigasi' },
        { name: 'Statistics', url: '<?= base_url('/statistics') ?>', icon: 'chart-bar', section: 'Widget' }
    ];
    
    const searchModal = new bootstrap.Modal(document.getElementById('searchModal'));
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            searchModal.show();
            setTimeout(() => searchInput?.focus(), 500);
        }
    });
    
    document.getElementById('searchShortcut')?.addEventListener('click', function() {
        searchModal.show();
        setTimeout(() => searchInput?.focus(), 500);
    });
    
    searchInput?.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        if (query.length === 0) {
            searchResults.innerHTML = '<div class="text-center text-white-50 p-3"><i class="fas fa-search fs-1 mb-2 d-block"></i><small>Start typing to search...</small></div>';
            return;
        }
        
        const filtered = menuData.filter(item => item.name.toLowerCase().includes(query));
        
        if (filtered.length === 0) {
            searchResults.innerHTML = `<div class="text-center text-white-50 p-3"><i class="fas fa-frown fs-1 mb-2 d-block"></i><small>No results found for "${query}"</small></div>`;
        } else {
            let resultsHtml = '';
            let currentSection = '';
            filtered.forEach(item => {
                if (item.section !== currentSection) {
                    currentSection = item.section;
                    resultsHtml += `<div class="text-primary small px-3 pt-2 pb-1 fw-bold">${currentSection}</div>`;
                }
                resultsHtml += `
                    <a href="${item.url}" class="search-result-item d-flex align-items-center gap-3 p-3 text-decoration-none text-white rounded-3 hover-bg">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-circle">
                            <i class="fas fa-${item.icon} text-primary"></i>
                        </div>
                        <div>
                            <p class="mb-0 fw-semibold">${item.name}</p>
                            <small class="text-white-50">${item.url}</small>
                        </div>
                    </a>
                `;
            });
            searchResults.innerHTML = resultsHtml;
        }
    });
    
    // Dark Mode Toggle
    document.getElementById('darkModeToggle')?.addEventListener('change', function() {
        if (this.checked) {
            document.body.classList.add('dark-mode');
            localStorage.setItem('darkMode', 'enabled');
        } else {
            document.body.classList.remove('dark-mode');
            localStorage.setItem('darkMode', 'disabled');
        }
    });
    
    if (localStorage.getItem('darkMode') === 'enabled') {
        document.body.classList.add('dark-mode');
        document.getElementById('darkModeToggle')?.setAttribute('checked', 'checked');
    }
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const sidebar = document.querySelector('.sidebar');
        const toggle = document.getElementById('sidebarToggle');
        if (window.innerWidth <= 768 && sidebar && toggle) {
            if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                sidebar.classList.remove('show');
            }
        }
    });
    
    // Hover effect for search results
    document.addEventListener('mouseover', function(e) {
        if (e.target.closest('.search-result-item')) {
            e.target.closest('.search-result-item').style.background = 'rgba(79, 70, 229, 0.2)';
        }
    });
    document.addEventListener('mouseout', function(e) {
        if (e.target.closest('.search-result-item')) {
            e.target.closest('.search-result-item').style.background = 'transparent';
        }
    });
</script>

<style>
    .hover-bg:hover {
        background: rgba(79, 70, 229, 0.2) !important;
    }
    
    /* Smooth transitions for all interactive elements */
    .nav-link, .btn, .transition-all {
        transition: all 0.3s ease;
    }
    
    /* Glass morphism effect for cards */
    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    /* Animated gradient border */
    .animated-border {
        position: relative;
        overflow: hidden;
    }
    
    .animated-border::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #4f46e5, transparent);
        animation: borderSlide 3s infinite;
    }
    
    @keyframes borderSlide {
        0% { left: -100%; }
        100% { left: 100%; }
    }
</style>