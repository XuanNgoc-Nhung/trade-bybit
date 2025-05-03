@extends('users.layouts.app')

@section('title', 'Trang Chủ')

@section('content')

<section class="hero-section">
    <div class="container">
        <div class="row min-vh-50 align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3">Bybit Megadrop: OBOL</h1>
                <h2 class="fs-2 text-warning fw-semibold mb-4">Stake MNT và USDT để chia sẻ OBOL</h2>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-warning btn-lg px-4 fw-semibold">Join Now</a>
                    <a href="#" class="btn btn-outline-light btn-lg px-4">Giao Dịch Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="notification-bar">
    <div class="container px-0">
        <div class="d-flex align-items-center">
            <div class="notification-item d-flex align-items-center w-100">
                <span class="me-2">
                    <img src="{{ asset('images/notification-icon.png') }}" alt="Notification Icon"
                        class="img-fluid w-20px">
                </span>
                <marquee behavior="scroll" direction="left" class="py-2">
                    <span class="me-4">↗ hot tokens!</span>
                    <span class="me-4">🇻🇳 VND Boost | Nạp VND - Nhận hoàn tiền 10% và BTC miễn phí!</span>
                    <span>🇻🇳 [Việt Nam] Hello Summer: Tải App Bybit & Giao Dịch P2P để</span>
                </marquee>
            </div>
        </div>
    </div>
</div>

