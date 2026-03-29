<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/anbias-logo.svg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">
    <div class="admin-shell">
        <header class="admin-header">
            <div class="admin-header-left">
                <div class="admin-brand">
                    <img src="{{ asset('images/anbias-logo.svg') }}" alt="Anbias" class="admin-brand-logo" width="30" height="30" decoding="async">
                </div>
                <nav class="admin-nav">
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                    <a href="{{ route('admin.enquiries.index') }}" class="{{ request()->routeIs('admin.enquiries.*') ? 'active' : '' }}">Enquiries</a>
                    <a href="{{ route('admin.blogs.index') }}" class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">Blogs</a>
                    <a href="{{ route('admin.case-studies.index') }}" class="{{ request()->routeIs('admin.case-studies.*') ? 'active' : '' }}">Case Studies</a>
                    <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">Categories</a>
                    <a href="{{ route('admin.authors.index') }}" class="{{ request()->routeIs('admin.authors.*') ? 'active' : '' }}">Authors</a>
                </nav>
            </div>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="admin-logout">Logout</button>
            </form>
        </header>

        <main class="admin-main">
            @yield('content')
        </main>
    </div>
</body>
</html>
