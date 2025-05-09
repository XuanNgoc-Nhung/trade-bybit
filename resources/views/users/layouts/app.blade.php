<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bybit') - Bybit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @include('users.layouts.styles')
    @yield('styles')
</head>
<body>
    @include('users.layouts.header')
    <main>
        @if(request()->is('dashboard*'))
            <div class="dashboard-container">
                <div class="sidebar">
                    @include('users.layouts.left-menu')
                </div>
                <div class="main-content">
                    @yield('content')
                </div>
            </div>
        @else
            @yield('content')
        @endif
    </main>

    @include('users.layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html> 