<section class="slider-section py-4">
    <div class="container">
        <div class="splide main-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <!-- Slide 1 -->
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="slider-icon-wrapper">
                                <img src="{{ asset('images/gift-icon.png') }}" alt="Airdrop Icon" class="slider-icon">
                            </div>
                            <div class="slider-content">
                                <h3 class="slider-title">[Việt Nam] Lễ Hội Airdrop</h3>
                            </div>
                        </div>
                    </li>
                    <!-- Slide 2 -->
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="slider-icon-wrapper">
                                <img src="{{ asset('images/special-gift-icon.png') }}" alt="BTC Icon"
                                    class="slider-icon">
                            </div>
                            <div class="slider-content">
                                <h3 class="slider-title">Nạp VND – Rinh BTC!</h3>
                            </div>
                        </div>
                    </li>
                    <!-- Slide 3 -->
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="slider-icon-wrapper">
                                <img src="{{ asset('images/gift-icon.png') }}" alt="Holiday Icon" class="slider-icon">
                            </div>
                            <div class="slider-content">
                                <h3 class="slider-title">Giao Dịch Mừng Đại Lễ 30/4-1/5</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="trading-opportunities py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title h4 mb-0">Nắm Bắt Cơ Hội Giao Dịch</h2>
            <a href="#" class="text-warning text-decoration-none">Tổng quan Thị trường →</a>
        </div>

        <div class="row">
            <!-- Main Trading Table -->
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="card h-100">
                    <div class="card-header bg-white border-bottom-0 pt-3">
                        <ul class="nav nav-tabs border-0" id="tradingTabs">
                            <li class="nav-item">
                                <a class="nav-link" data-tab="favorite" href="#favorite">Yêu Thích</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-tab="hot-derivatives" href="#hot-derivatives">Hot Phái
                                    Sinh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="hot-coins" href="#hot-coins">Hot Coin</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="trading-tabs-content">
                            <!-- Favorite Tab Content -->
                            <div class="trading-tab-pane" id="favorite-content" style="display: none;">
                                <div class="row g-4">
                                    <!-- BTCUSDT Card -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="crypto-card p-4 rounded-4 bg-white shadow-sm">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('images/coins/btc.svg') }}" alt="BTC" width="32"
                                                        class="me-2">
                                                    <span class="fs-5 fw-semibold">BTCUSDT</span>
                                                </div>
                                                <button class="btn btn-warning btn-sm rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <h3 class="fs-4 mb-2">96.329,9</h3>
                                                <span class="text-success fs-5">+1.93%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ETHUSDT Card -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="crypto-card p-4 rounded-4 bg-white shadow-sm">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('images/coins/eth.svg') }}" alt="ETH" width="32"
                                                        class="me-2">
                                                    <span class="fs-5 fw-semibold">ETHUSDT</span>
                                                </div>
                                                <button class="btn btn-warning btn-sm rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <h3 class="fs-4 mb-2">1.847,9</h3>
                                                <span class="text-success fs-5">+4.44%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- GMTUSDT Card -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="crypto-card p-4 rounded-4 bg-white shadow-sm">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('images/coins/gmt.svg') }}" alt="GMT" width="32"
                                                        class="me-2">
                                                    <span class="fs-5 fw-semibold">GMTUSDT</span>
                                                </div>
                                                <button class="btn btn-warning btn-sm rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <h3 class="fs-4 mb-2">0,06129</h3>
                                                <span class="text-success fs-5">+6.9%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- BTC/USDT Card -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="crypto-card p-4 rounded-4 bg-white shadow-sm">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('images/coins/btc.svg') }}" alt="BTC" width="32"
                                                        class="me-2">
                                                    <span class="fs-5 fw-semibold">BTC/USDT</span>
                                                </div>
                                                <button class="btn btn-warning btn-sm rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <h3 class="fs-4 mb-2">96.385</h3>
                                                <span class="text-success fs-5">+1.95%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ETH/USDT Card -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="crypto-card p-4 rounded-4 bg-white shadow-sm">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('images/coins/eth.svg') }}" alt="ETH" width="32"
                                                        class="me-2">
                                                    <span class="fs-5 fw-semibold">ETH/USDT</span>
                                                </div>
                                                <button class="btn btn-warning btn-sm rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <h3 class="fs-4 mb-2">1.848,68</h3>
                                                <span class="text-success fs-5">+4.27%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add to Favorites Button -->
                                <div class="text-center mt-4">
                                    <a href="#" class="btn btn-light btn-lg px-4">
                                        <i class="fas fa-plus me-2"></i>
                                        Thêm Vào Yêu Thích
                                    </a>
                                </div>
                            </div>

                            <!-- Hot Derivatives Tab Content -->
                            <div class="trading-tab-pane" id="hot-derivatives-content" style="display: block;">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover align-middle mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Cặp Giao Dịch</th>
                                                                <th>Giá Mới Nhất</th>
                                                                <th>Biến Động 24H</th>
                                                                <th>Chart</th>
                                                                <th>Giao Dịch</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ([1,2,3,4,5,6,7,8,9] as $coin)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('images/coins/siu.svg') }}"
                                                                            alt="SUI" width="24" class="me-2">
                                                                        <span>SUIUSDT</span>
                                                                    </div>
                                                                </td>
                                                                <td>3,6527</td>
                                                                <td class="text-success">+3.36%</td>
                                                                <td>
                                                                    <img src="{{ asset('images/coins/chart2.svg') }}"
                                                                        alt="Chart" height="24">
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-warning btn-sm">Giao
                                                                        Dịch</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hot Coins Tab Content -->
                            <div class="trading-tab-pane" id="hot-coins-content" style="display: none;">
                                <div class="row g-4">

                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover align-middle mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Cặp Giao Dịch</th>
                                                                <th>Giá Mới Nhất</th>
                                                                <th>Biến Động 24H</th>
                                                                <th>Chart</th>
                                                                <th>Giao Dịch</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('images/coins/btc.svg') }}"
                                                                            alt="BTC" width="24" class="me-2">
                                                                        <span>BTCUSDT</span>
                                                                    </div>
                                                                </td>
                                                                <td>96.028,3</td>
                                                                <td class="text-success">+1%</td>
                                                                <td>
                                                                    <img src="{{ asset('images/coins/chart1.svg') }}"
                                                                        alt="Chart" height="24">
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-warning btn-sm">Giao
                                                                        Dịch</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('images/coins/eth.svg') }}"
                                                                            alt="ETH" width="24" class="me-2">
                                                                        <span>ETHUSDT</span>
                                                                    </div>
                                                                </td>
                                                                <td>1.842,57</td>
                                                                <td class="text-success">+1.67%</td>
                                                                <td>
                                                                    <img src="{{ asset('images/coins/chart2.svg') }}"
                                                                        alt="Chart" height="24">
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-warning btn-sm">Giao
                                                                        Dịch</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('images/coins/sol.svg') }}"
                                                                            alt="SOL" width="24" class="me-2">
                                                                        <span>SOLUSDT</span>
                                                                    </div>
                                                                </td>
                                                                <td>151,83</td>
                                                                <td class="text-success">+2.69%</td>
                                                                <td>
                                                                    <img src="{{ asset('images/coins/chart3.svg') }}"
                                                                        alt="Chart" height="24">
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-warning btn-sm">Giao
                                                                        Dịch</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('images/coins/avax.svg') }}"
                                                                            alt="VRA" width="24" class="me-2">
                                                                        <span>AVAXUSDT</span>
                                                                    </div>
                                                                </td>
                                                                <td>0,002044</td>
                                                                <td class="text-success">+18.76%</td>
                                                                <td>
                                                                    <img src="{{ asset('images/coins/chart2.svg') }}"
                                                                        alt="Chart" height="24">
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-warning btn-sm">Giao
                                                                        Dịch</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('images/coins/siu.svg') }}"
                                                                            alt="SUI" width="24" class="me-2">
                                                                        <span>SUIUSDT</span>
                                                                    </div>
                                                                </td>
                                                                <td>3,6527</td>
                                                                <td class="text-success">+3.36%</td>
                                                                <td>
                                                                    <img src="{{ asset('images/coins/chart2.svg') }}"
                                                                        alt="Chart" height="24">
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-warning btn-sm">Giao
                                                                        Dịch</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Tables -->
            <div class="col-lg-4">
                <!-- Top Đầu Table -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Top Đầu</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <tbody>
                                    @foreach ([1,2,3,4,5] as $coin)
                                    <tr>
                                        <td style="width: 40%">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('images/coins/eth.svg') }}" alt="ETH" width="24"
                                                    class="me-2">
                                                <span>ETH/USDT</span>
                                            </div>
                                        </td>
                                        <td>0,073</td>
                                        <td class="text-success">+103.57%</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">G.Dịch</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Listing Mới Table -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Listing Mới</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <tbody>

                                    @foreach ([1,2,3,4,5] as $coin)
                                    <tr>
                                        <td style="width: 40%">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('images/coins/eth.svg') }}" alt="ETH" width="24"
                                                    class="me-2">
                                                <span>ETH/USDT</span>
                                            </div>
                                        </td>
                                        <td>0,073</td>
                                        <td class="text-success">+103.57%</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">G.Dịch</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Buy Crypto Button Section -->
        <div class="buy-crypto-section">
            <a href="#" class="btn btn-warning btn-lg rounded-3 px-5 py-3 fw-semibold" style="min-width: 300px;">
                Nạp Hoặc Mua Crypto <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Quick Start Section -->
