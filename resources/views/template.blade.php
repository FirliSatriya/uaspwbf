<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name')}}</tile>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
</button>
<div id="my-nav" class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
        @guest('admin')
        <li class="nav-item">
            <a href="{{ route('admin.login') }}" class="nav-link">Login</a>
        </li>
        @else
        @can('role', ['admin'])
        <li class="nav-item">
            <a href="{{ route('post) }}" class="nav-link">Data Post</a>
        </li>
        @endcan
        @can('role', ['admin'])
        <li class="nav-item">
            <a href="{{ route('admin') }}" class="nav-link">Data Admin</a>
        </li>
        @endcan
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">{{ Auth::user() }}</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="#"{{ route('admin.logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="dropdown-item">Logout</a>
                <form action=" {{ route('admin.logout') }}" id=logout-form" method="post">
                @csrf
            </form>
            </div>
        </li>
        @endguest
</div>
<div> class="container">
    @yield('content')
</div>
</body>
</html>