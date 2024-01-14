<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header>
        <div class="header-back">
            <h1 class="header-title font">Atte</h1>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    
    <footer>
        <div class="footer-back">
            <p class="footer-content font">Atte,inc.</p>
        </div>
    </footer>
</body>
</html>