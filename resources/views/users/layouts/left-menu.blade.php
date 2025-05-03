<!-- Left Menu Component -->
<div class="sidebar">
    <div class="sidebar-header">
        <button class="toggle-sidebar" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <ul class="sidebar-menu">
        <li class="{{ request()->routeIs('users.dashboard') ? 'active' : 'active' }}">
            <i class="fas fa-home"></i>
            <span class="menu-text">Trang chủ</span>
        </li>
        <li class="{{ request()->routeIs('users.trading') ? 'active' : '' }}">
            <i class="fas fa-chart-line"></i>
            <span class="menu-text">Giao dịch</span>
        </li>
        <li class="{{ request()->routeIs('users.wallet') ? 'active' : '' }}">
            <i class="fas fa-wallet"></i>
            <span class="menu-text">Ví</span>
        </li>
        <li class="{{ request()->routeIs('users.history') ? 'active' : '' }}">
            <i class="fas fa-history"></i>
            <span class="menu-text">Lịch sử</span>
        </li>
        <li class="{{ request()->routeIs('users.settings') ? 'active' : '' }}">
            <i class="fas fa-cog"></i>
            <span class="menu-text">Cài đặt</span>
        </li>
    </ul>
</div>

<style>
    .sidebar {
        width: 250px;
        background-color: #ffffff;
        color: #333;
        box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow-x: hidden;
        flex-shrink: 0;
    }
    
    .sidebar-header {
        padding: 10px;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        white-space: nowrap;
        min-height: 50px;
    }
    
    .sidebar-header h3 {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        transition: opacity 0.3s ease;
    }
    
    .toggle-sidebar {
        background: none;
        border: none;
        color: #666;
        cursor: pointer;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 4px;
    }
    
    .toggle-sidebar:hover {
        color: #333;
        background-color: #f5f5f5;
    }
    
    .toggle-sidebar i {
        font-size: 16px;
    }
    
    .sidebar.collapsed {
        width: 60px !important;
    }
    
    .sidebar.collapsed .sidebar-header h3,
    .sidebar.collapsed .menu-text {
        opacity: 0;
        visibility: hidden;
        width: 0;
        margin: 0;
        padding: 0;
    }
    
    .sidebar.collapsed .sidebar-menu li {
        padding: 12px 0 !important;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 44px;
    }
    
    .sidebar.collapsed .sidebar-menu li i {
        margin: 0 !important;
        font-size: 18px;
        width: 24px;
        text-align: center;
    }
    
    .sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        overflow: hidden;
    }
    
    .sidebar-menu li {
        padding: 12px 20px;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        gap: 10px;
        border-left: 3px solid transparent;
        white-space: nowrap;
        min-height: 44px;
    }
    
    .sidebar-menu li:hover {
        background-color: #f8f9fa;
        border-left-color: #f5a623;
    }
    
    .sidebar-menu li.active {
        background-color: #f8f9fa;
        border-left-color: #f5a623;
    }
    
    .sidebar-menu li i {
        width: 20px;
        text-align: center;
        color: #666;
        font-size: 16px;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    
    .menu-text {
        font-size: 14px;
        color: #333;
        transition: all 0.3s ease;
        white-space: nowrap;
    }
    .collapsed > .sidebar {
        width: auto; 
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('sidebarToggle');
        const sidebar = document.querySelector('.sidebar');
        
        if (toggleBtn && sidebar) {
            toggleBtn.onclick = function(e) {
                e.preventDefault();
                sidebar.classList.toggle('collapsed');
                
                const icon = toggleBtn.querySelector('i');
                if (sidebar.classList.contains('collapsed')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-chevron-right');
                } else {
                    icon.classList.remove('fa-chevron-right');
                    icon.classList.add('fa-bars');
                }
            };
        }
    });
</script>
