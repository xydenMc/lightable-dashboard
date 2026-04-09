<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center gap-3">
            <button class="sidebar-toggle-nav" id="sidebarToggleNav" type="button">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">
                <i class="fas fa-chart-line me-2"></i>Light Able
            </a>
        </div>
        
        <div class="search-bar mx-auto d-none d-md-block" style="width: 320px;">
            <div class="input-group">
                <span class="input-group-text bg-transparent border-0"><i class="fas fa-search text-muted"></i></span>
                <input type="text" class="form-control border-0" placeholder="Search..." id="globalSearch">
                <button class="btn btn-link" type="button"><kbd>Ctrl+K</kbd></button>
            </div>
        </div>
        
        <div class="d-flex align-items-center gap-3">
            <!-- Theme Toggle Switch -->
            <div class="theme-switch-wrapper">
                <label class="theme-switch">
                    <input type="checkbox" id="themeToggleCheckbox">
                    <span class="slider"><i class="fas fa-sun"></i><i class="fas fa-moon"></i></span>
                </label>
            </div>
            
            <div class="dropdown">
                <button class="btn btn-link position-relative text-dark p-0" data-bs-toggle="dropdown">
                    <i class="fas fa-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 p-0" style="width: 340px;">
                    <div class="p-3 border-bottom" style="background: linear-gradient(135deg, #4f46e5, #7c3aed);">
                        <h6 class="mb-0 fw-bold text-white">Notifications</h6>
                    </div>
                    <div class="notification-list" style="max-height: 400px; overflow-y: auto;">
                        <a href="#" class="dropdown-item d-flex align-items-center gap-3 p-3 border-bottom">
                            <div class="bg-primary bg-opacity-10 p-2 rounded-circle"><i class="fas fa-user-plus text-primary"></i></div>
                            <div><p class="mb-0 small fw-semibold">New user registered</p><small class="text-muted">5 minutes ago</small></div>
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center gap-3 p-3 border-bottom">
                            <div class="bg-success bg-opacity-10 p-2 rounded-circle"><i class="fas fa-chart-line text-success"></i></div>
                            <div><p class="mb-0 small fw-semibold">Sales increased by 25%</p><small class="text-muted">1 hour ago</small></div>
                        </a>
                    </div>
                    <div class="p-2 text-center border-top"><a href="#" class="text-decoration-none small">View all notifications</a></div>
                </div>
            </div>
            
            <div class="dropdown">
                <button class="btn btn-link dropdown-toggle d-flex align-items-center gap-2 text-dark text-decoration-none p-0" data-bs-toggle="dropdown">
                    <img src="https://ui-avatars.com/api/?name=Davin+Loise&background=4f46e5&color=fff&rounded=true&size=40" class="rounded-circle" width="40" height="40">
                    <span class="d-none d-sm-inline fw-semibold">Davin Loise</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-2">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle me-2"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background: rgba(255, 255, 255, 0.98) !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        padding: 0.75rem 1.5rem;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
    }
    
    .navbar-brand {
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent !important;
        font-weight: 800;
    }
    
    .sidebar-toggle-nav {
        background: transparent;
        border: none;
        color: #475569;
        font-size: 1.2rem;
        padding: 0.5rem;
        border-radius: 8px;
        cursor: pointer;
    }
    
    .sidebar-toggle-nav:hover { background: #f1f5f9; color: #4f46e5; }
    
    .search-bar .input-group {
        background: #f1f5f9;
        border-radius: 40px;
    }
    .search-bar input { background: transparent; border: none; padding: 10px 0; }
    .search-bar input:focus { box-shadow: none; }
    .search-bar kbd { background: #e2e8f0; border-radius: 6px; padding: 2px 8px; font-size: 0.7rem; }
    
    /* Theme Switch */
    .theme-switch-wrapper { display: flex; align-items: center; }
    .theme-switch { position: relative; display: inline-block; width: 50px; height: 24px; }
    .theme-switch input { opacity: 0; width: 0; height: 0; }
    .theme-switch .slider {
        position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0;
        background-color: #e2e8f0; transition: 0.3s; border-radius: 34px;
    }
    .theme-switch .slider:before {
        position: absolute; content: ""; height: 18px; width: 18px;
        left: 3px; bottom: 3px; background-color: white; transition: 0.3s; border-radius: 50%;
    }
    .theme-switch .slider .fa-sun, .theme-switch .slider .fa-moon {
        position: absolute; top: 50%; transform: translateY(-50%); font-size: 10px; color: #64748b;
    }
    .theme-switch .slider .fa-sun { left: 8px; }
    .theme-switch .slider .fa-moon { right: 8px; }
    .theme-switch input:checked + .slider { background-color: #4f46e5; }
    .theme-switch input:checked + .slider:before { transform: translateX(26px); }
    
    /* Dark Mode */
    body.dark-mode { background: #0f172a; }
    body.dark-mode .navbar { background: rgba(30, 41, 59, 0.98) !important; }
    body.dark-mode .sidebar { background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%); border-right-color: #334155; }
    body.dark-mode .nav-link-custom { color: #cbd5e1; }
    body.dark-mode .nav-link-custom:hover { background: #334155; }
    body.dark-mode .search-bar .input-group { background: #1e293b; }
    body.dark-mode .dropdown-menu { background: #1e293b; border-color: #334155; }
    body.dark-mode .dropdown-item { color: #cbd5e1; }
    body.dark-mode .dropdown-item:hover { background: #334155; }
    body.dark-mode .card, body.dark-mode .card-stat, body.dark-mode .card-border { background: #1e293b; color: #e2e8f0; }
    body.dark-mode .text-muted { color: #94a3b8 !important; }
    body.dark-mode .bg-light { background: #334155 !important; }
    body.dark-mode .list-group-item { background: transparent; color: #e2e8f0; border-color: #334155; }
    body.dark-mode .table-custom td { color: #e2e8f0; border-color: #334155; }
    body.dark-mode .breadcrumb-item a { color: #94a3b8; }
    
    /* Main Content */
    .main-content {
        margin-left: 280px;
        padding: 0;
        transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        min-height: 100vh;
        margin-top: 70px;
    }
    .main-content.expanded { margin-left: 0; }
    
    @media (max-width: 768px) {
        .main-content { margin-left: 0; }
        .sidebar { transform: translateX(-100%); }
        .sidebar.mobile-open { transform: translateX(0); }
    }
</style>

<script>
    // Dark/Light Mode
    const themeToggle = document.getElementById('themeToggleCheckbox');
    function setTheme(isDark) {
        if (isDark) {
            document.body.classList.add('dark-mode');
            themeToggle.checked = true;
            localStorage.setItem('darkMode', 'enabled');
        } else {
            document.body.classList.remove('dark-mode');
            themeToggle.checked = false;
            localStorage.setItem('darkMode', 'disabled');
        }
    }
    if (localStorage.getItem('darkMode') === 'enabled') setTheme(true);
    themeToggle.addEventListener('change', function() { setTheme(this.checked); });
    
    // Search Modal
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            alert('Search feature - Ctrl+K pressed');
        }
    });
</script>