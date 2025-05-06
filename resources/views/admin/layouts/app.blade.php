<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
            --sidebar-collapsed-width: 70px;
            --header-height: 60px;
        }
        
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 20px;
            transition: margin-left 0.3s;
        }
        
        .main-content.sidebar-collapsed {
            margin-left: var(--sidebar-collapsed-width);
        }
        
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
            .main-content.sidebar-collapsed {
                margin-left: 0;
            }
        }
        
        .sidebar {
            width: var(--sidebar-width);
            position: fixed;
            top: var(--header-height);
            left: 0;
            height: calc(100vh - var(--header-height));
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s;
            z-index: 1000;
            overflow-x: hidden;
        }
        
        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }
        
        .sidebar.collapsed .sidebar-content span,
        .sidebar.collapsed .sidebar-header span,
        .sidebar.collapsed .sidebar-menu span {
            display: none;
        }
        
        .sidebar.collapsed .nav-link {
            padding: 0.5rem;
            text-align: center;
            justify-content: center;
        }
        
        .sidebar.collapsed .nav-link i {
            margin: 0;
            font-size: 1.2rem;
        }
        
        .sidebar.collapsed .nav-item {
            text-align: center;
        }
        
        .sidebar .nav-link {
            display: flex;
            align-items: center;
            padding: 0.8rem 1rem;
            color: #333;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .sidebar .nav-link:hover {
            background: #f8f9fa;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.1);
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.show {
                transform: translateX(0);
            }
        }
        
        .header {
            height: var(--header-height);
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1001;
        }
        
        .content-wrapper {
            padding-top: var(--header-height);
        }
        
        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .card-header {
            background: #fff;
            border-bottom: 1px solid #eee;
            padding: 15px 20px;
        }
        
        .btn-toggle-sidebar {
            display: none;
        }
        
        @media (max-width: 768px) {
            .btn-toggle-sidebar {
                display: block;
            }
        }

        .btn-collapse-sidebar {
            position: absolute;
            right: 5px;
            top: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 9999;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .btn-collapse-sidebar:hover {
            background: #f8f9fa;
        }

        .btn-collapse-sidebar i {
            font-size: 14px;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        <!-- Header -->
        @include('admin.layouts.header')

        <div class="content-wrapper">
            <div class="d-flex">
                <!-- Sidebar -->
                <div class="sidebar">
                    <button class="btn-collapse-sidebar" id="btnCollapseSidebar">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    @include('admin.layouts.sidebar')
                </div>
                
                <!-- Main Content -->
                <main class="main-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>

        <!-- Footer -->
        @include('admin.layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.querySelector('.btn-toggle-sidebar');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            const btnCollapseSidebar = document.getElementById('btnCollapseSidebar');
            
            if (toggleBtn) {
                toggleBtn.addEventListener('click', function() {
                    sidebar.classList.toggle('show');
                });
            }
            
            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                        sidebar.classList.remove('show');
                    }
                }
            });

            // Toggle sidebar collapse
            if (btnCollapseSidebar) {
                btnCollapseSidebar.addEventListener('click', function() {
                    sidebar.classList.toggle('collapsed');
                    mainContent.classList.toggle('sidebar-collapsed');
                    
                    // Rotate chevron icon
                    const icon = this.querySelector('i');
                    if (sidebar.classList.contains('collapsed')) {
                        icon.classList.remove('fa-chevron-left');
                        icon.classList.add('fa-chevron-right');
                    } else {
                        icon.classList.remove('fa-chevron-right');
                        icon.classList.add('fa-chevron-left');
                    }
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
