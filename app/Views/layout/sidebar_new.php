<!-- Sidebar Navigation -->
<div class="sidebar" id="mainSidebar">
    

    <div class="sidebar-menu p-2">
        <div class="nav-main-title">NAVIGASI</div>

        <div class="nav-item">
            <a href="<?= base_url('/') ?>" class="nav-link-custom">
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
                <a href="<?= base_url('/index') ?>" class="sub-link"><i class="fas fa-chart-pie"></i><span>Analytics</span></a>
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

        <div class="nav-main-title mt-3">PAGES</div>
        <div class="nav-item"><a href="<?= base_url('/contact-us') ?>" class="nav-link-custom"><i class="fas fa-address-card"></i><span class="nav-label">Contact Us</span></a></div>
    </div>
</div>

<style>
    .sidebar {
        width: 280px;
        position: fixed;
        left: 0;
        top: 70px;
        bottom: 0;
        background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        box-shadow: 2px 0 12px rgba(0, 0, 0, 0.03);
        overflow-y: auto;
        z-index: 1020;
        transition: transform 0.3s ease, background 0.3s ease;
        border-right: 1px solid rgba(203, 213, 225, 0.5);
    }

    .sidebar.collapsed {
        transform: translateX(-100%);
    }

    .nav-main-title {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        color: #94a3b8;
        padding: 12px 20px 8px;
        transition: color 0.3s ease;
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
        transition: all 0.2s;
    }

    .nav-link-custom i {
        width: 24px;
        font-size: 1.2rem;
    }

    .nav-link-custom .nav-label {
        flex: 1;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .nav-link-custom .chevron-icon {
        font-size: 0.8rem;
        transition: transform 0.3s;
    }

    .nav-link-custom:hover {
        background: #f1f5f9;
        color: #4f46e5;
    }

    .nav-link-custom.active {
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: white;
    }

    .sub-menu {
        padding-left: 56px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s;
    }

    .sub-menu.show {
        max-height: 500px;
    }

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
        transition: all 0.2s;
    }

    .sub-menu .sub-link i {
        width: 20px;
        font-size: 0.8rem;
    }

    .sub-menu .sub-link:hover {
        background: #f1f5f9;
        color: #4f46e5;
    }

    .sub-menu .sub-link.active {
        background: #eef2ff;
        color: #4f46e5;
    }

    /* ========== DARK MODE STYLES FOR SIDEBAR ========== */
    body.dark-mode .sidebar {
        background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
        border-right-color: #334155;
    }

    

    body.dark-mode .nav-main-title {
        color: #64748b;
    }

    body.dark-mode .nav-link-custom {
        color: #cbd5e1;
    }

    body.dark-mode .nav-link-custom:hover {
        background: #334155;
        color: #818cf8;
    }

    body.dark-mode .nav-link-custom.active {
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: white;
    }

    body.dark-mode .sub-menu .sub-link {
        color: #94a3b8;
    }

    body.dark-mode .sub-menu .sub-link:hover {
        background: #334155;
        color: #818cf8;
    }

    body.dark-mode .sub-menu .sub-link.active {
        background: #334155;
        color: #818cf8;
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
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. SIDEBAR TOGGLE
        const sidebar = document.getElementById('mainSidebar');
        const toggleBtn = document.getElementById('sidebarToggleBtn');
        const mainContent = document.querySelector('.main-content');

        if (toggleBtn) {
            toggleBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                if (sidebar) {
                    sidebar.classList.toggle('collapsed');

                    if (mainContent) {
                        if (sidebar.classList.contains('collapsed')) {
                            mainContent.style.marginLeft = '0';
                        } else {
                            mainContent.style.marginLeft = '280px';
                        }
                    }

                    localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
                }
            });
        }

        // Load saved state
        if (sidebar) {
            const savedState = localStorage.getItem('sidebarCollapsed');
            if (savedState === 'true') {
                sidebar.classList.add('collapsed');
                if (mainContent) mainContent.style.marginLeft = '0';
            } else if (savedState === 'false') {
                sidebar.classList.remove('collapsed');
                if (mainContent) mainContent.style.marginLeft = '280px';
            }
        }

        // 2. SUBMENU TOGGLE
        document.querySelectorAll('.has-submenu').forEach(function(menu) {
            const menuId = menu.getAttribute('data-menu');
            const submenu = document.querySelector('.sub-menu[data-submenu="' + menuId + '"]');
            const chevron = menu.querySelector('.chevron-icon');

            if (submenu) {
                const hasActiveLink = submenu.querySelector('.sub-link.active');
                if (hasActiveLink) {
                    submenu.classList.add('show');
                    if (chevron) chevron.style.transform = 'rotate(180deg)';
                }

                menu.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    document.querySelectorAll('.has-submenu').forEach(function(otherMenu) {
                        if (otherMenu !== menu) {
                            const otherId = otherMenu.getAttribute('data-menu');
                            const otherSubmenu = document.querySelector('.sub-menu[data-submenu="' + otherId + '"]');
                            const otherChevron = otherMenu.querySelector('.chevron-icon');
                            if (otherSubmenu && otherSubmenu.classList.contains('show')) {
                                otherSubmenu.classList.remove('show');
                                if (otherChevron) otherChevron.style.transform = 'rotate(0deg)';
                            }
                        }
                    });

                    submenu.classList.toggle('show');
                    if (chevron) {
                        chevron.style.transform = submenu.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0deg)';
                    }
                });
            }
        });

        // 3. ACTIVE LINK HIGHLIGHTING
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-link-custom, .sub-link').forEach(function(link) {
            const href = link.getAttribute('href');
            if (href && href !== '#' && currentPath === href) {
                link.classList.add('active');

                let parent = link.closest('.sub-menu');
                if (parent) {
                    parent.classList.add('show');
                    const parentId = parent.getAttribute('data-submenu');
                    const parentMenu = document.querySelector('.has-submenu[data-menu="' + parentId + '"]');
                    if (parentMenu) {
                        const chevron = parentMenu.querySelector('.chevron-icon');
                        if (chevron) chevron.style.transform = 'rotate(180deg)';
                    }
                }
            }
        });
    });
</script>