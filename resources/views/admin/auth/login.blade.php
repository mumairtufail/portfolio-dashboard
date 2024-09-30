<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.header')
</head>
<body>
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="{{ asset('admin/images/icon/logo.png') }}" alt="CoolAdmin">
                </a>
            </div>
            <div class="login-form">
                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                </form>
                <div class="register-link">
                    <p>
                        Don't have an account?
                        <a href="{{ route('admin.register') }}">Sign Up Here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>