<section class="quick-start-section py-5">
    <div class="container">
        <h2 class="h1 mb-5 text-warning">Bắt Đầu Chỉ Trong 30 Giây!</h2>
        
        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-md-4">
                <div class="quick-start-card h-100 text-center p-4 rounded-4">
                    <div class="step-number">1</div>
                    <div class="icon-wrapper mb-4">
                        <img src="{{ asset('images/email-icon.png') }}" alt="Tạo Tài Khoản" class="img-fluid" width="120">
                    </div>
                    <h3 class="h4 mb-3">Tạo Tài Khoản</h3>
                    <p class="text-muted mb-0">Cung cấp địa chỉ email và kiểm tra hộp thư của bạn để nhận mã xác minh 6 chữ số. Nhập mã trên trang xác minh để hoàn tất đăng ký.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-4">
                <div class="quick-start-card h-100 text-center p-4 rounded-4">
                    <div class="step-number">2</div>
                    <div class="icon-wrapper mb-4">
                        <img src="{{ asset('images/wallet-icon.png') }}" alt="Nạp Tiền" class="img-fluid" width="120">
                    </div>
                    <h3 class="h4 mb-3">Nạp Tiền</h3>
                    <p class="text-muted mb-4">Nạp tiền vào tài khoản để đăng trên Web hoặc App.</p>
                    <a href="#" class="btn btn-warning px-4">Nạp Ngay</a>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-4">
                <div class="quick-start-card h-100 text-center p-4 rounded-4">
                    <div class="step-number">3</div>
                    <div class="icon-wrapper mb-4">
                        <img src="{{ asset('images/chart-icon.png') }}" alt="Bắt Đầu Giao Dịch" class="img-fluid" width="120">
                    </div>
                    <h3 class="h4 mb-3">Bắt Đầu Giao Dịch</h3>
                    <p class="text-muted mb-4">Khởi động hành trình của bạn với các cặp Giao Ngay hoặc HD Tương Lai yêu thích!</p>
                    <a href="#" class="btn btn-warning px-4">Giao Dịch Ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Khám Phá Thêm Sản Phẩm Section -->
