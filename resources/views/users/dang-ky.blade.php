@extends('users.layouts.app')

@section('title', 'Đăng Ký Tài Khoản')

@section('styles')
<style>
    .register-container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
    }
    .register-box {
        background-color: #17191d;
        border-radius: 12px;
        padding: 30px;
    }
    .reward-section {
        background-color: #17191d;
        border-radius: 12px;
        padding: 30px;
        margin-bottom: 30px;
    }
    .reward-card {
        background-color: #2b2f36;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        margin: 10px;
    }
    .reward-amount {
        color: #f0b90b;
        font-size: 24px;
        font-weight: bold;
        margin: 10px 0;
    }
    .exclusive-tag {
        background-color: #f0b90b;
        color: #000;
        padding: 5px 15px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 10px;
    }
    .form-control {
        background-color: #2b2f36;
        border: 1px solid #2b2f36;
        color: #fff;
        padding: 12px;
        border-radius: 8px;
    }
    .form-control::placeholder {
        color: #a0a0a0;
    }
    .form-control:focus {
        background-color: #2b2f36;
        border-color: #f0b90b;
        color: #fff;
        box-shadow: none;
    }
    .social-login {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }
    .social-btn {
        background-color: #2b2f36;
        border: 1px solid #3a3f46;
        color: #fff;
        padding: 10px 20px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .social-btn:hover {
        background-color: #3a3f46;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="register-container">
        <div class="row">
            @include('users.layouts.reward-section')
            
            <div class="col-md-5">
                <div class="register-box">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="form-title mb-0">Create Account</h2>
                        <a href="{{ route('login') }}" class="text-warning">Log In</a>
                    </div>
                    
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="position-relative">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                       name="password" placeholder="Enter your password" required>
                                <i class="fas fa-eye position-absolute end-0 top-50 translate-middle-y me-3" style="cursor: pointer;"></i>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <div class="position-relative">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
                                       name="password_confirmation" placeholder="Confirm your password" required>
                                <i class="fas fa-eye position-absolute end-0 top-50 translate-middle-y me-3" style="cursor: pointer;"></i>
                            </div>
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" required>
                                <label class="form-check-label text-muted">
                                    By clicking "Create Account", you agree to <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>

                        <div class="text-center mt-4">
                            <p class="text-muted">Or sign up with</p>
                            <div class="social-login">
                                <button type="button" class="social-btn">
                                    <img src="{{ asset('images/google-icon.svg') }}" alt="Google" width="20">
                                    Google
                                </button>
                                <button type="button" class="social-btn">
                                    <img src="{{ asset('images/apple-icon.svg') }}" alt="Apple" width="20">
                                    Apple
                                </button>
                                <button type="button" class="social-btn">
                                    <img src="{{ asset('images/telegram-icon.svg') }}" alt="Telegram" width="20">
                                    Telegram
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Toggle password visibility for both password fields
    document.querySelectorAll('.fa-eye').forEach(eyeIcon => {
        eyeIcon.addEventListener('click', function() {
            const passwordInput = this.previousElementSibling;
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            }
        });
    });

    // Form validation with jQuery
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();
            
            // Reset previous error states
            $('.is-invalid').removeClass('is-invalid');
            $('.invalid-feedback').remove();
            
            let isValid = true;
            const email = $('input[name="email"]');
            const password = $('input[name="password"]');
            const passwordConfirmation = $('input[name="password_confirmation"]');
            
            // Validate email
            if (!email.val()) {
                isValid = false;
                email.addClass('is-invalid');
                email.after('<div class="invalid-feedback">Email is required</div>');
            } else if (!isValidEmail(email.val())) {
                isValid = false;
                email.addClass('is-invalid');
                email.after('<div class="invalid-feedback">Please enter a valid email address</div>');
            }
            
            // Validate password
            if (!password.val()) {
                isValid = false;
                password.addClass('is-invalid');
                password.after('<div class="invalid-feedback">Password is required</div>');
            } else if (password.val().length < 8) {
                isValid = false;
                password.addClass('is-invalid');
                password.after('<div class="invalid-feedback">Password must be at least 8 characters</div>');
            }
            
            // Validate password confirmation
            if (!passwordConfirmation.val()) {
                isValid = false;
                passwordConfirmation.addClass('is-invalid');
                passwordConfirmation.after('<div class="invalid-feedback">Please confirm your password</div>');
            } else if (password.val() !== passwordConfirmation.val()) {
                isValid = false;
                passwordConfirmation.addClass('is-invalid');
                passwordConfirmation.after('<div class="invalid-feedback">Passwords do not match</div>');
            }
            
            // If form is valid, submit it
            if (isValid) {
                this.submit();
            }
        });
        
        // Email validation helper function
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    });
</script>
@endsection 