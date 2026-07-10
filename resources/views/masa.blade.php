<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MASA - Manbaul Afnan Students' Association</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Cinzel:wght@400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

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
        }

        /* Base Headings */
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

        /* Global Button */
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

        /* Header & Menu */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(4, 44, 32, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 1000;
            border-bottom: 1px solid rgba(197, 160, 89, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .header-logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .header-logo {
            height: 44px;
            width: 44px;
            border-radius: 50%;
            border: 2px solid var(--color-accent);
            object-fit: cover;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .header-logo-container:hover .header-logo {
            transform: rotate(360deg);
        }

        .logo-wrap {
            display: flex;
            flex-direction: column;
        }

        .logo-wrap h1 {
            font-size: 20px;
            font-weight: 800;
            color: var(--color-accent);
            letter-spacing: 1px;
        }

        .logo-wrap h2 {
            font-size: 10px;
            font-weight: 500;
            color: white;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-top: 2px;
        }

        #menuBtn {
            font-size: 28px;
            border: none;
            background: none;
            color: var(--color-accent);
            cursor: pointer;
            z-index: 1002;
            transition: transform 0.3s ease;
        }

        #menuBtn:hover {
            transform: scale(1.15);
        }

        #menu {
            position: fixed;
            top: 0;
            right: -300px;
            width: 280px;
            height: 100vh;
            background: rgba(2, 26, 19, 0.96);
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

        #menu a:hover {
            background: var(--color-accent);
            color: var(--color-primary-dark);
            padding-left: 28px;
        }

        #menu a:last-child {
            border-bottom: none;
        }

        /* Intro Loader */
        #intro {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: linear-gradient(135deg, var(--color-primary-dark), var(--color-primary), #052119);
            background-image: var(--islamic-pattern-dark), linear-gradient(135deg, var(--color-primary-dark), var(--color-primary), #052119);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
            transition: opacity 0.6s ease, visibility 0.6s ease;
        }

        .intro-box {
            text-align: center;
            color: white;
            max-width: 600px;
            padding: 30px;
        }

        .intro-logo-wrap {
            margin-bottom: 25px;
            display: inline-block;
            position: relative;
        }

        .intro-logo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid var(--color-accent);
            padding: 5px;
            background: white;
            box-shadow: 0 0 30px rgba(197, 160, 89, 0.4);
            animation: introLogoGlow 3s ease-in-out infinite alternate;
        }

        @keyframes introLogoGlow {
            0% {
                transform: scale(1) rotate(0deg);
                box-shadow: 0 0 15px rgba(197, 160, 89, 0.3);
            }

            100% {
                transform: scale(1.06) rotate(5deg);
                box-shadow: 0 0 35px rgba(197, 160, 89, 0.7);
            }
        }

        .arabic-title {
            font-size: 44px;
            margin-top: 15px;
            color: var(--color-accent-light);
            letter-spacing: 1px;
        }

        .verse-translation {
            margin-top: 12px;
            font-size: 17px;
            font-style: italic;
            color: rgba(255, 255, 255, 0.85);
        }

        .intro-college-name {
            margin-top: 25px;
            font-size: 26px;
            letter-spacing: 1.5px;
            color: var(--color-accent);
        }

        .location-tag {
            margin-top: 10px;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, 0.6);
        }

        @keyframes moonGlow {
            0% {
                transform: scale(1) rotate(0deg);
                filter: drop-shadow(0 0 10px rgba(197, 160, 89, 0.3));
            }

            100% {
                transform: scale(1.08) rotate(10deg);
                filter: drop-shadow(0 0 30px rgba(197, 160, 89, 0.7));
            }
        }

        .hideIntro {
            opacity: 0;
            visibility: hidden;
        }

        /* Sections Base Styling */
        section {
            padding: 100px 8%;
            position: relative;
        }

        .section-title {
            text-align: center;
            font-size: 38px;
            margin-bottom: 50px;
            color: var(--color-primary);
            position: relative;
            padding-bottom: 20px;
        }

        .section-title::after {
            content: '۞';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--color-accent);
            font-size: 20px;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            min-height: 700px;
            background: linear-gradient(135deg, var(--color-primary-dark), #032b1f);
            background-image: var(--islamic-pattern-dark), linear-gradient(135deg, var(--color-primary-dark), #032b1f);
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: center;
            color: white;
            padding-top: 120px;
        }

        .hero-text {
            z-index: 2;
        }

        .hero-bismillah {
            font-size: 20px;
            color: var(--color-accent-light);
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .hero h1 {
            font-size: 44px;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--color-accent);
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
        }

        .hero p {
            font-size: 19px;
            margin-bottom: 35px;
            color: rgba(255, 255, 255, 0.85);
            max-width: 650px;
        }

        .hero-btn-group {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .hero-snec {
            margin-top: 20px;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: rgba(255, 255, 255, 0.5);
            font-weight: 600;
        }

        /* Arch Frame (Mehrab Style) */
        .hero-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .arch-frame {
            width: 100%;
            max-width: 380px;
            height: 480px;
            position: relative;
            border-radius: 190px 190px 25px 25px;
            border: 3px solid var(--color-accent);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            padding: 8px;
            background: rgba(4, 44, 32, 0.6);
        }

        .arch-frame-inner {
            width: 100%;
            height: 100%;
            border-radius: 180px 180px 15px 15px;
            overflow: hidden;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #053b2b, #01140f);
        }

        .arch-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .arch-frame:hover img {
            transform: scale(1.08);
        }

        /* Custom Islamic Arch Logo SVG placeholder inside framework */
        .arch-logo-graphic {
            width: 80%;
            height: 80%;
            fill: none;
            stroke: var(--color-accent);
            stroke-width: 1.5;
            opacity: 0.85;
            animation: pulseLogo 4s infinite alternate;
        }

        @keyframes pulseLogo {
            0% {
                transform: scale(0.96);
                opacity: 0.7;
            }

            100% {
                transform: scale(1.02);
                opacity: 0.95;
            }
        }

        /* Quran Verse Section */
        .quran {
            background: var(--color-primary-dark);
            background-image: var(--islamic-pattern-dark);
            color: white;
            text-align: center;
            padding: 100px 8%;
            border-top: 2px solid var(--color-accent);
            border-bottom: 2px solid var(--color-accent);
        }

        .quran-container {
            max-width: 850px;
            margin: 0 auto;
        }

        .quran-verse-card {
            background: rgba(4, 44, 32, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 3px double var(--color-accent);
            border-radius: 25px;
            padding: 50px 30px;
            margin-bottom: 40px;
            position: relative;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .quran-verse-card::before {
            content: '';
            position: absolute;
            top: 8px;
            right: 8px;
            bottom: 8px;
            left: 8px;
            border: 1px solid rgba(197, 160, 89, 0.25);
            border-radius: 18px;
            pointer-events: none;
        }

        .quran-verse-card h2 {
            font-size: 38px;
            color: var(--color-accent-light);
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .quran-verse-card p {
            font-size: 17px;
            font-style: italic;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
        }

        .quran-verse-card span {
            display: inline-block;
            margin-top: 15px;
            font-size: 13px;
            color: var(--color-accent);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* About Us Section */
        #about {
            background: var(--color-bg-light);
            background-image: var(--islamic-pattern);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 60px;
            align-items: center;
        }

        .about-image {
            display: flex;
            justify-content: center;
        }

        .about-text h3 {
            font-size: 32px;
            color: var(--color-primary);
            margin-bottom: 20px;
        }

        .about-tagline {
            font-size: 13px;
            color: var(--color-accent);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .about-text p {
            font-size: 17px;
            color: var(--color-text-dark);
            margin-bottom: 25px;
            line-height: 1.7;
        }

        /* Wings of MASA Section */
        #wings {
            background: var(--color-bg-white);
            background-image: var(--islamic-pattern);
            border-top: 1px solid var(--color-border);
        }

        .wings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--color-bg-light);
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            border-left: 5px solid var(--color-accent);
            border-top: 1px solid rgba(197, 160, 89, 0.1);
            border-right: 1px solid rgba(197, 160, 89, 0.1);
            border-bottom: 1px solid rgba(197, 160, 89, 0.1);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }

        .card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 2px solid var(--color-accent);
            border-radius: 20px;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            background: white;
        }

        .card:hover::after {
            opacity: 1;
        }

        .card-icon {
            font-size: 36px;
            color: var(--color-accent);
            margin-bottom: 20px;
        }

        .card h3 {
            color: var(--color-primary);
            font-size: 22px;
            margin-bottom: 15px;
        }

        .card p {
            color: var(--color-text-muted);
            font-size: 15px;
            line-height: 1.6;
        }

        /* Stats & Quick Stats Section */
        .stats {
            background: var(--color-primary);
            background-image: var(--islamic-pattern-dark);
            color: white;
            padding: 80px 8%;
            border-top: 2px solid var(--color-accent);
            border-bottom: 2px solid var(--color-accent);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-item {
            padding: 10px;
        }

        .stat-badge {
            width: 100px;
            height: 100px;
            border: 2px solid var(--color-accent);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            background: rgba(255, 255, 255, 0.03);
            box-shadow: 0 0 15px rgba(197, 160, 89, 0.2);
        }

        .stat-item h2 {
            font-size: 34px;
            color: var(--color-accent-light);
        }

        .stat-item p {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
        }

        /* Union Cabinet / Office Bearers */
        #cabinet {
            background: var(--color-bg-light);
            background-image: var(--islamic-pattern);
        }

        .cabinet-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .cabinet-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(197, 160, 89, 0.15);
            text-align: center;
            padding: 35px 25px;
            transition: all 0.3s ease;
            position: relative;
        }

        .cabinet-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--color-accent);
        }

        .cabinet-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--color-accent);
        }

        .cabinet-avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            border: 3px solid var(--color-accent);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: var(--color-accent-light);
            font-family: 'Cinzel', serif;
            font-size: 32px;
            font-weight: bold;
        }

        .cabinet-card h3 {
            font-size: 20px;
            color: var(--color-primary);
            margin-bottom: 6px;
        }

        .cabinet-role {
            font-size: 13px;
            color: var(--color-accent);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 15px;
        }

        .cabinet-year {
            font-size: 14px;
            color: var(--color-text-muted);
            font-style: italic;
        }

        /* Annual Initiatives & Events Section */
        #initiatives {
            background: var(--color-bg-white);
            background-image: var(--islamic-pattern);
            border-top: 1px solid var(--color-border);
        }

        .timeline {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            padding: 20px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 2px;
            background: var(--color-accent);
            opacity: 0.3;
            transform: translateX(-50%);
        }

        .timeline-item {
            margin-bottom: 40px;
            position: relative;
            width: 50%;
            padding: 0 40px;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
            text-align: left;
        }

        .timeline-dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--color-accent);
            position: absolute;
            top: 5px;
            z-index: 2;
            box-shadow: 0 0 10px var(--color-accent);
        }

        .timeline-item:nth-child(odd) .timeline-dot {
            right: -8px;
        }

        .timeline-item:nth-child(even) .timeline-dot {
            left: -8px;
        }

        .timeline-content {
            background: var(--color-bg-light);
            padding: 25px;
            border-radius: 15px;
            border: 1px solid var(--color-border);
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }

        .timeline-content:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
            border-color: var(--color-accent);
        }

        .timeline-content h3 {
            color: var(--color-primary);
            margin-bottom: 10px;
            font-size: 20px;
        }

        .timeline-content p {
            font-size: 14px;
            color: var(--color-text-dark);
        }

        /* Suggestion Form Section */
        #suggestions {
            background: var(--color-bg-light);
            background-image: var(--islamic-pattern);
            padding: 90px 8%;
            display: flex;
            justify-content: center;
            border-top: 1px solid var(--color-border);
        }

        .contact-box {
            width: 100%;
            max-width: 750px;
            background: var(--color-bg-white);
            padding: 50px 40px;
            border-radius: 30px;
            border: 1px solid rgba(197, 160, 89, 0.25);
            box-shadow: var(--shadow-md);
            text-align: center;
        }

        .contact-box h2 {
            font-size: 32px;
            color: var(--color-primary);
            margin-bottom: 10px;
        }

        .contact-box p {
            color: var(--color-text-muted);
            margin-bottom: 30px;
        }

        .contact-box form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-box input,
        .contact-box textarea,
        .contact-box select {
            padding: 16px 20px;
            border: 1px solid rgba(197, 160, 89, 0.3);
            border-radius: 12px;
            font-size: 15px;
            outline: none;
            background: var(--color-bg-light);
            color: var(--color-text-dark);
            transition: all 0.3s ease;
            width: 100%;
        }

        .contact-box input:focus,
        .contact-box textarea:focus,
        .contact-box select:focus {
            border-color: var(--color-accent);
            background: white;
            box-shadow: 0 0 10px rgba(197, 160, 89, 0.2);
        }

        .contact-box button {
            padding: 16px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
            color: white;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(4, 44, 32, 0.2);
            transition: all 0.3s ease;
        }

        .contact-box button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(4, 44, 32, 0.4);
        }

        /* Footer */
        footer {
            background: var(--color-primary-dark);
            color: white;
            text-align: center;
            padding: 45px 20px;
            border-top: 3px solid var(--color-accent);
        }

        footer h3 {
            color: var(--color-accent);
            font-size: 22px;
            margin-bottom: 8px;
        }

        footer p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            margin-bottom: 5px;
        }

        footer p.copyright {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.4);
            margin-top: 15px;
        }

        /* Mobile Media Queries */
        @media(max-width:992px) {
            .hero {
                grid-template-columns: 1fr;
                text-align: center;
                height: auto;
                padding-bottom: 60px;
                padding-top: 140px;
            }

            .hero-btn-group {
                justify-content: center;
            }

            .hero-image-container {
                margin-top: 20px;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .timeline::before {
                left: 40px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 80px;
                padding-right: 20px;
                text-align: left !important;
            }

            .timeline-item:nth-child(even) {
                left: 0;
            }

            .timeline-dot {
                left: 32px !important;
                right: auto !important;
            }
        }

        @media(max-width:768px) {
            header {
                padding: 15px 5%;
            }

            section {
                padding: 60px 5%;
            }

            .hero h1 {
                font-size: 32px;
            }

            .quran-verse-card h2 {
                font-size: 28px;
                line-height: 1.6;
            }
        }
    </style>
</head>

<body>
    <!-- MASA Intro Loader -->
    <div id="intro">
        <div class="intro-box">
            <div class="intro-logo-wrap">
                <img src="{{ asset('gallery_images/college/masalogo.png') }}" alt="MASA Logo" class="intro-logo">
            </div>
            <h1 class="arabic-title arabic-font">وَتَعَاوَنُوا عَلَى الْبِرِّ وَالتَّقْوَىٰ</h1>
            <p class="verse-translation">"And cooperate in righteousness and piety"</p>
            <h2 class="intro-college-name">MANBAUL AFNAN STUDENTS' ASSOCIATION</h2>
            <p class="location-tag">Shamsul Ulama Islamic & Arts College</p>
        </div>
    </div>

    <header>
        <div class="header-logo-container">
            <img src="{{ asset('gallery_images/college/masalogo.png') }}" alt="MASA Logo" class="header-logo">
            <div class="logo-wrap">
                <h1>MASA UNION</h1>
                <h2>Shamsul Ulama Islamic College</h2>
            </div>
        </div>

        <!-- 3 Dot Button -->
        <button id="menuBtn" onclick="toggleMenu()">☰</button>

        <!-- Animated Menu -->
        <div id="menu">
            <a href="{{ route('home') }}#index">🏠 Home</a>
            <a href="{{ route('home') }}#about">ℹ️ About</a>
            <a href="{{ route('teachers') }}">👨‍🏫 Teachers</a>
            <a href="{{ route('management') }}">🏛️ Management</a>
            <a href="{{ route('gallery') }}">🖼 Gallery</a>
            <a href="{{ route('masa') }}">🤝 MASA (Union)</a>
            <a href="{{ route('home') }}#contact">📞 Contact</a>

        </div>
    </header>

    <section id="index" class="hero">
        <div class="hero-text">
            <div class="hero-bismillah arabic-font">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</div>
            <h1>Manbaul Afnan Students' Association</h1>
            <p>Welcome to MASA, the vibrant student union of Shamsul Ulama Islamic & Arts College. We aim to nurture
                intellectual talents, spiritual depth, and leadership skills through active student cooperation.
            </p>
            <div class="hero-btn-group">
                <a href="#about" class="btn">Explore MASA</a>
                <a href="#suggestions" class="btn btn-secondary">Submit Idea</a>
            </div>
            <div class="hero-snec">Union Term 2026 - 2027</div>
        </div>
        <div class="hero-image-container">
            <div class="arch-frame">
                <div class="arch-frame-inner">
                    <img src="{{ asset('gallery_images/college/masalogo.png') }}" alt="MASA UNION Logo">
                    <div
                        style="position: absolute; inset: 0; box-shadow: inset 0 0 40px rgba(0, 0, 0, 0.35); pointer-events: none; border-radius: 180px 180px 15px 15px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quran">
        <div class="quran-container">
            <div class="quran-verse-card">
                <h2 class="arabic-font">وَتَعَاوَنُوا عَلَى الْبِرِّ وَالتَّقْوَىٰ ۖ وَلَا تَعَاوَنُوا عَلَى الْإِثْمِ
                    وَالْعُدْوَانِ</h2>
                <p>"And cooperate in righteousness and piety, but do not cooperate in sin and aggression."</p>
                <span>(Surah Al-Ma'idah : 2)</span>
            </div>
            <div class="quran-verse-card">
                <h2 class="arabic-font">خَيْرُ النَّاسِ أَنْفَعُهُمْ لِلنَّاسِ</h2>
                <p>"The best of people are those who are most beneficial to people."</p>
                <span>(Prophetic Hadith)</span>
            </div>
        </div>
    </section>

    <section id="about">
        <h2 class="section-title">About MASA</h2>
        <div class="about-grid">
            <div class="about-image">
                <div class="arch-frame">
                    <div class="arch-frame-inner">
                        <!-- Custom inner logo graphic -->
                        <svg class="arch-logo-graphic" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M 50 15 C 50 15, 80 35, 80 65 C 80 80, 70 90, 50 90 C 30 90, 20 80, 20 65 C 20 35, 50 15, 50 15 Z" />
                            <path
                                d="M 50 25 C 50 25, 70 42, 70 65 C 70 75, 61 82, 50 82 C 39 82, 30 75, 30 65 C 30 42, 50 25, 50 25 Z"
                                stroke-dasharray="3,3" />
                            <!-- Arabic letter Meem & Ayn/Alif stylized representation -->
                            <text x="50" y="60" font-family="'Amiri', serif" font-size="20" fill="var(--color-accent)"
                                text-anchor="middle" stroke="none">مـاصـا</text>
                            <circle cx="50" cy="72" r="3" fill="var(--color-accent)" stroke="none" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="about-text">
                <div class="about-tagline">Nurturing Talents & Virtue</div>
                <h3>Source of Talents & Academic Union</h3>
                <p><strong>MANBAUL AFNAN</strong> translates from Arabic as the "Source of Branches or Talents". As the
                    representative student association of Shamsul Ulama Islamic & Arts College, MASA acts as the
                    nurturing ground for our students' diverse talents, intellectual activities, and spiritual
                    development.</p>
                <p>We host dynamic literary competitions, charitable relief programs, ethical discussions, and health
                    initiatives. By linking academic life with religious service and social responsibility, we cultivate
                    outstanding characters who are prepared to make a positive impact in the community.</p>
                <a href="#wings" class="btn">Our Wings</a>
            </div>
        </div>
    </section>

    <section id="wings">
        <h2 class="section-title">The Seven Wings of MASA</h2>
        <div class="wings-grid">
            <div class="card">
                <div class="card-icon"></div>
                <h3>cultural Sphere</h3>
                <p></p>
            </div>
            <div class="card">
                <div class="card-icon"></div>
                <h3>Literary Wing</h3>
                <p></p>
            </div>
            <div class="card">
                <div class="card-icon"></div>
                <h3>Library Wing</h3>
                <p></p>
            </div>
            <div class="card">
                <div class="card-icon"></div>
                <h3>Media & IT Wing</h3>
                <p></p>
            </div>
            <div class="card">
                <div class="card-icon"></div>
                <h3>Sports & Health Wing</h3>
                <p></p>
            </div>
            <div class="card">
                <div class="card-icon"></div>
                <h3>Creative Cummune</h3>
                <p></p>
            </div>
            <div class="card">
                <div class="card-icon"></div>
                <h3>Social Affairs</h3>
                <p></p>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>5</h2>
                </div>
                <p>Specialized Wings</p>
            </div>
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>15+</h2>
                </div>
                <p>Yearly Events</p>
            </div>
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>100%</h2>
                </div>
                <p>Student Membership</p>
            </div>
        </div>
    </section>

    <section id="cabinet">
        <h2 class="section-title">Union Cabinet (2026-2027)</h2>
        <div class="cabinet-grid">
            <div class="cabinet-card">
                <div class="cabinet-avatar">FA</div>
                <h3>Fayiz V A</h3>
                <div class="cabinet-role">Chairman</div>
                <p class="cabinet-year">Final Year Digree
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">AJ</div>
                <h3>Abdul Javad</h3>
                <div class="cabinet-role">Convinor</div>
                <p class="cabinet-year">Third Year Digree
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">BL</div>
                <h3>Bilal K R</h3>
                <div class="cabinet-role">Treasurer</div>
                <p class="cabinet-year">Second Year Degree</p>
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">SW</div>
                <h3>Swalih</h3>
                <div class="cabinet-role">Vice Chairman</div>
                <p class="cabinet-year">Final Year Digree
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">SH</div>
                <h3>Shamnad</h3>
                <div class="cabinet-role">Vice Chairman</div>
                <p class="cabinet-year">Third Year Digree
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">IB</div>
                <h3>Ibrahim</h3>
                <div class="cabinet-role">Join Convinor</div>
                <p class="cabinet-year">Final Year Degree
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">AJ</div>
                <h3>Ali Javad</h3>
                <div class="cabinet-role">Join Convinor</div>
                <p class="cabinet-year">Third Year Degree</p>
            </div>
        </div>
    </section>
    <section id="suggestions">
        <div class="contact-box">
            <h2>💡 Student Suggestion Box</h2>
            <p>Have a great idea or feedback for MASA? Submit your suggestions directly to the cabinet panel anonymously
                or with your details.</p>

            <form action="https://formsubmit.co/masasuic03@gmail.com" method="POST">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_subject" value="New MASA Student Suggestion">
                <input type="text" name="student_name" placeholder="Your Name (Optional)">
                <select name="class_year" required>
                    <option value="" disabled selected>Select Your Class</option>
                    <option value="plus_one">Plus One</option>
                    <option value="plus_two">Plus Two</option>
                    <option value="degree_1">Degree 1st Year</option>
                    <option value="degree_2">Degree 2nd Year</option>
                    <option value="degree_3">Degree 3rd Year</option>
                    <option value="degree_4">Degree 4th Year</option>
                </select>
                <select name="wing_target" required>
                    <option value="" disabled selected>Select Wing Associated</option>
                    <option value="dawah">Literary wing</option>
                    <option value="literary">Library wing</option>
                    <option value="welfare">Cultural sphere </option>
                    <option value="media">Media Wing</option>
                    <option value="sports">store board </option>
                    <option value="sports">Medical Wing</option>
                    <option value="general">Social Affairs</option>
                    <option value="general">Creative Cummune</option>
                    <option value="general">General Union Suggestion</option>
                </select>
                <textarea name="suggestion" rows="5" placeholder="Share your ideas or feedback here..."
                    required></textarea>
                <button type="submit">Submit to MASA Cabinet ➜</button>
            </form>
        </div>
    </section>

    <footer>
        <div style="margin-bottom: 20px; display: inline-block;">
            <img src="{{ asset('gallery_images/college/masalogo.png') }}" alt="MASA Logo"
                style="height: 60px; width: 60px; border-radius: 50%; border: 2px solid var(--color-accent); padding: 3px; background: white; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
        </div>
        <h3>MANBAUL AFNAN STUDENTS' ASSOCIATION (MASA)</h3>
        <p>Shamsul Ulama Islamic & Arts College</p>
        <p class="copyright">© 2026 All Rights Reserved | Managed by MASA Cabinet</p>
    </footer>

    <script>
        window.onload = function () {
            setTimeout(function () {
                var intro = document.getElementById("intro");
                if (intro) {
                    intro.classList.add("hideIntro");
                }
            }, 1500);
        };

        function toggleMenu() {
            var menu = document.getElementById("menu");
            if (menu) {
                menu.classList.toggle("show");
            }
        }

        // Close menu when clicking outside
        window.onclick = function (event) {
            if (!event.target.matches('#menuBtn') && !event.target.closest('#menu')) {
                var menu = document.getElementById("menu");
                if (menu && menu.classList.contains('show')) {
                    menu.classList.remove('show');
                }
            }
        }

        // Handle suggestion form submission via AJAX
        var suggestionForm = document.querySelector("#suggestions form");
        if (suggestionForm) {
            suggestionForm.addEventListener("submit", function (event) {
                event.preventDefault();

                var button = suggestionForm.querySelector("button[type='submit']");
                var originalText = button.innerHTML;

                // Create status message container if it doesn't exist
                var statusMessage = document.getElementById("suggestion-status");
                if (!statusMessage) {
                    statusMessage = document.createElement("div");
                    statusMessage.id = "suggestion-status";
                    statusMessage.style.marginTop = "15px";
                    statusMessage.style.padding = "12px 20px";
                    statusMessage.style.borderRadius = "8px";
                    statusMessage.style.fontSize = "15px";
                    statusMessage.style.fontWeight = "500";
                    statusMessage.style.transition = "all 0.3s ease";
                    suggestionForm.appendChild(statusMessage);
                }

                // Set loading state
                button.disabled = true;
                button.innerHTML = "Submitting Suggestion... ⏳";
                statusMessage.style.display = "none";

                var formData = {};
                var inputs = suggestionForm.querySelectorAll("input, textarea, select");
                inputs.forEach(function (input) {
                    if (input.name) {
                        formData[input.name] = input.value;
                    }
                });

                fetch("https://formsubmit.co/ajax/masasuic03@gmail.com", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    body: JSON.stringify(formData)
                })
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (data) {
                        button.disabled = false;
                        button.innerHTML = originalText;

                        if (data.success === "true" || data.success === true) {
                            statusMessage.textContent = "✓ Thank you! Your suggestion has been submitted successfully to MASA Cabinet.";
                            statusMessage.style.color = "#155724";
                            statusMessage.style.backgroundColor = "#d4edda";
                            statusMessage.style.border = "1px solid #c3e6cb";
                            statusMessage.style.display = "block";
                            suggestionForm.reset();
                        } else {
                            statusMessage.textContent = "✗ Oops! " + (data.message || "Something went wrong. Please try again.");
                            statusMessage.style.color = "#721c24";
                            statusMessage.style.backgroundColor = "#f8d7da";
                            statusMessage.style.border = "1px solid #f5c6cb";
                            statusMessage.style.display = "block";
                        }
                    })
                    .catch(function (error) {
                        button.disabled = false;
                        button.innerHTML = originalText;

                        statusMessage.textContent = "✗ Connection error. Please check your network and try again.";
                        statusMessage.style.color = "#721c24";
                        statusMessage.style.backgroundColor = "#f8d7da";
                        statusMessage.style.border = "1px solid #f5c6cb";
                        statusMessage.style.display = "block";
                    });
            });
        }
    </script>
</body>

</html>