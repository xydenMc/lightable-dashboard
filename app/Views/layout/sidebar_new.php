<!-- Sidebar Navigation -->
<div class="sidebar" id="sidebar">
    <div class="user-profile-sidebar">
        <div class="d-flex align-items-center gap-3">
            <img src="https://ui-avatars.com/api/?name=Davin+Loise&background=ffffff&color=4f46e5&rounded=true&size=50" class="rounded-circle" width="50" height="50">
            <div>
                <h6 class="mb-0 fw-bold">Davin Loise</h6>
                <small class="opacity-75">Administrator</small>
                <div class="mt-1">
                    <span class="badge bg-white text-dark">Online</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sidebar-menu p-2">
        <div class="nav-main-title">NAVIGASI</div>
        
        <div class="nav-item">
            <a href="<?= base_url('/') ?>" class="nav-link-custom <?= ($activePage ?? '') == 'dashboard' ? 'active' : '' ?>">
                <i class="fas fa-home"></i>
                <span class="nav-label">Dashboard</span>
            </a>
        </div>
        
        <div class="nav-item">
            <div class="nav-link-custom has-submenu" data-menu="analytics">
                <i class="fas fa-chart-line"></i>
                <span class="nav-label">Analytics</span>
                <i class="fas fa-chevron-down chevron-icon ms-auto"></i>
            </div>
            <div class="sub-menu" data-submenu="analytics">
                <a href="<?= base_url('/analytics') ?>" class="sub-link"><i class="fas fa-chart-pie"></i><span>Analytics Overview</span></a>
                <a href="<?= base_url('/affiliate') ?>" class="sub-link"><i class="fas fa-link"></i><span>Affiliate</span></a>
                <a href="<?= base_url('/finance') ?>" class="sub-link"><i class="fas fa-coins"></i><span>Finance</span></a>
                <a href="<?= base_url('/helpdesk') ?>" class="sub-link"><i class="fas fa-headset"></i><span>Helpdesk</span></a>
                <a href="<?= base_url('/invoice') ?>" class="sub-link"><i class="fas fa-file-invoice"></i><span>Invoice</span></a>
            </div>
        </div>
        
        <div class="nav-main-title mt-3">WIDGET</div>
        <div class="nav-item"><a href="<?= base_url('/statistics') ?>" class="nav-link-custom"><i class="fas fa-chart-bar"></i><span class="nav-label">Statistics</span></a></div>
        <div class="nav-item"><a href="<?= base_url('/user-widget') ?>" class="nav-link-custom"><i class="fas fa-users"></i><span class="nav-label">User</span></a></div>
        <div class="nav-item"><a href="<?= base_url('/data-widget') ?>" class="nav-link-custom"><i class="fas fa-database"></i><span class="nav-label">Data</span></a></div>
        <div class="nav-item"><a href="<?= base_url('/chart-widget') ?>" class="nav-link-custom"><i class="fas fa-chart-simple"></i><span class="nav-label">Chart</span></a></div>
        
        <div class="nav-main-title mt-3">APPLICATION</div>
        <div class="nav-item"><a href="<?= base_url('/calendar') ?>" class="nav-link-custom"><i class="fas fa-calendar-alt"></i><span class="nav-label">Calendar</span></a></div>
        <div class="nav-item"><a href="<?= base_url('/chat') ?>" class="nav-link-custom"><i class="fas fa-comments"></i><span class="nav-label">Chat</span></a></div>
        
        <div class="nav-item">
            <div class="nav-link-custom has-submenu" data-menu="gallery">
                <i class="fas fa-images"></i><span class="nav-label">Gallery</span><i class="fas fa-chevron-down chevron-icon ms-auto"></i>
            </div>
            <div class="sub-menu" data-submenu="gallery">
                <a href="<?= base_url('/gallery/grid') ?>" class="sub-link"><i class="fas fa-th"></i><span>Grid</span></a>
                <a href="<?= base_url('/gallery/masonry') ?>" class="sub-link"><i class="fas fa-masonry"></i><span>Masonry</span></a>
            </div>
        </div>
        
        <div class="nav-item">
            <div class="nav-link-custom has-submenu" data-menu="ecommerce">
                <i class="fas fa-store"></i><span class="nav-label">Ecommerce</span><i class="fas fa-chevron-down chevron-icon ms-auto"></i>
            </div>
            <div class="sub-menu" data-submenu="ecommerce">
                <a href="<?= base_url('/ecommerce/product') ?>" class="sub-link"><i class="fas fa-box"></i><span>Product</span></a>
                <a href="<?= base_url('/ecommerce/product-detail') ?>" class="sub-link"><i class="fas fa-info-circle"></i><span>Product Detail</span></a>
                <a href="<?= base_url('/ecommerce/product-list') ?>" class="sub-link"><i class="fas fa-list"></i><span>Product List</span></a>
                <a href="<?= base_url('/ecommerce/product-add') ?>" class="sub-link"><i class="fas fa-plus-circle"></i><span>Product Add</span></a>
                <a href="<?= base_url('/ecommerce/checkout') ?>" class="sub-link"><i class="fas fa-credit-card"></i><span>Checkout</span></a>
            </div>
        </div>
        
        <div class="nav-main-title mt-3">PAGES</div>
        <div class="nav-item"><a href="<?= base_url('/contact-us') ?>" class="nav-link-custom"><i class="fas fa-address-card"></i><span class="nav-label">Contact Us</span></a></div>
    </div>
