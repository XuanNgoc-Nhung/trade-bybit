@extends('users.layouts.app')

@section('title', 'Trang Chủ')

@section('content')
<style>
    /* Global styles */
    body {
        font-size: 12px !important;
    }
    
    /* Override specific elements that need different sizes */
    .trading-pair {
        font-size: 16px !important;
    }
    
    .icon-btc {
        font-size: 14px !important;
    }
    
    .info-item .label {
        font-size: 11px !important;
    }
    
    .info-item .value {
        font-size: 12px !important;
    }
    
    .recent-trades-header {
        font-size: 12px !important;
    }
    
    .recent-trades-table {
        font-size: 12px !important;
    }
    
    .recent-trades-table th {
        font-size: 11px !important;
    }
    
    .order-title {
        font-size: 14px !important;
    }
    
    .order-label {
        font-size: 11px !important;
    }
    
    .order-input {
        font-size: 12px !important;
    }
    
    .order-input-btn {
        font-size: 11px !important;
    }
    
    .order-value-row {
        font-size: 11px !important;
    }
    
    .order-checkbox-group {
        font-size: 11px !important;
    }
    
    .btn.long, .btn.short {
        font-size: 14px !important;
    }
    
    .btn-desc {
        font-size: 11px !important;
    }
    
    .order-alert {
        font-size: 12px !important;
    }
    
    .order-account-box {
        font-size: 12px !important;
    }
    
    .order-account-header {
        font-size: 12px !important;
    }
    
    .order-account-row {
        font-size: 11px !important;
    }
    
    .order-green {
        font-size: 11px !important;
    }
</style>