<section class="discover-products py-5 bg-light">
    <div class="container">
        <h2 class="section-title h1 mb-4 text-warning">Khám Phá Thêm Sản Phẩm</h2>
        
        <div class="row g-4 mb-4">
            <!-- Bybit Card -->
            <div class="col-md-6">
                <div class="feature-card h-100 p-4 rounded-4 position-relative bg-white">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="h2 mb-3">Bybit Card</h3>
                            <p class="text-muted mb-4">Cashback Lên Tới 10%, APY 8%, Đặc Quyền VIP & Hơn Thế Nữa!</p>
                            <a href="#" class="text-warning text-decoration-none fw-semibold">Chi Tiết<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/bybit-card.svg') }}" alt="Bybit Card" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bybit Earn -->
            <div class="col-md-6">
                <div class="feature-card h-100 p-4 rounded-4 position-relative bg-white">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="h2 mb-3">Bybit Earn</h3>
                            <p class="text-muted mb-4">Phát triển và quản lý tài sản của bạn với các dịch vụ linh hoạt và đáng tin cậy.</p>
                            <a href="#" class="text-warning text-decoration-none fw-semibold">Chi Tiết<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/money-bag.svg') }}" alt="Bybit Earn" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Sao Chép Giao Dịch -->
            <div class="col-md-3">
                <div class="small-feature-card h-100 p-4 rounded-4 bg-white">
                    <h4 class="h5 mb-3">Sao Chép Giao Dịch</h4>
                    <p class="text-muted small mb-4">Tăng thu nhập của bạn bằng cách sao chép các nhà giao dịch hàng đầu.</p>
                    <a href="#" class="text-warning"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Bot Giao Dịch -->
            <div class="col-md-3">
                <div class="small-feature-card h-100 p-4 rounded-4 bg-white">
                    <h4 class="h5 mb-3">Bot Giao Dịch</h4>
                    <p class="text-muted small mb-4">Tự động hóa giao dịch của bạn với Grid Bot, Bot Combo HD...</p>
                    <a href="#" class="text-warning"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- TradeGPT -->
            <div class="col-md-3">
                <div class="small-feature-card h-100 p-4 rounded-4 bg-white">
                    <h4 class="h5 mb-3">TradeGPT</h4>
                    <p class="text-muted small mb-4">Giao dịch thông minh hơn với phân tích dữ liệu dựa trên AI...</p>
                    <a href="#" class="text-warning"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Bybit Web3 -->
            <div class="col-md-3">
                <div class="small-feature-card h-100 p-4 rounded-4 bg-white">
                    <h4 class="h5 mb-3">Bybit Web3</h4>
                    <p class="text-muted small mb-4">Khám phá thế giới Web3 với độ tin cậy và bảo mật hàng đầu.</p>
                    <a href="#" class="text-warning"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Giao Dịch Mọi Lúc Section -->
