<header class="header">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between h-100">
            <div class="d-flex align-items-center">
                <button class="btn btn-toggle-sidebar me-3">
                    <i class="fas fa-bars"></i>
                </button>
                <h4 class="mb-0">@yield('title', 'Admin Dashboard')</h4>
            </div>
            
            <div class="d-flex align-items-center" style="padding: 8px 8px 8px 0;">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle d-flex align-items-center" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name ?? 'Admin') }}" alt="Avatar" class="rounded-circle" width="48" height="48">
                        <div class="ms-2 text-start d-none d-md-block">
                            <div class="fw-bold">{{ Auth::user()->name ?? 'Admin' }}</div>
                            <div class="text-muted small">Angular Developer</div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>

                <!-- Nút thông báo -->
                <button class="btn btn-notification ms-3" id="notificationBtn">
                    <i class="fas fa-bell"></i>
                </button>
            </div>
            <style>
                .dropdown:hover .dropdown-menu {
                    display: block;
                    margin-top: 0;
                }
                .dropdown-toggle::after {
                    display: none;
                }
                .notification-drawer {
                    position: fixed;
                    top: 0;
                    right: -400px;
                    width: 400px;
                    height: 100%;
                    background: #fff;
                    box-shadow: -2px 0 8px rgba(0,0,0,0.1);
                    z-index: 1050;
                    transition: right 0.3s;
                }
                .notification-drawer.open {
                    right: 0;
                }
                .drawer-overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100vw;
                    height: 100vh;
                    background: rgba(0,0,0,0.3);
                    z-index: 1049;
                    display: none;
                    transition: opacity 0.3s;
                }
                .drawer-overlay.active {
                    display: block;
                }
            </style>
        </div>
    </div>
</header>
<!-- Drawer thông báo -->
<div id="notificationDrawer" class="notification-drawer">
    <div class="drawer-header d-flex justify-content-between align-items-center p-3 border-bottom">
        <span class="fw-bold">Thông báo</span>
        <button class="btn-close" id="closeDrawerBtn"></button>
    </div>
    <div class="drawer-body p-3">
        <!-- Nội dung thông báo ở đây -->
        <p>Chưa có thông báo mới.</p>
    </div>
</div>
<!-- Overlay mờ -->
<div id="drawerOverlay" class="drawer-overlay"></div>
<script>
    var notificationBtn = document.getElementById('notificationBtn');
    var notificationDrawer = document.getElementById('notificationDrawer');
    var closeDrawerBtn = document.getElementById('closeDrawerBtn');
    var drawerOverlay = document.getElementById('drawerOverlay');

    notificationBtn.onclick = function() {
        notificationDrawer.classList.add('open');
        drawerOverlay.classList.add('active');
    };
    closeDrawerBtn.onclick = function() {
        notificationDrawer.classList.remove('open');
        drawerOverlay.classList.remove('active');
    };
    drawerOverlay.onclick = function() {
        notificationDrawer.classList.remove('open');
        drawerOverlay.classList.remove('active');
    };
    // Đóng drawer khi click ra ngoài (trừ overlay và drawer)
    document.addEventListener('click', function(event) {
        if (!notificationDrawer.contains(event.target) && !notificationBtn.contains(event.target) && !drawerOverlay.contains(event.target)) {
            notificationDrawer.classList.remove('open');
            drawerOverlay.classList.remove('active');
        }
    });
</script> 