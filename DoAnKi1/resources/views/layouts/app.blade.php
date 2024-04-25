<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng Thiên văn học</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Trang chủ</a></li>
                <li><a href="{{ route('planets.index') }}">Hành tinh</a></li>
                <li><a href="{{ route('comets.index') }}">Sao chổi</a></li>
                <li><a href="{{ route('observatories.index') }}">Đài quan sát</a></li>
                <li><a href="{{ url('/constellations') }}">Chòm sao</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Bản quyền © 2024 Bởi Công ty Thiên văn của bạn.</p>
    </footer>
</body>
</html>
