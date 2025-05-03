@extends('users.layouts.app')

@section('title', 'Dashboard')

@section('styles')
<style>
    .dashboard-container {
        display: flex;
        min-height: calc(100vh - 60px);
        overflow: hidden;
    }

    .main-content {
        flex: 1;
        padding: 24px;
        background-color: #f5f5f5;
        transition: all 0.3s ease;
        overflow-x: hidden;
    }

    .welcome-section {
        background-color: white;
        border-radius: 8px;
        padding: 24px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .welcome-title {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .welcome-subtitle {
        color: #666;
        margin-bottom: 24px;
    }

    .verification-card {
        background-color: #fff5e6;
        border-radius: 8px;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
    }

    .verification-left {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .verification-left h2 {
        font-size: 16px;
        margin: 0;
        font-weight: 600;
    }

    .verification-icon {
        width: 40px;
        height: 40px;
    }

    .verify-button {
        background-color: #f5a623;
        color: white;
        padding: 10px 20px;
        border-radius: 4px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        font-weight: 500;
        transition: background-color 0.2s;
    }

    .verify-button:hover {
        background-color: #e69512;
        color: white;
        text-decoration: none;
    }

    .process-time {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #666;
        margin-top: 16px;
        font-size: 14px;
    }

    .process-time i {
        color: #4CAF50;
    }

    .verification-steps {
        display: flex;
        align-items: center;
        gap: 24px;
        margin-top: 16px;
        color: #666;
        font-size: 14px;
    }

    .verification-step {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .user-profile-section {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid #eee;
    }

    .user-avatar {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        border: 2px solid #ffa500;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .user-avatar img {
        width: 40px;
        height: 40px;
    }

    .user-info {
        flex: 1;
    }

    .user-name {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .user-uid {
        color: #666;
        font-size: 14px;
        font-weight: normal;
    }

    .user-status-badges {
        display: flex;
        gap: 12px;
        margin-top: 8px;
    }

    .status-badge {
        padding: 4px 12px;
        border-radius: 16px;
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .status-badge.not-vip {
        background-color: #2c2c2c;
        color: white;
    }

    .status-badge.main-account {
        background-color: #f5f5f5;
        color: #333;
    }

    .status-badge.unverified {
        background-color: #fff5e6;
        color: #ffa500;
    }
</style>
@endsection

@section('content')
<div class="welcome-section">
    <div class="user-profile-section">
        <div class="user-avatar">
            <img src="{{ asset('images/default-avatar.png') }}" alt="User Avatar">
        </div>
        <div class="user-info">
            <div class="user-name text-dark">
                xua***@**** 
                <span class="user-uid">UID: 461307453 <i class="far fa-copy"></i></span>
            </div>
            <div class="user-status-badges">
                <div class="status-badge not-vip">
                    <i class="fas fa-crown"></i>
                    Không Phải VIP
                </div>
                <div class="status-badge main-account">
                    <i class="fas fa-user"></i>
                    Tài Khoản Chính
                </div>
                <div class="status-badge unverified">
                    <i class="fas fa-exclamation-circle"></i>
                    Chưa xác minh
                </div>
            </div>
        </div>
    </div>

    <h1 class="welcome-title text-dark">Chào mừng đến với Bybit</h1>
    <p class="welcome-subtitle text-warning">Hãy hoàn thành các bước sau để nhận Phần Thưởng Người Dùng Mới lên tới 5.050 USD.</p>

    <div class="verification-card">
        <div class="verification-left">
            <img src="{{ asset('images/verify-icon.svg') }}" alt="Verification Icon" class="verification-icon ">
            <h2 class="text-dark">Hoàn tất Xác Minh Danh Tính để bắt đầu giao dịch</h2>
        </div>
        <a href="" class="verify-button">
            Xác Minh Ngay <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
        </a>
    </div>

    <div class="process-time">
        <i class="fas fa-check-circle"></i>
        <span>Quá trình này mất khoảng 1 phút.</span>
    </div>

    <div class="verification-steps">
        <div class="verification-step">
            <i class="far fa-id-card"></i>
            <span>Ảnh chứng minh nhân dân/căn cước công dân</span>
        </div>
        <div class="verification-step">
            <i class="fas fa-camera"></i>
            <span>Kiểm Tra Liveness (Kiểm Tra Sự Sống)</span>
        </div>
    </div>
</div>
@endsection
