<!-- Sidebar Navigation -->
<div class="sidebar bg-dark text-white vh-100 position-fixed" style="width: 260px; left: 0; top: 0; overflow-y: auto; z-index: 1000;">
    <div class="p-3">
        <!-- Logo -->
        <div class="text-center mb-4">
            <h4 class="text-white">Xyden M</h4>
        </div>
        
        <!-- Navigation Menu -->
        <nav>
            <!-- Dashboard -->
            <div class="mb-2">
                <a href="<?= base_url('/') ?>" class="nav-link text-white <?= (current_url() == base_url('/') || current_url() == base_url('/dashboard')) ? 'active bg-primary rounded' : '' ?>">
                    <i class="fas fa-home me-2"></i> Dashboard
                </a>
            </div>
            
            <!-- Analytics Dropdown - akan terbuka jika salah satu submenu aktif -->
            <div class="mb-2">
                <?php 
                    $isAnalyticsActive = (current_url() == base_url('/affiliate') || 
                                          current_url() == base_url('/finance') || 
                                          current_url() == base_url('/helpdesk') || 
                                          current_url() == base_url('/invoice'));
                ?>
                <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#analyticsMenu" aria-expanded="<?= $isAnalyticsActive ? 'true' : 'false' ?>" aria-controls="analyticsMenu">
                    <i class="fas fa-chart-line me-2"></i> Analytics
                    <i class="fas fa-chevron-down float-end mt-1"></i>
                </a>
                <div class="collapse ms-3 mt-1 <?= $isAnalyticsActive ? 'show' : '' ?>" id="analyticsMenu">
                    <a href="<?= base_url('/affiliate') ?>" class="nav-link text-white-50 small py-1 <?= (current_url() == base_url('/affiliate')) ? 'active bg-primary rounded text-white' : '' ?>">
                        <i class="fas fa-link me-2"></i> Affiliate
                    </a>
                    <a href="<?= base_url('/finance') ?>" class="nav-link text-white-50 small py-1 <?= (current_url() == base_url('/finance')) ? 'active bg-primary rounded text-white' : '' ?>">
                        <i class="fas fa-coins me-2"></i> Finance
                    </a>
                    <a href="<?= base_url('/helpdesk') ?>" class="nav-link text-white-50 small py-1 <?= (current_url() == base_url('/helpdesk')) ? 'active bg-primary rounded text-white' : '' ?>">
                        <i class="fas fa-headset me-2"></i> Helpdesk
                    </a>
                    <a href="<?= base_url('/invoice') ?>" class="nav-link text-white-50 small py-1 <?= (current_url() == base_url('/invoice')) ? 'active bg-primary rounded text-white' : '' ?>">
                        <i class="fas fa-file-invoice me-2"></i> Invoice
                    </a>
                </div>
            </div>
            
            <!-- Layouts -->
            <div class="mb-2">
                <a href="<?= base_url('/layouts') ?>" class="nav-link text-white">
                    <i class="fas fa-layer-group me-2"></i> Layouts
                </a>
            </div>
            
            <!-- Widget -->
            <div class="mb-2">
                <a href="<?= base_url('/widget') ?>" class="nav-link text-white">
                    <i class="fas fa-puzzle-piece me-2"></i> Widget
                </a>
            </div>
            
            <!-- Statistics -->
            <div class="mb-2">
                <a href="<?= base_url('/statistics') ?>" class="nav-link text-white">
                    <i class="fas fa-chart-bar me-2"></i> Statistics
                </a>
            </div>
        </nav>
        
        <!-- User Profile Bottom -->
        <div class="mt-auto pt-4 border-top border-secondary">
            <div class="d-flex align-items-center">
                <div class="rounded-circle bg-primary p-2 me-2">
                    <i class="fas fa-user text-white"></i>
                </div>
                <div>
                    <div class="small">Davin lois</div>
                    <small class="text-muted">Admin</small>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .sidebar {
        z-index: 1000;
    }
    .sidebar .nav-link {
        transition: all 0.3s;
        padding: 10px 12px;
        border-radius: 8px;
    }
    .sidebar .nav-link:hover {
        background-color: rgba(255,255,255,0.1);
        border-radius: 8px;
    }
    .sidebar .nav-link.active {
        background-color: #0d6efd !important;
    }
    /* Animasi chevron saat dropdown terbuka */
    .nav-link[aria-expanded="true"] .fa-chevron-down {
        transform: rotate(180deg);
        transition: transform 0.3s;
    }
    .nav-link .fa-chevron-down {
        transition: transform 0.3s;
    }
    .main-content {
        margin-left: 260px;
        padding: 20px;
        min-height: 100vh;
    }
    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s;
            width: 260px !important;
        }
        .sidebar.show {
            transform: translateX(0);
        }
        .main-content {
            margin-left: 0;
        }
        .menu-toggle {
            display: block;
        }
    }
    .menu-toggle {
        display: none;
        position: fixed;
        top: 15px;
        left: 15px;
        z-index: 1001;
        background: #0d6efd;
        border: none;
        color: white;
        padding: 10px 12px;
        border-radius: 8px;
        cursor: pointer;
    }
    @media (max-width: 768px) {
        .menu-toggle {
            display: block;
        }
    }
</style>

<button class="menu-toggle" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
</button>

<script>
    function toggleSidebar() {
        document.querySelector('.sidebar').classList.toggle('show');
    }
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const sidebar = document.querySelector('.sidebar');
        const toggle = document.querySelector('.menu-toggle');
        if (window.innerWidth <= 768) {
            if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                sidebar.classList.remove('show');
            }
        }
    });
</script>