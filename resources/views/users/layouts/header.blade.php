<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<header class="header">
    <div class="header-container">
        <div class="d-flex align-items-center">
            <img src="/images/bybit-logo.svg" alt="Bybit" class="logo">
            <ul class="nav-menu">
                <li><a href="#">Exchange</a></li>
                <li><a href="#">WEB3</a></li>
                <li class="dropdown">
                    <a href="#">Buy Crypto</a>
                </li>
                <li><a href="#">Markets</a></li>
                <li class="dropdown">
                    <a href="#">Trade</a>
                </li>
                <li class="dropdown">
                    <a href="#">Tools</a>
                </li>
                <li class="dropdown">
                    <a href="#">Finance</a>
                </li>
                <li class="dropdown">
                    <a href="#">Learn</a>
                </li>
                <li><a href="#">Rewards Hub</a></li>
                <li class="dropdown">
                    <a href="#">More</a>
                </li>
            </ul>
        </div>
        <div class="header-right">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <span class="trending-symbol">
                    <span class="fire-icon">🔥</span>REZUSDT
                </span>
            </div>
            @guest
                <a href="{{ route('login') }}" class="btn-login">Log In</a>
                <a href="{{ route('register') }}" class="btn-signup">Sign Up</a>
            @else
                <div class="header-icon">
                    <a href="{{ route('login') }}" class="btn btn-primary">Deposit</a>
                </div>
                <div class="header-icon notification-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">6</span>
                </div>
                <div class="header-icon user-profile dropdown">
                    <img src="{{ Auth::user()->avatar ?? '/images/default-avatar.png' }}" alt="User Avatar" class="avatar">
                </div>
            @endguest
            <div class="header-icon">
                <i class="fas fa-download"></i>
            </div>
            <div class="header-icon">
                <i class="fas fa-globe"></i>
            </div>
        </div>
    </div>
</header>
<style>
.notification-icon {
    position: relative;
}

.notification-badge {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #ff3b3b;
    color: white;
    border-radius: 50%;
    padding: 2px 6px;
    font-size: 12px;
}

.avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    object-fit: cover;
}

.btn-primary {
    background: #f7a600;
    color: #000;
    padding: 4px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 500;
}

.header-icon {
    margin-left: 6px;
    cursor: pointer;
}
</style> 
