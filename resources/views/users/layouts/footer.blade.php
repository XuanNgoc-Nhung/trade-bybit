<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Logo and Social Media -->
            <div class="col-lg-2 col-md-3 mb-4">
                <img src="{{ asset('images/bybit-logo.svg') }}" alt="Bybit" class="footer-logo mb-3">
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-telegram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-reddit"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-discord"></i></a>
                </div>
            </div>

            <!-- About Column -->
            <div class="col-lg-2 col-md-3 mb-4">
                <h5 class="footer-heading">About</h5>
                <ul class="footer-links">
                    <li><a href="#">About Bybit</a></li>
                    <li><a href="#">Press Room</a></li>
                    <li><a href="#">Bybit Communities</a></li>
                    <li><a href="#">Announcements</a></li>
                    <li><a href="#">Risk Disclosure</a></li>
                    <li><a href="#">Whistleblower Channel</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Islamic Account</a></li>
                    <li><a href="#">Fees & Transactions Overview</a></li>
                </ul>
            </div>

            <!-- Services Column -->
            <div class="col-lg-2 col-md-3 mb-4">
                <h5 class="footer-heading">Services</h5>
                <ul class="footer-links">
                    <li><a href="#">One-Click Buy</a></li>
                    <li><a href="#">P2P Trading (0 Fees)</a></li>
                    <li><a href="#">VIP Program</a></li>
                    <li><a href="#">Referral Program</a></li>
                    <li><a href="#">Institutional Services</a></li>
                    <li><a href="#">Listing Application</a></li>
                    <li><a href="#">Tax API</a></li>
                    <li><a href="#">Audit</a></li>
                </ul>
            </div>

            <!-- Support Column -->
            <div class="col-lg-2 col-md-3 mb-4">
                <h5 class="footer-heading">Support</h5>
                <ul class="footer-links">
                    <li><a href="#">Submit a Request</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Support Hub</a></li>
                    <li><a href="#">User Feedback</a></li>
                    <li><a href="#">Bybit Learn</a></li>
                    <li><a href="#">Trading Fee</a></li>
                    <li><a href="#">API</a></li>
                    <li><a href="#">Authenticity Check</a></li>
                </ul>
            </div>

            <!-- Products Column -->
            <div class="col-lg-2 col-md-3 mb-4">
                <h5 class="footer-heading">Products</h5>
                <ul class="footer-links">
                    <li><a href="#">Trade</a></li>
                    <li><a href="#">Derivatives</a></li>
                    <li><a href="#">Earn</a></li>
                    <li><a href="#">Launchpad</a></li>
                    <li><a href="#">Bybit Card</a></li>
                    <li><a href="#">TradingView</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="row mt-4 border-top pt-3">
            <div class="col-md-6">
                <p class="text-muted">&copy; 2018-{{ date('Y') }} Bybit.com. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="text-muted me-3">Terms of Service</a>
                <a href="#" class="text-muted">Privacy Terms</a>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        background-color: #17191d;
        padding: 60px 0 20px;
        color: #808a9d;
    }

    .footer-logo {
        height: 40px;
        margin-bottom: 20px;
    }

    .footer-heading {
        color: #f0b90b;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: #808a9d;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s;
    }

    .footer-links a:hover {
        color: #f0b90b;
    }

    .social-icons {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-top: 20px;
    }

    .social-icon {
        color: #808a9d;
        font-size: 20px;
        transition: color 0.3s;
        text-align: center;
    }

    .social-icon:hover {
        color: #f0b90b;
    }

    .border-top {
        border-top: 1px solid rgba(43, 47, 54, 0.3) !important;
    }

    .text-muted {
        color: #808a9d !important;
    }

    .text-end a {
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .footer .col-md-3 {
            width: 50%;
        }
    }
</style> 