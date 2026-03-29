<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Anbias</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">
    <div class="admin-login-wrap">
        <div class="admin-login-card">
            <div class="admin-brand"><span class="admin-brand-dot"></span>ANBIAS ADMIN</div>
            <h1>Sign in</h1>
            <p>Use your seeded administrator username and password.</p>

            @if ($errors->any())
                <div class="admin-error">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="admin-field">
                    <label for="username">Username</label>
                    <input class="admin-input" type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
                </div>

                <div class="admin-field">
                    <label for="password">Password</label>
                    <input class="admin-input" type="password" id="password" name="password" required>
                </div>

                <button class="admin-btn" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