</div>

<style>
    /* Sidebar Styles */
    .sidebar {
        width: 280px;
        position: fixed;
        left: 0;
        top: 70px;
        bottom: 0;
        background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        box-shadow: 2px 0 12px rgba(0,0,0,0.03);
        overflow-y: auto;
        z-index: 1020;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-right: 1px solid rgba(203, 213, 225, 0.5);
    }
    
    .sidebar.collapsed {
        transform: translateX(-100%);
    }
    
    .user-profile-sidebar {
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        border-radius: 20px;
        padding: 20px;
        margin: 16px;
        color: white;
    }
    
    .nav-main-title {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        color: #94a3b8;
        padding: 12px 20px 8px;
    }
    
    .nav-link-custom {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 20px;
        margin: 4px 12px;
        border-radius: 12px;
        color: #475569;
        text-decoration: none;
        cursor: pointer;
    }
    
    .nav-link-custom i { width: 24px; font-size: 1.2rem; }
    .nav-link-custom .nav-label { flex: 1; font-weight: 500; font-size: 0.9rem; }
    .nav-link-custom .chevron-icon { font-size: 0.8rem; transition: transform 0.3s ease; }
    .nav-link-custom:hover { background: #f1f5f9; color: #4f46e5; }
    .nav-link-custom.active { background: linear-gradient(135deg, #4f46e5, #7c3aed); color: white; }
    
    .sub-menu {
        padding-left: 56px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }
    .sub-menu.show { max-height: 500px; }
    .sub-menu .sub-link {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 16px;
        margin: 2px 12px;
        border-radius: 10px;
        color: #64748b;
        text-decoration: none;
        font-size: 0.85rem;
    }
    .sub-menu .sub-link:hover { background: #f1f5f9; color: #4f46e5; }
    .sub-menu .sub-link.active { background: #eef2ff; color: #4f46e5; }
</style>

<script>
    // Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.main-content');
    let sidebarCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
    
    function toggleSidebar() {
        if (sidebarCollapsed) {
            sidebar.classList.remove('collapsed');
            if (mainContent) mainContent.classList.remove('expanded');
            sidebarCollapsed = false;
        } else {
            sidebar.classList.add('collapsed');
            if (mainContent) mainContent.classList.add('expanded');
            sidebarCollapsed = true;
        }
        localStorage.setItem('sidebarCollapsed', sidebarCollapsed);
    }
    
    // Tombol toggle di navbar
    const navbarToggleBtn = document.getElementById('sidebarToggleNav');
    if (navbarToggleBtn) navbarToggleBtn.addEventListener('click', toggleSidebar);
    
    if (sidebarCollapsed) {
        sidebar.classList.add('collapsed');
        if (mainContent) mainContent.classList.add('expanded');
    }
    
    // Submenu toggle
    document.querySelectorAll('.has-submenu').forEach(menu => {
        const submenu = document.querySelector(`.sub-menu[data-submenu="${menu.dataset.menu}"]`);
        const chevron = menu.querySelector('.chevron-icon');
        if (submenu) {
            menu.addEventListener('click', function(e) {
                e.preventDefault();
                submenu.classList.toggle('show');
                if (chevron) chevron.style.transform = submenu.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0deg)';
            });
        }
    });
</script>