<section class="trade-anywhere py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-4 fw-bold mb-4 text-warning">Giao Dịch Mọi Lúc, Mọi Nơi</h2>
                <p class="lead text-muted mb-5">Mở các vị thế mới ngay lập tức, cho dù đó là trên Bybit App hay trên Bybit Web.</p>
                
                <div class="download-options mb-5">
                    <div class="row g-3">
                        <div class="col-6 col-sm-3">
                            <a href="#" class="download-option p-2 p-sm-3 rounded-4 bg-white shadow-sm d-flex align-items-center">
                                <img src="{{ asset('images/apple.svg') }}" alt="App Store" width="35" class="me-2">
                                <span class="fw-semibold text-dark fs-6 my-auto">App Store</span>
                            </a>
                        </div>
                        
                        <div class="col-6 col-sm-3">
                            <a href="#" class="download-option p-2 p-sm-3 rounded-4 bg-white shadow-sm d-flex align-items-center">
                                <img src="{{ asset('images/androi.svg') }}" alt="Android APK" width="35" class="me-2">
                                <span class="fw-semibold text-dark fs-6 my-auto">Android APK</span>
                            </a>
                        </div>
                        
                        <div class="col-6 col-sm-3">
                            <a href="#" class="download-option p-2 p-sm-3 rounded-4 bg-white shadow-sm d-flex align-items-center">
                                <img src="{{ asset('images/chplay.png') }}" alt="Google Play" width="35" class="me-2">
                                <span class="fw-semibold text-dark fs-6 my-auto">Google Play</span>
                            </a>
                        </div>
                        
                        <div class="col-6 col-sm-3">
                            <a href="#" class="download-option p-2 p-sm-3 rounded-4 bg-white shadow-sm d-flex align-items-center">
                                <img src="{{ asset('images/api.svg') }}" alt="API" width="35" class="me-2">
                                <span class="fw-semibold text-dark fs-6 my-auto">API</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="qr-section">
                    <img src="{{ asset('images/qrCode.png') }}" alt="QR Code" width="100" class="me-3">
                    <p class="text-muted mb-0 d-flex align-items-end small">Scan Để Tải<br>iOS & Android</p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="trading-platform-preview">
                    <img src="{{ asset('images/trading-platform.png') }}" alt="Trading Platform" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <h2 class="section-title h1 mb-5">Câu Hỏi Thường Gặp</h2>
        
        <div class="accordion" id="faqAccordion">
            <!-- Question 1 -->
            <div class="accordion-item mb-3 border rounded-4 overflow-hidden">
                <h3 class="accordion-header">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Xác Minh Danh Tính có bắt buộc không?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Có, bạn phải hoàn tất Xác Minh Danh Tính trước khi thực hiện nạp tiền hoặc truy cập vào các sản phẩm và dịch vụ của Bybit. Vui lòng xác minh danh tính của bạn <a href="#" class="text-warning">tại đây</a>. Để biết thêm chi tiết, hãy xem <a href="#" class="text-warning">bài viết tại Trung Tâm Hỗ Trợ</a>.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item mb-3 border rounded-4 overflow-hidden">
                <h3 class="accordion-header">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Cách để tăng cường bảo mật cho tài khoản của tôi?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Để tăng cường bảo mật cho tài khoản, bạn nên:
                        <ul class="mt-2">
                            <li>Bật xác thực 2 yếu tố (2FA)</li>
                            <li>Sử dụng mật khẩu mạnh và độc đáo</li>
                            <li>Thường xuyên thay đổi mật khẩu</li>
                            <li>Không chia sẻ thông tin đăng nhập</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item mb-3 border rounded-4 overflow-hidden">
                <h3 class="accordion-header">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Làm thế nào để nạp tiền?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Bạn có thể nạp tiền vào tài khoản Bybit thông qua nhiều phương thức:
                        <ul class="mt-2">
                            <li>Nạp tiền qua ngân hàng</li>
                            <li>Chuyển khoản crypto</li>
                            <li>Thẻ tín dụng/ghi nợ</li>
                            <li>Các phương thức thanh toán địa phương</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item mb-3 border rounded-4 overflow-hidden">
                <h3 class="accordion-header">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Phí giao dịch trên Bybit là bao nhiêu?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Phí giao dịch trên Bybit thay đổi tùy theo loại giao dịch và cấp độ VIP của bạn. Vui lòng xem chi tiết biểu phí tại <a href="#" class="text-warning">đây</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Your Crypto Journey Section -->
