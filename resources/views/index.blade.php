<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/setup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <div class="navbar">
        <header class="site-header" role="banner">
            <div class="site-header__bar">
                <input type="checkbox" id="nav-menu-toggle" class="nav-menu-toggle" hidden>

                <a class="site-logo" href="{{ url('/') }}" aria-label="{{ config('app.name') }} — Home">
                    <span class="site-logo__mark">
                        <img src="{{ asset('images/logo.png') }}" alt="" width="36" height="36"
                            decoding="async">
                    </span>
                    <span class="site-logo__type">{{ config('app.name') }}</span>
                </a>

                <nav class="site-nav" aria-label="Primary">
                    <ul class="site-nav__list">
                        <li><a href="{{ url('/') }}" class="site-nav__link site-nav__link--active">Home</a></li>
                        <li><a href="{{ url('/') }}#work" class="site-nav__link">Work</a></li>
                        <li><a href="{{ url('/') }}#about" class="site-nav__link">About</a></li>
                        <li><a href="{{ url('/') }}#contact" class="site-nav__link">Contact</a></li>
                    </ul>
                </nav>

                <div class="site-header__actions">
                    <a href="{{ url('/') }}#contact" class="site-header__cta">
                        <span>Let's talk</span>
                        <svg class="site-header__cta-icon" width="16" height="16" viewBox="0 0 16 16"
                            fill="none" aria-hidden="true">
                            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <label for="nav-menu-toggle" class="nav-burger" aria-label="Open menu">
                        <span class="nav-burger__line" aria-hidden="true"></span>
                        <span class="nav-burger__line" aria-hidden="true"></span>
                    </label>
                </div>
            </div>
        </header>
        <div class="hero-section"></div>
    </div>
    <main>

    </main>
    <footer>
        <div class="footer-content"></div>
    </footer>
</body>

</html>
