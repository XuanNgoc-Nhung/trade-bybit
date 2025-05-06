<!-- Main Sidebar Container -->
<div class="sidebar-content">
    <div class="sidebar-header p-3 border-bottom">
        <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
            <h5 class="mb-0 text-primary">
                <i class="fas fa-drafting-compass me-2"></i>
                <span>Admin Panel</span>
            </h5>
        </a>
    </div>
    
    <div class="sidebar-menu p-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span>Tổng quan</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('admin.users') }}" class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <span>Người dùng</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="" class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                    <i class="fas fa-box"></i>
                    <span>Kết quả</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="" class="nav-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                    <i class="fas fa-cog"></i>
                    <span>Cấu hình</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
.sidebar .nav-link {
    color: #6c757d;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    transition: all 0.3s;
}

.sidebar .nav-link:hover {
    color: #0d6efd;
    background-color: rgba(13, 110, 253, 0.1);
}

.sidebar .nav-link.active {
    color: #0d6efd;
    background-color: rgba(13, 110, 253, 0.1);
}

.sidebar .nav-link i {
    width: 20px;
    text-align: center;
}

@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        max-width: 280px;
    }
}
</style> 