<section class="start-journey-section py-5 text-center">
    <div class="container">
        <h2 class="h1 mb-4 text-dark">Bắt Đầu Hành Trình Crypto Ngay Hôm Nay!</h2>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-warning btn-lg px-5 py-3 fw-semibold">
                Nạp Hoặc Mua Crypto →
            </a>
        </div>
    </div>
</section>

<style>
    .trade-anywhere {
        background-color: #f8f9fa;
    }

    .download-option {
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
        height: 100%;
    }

    .download-option:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
    }

    .trading-platform-preview img {
        transition: transform 0.3s ease;
        max-width: 100%;
        height: auto;
    }

    .trading-platform-preview:hover img {
        transform: scale(1.02);
    }

    .qr-section {
        display: flex;
        align-items: flex-end;
    }

    @media (max-width: 1199.98px) {
        .display-4 {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 991.98px) {
        .display-4 {
            font-size: 2rem;
        }
        .lead {
            font-size: 1rem;
        }
    }

    @media (max-width: 767.98px) {
        .download-option {
            padding: 0.5rem !important;
        }
        .download-option img {
            width: 30px;
        }
        .download-option span {
            font-size: 0.8rem !important;
        }
    }

    @media (max-width: 575.98px) {
        .display-4 {
            font-size: 1.75rem;
        }
        .qr-section img {
            width: 80px;
        }
    }

    /* FAQ Section Styles */
    .faq-section {
        background-color: #fff;
    }

    .accordion-item {
        border: 1px solid rgba(0, 0, 0, 0.1) !important;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .accordion-item:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .accordion-button {
        padding: 1.25rem;
        background-color: #fff;
        font-size: 1.1rem;
        color: #1E2329;
    }

    .accordion-button:not(.collapsed) {
        background-color: #fff;
        color: #ffc107;
        box-shadow: none;
    }

    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0, 0, 0, 0.1);
    }

    .accordion-button::after {
        background-size: 1.25rem;
        transition: all 0.3s ease;
    }

    .accordion-button:not(.collapsed)::after {
        transform: rotate(-180deg);
    }

    .accordion-body {
        padding: 1.25rem;
        color: #6c757d;
        font-size: 1rem;
        line-height: 1.6;
    }

    .accordion-body ul {
        padding-left: 1.2rem;
    }

    .accordion-body ul li {
        margin-bottom: 0.5rem;
    }

    .text-warning {
        color: #ffc107 !important;
        text-decoration: none;
    }

    .text-warning:hover {
        text-decoration: underline;
    }

    @media (max-width: 767.98px) {
        .accordion-button {
            font-size: 1rem;
            padding: 1rem;
        }

        .accordion-body {
            font-size: 0.9rem;
            padding: 1rem;
        }
    }

    /* Start Journey Section Styles */
    .start-journey-section {
        background: linear-gradient(90deg,
            #ffffff 0%,
            #fff3cd 10%,
            #fff3cd 90%,
            #ffffff 100%);
        padding: 60px 0;
    }

    .start-journey-section .btn-warning {
        font-size: 1.125rem;
        transition: all 0.3s ease;
        min-width: 300px;
    }

    .start-journey-section .btn-warning:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 193, 7, 0.2);
    }

    @media (max-width: 767.98px) {
        .start-journey-section {
            padding: 40px 0;
        }
        
        .start-journey-section .btn-warning {
            font-size: 1rem;
            min-width: 250px;
        }
    }
</style>

