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
                    <button class="theme-toggle" type="button" aria-label="Switch theme" aria-pressed="false"
                        data-theme-toggle>
                        <span class="theme-toggle__icon theme-toggle__icon--sun" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="none">
                                <circle cx="12" cy="12" r="4.25" stroke="currentColor"
                                    stroke-width="1.75" />
                                <path
                                    d="M12 2.75v2.5M12 18.75v2.5M21.25 12h-2.5M5.25 12h-2.5M18.54 5.46l-1.77 1.77M7.23 16.77l-1.77 1.77M18.54 18.54l-1.77-1.77M7.23 7.23 5.46 5.46"
                                    stroke="currentColor" stroke-width="1.75" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="theme-toggle__icon theme-toggle__icon--moon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="none">
                                <path d="M20 14.3A8.5 8.5 0 0 1 9.7 4a8.5 8.5 0 1 0 10.3 10.3Z" stroke="currentColor"
                                    stroke-width="1.75" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
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
        @php
            $hasPortrait = file_exists(public_path('images/brian-opiyo.jpg'));
        @endphp
        <section class="hero-section" id="home" aria-label="Introduction">
            <div class="hero-shell">
                <div class="hero-copy">
                    <p class="hero-kicker">Hello there, I am</p>
                    <h1 class="hero-title">Brian Opiyo</h1>
                    <p class="hero-description">
                        Welcome to my portfolio. I build clean, modern web experiences.
                    </p>
                </div>

                <aside class="hero-showcase" aria-label="Brian Opiyo portrait">
                    <div class="hero-portrait-frame">
                        @if ($hasPortrait)
                            <img src="{{ asset('images/brian-opiyo.jpg') }}" alt="Portrait of Brian Opiyo"
                                class="hero-portrait-image" loading="eager" decoding="async">
                        @else
                            <div class="hero-portrait-fallback" aria-label="Brian Opiyo initials">BO</div>
                        @endif
                    </div>
                </aside>
            </div>
        </section>
    </div>
    <main>

    </main>
    <footer>
        <div class="footer-content"></div>
    </footer>
    <script>
        (() => {
            const root = document.documentElement;
            const toggle = document.querySelector('[data-theme-toggle]');
            if (!toggle) return;

            const storageKey = 'portfolio-theme';
            const prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;
            const savedTheme = localStorage.getItem(storageKey);
            const initialTheme = savedTheme || (prefersLight ? 'light' : 'dark');

            const applyTheme = (theme) => {
                root.setAttribute('data-theme', theme);
                toggle.setAttribute('aria-pressed', String(theme === 'light'));
                toggle.setAttribute('aria-label', theme === 'light' ? 'Switch to dark theme' :
                    'Switch to light theme');
            };

            applyTheme(initialTheme);

            toggle.addEventListener('click', () => {
                const nextTheme = root.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
                applyTheme(nextTheme);
                localStorage.setItem(storageKey, nextTheme);
            });
        })();
    </script>
</body>

</html>
