@extends('users.layouts.app')

@push('styles')
<style>
    .dashboard-container {
        padding: 24px;
        background: #f5f5f5;    
        min-height: 100vh;
    }
    
    .user-info-card {
        background: #fff;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 24px;
    }
    
    .user-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 16px;
    }
    
    .user-avatar {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: #f0b90b;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .user-avatar i {
        font-size: 32px;
        color: #fff;
    }
    
    .user-details h2 {
        font-size: 18px;
        margin-bottom: 8px;
    }
    
    .user-uid {
        color: #707a8a;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .user-badges {
        display: flex;
        gap: 12px;
        margin-top: 16px;
    }
    
    .badge {
        padding: 6px 12px;
        border-radius: 16px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .badge-dark {
        background: #1e2329;
        color: #fff;
    }
    
    .badge-light {
        background: #f5f5f5;
        color: #1e2329;
    }
    
    .badge-warning {
        background: #fff3dc;
        color: #b37800;
    }
    
    .welcome-card {
        background: #fff;
        border-radius: 8px;
        padding: 24px;
        margin-bottom: 24px;
    }
    
    .welcome-card h1 {
        font-size: 24px;
        margin-bottom: 12px;
    }
    
    .welcome-card p {
        color: #707a8a;
        margin-bottom: 24px;
    }
    
    .verification-card {
        background: #fff8f0;
        border-radius: 8px;
        padding: 24px;
        margin-bottom: 24px;
    }
    
    .verification-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px;
    }
    
    .verification-steps {
        display: flex;
        gap: 24px;
        margin-top: 16px;
    }
    
    .verify-btn {
        background: #f0b90b;
        color: #fff;
        padding: 12px 24px;
        border-radius: 4px;
        border: none;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .verify-btn:hover {
        background: #d4a508;
    }
    
    .step-info {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #1e2329;
    }
    
    .help-text {
        color: #707a8a;
        margin-top: 16px;
    }
    
    .help-text a {
        color: #f0b90b;
        text-decoration: none;
    }
</style>
@endpush

@section('content')
<div class="dashboard-container">
    <div class="user-info-card">
        <div class="user-header">
            <div class="user-avatar">
                <i class="fas fa-user"></i>
            </div>
            <div class="user-details">
                <h2>xua***@****</h2>
                <div class="user-uid">
                    UID: 461307453
                    <i class="fas fa-copy"></i>
                </div>
            </div>
        </div>
        <div class="user-badges">
            <div class="badge badge-dark">
                <i class="fas fa-user"></i>
                Không Phải VIP
            </div>
            <div class="badge badge-light">
                <i class="fas fa-wallet"></i>
                Tài Khoản Chính
            </div>
            <div class="badge badge-warning">
                <i class="fas fa-exclamation-circle"></i>
                Chưa xác minh
            </div>
        </div>
    </div>

    <div class="welcome-card">
        <h1>Chào mừng đến với Bybit</h1>
        <p>Hãy hoàn thành các bước sau để nhận Phần Thưởng Người Dùng Mới lên tới 5.050 USD.</p>
    </div>

    <div class="verification-card">
        <div class="verification-header">
            <div>
                <i class="fas fa-id-card fa-2x"></i>
                <h2>Hoàn tất Xác Minh Danh Tính để bắt đầu giao dịch</h2>
            </div>
            <button class="verify-btn">
                Xác Minh Ngay
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>

        <p>Quá trình này mất khoảng 1 phút.</p>

        <div class="verification-steps">
            <div class="step-info">
                <i class="fas fa-id-card"></i>
                Ảnh chứng minh nhân dân/căn cước công dân
            </div>
            <div class="step-info">
                <i class="fas fa-camera"></i>
                Kiểm Tra Liveness (Kiểm Tra Sự Sống)
            </div>
        </div>

        <div class="help-text">
            Bạn cần được hỗ trợ thêm? Hãy nhấp vào đây để xem 
            <a href="#">Câu Hỏi Thường Gặp của chúng tôi</a>
        </div>
    </div>
</div>
@endsection 