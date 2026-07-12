<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Shamsul Ulama Islamic & Arts College')</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Cinzel:wght@400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Common Layout Styles -->
    <style>
        :root {
            --color-primary: #042c20;
            --color-primary-light: #0d5c46;
            --color-primary-dark: #021a13;
            --color-accent: #c5a059;
            --color-accent-light: #dfc186;
            --color-bg-light: #fbf9f4;
            --color-bg-white: #ffffff;
            --color-text-dark: #1e2a25;
            --color-text-muted: #5e726b;
            --color-border: rgba(197, 160, 89, 0.2);
            --shadow-sm: 0 4px 10px rgba(0, 0, 0, 0.04);
            --shadow-md: 0 10px 25px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 20px 45px rgba(4, 44, 32, 0.1);

            --islamic-pattern: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Cpath d='M30 0 L35 15 L50 20 L35 25 L30 40 L25 25 L10 20 L25 15 Z M30 15 L32 25 L42 27 L32 29 L30 39 L28 29 L18 27 L28 25 Z' fill='%23c5a059' fill-opacity='0.03'/%3E%3Cpath d='M0 30 L15 35 L20 50 L25 35 L40 30 L25 25 L20 10 L15 25 Z' fill='%23c5a059' fill-opacity='0.02'/%3E%3C/svg%3E");
            --islamic-pattern-dark: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Cpath d='M30 0 L35 15 L50 20 L35 25 L30 40 L25 25 L10 20 L25 15 Z M30 15 L32 25 L42 27 L32 29 L30 39 L28 29 L18 27 L28 25 Z' fill='%23c5a059' fill-opacity='0.05'/%3E%3Cpath d='M0 30 L15 35 L20 50 L25 35 L40 30 L25 25 L20 10 L15 25 Z' fill='%23c5a059' fill-opacity='0.03'/%3E%3C/svg%3E");
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--color-bg-light);
            color: var(--color-text-dark);
            line-height: 1.6;
            overflow-x: hidden;
            padding-top: 72px;
            /* Offset for fixed header */
        }

        /* Headings */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Cinzel', serif;
            font-weight: 700;
        }

        .arabic-font {
            font-family: 'Amiri', serif;
            font-weight: 700;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 14px 5%;          /* tighter default */
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;                 /* gap between logo & nav */
            background: rgba(4, 44, 32, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 1000;
            border-bottom: 1px solid rgba(197, 160, 89, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        header.scrolled {
            padding: 10px 5%;
            background: rgba(2, 26, 19, 0.95);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .logo-wrap {
            display: flex;
            flex-direction: column;
            text-decoration: none;
            flex-shrink: 0;           /* don't let logo compress */
            min-width: 0;
        }

        .logo-wrap h1 {
            font-size: 18px;
            font-weight: 800;
            color: var(--color-accent);
            letter-spacing: 0.5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .logo-wrap h2 {
            font-size: 9px;
            font-weight: 500;
            color: white;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-top: 2px;
            white-space: nowrap;
        }

        /* Desktop Nav Link Items */
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 500;
            font-size: 13px;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding: 7px 10px;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
            white-space: nowrap;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--color-accent);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--color-accent-light);
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 80%;
        }

        /* Hamburger Menu Button */
        #menuBtn {
            font-size: 28px;
            border: none;
            background: none;
            color: var(--color-accent);
            cursor: pointer;
            z-index: 1002;
            transition: transform 0.3s ease;
            display: none;
            /* Hidden on desktop */
        }

        #menuBtn:hover {
            transform: scale(1.15);
        }

        /* Animated Mobile Drawer Menu */
        #menu {
            position: fixed;
            top: 0;
            right: -300px;
            width: 280px;
            height: 100vh;
            background: rgba(2, 26, 19, 0.98);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 100px 30px 40px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            border-left: 2px solid var(--color-accent);
            box-shadow: -10px 0 40px rgba(0, 0, 0, 0.5);
            transition: right 0.5s cubic-bezier(0.77, 0, 0.175, 1);
            z-index: 1001;
        }

        #menu.show {
            right: 0;
        }

        #menu a {
            display: block;
            padding: 16px 20px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px solid rgba(197, 160, 89, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        #menu a:hover,
        #menu a.active {
            background: var(--color-accent);
            color: var(--color-primary-dark);
            padding-left: 28px;
        }

        #menu a:last-child {
            border-bottom: none;
        }

        /* Premium Multi-Column Footer */
        footer {
            background: var(--color-primary-dark);
            background-image: var(--islamic-pattern-dark);
            color: white;
            padding: 70px 8% 30px;
            border-top: 4px solid var(--color-accent);
            position: relative;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1.5fr;
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer-col h3 {
            color: var(--color-accent);
            font-size: 20px;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
            letter-spacing: 1px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--color-accent);
        }

        .footer-col p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-col ul li a:hover {
            color: var(--color-accent);
            transform: translateX(5px);
        }

        .footer-contact-info p {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 12px;
        }

        .footer-contact-info p span {
            color: var(--color-accent);
        }

        /* Copyright & Developer Section */
        .footer-bottom {
            border-top: 1px solid rgba(197, 160, 89, 0.15);
            padding-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-bottom p {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.5);
        }

        .footer-bottom .dev-credit {
            color: rgba(255, 255, 255, 0.6);
        }

        .footer-bottom .dev-credit a {
            color: var(--color-accent);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-bottom .dev-credit a:hover {
            color: var(--color-accent-light);
        }

        /* Buttons & Utils */
        .btn {
            display: inline-block;
            padding: 14px 32px;
            background: var(--color-accent);
            color: var(--color-primary-dark);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 15px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            border: 2px solid var(--color-accent);
            box-shadow: 0 4px 15px rgba(197, 160, 89, 0.2);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .btn:hover {
            transform: translateY(-3px);
            background: transparent;
            color: var(--color-accent);
            box-shadow: 0 10px 25px rgba(197, 160, 89, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: none;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--color-primary-dark);
            border-color: white;
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
        }

        .whatsapp-btn-pulse {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: #25D366;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 14px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
            transition: all 0.3s ease;
        }

        .whatsapp-btn-pulse:hover {
            background: #128C7E;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.5);
        }

        /* Responsive Media Queries */

        /* Medium laptops (1400px): start shrinking nav */
        @media(max-width: 1400px) {
            .nav-links {
                gap: 6px;
            }

            .nav-links a {
                font-size: 12px;
                padding: 6px 8px;
            }
        }

        /* Large tablets / small laptops (1200px) */
        @media(max-width: 1200px) {
            header {
                padding: 12px 3%;
            }

            header.scrolled {
                padding: 10px 3%;
            }

            .nav-links {
                gap: 3px;
            }

            .nav-links a {
                font-size: 10.5px;
                padding: 5px 5px;
                letter-spacing: 0.3px;
            }

            .logo-wrap h1 {
                font-size: 15px;
            }

            .logo-wrap h2 {
                font-size: 8px;
                letter-spacing: 0.8px;
            }
        }

        /* Tablet: hide desktop nav, show hamburger */
        @media(max-width: 992px) {
            header {
                padding: 14px 5%;
            }

            header.scrolled {
                padding: 11px 5%;
            }

            .nav-links {
                display: none;
            }

            #menuBtn {
                display: block;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .logo-wrap h1 {
                font-size: 16px;
            }

            .logo-wrap h2 {
                font-size: 9px;
            }
        }

        /* Mobile */
        @media(max-width: 768px) {
            body {
                padding-top: 68px;
            }

            header {
                padding: 12px 5%;
            }

            .logo-wrap h1 {
                font-size: 15px;
            }

            .logo-wrap h2 {
                display: none;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
        }

        /* Small mobile */
        @media(max-width: 480px) {
            header {
                padding: 10px 4%;
            }

            .logo-wrap h1 {
                font-size: 13px;
                letter-spacing: 0.5px;
            }
        }
    </style>

    @yield('styles')
    @stack('styles')
</head>

<body class="@yield('body-class')" style="@yield('body-style')">

    <!-- Header / Navbar -->
    <header id="mainHeader">
        @section('header-left')
        <a href="{{ route('home') }}" class="logo-wrap">
            <h1>Shamsul Ulama Islamic College</h1>
            <h2>Knowledge • Faith • Excellence</h2>
        </a>
        @show

        <!-- Desktop Navigation links -->
        <nav class="nav-links">
            <a href="{{ route('home') }}#index" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('home') }}#about">About</a>
            <a href="{{ route('teachers') }}" class="{{ request()->routeIs('teachers') ? 'active' : '' }}">Teachers</a>
            <a href="{{ route('management') }}"
                class="{{ request()->routeIs('management') ? 'active' : '' }}">Management</a>
            <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
            <a href="{{ route('masa') }}" class="{{ request()->routeIs('masa') ? 'active' : '' }}">MASA (Union)</a>
            <a href="{{ route('home') }}#contact">Contact</a>
        </nav>

        <!-- Mobile Menu Hamburger Button -->
        <button id="menuBtn" onclick="toggleMenu()" aria-label="Toggle Navigation Menu">☰</button>

        <!-- Animated Mobile Drawer Menu -->
        <div id="menu">
            <a href="{{ route('home') }}#index" onclick="toggleMenu()"
                class="{{ request()->is('/') ? 'active' : '' }}"> Home</a>
            <a href="{{ route('home') }}#about" onclick="toggleMenu()">ℹ About</a>
            <a href="{{ route('teachers') }}" onclick="toggleMenu()"
                class="{{ request()->routeIs('teachers') ? 'active' : '' }}"> Teachers</a>
            <a href="{{ route('management') }}" onclick="toggleMenu()"
                class="{{ request()->routeIs('management') ? 'active' : '' }}"> Management</a>
            <a href="{{ route('gallery') }}" onclick="toggleMenu()"
                class="{{ request()->routeIs('gallery') ? 'active' : '' }}"> Gallery</a>
            <a href="{{ route('masa') }}" onclick="toggleMenu()"
                class="{{ request()->routeIs('masa') ? 'active' : '' }}"> MASA (Union)</a>
            <a href="{{ route('home') }}#contact" onclick="toggleMenu()"> Contact</a>
        </div>
    </header>

    <!-- Main Content Yield -->
    <main>
        @yield('content')
    </main>

    <!-- Multi-Column Premium Footer -->
    @section('footer')
    <footer>
        <div class="footer-grid">
            <!-- Col 1: About the College -->
            <div class="footer-col">
                <h3>Shamsul Ulama Islamic & Arts College</h3>
                <p>
                    Blending traditional Islamic wisdom with modern academic curriculum to shape intellectual, ethical,
                    and spiritual leaders of tomorrow.
                </p>
                <p><strong>Affiliated to SNEC (Samastha National Education Council)</strong></p>
            </div>

            <!-- Col 2: Quick Navigation Links -->
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ route('home') }}#index">Home</a></li>
                    <li><a href="{{ route('home') }}#about">About Us</a></li>
                    <li><a href="{{ route('teachers') }}">Our Teachers</a></li>
                    <li><a href="{{ route('management') }}">Management</a></li>
                    <li><a href="{{ route('gallery') }}">Photo Gallery</a></li>
                    <li><a href="{{ route('masa') }}">MASA Union</a></li>
                </ul>
            </div>

            <!-- Col 3: Contact details & Whatsapp button -->
            <div class="footer-col footer-contact-info">
                <h3>Contact Info</h3>
                <p><span>📍</span> Shamsul Ulama Islamic & Arts College,<br>Pathiyankara, Thrikkunnapuzha, Alappuzha,
                    Kerala</p>
                <p><span>📧</span> shamsululamasnecalp@gmail.com</p>
                <p><span>📞</span> +91 92887 59269, +91 97470 64013</p>
                <div style="margin-top: 15px;">
                    <a href="https://wa.me/919747064013?text=I%20am%20interested%20in%20Admission%20enquiry"
                        target="_blank" class="whatsapp-btn-pulse">
                        💬 Admission Enquiry
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <p>&copy; 2026 Shamsul Ulama Islamic & Arts College. All Rights Reserved. Managed by SNEC.</p>
            <p class="dev-credit">Designed & Developed by <a href="#developer" onclick="scrollToDeveloper()">Muhammed
                    Yaseen E A</a></p>
        </div>
    </footer>
    @show

    <!-- Global JavaScript -->
    <script>
        // Toggle mobile navbar drawer
        function toggleMenu() {
            var menu = document.getElementById("menu");
            if (menu) {
                menu.classList.toggle("show");
            }
        }

        // Close menu drawer when clicking outside
        window.addEventListener('click', function (event) {
            var menu = document.getElementById("menu");
            var menuBtn = document.getElementById("menuBtn");
            if (menu && menu.classList.contains('show') && event.target !== menu && event.target !== menuBtn && !menu.contains(event.target)) {
                menu.classList.remove('show');
            }
        });

        // Add scrolled class to header for extra premium sticky effect
        window.addEventListener('scroll', function () {
            var header = document.getElementById("mainHeader");
            if (header) {
                if (window.scrollY > 50) {
                    header.classList.add("scrolled");
                } else {
                    header.classList.remove("scrolled");
                }
            }
        });

        // Developer link helper to scroll to developer card on homepage
        function scrollToDeveloper() {
            if (window.location.pathname === '/') {
                var developerSec = document.getElementById("developer");
                if (developerSec) {
                    developerSec.scrollIntoView({ behavior: 'smooth' });
                }
            } else {
                window.location.href = "{{ route('home') }}#developer";
            }
        }
    </script>

    @yield('scripts')
    @stack('scripts')
</body>

</html>