@endsection

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<style>
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url('/images/hero-bg.jpg');
        background-size: cover;
        background-position: center;
        padding: 80px 0;
    }

    .min-vh-50 {
        min-height: 50vh;
    }

    .notification-bar {
        background: linear-gradient(90deg,
                #ffffff 0%,
                #fff3cd 10%,
                #ffc107 15%,
                #ffc107 50%,
                #ffc107 85%,
                #fff3cd 90%,
                #ffffff 100%);
    }

    .notification-item {
        font-size: 14px;
        color: #1E2329;
    }

    marquee::-webkit-scrollbar {
        display: none;
    }

    .w-20px {
        width: 20px;
    }

    /* Slider Styles */
    .slider-section {
        background-color: #f8f9fa;
        padding: 40px 0;
        position: relative;
    }

    .main-slider {
        position: relative;
        padding: 0 40px;
    }

    .slider-card {
        display: flex;
        align-items: center;
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        gap: 20px;
        transition: transform 0.3s ease;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .slider-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .slider-icon-wrapper {
        width: 80px;
        height: 80px;
        min-width: 80px;
        border-radius: 50%;
        background: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .slider-icon {
        width: 60%;
        height: 60%;
        object-fit: contain;
    }

    .slider-content {
        flex: 1;
    }

    .slider-title {
        color: #1E2329;
        font-size: 16px;
        margin: 0;
        font-weight: 600;
        line-height: 1.4;
    }

    /* Splide Custom Styles */
    .splide__arrow {
        background: #fff;
        width: 35px;
        height: 35px;
        opacity: 0.9;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .splide__arrow:hover {
        background-color: #ffc107;
        opacity: 1;
    }

    .splide__arrow svg {
        fill: #1E2329;
        transition: fill 0.3s ease;
    }

    .splide__arrow:hover svg {
        fill: #fff;
    }

    .splide__pagination {
        bottom: -2em;
    }

    .splide__pagination__page {
        background: #ccc;
        width: 8px;
        height: 8px;
        margin: 0 4px;
    }

    .splide__pagination__page.is-active {
        background: #ffc107;
        transform: scale(1);
    }

    /* Trading Opportunities Section Styles */
    .trading-opportunities .nav-tabs {
        border: none;
    }

    .trading-opportunities .nav-link {
        border: none;
        color: #6c757d;
        padding: 0.75rem 1rem;
        font-weight: 500;
        position: relative;
    }

    .trading-opportunities .nav-link.active {
        color: #ffc107;
        background: none;
        border: none;
    }

    .trading-opportunities .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #ffc107;
    }

    .trading-opportunities .table th {
        font-weight: 500;
        color: #6c757d;
        border-top: none;
    }

    .trading-opportunities .table td {
        vertical-align: middle;
        border-color: #f8f9fa;
    }

    .trading-opportunities .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #000;
        padding: 0.25rem 0.75rem;
        font-size: 0.875rem;
    }

    .trading-opportunities .btn-warning:hover {
        background-color: #ffca2c;
        border-color: #ffc720;
    }

    .trading-opportunities .card {
        border-radius: 0.5rem;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .trading-opportunities .card-title {
        font-size: 1.1rem;
        font-weight: 600;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    /* Add new styles for crypto cards */
    .crypto-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .crypto-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
    }

    .btn-warning.rounded-circle {
        width: 32px;
        height: 32px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nav-tabs .nav-link {
        color: #6c757d;
        font-weight: 500;
        padding: 1rem 1.5rem;
        border: none;
        border-bottom: 2px solid transparent;
        transition: all 0.3s ease;
    }

    .nav-tabs .nav-link.active {
        color: #ffc107;
        border-bottom: 2px solid #ffc107;
        background: none;
    }

    .nav-tabs .nav-link:hover:not(.active) {
        border-color: transparent;
        color: #495057;
    }

    /* Add new styles for badges */
    .badge {
        padding: 0.5em 1em;
        font-weight: 500;
        font-size: 0.75rem;
    }

    .badge.bg-warning {
        color: #000;
    }

    .badge.bg-danger {
        background-color: #dc3545 !important;
    }

    /* Update crypto card styles */
    .crypto-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .crypto-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
    }

    .crypto-card .text-muted {
        font-size: 0.875rem;
    }

    .trading-tabs-content {
        position: relative;
    }

    .trading-tab-pane {
        transition: opacity 0.3s ease;
    }

    .nav-tabs {
        border-bottom: none;
    }

    .nav-tabs .nav-link {
        position: relative;
        color: #6c757d;
        font-weight: 500;
        padding: 1rem 1.5rem;
        border: none;
        background: none;
        transition: all 0.3s ease;
    }

    .nav-tabs .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #ffc107;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .nav-tabs .nav-link.active {
        color: #ffc107;
        background: none;
        border: none;
    }

    .nav-tabs .nav-link.active::after {
        transform: scaleX(1);
    }

    .nav-tabs .nav-link:hover:not(.active) {
        color: #495057;
        border: none;
    }

    /* Add styles for buy crypto button */
    .buy-crypto-section {
        padding: 20px 0 40px;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #000;
        transition: all 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #ffca2c;
        border-color: #ffc720;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 193, 7, 0.2);
    }

    .btn-lg {
        font-size: 1.125rem;
    }

    .rounded-4 {
        border-radius: 1rem;
    }

    /* Quick Start Section Styles */
    .quick-start-section {
        background-color: #f8f9fa;
    }

    .quick-start-card {
        background: #fff;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    }

    .quick-start-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .step-number {
        position: absolute;
        top: 20px;
        left: 20px;
        width: 36px;
        height: 36px;
        background: #ffc107;
        color: #000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .icon-wrapper {
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-wrapper img {
        transition: transform 0.3s ease;
    }

    .quick-start-card:hover .icon-wrapper img {
        transform: scale(1.1);
    }

    .quick-start-card .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #000;
        transition: all 0.3s ease;
    }

    .quick-start-card .btn-warning:hover {
        background-color: #ffca2c;
        border-color: #ffc720;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 193, 7, 0.2);
    }

    /* Discover Products Section Styles */
    .discover-products {
        background-color: #fff;
    }

    .feature-card {
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .feature-card img {
        transition: transform 0.3s ease;
    }

    .feature-card:hover img {
        transform: scale(1.05);
    }

    .small-feature-card {
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
    }

    .small-feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .small-feature-card .fas {
        transition: transform 0.3s ease;
    }

    .small-feature-card:hover .fas {
        transform: translateX(5px);
    }

    .text-warning {
        color: #ffc107 !important;
    }

    .rounded-4 {
        border-radius: 1rem !important;
    }

</style>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Splide slider
        try {
            const splide = new Splide('.main-slider', {
                type: 'loop',
                perPage: 3,
                perMove: 1,
                gap: '20px',
                autoplay: true,
                interval: 3000,
                pauseOnHover: true,
                pauseOnFocus: true,
                arrows: true,
                pagination: true,
                breakpoints: {
                    1024: {
                        perPage: 2,
                    },
                    640: {
                        perPage: 1,
                    }
                }
            });
            splide.mount();
        } catch (error) {
            console.error('Error initializing Splide:', error);
        }

        // Tab switching functionality
        const tabLinks = document.querySelectorAll('#tradingTabs .nav-link');
        const tabContents = document.querySelectorAll('.trading-tab-pane');

        function switchTab(tabId) {
            // Hide all tab contents
            tabContents.forEach(content => {
                content.style.display = 'none';
            });

            // Remove active class from all tabs
            tabLinks.forEach(link => {
                link.classList.remove('active');
            });

            // Show selected tab content and activate tab
            const selectedTab = document.querySelector(`#${tabId}-content`);
            const selectedLink = document.querySelector(`[data-tab="${tabId}"]`);

            if (selectedTab) {
                selectedTab.style.display = 'block';
            }
            if (selectedLink) {
                selectedLink.classList.add('active');
            }
        }

        // Add click event listeners to tab links
        tabLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const tabId = this.getAttribute('data-tab');
                switchTab(tabId);
            });
        });

        // Set initial active tab
        switchTab('hot-derivatives');
    });

</script>
@endsection
