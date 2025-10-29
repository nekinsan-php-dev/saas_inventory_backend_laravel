<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="logo-wrapper">
            <div class="logo-icon">
                <i class="bi bi-box-seam"></i>
            </div>
            <div class="logo-text">SaaS Portal</div>
        </div>
        <button class="sidebar-close" id="sidebarClose">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
    
    <div class="nav-menu">
        <div class="nav-section">
            <div class="nav-section-title">Main Menu</div>
            <a href="{{url('admin/')}}" class="nav-item active">
                <i class="bi bi-grid-1x2"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{url('/admin/tenant')}}" class="nav-item">
                <i class="bi bi-building"></i>
                <span>Tenants</span>
                <span class="nav-badge">24</span>
            </a>
            <a href="#" class="nav-item">
                <i class="bi bi-people"></i>
                <span>Users</span>
            </a>
            <a href="#" class="nav-item">
                <i class="bi bi-box"></i>
                <span>Products</span>
            </a>
            <a href="#" class="nav-item">
                <i class="bi bi-receipt"></i>
                <span>Invoices</span>
                <span class="nav-badge">7</span>
            </a>
        </div>
        
        <div class="nav-section">
            <div class="nav-section-title">Analytics</div>
            <a href="#" class="nav-item">
                <i class="bi bi-graph-up"></i>
                <span>Reports</span>
            </a>
            <a href="#" class="nav-item">
                <i class="bi bi-bar-chart"></i>
                <span>Analytics</span>
            </a>
        </div>
        
        <div class="nav-section">
            <div class="nav-section-title">Settings</div>
            <a href="{{url('admin/setting')}}" class="nav-item">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
            <a href="#" class="nav-item">
                <i class="bi bi-bell"></i>
                <span>Notifications</span>
            </a>
            <a href="#" class="nav-item">
                <i class="bi bi-question-circle"></i>
                <span>Help & Support</span>
            </a>
        </div>
    </div>
</div>