<div class="trading-header-wrapper container-fluid">
    <div class="row g-3 mb-2">
        <div class="trading-header-left col-12 col-lg-9">
            <div class="trading-pair">
                <span class="icon-btc">₿</span>
                <span class="pair-name">BTCUSDT</span>
                <span class="pair-type">USDT vĩnh viễn <i class="info-icon">i</i></span>
            </div>
            <div class="trading-info">
                <div class="info-item">
                    <div class="label">Giá hiện tại</div>
                    <div class="value price-up">96,058.60</div>
                </div>
                <div class="info-item">
                    <div class="label">% Thay đổi 24h</div>
                    <div class="value percent-down">-799.39 (-0.82%)</div>
                </div>
                <div class="info-item">
                    <div class="label">Cao 24h</div>
                    <div class="value">97,868.00</div>
                </div>
                <div class="info-item">
                    <div class="label">Thấp 24h</div>
                    <div class="value">95,819.00</div>
                </div>
                <div class="info-item">
                    <div class="label">Doanh thu 24h (USDT)</div>
                    <div class="value">5,969,128,863.67</div>
                </div>
                <div class="info-item">
                    <div class="label">Hợp Đồng Mở (BTC)</div>
                    <div class="value">48,718.681</div>
                </div>
                <div class="info-item">
                    <div class="label">Tỷ lệ phí vốn</div>
                    <div class="value fee-rate">0.0002%</div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-lg-9">
                    <iframe src="https://chart.bestbid.pro" height="650px" width="100%" title="chart"></iframe>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="recent-trades-box">
                        <div class="recent-trades-header">
                            <span><b>Số lệnh</b></span>
                            <span><b>Giao dịch gần đây</b></span>
                            <span></span>
                        </div>
                        <table class="recent-trades-table">
                            <thead>
                                <tr>
                                    <th>Giá(USDT)</th>
                                    <th>Số Lượng(BTC)</th>
                                    <th>Thời Gian</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="price-up">94,614.80 <span class="arrow">↑</span></td>
                                    <td>0.017</td>
                                    <td>13:21:40</td>
                                </tr>
                                <tr>
                                    <td class="price-down">94,614.70 <span class="arrow">↓</span></td>
                                    <td>0.047</td>
                                    <td>13:21:40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Lịch sử --}}
            <div class="history-box" style="background: #181A20; border-radius: 8px; padding: 18px; margin-top: 24px;">
                <div style="display: flex; align-items: center; gap: 32px; border-bottom: 1px solid #23262F;">
                    <button class="history-tab active"
                        style="background: none; border: none; color: #FFD600; font-weight: 400; font-size: 14px; padding: 12px 0 8px 0; border-bottom: 2px solid #FFD600; margin-right: 24px; ">Lịch
                        sử</button>
                    <span style="color: #b5b5b5; font-size: 12px; ">Vị thế (0)</span>
                    <span style="color: #b5b5b5; font-size: 12px; ">Lệnh Mở (0)</span>
                    <span style="color: #b5b5b5; font-size: 12px; ">Lịch Sử Giao Dịch</span>
                    <span style="color: #b5b5b5; font-size: 12px; ">Tài sản</span>
                    <span style="color: #b5b5b5; font-size: 12px; ">Khoản Vay (0)</span>
                    <span style="color: #b5b5b5; font-size: 12px; ">Công Cụ</span>
                </div>
                <div style="display: flex; align-items: center; gap: 16px; margin-top: 18px;">
                    <button
                        style="background: #23262F; color: #fff; border: none; border-radius: 4px; padding: 6px 18px; font-weight: 400; font-size: 11px; ">Giới
                        Hạn & Thị Trường</button>
                    <button
                        style="background: none; color: #b5b5b5; border: none; padding: 6px 12px; font-size: 11px; ">Lệnh
                        điều kiện</button>
                    <button
                        style="background: none; color: #b5b5b5; border: none; padding: 6px 12px; font-size: 11px; ">Chốt
                        Lời/Cắt Lỗ</button>
                    <button
                        style="background: none; color: #b5b5b5; border: none; padding: 6px 12px; font-size: 11px; ">Dời
                        dừng lỗ</button>
                    <button
                        style="background: none; color: #b5b5b5; border: none; padding: 6px 12px; font-size: 11px; ">OCO</button>
                    <button
                        style="background: none; color: #b5b5b5; border: none; padding: 6px 12px; font-size: 11px; ">Đóng
                        MMR</button>
                    <span style="margin-left: auto; color: #b5b5b5; font-size: 11px; ">
                        <span style="color: #b5b5b5; margin-right: 8px;">7 ngày qua</span>
                        <span style="color: #FFD600; font-weight: 400; margin-right: 8px;">30 ngày qua</span>
                        <span style="color: #b5b5b5;">180 ngày qua</span>
                    </span>
                </div>
                <div style="overflow-x: auto; margin-top: 18px;">
                    <table style="width: 100%; color: #b5b5b5; font-size: 11px; border-collapse: collapse;">
                        <thead>
                            <tr style="border-bottom: 1px solid #23262F;">
                                <th style="padding: 6px 8px; font-weight: 400; ">Thị Trường</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Công Cụ</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Loại Lệnh</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Hướng đặt lệnh</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Giá Đã Khớp Trung Bình/Giá lệnh</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Đã khớp/Số lượng</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Thời Gian Lệnh</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Mã Lệnh</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Đã khớp/Giá Trị Lệnh</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Tình Trạng Lệnh</th>
                                <th style="padding: 6px 8px; font-weight: 400; ">Thao tác</th>
                            </tr>
                        </thead>
                    </table>
                    <div style="text-align: center; padding: 48px 0; color: #b5b5b5;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <div style="font-size: 32px; color: #FFD600; margin-bottom: 12px;">
                                <i class="fa fa-file"></i>
                            </div>
                            <div style="font-size: 12px; ">Không có dữ liệu</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trading-header-right order-box-bybit col-12 col-lg-3">
            <div class="order-header">
                <span class="order-title">Giao Dịch</span>
                <span class="order-icons">
                    <i class="icon-grid"></i>
                    <i class="icon-settings"></i>
                    <span class="order-dot"></span>
                </span>
            </div>
            <div class="order-row order-row-top">
                <select class="order-type">
                    <option>Cross</option>
                    <option>Isolated</option>
                </select>
                <select class="leverage">
                    <option>10.00x</option>
                    <option>20.00x</option>
                    <option>50.00x</option>
                </select>
            </div>
            <div class="order-tabs">
                <button type="button" class="tab-btn active">Giới Hạn</button>
                <button type="button" class="tab-btn">Thị Trường</button>
                <button type="button" class="tab-btn">Điều Kiện</button>
                <i class="icon-dropdown"></i>
            </div>
            <div class="order-input-group">
                <label class="order-label">Giá</label>
                <div class="order-input-row">
                    <input type="text" class="input order-input" value="96040.0">
                    <button class="order-input-btn">Cuối Cùng <i class="icon-swap"></i></button>
                </div>
            </div>
            <div class="order-input-group">
                <label class="order-label">Số lượng</label>
                <div class="order-input-row">
                    <input type="text" class="input order-input" value="0">
                    <button class="order-input-btn">BTC <i class="icon-dropdown"></i></button>
                </div>
            </div>
            <div class="order-slider-group">
                <input type="range" min="0" max="100" value="0" class="slider">
                <div class="order-slider-labels">
                    <span>0</span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span>100%</span>
                </div>
            </div>
            <div class="order-value-group">
                <div class="order-value-row">
                    <span>Giá trị</span>
                    <span class="order-value">0 / <span class="usdt">0 USDT</span></span>
                </div>
                <div class="order-value-row">
                    <span>Chi Phí</span>
                    <span class="order-value">0 / <span class="usdt">0 USDT</span></span>
                </div>
            </div>
            <div class="order-checkbox-group">
                <label><input type="checkbox"> Chốt Lời/Cắt Lỗ</label>
                <label><input type="checkbox" checked> Chỉ Đăng</label>
                <label><input type="checkbox"> Chỉ giảm</label>
                <span class="order-gtc">Good-Till-Canceled <i class="icon-dropdown"></i></span>
            </div>
            <div class="order-btn-group">
                <button type="button" class="btn long">Long <span class="btn-desc">Giao Dịch Demo</span></button>
                <button type="button" class="btn short">Short <span class="btn-desc">Giao Dịch Demo</span></button>
            </div>
            <div class="order-alert">
                <span>Hoàn tất Xác Minh Danh Tính để bắt đầu giao dịch thực.</span>
                <i class="icon-arrow"></i>
            </div>
            <div class="order-account-box">
                <div class="order-account-header">
                    <span>Tài Khoản Giao Dịch</span>
                    <i class="icon-dropdown"></i>
                </div>
                <div class="order-account-row">
                    <span>Chế Độ Ký Quỹ</span>
                    <span class="order-account-right">Ký Quỹ Chéo</span>
                </div>
                <div class="order-account-row">
                    <span>Ký Quỹ Ban Đầu</span>
                    <div class="order-bar">
                        <div class="order-bar-inner"></div>
                    </div>
                    <span class="order-green">0.00%</span>
                </div>
                <div class="order-account-row">
                    <span>Ký Quỹ Duy Trì</span>
                    <div class="order-bar">
                        <div class="order-bar-inner"></div>
                    </div>
                    <span class="order-green">0.00%</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<style>
    .trading-header-wrapper {
        background: #181A20;
        padding: 18px 24px;
        border-radius: 8px;
        margin-bottom: 24px;
        color: #fff;
    }

    .trading-header-left {
        /* col-12 col-lg-6 */
    }

    .trading-header-center {
        background: #23262F;
        border-radius: 8px;
        padding: 12px 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        height: 650px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .trading-header-right {
        /* col-12 col-lg-3 */
        max-width: 340px;
    }

    .order-box-bybit {
        width: 100%;
        max-width: 320px;
        background: #23262F;
        border-radius: 8px;
        padding: 18px 18px 10px 18px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        font-family: inherit;
        font-size: 15px;
    }

    .order-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .order-title {
        font-weight: 700;
        font-size: 17px;
    }

    .order-icons {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .icon-grid,
    .icon-settings {
        width: 18px;
        height: 18px;
        background: #333;
        border-radius: 3px;
        display: inline-block;
    }

    .order-dot {
        width: 8px;
        height: 8px;
        background: #FF554A;
        border-radius: 50%;
        display: inline-block;
    }

    .order-row-top {
        display: flex;
        gap: 10px;
        margin-bottom: 8px;
    }

    .order-type,
    .leverage {
        background: #181A20;
        border: 1px solid #333;
        color: #fff;
        border-radius: 4px;
        padding: 6px 10px;
        font-size: 15px;
        width: 50%;
    }

    .order-tabs {
        display: flex;
        align-items: center;
        gap: 2px;
        margin-bottom: 10px;
    }

    .tab-btn {
        background: none;
        border: none;
        color: #b5b5b5;
        padding: 6px 10px;
        border-radius: 4px 4px 0 0;
        font-size: 14px;
        cursor: pointer;
        font-weight: 500;
    }

    .tab-btn.active {
        color: #FFD600;
        font-weight: 700;
        border-bottom: 2px solid #FFD600;
        background: #23262F;
    }

    .icon-dropdown {
        width: 12px;
        height: 12px;
        background: #444;
        border-radius: 2px;
        display: inline-block;
        margin-left: 2px;
    }

    .order-input-group {
        margin-bottom: 8px;
    }

    .order-label {
        font-size: 13px;
        color: #b5b5b5;
        margin-bottom: 2px;
        display: block;
    }

    .order-input-row {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .order-input {
        flex: 1;
        background: #181A20;
        border: 1px solid #333;
        color: #fff;
        border-radius: 4px;
        padding: 7px 10px;
        font-size: 15px;
    }

    .order-input-btn {
        background: #181A20;
        color: #FFD600;
        border: none;
        border-radius: 4px;
        padding: 7px 10px;
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 2px;
        cursor: pointer;
    }

    .icon-swap {
        width: 13px;
        height: 13px;
        background: #444;
        border-radius: 2px;
        display: inline-block;
        margin-left: 2px;
    }

    .order-slider-group {
        margin: 8px 0 8px 0;
    }

    .slider {
        width: 100%;
        accent-color: #FFD600;
    }

    .order-slider-labels {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        color: #b5b5b5;
        margin-top: 2px;
    }

    .order-value-group {
        margin-bottom: 8px;
    }

    .order-value-row {
        display: flex;
        justify-content: space-between;
        font-size: 13px;
        color: #b5b5b5;
        margin-bottom: 2px;
    }

    .order-value {
        color: #fff;
        font-weight: 500;
    }

    .usdt {
        color: #FFD600;
    }

    .order-checkbox-group {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13px;
        margin-bottom: 8px;
    }

    .order-checkbox-group input[type="checkbox"] {
        accent-color: #FFD600;
        margin-right: 2px;
    }

    .order-gtc {
        color: #444;
        font-size: 12px;
        margin-left: auto;
    }

    .order-btn-group {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
    }

    .btn.long {
        background: #00C076;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 0;
        flex: 1;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .btn.short {
        background: #FF554A;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 0;
        flex: 1;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .btn-desc {
        font-size: 12px;
        font-weight: 400;
        color: #fff;
        opacity: 0.7;
    }

    .order-alert {
        background: #3A2A13;
        color: #FFD600;
        border-radius: 4px;
        padding: 10px 10px 10px 16px;
        font-size: 14px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .icon-arrow {
        width: 14px;
        height: 14px;
        background: #FFD600;
        border-radius: 2px;
        display: inline-block;
    }

    .order-account-box {
        background: #181A20;
        border-radius: 6px;
        padding: 10px 12px;
        font-size: 14px;
    }

    .order-account-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .order-account-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 4px;
        font-size: 13px;
    }

    .order-bar {
        background: #23262F;
        border-radius: 3px;
        width: 60px;
        height: 7px;
        margin: 0 8px;
        position: relative;
        overflow: hidden;
    }

    .order-bar-inner {
        background: #00C076;
        height: 100%;
        width: 0%;
    }

    .order-green {
        color: #00C076;
        font-weight: 600;
        font-size: 13px;
    }

    .trading-pair {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .icon-btc {
        background: #F7931A;
        color: #fff;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .pair-type {
        font-size: 13px;
        color: #b5b5b5;
        margin-left: 6px;
    }

    .info-icon {
        background: #333;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 12px;
        margin-left: 4px;
    }

    .trading-info {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        margin-bottom: 16px;
    }

    .info-item {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        min-width: 120px;
        margin-bottom: 8px;
    }

    .label {
        font-size: 11px;
        color: #b5b5b5;
    }

    .value {
        font-size: 14px;
        font-weight: 500;
    }

    .price-up {
        color: #00C076;
    }

    .percent-down {
        color: #FF554A;
    }

    .fee-rate {
        color: #FFD600;
    }

    .recent-trades-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 15px;
        color: #b5b5b5;
        margin-bottom: 6px;
        padding: 0 4px;
    }

    .recent-trades-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
        color: #fff;
    }

    .recent-trades-table th,
    .recent-trades-table td {
        padding: 3px 6px;
        text-align: right;
    }

    .recent-trades-table th {
        color: #b5b5b5;
        font-weight: 600;
        font-size: 13px;
        background: #23262F;
        position: sticky;
        top: 0;
        z-index: 1;
    }

    .recent-trades-table tr {
        border-bottom: 1px solid #23262F;
    }

    .recent-trades-table td.price-up {
        color: #00C076;
    }

    .recent-trades-table td.price-down {
        color: #FF554A;
    }

    .recent-trades-table .arrow {
        font-size: 12px;
        margin-left: 2px;
    }

    .recent-trades-box {
        width: 100%;
        height: 100%;
        overflow-y: auto;
        background: #23262F;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        padding: 0;
    }

    @media screen and (max-width: 1200px) {
        .trading-header-wrapper {
            flex-direction: column;
            gap: 16px;
        }

        .trading-header-left,
        .trading-header-center,
        .trading-header-right {
            max-width: 100%;
            min-width: 0;
        }

        .trading-header-center {
            margin: 0 0 0 0;
            height: auto;
        }
    }

    @media screen and (max-width: 900px) {
        .trading-header-wrapper {
            flex-direction: column;
        }

        .trading-header-left,
        .trading-header-center,
        .trading-header-right {
            width: 100%;
            max-width: 100%;
        }

        .trading-header-center {
            height: auto;
        }
    }

    @media screen and (max-width: 768px) {
        .trading-header-wrapper {
            padding: 8px;
            gap: 8px;
        }

        .trading-header-left,
        .trading-header-center,
        .trading-header-right {
            min-width: 0;
            max-width: 100%;
        }

        .trading-header-center {
            padding: 8px 2px;
        }
    }

</style>
@endsection
@section('scripts')
@endsection
