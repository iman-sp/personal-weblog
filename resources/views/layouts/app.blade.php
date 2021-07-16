<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel = "icon" href="images/favicon.ico" type = "image/x-icon">
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/header.css">
    @yield('css')


</head>
<body>




    <div id="app">
        <header id="header">
            <nav id="navbar">
                <div>
                    <div>
                        <a id="aboutme" class="white" href="{{ route('aboutme') }}">درباره من</a>

                    </div>
                </div>
            </nav>
            <div>
                <span class="white weblogtitle">وبلاگ ایمان</span>
                <p class="white">به وبلاگ من خوش اومدید </p>
            </div>
        </header>

        <main>
            @yield('content')

        </main>
        <footer>
            this is footer
        </footer>
    </div>
</body>

