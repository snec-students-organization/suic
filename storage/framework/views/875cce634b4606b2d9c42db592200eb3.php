<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shamsul Ulama Islamic & Arts College</title>

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

        .moon {
            font-size: 80px;
            color: var(--color-accent);
            text-shadow: 0 0 30px rgba(197, 160, 89, 0.4);
            animation: moonGlow 3s ease-in-out infinite alternate;
            margin-bottom: 25px;
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
            font-size: 52px;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--color-accent);
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
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
        }

        .arch-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .arch-frame:hover img {
            transform: scale(1.06);
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

        /* Courses Section */
        #courses {
            background: var(--color-bg-white);
            background-image: var(--islamic-pattern);
            border-top: 1px solid var(--color-border);
        }

        .courses-grid {
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

        /* Stats Section */
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

        /* Admissions Banner */
        .admission {
            background: var(--color-bg-light);
            background-image: var(--islamic-pattern);
            padding: 80px 8%;
        }

        .admission-box {
            max-width: 850px;
            margin: auto;
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-dark));
            background-image: var(--islamic-pattern-dark), linear-gradient(135deg, var(--color-primary), var(--color-primary-dark));
            padding: 60px 40px;
            border-radius: 25px;
            border: 2px solid var(--color-accent);
            box-shadow: var(--shadow-lg);
            text-align: center;
            color: white;
        }

        .admission-box h3 {
            font-size: 32px;
            color: var(--color-accent);
            margin-bottom: 15px;
        }

        .admission-box p {
            font-size: 18px;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Contact Us Section */
        #contact {
            background: var(--color-bg-white);
            background-image: var(--islamic-pattern);
            padding: 90px 8%;
            display: flex;
            justify-content: center;
        }

        .contact-box {
            width: 100%;
            max-width: 750px;
            background: var(--color-bg-light);
            padding: 50px 40px;
            border-radius: 30px;
            border: 1px solid rgba(197, 160, 89, 0.2);
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
        .contact-box textarea {
            padding: 16px 20px;
            border: 1px solid rgba(197, 160, 89, 0.3);
            border-radius: 12px;
            font-size: 15px;
            outline: none;
            background: white;
            color: var(--color-text-dark);
            transition: all 0.3s ease;
        }

        .contact-box input:focus,
        .contact-box textarea:focus {
            border-color: var(--color-accent);
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

        .contact-info {
            margin-top: 35px;
            border-top: 1px solid rgba(197, 160, 89, 0.2);
            padding-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .contact-info p {
            margin-bottom: 0;
            font-size: 15px;
            color: var(--color-text-dark);
        }

        /* Floating Whatsapp button pulse */
        .whatsapp-btn-pulse {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #25D366;
            color: white;
            border: none;
            padding: 16px 35px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(37, 211, 102, .4);
            transition: all 0.3s ease;
            animation: waPulse 2s infinite;
        }

        @keyframes waPulse {
            0% {
                transform: scale(1);
                box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            }

            50% {
                transform: scale(1.04);
                box-shadow: 0 10px 35px rgba(37, 211, 102, 0.7);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            }
        }

        .whatsapp-btn-pulse:hover {
            background: #20ba59;
        }

        /* Developer Section Styling */
        #developer {
            background: var(--color-bg-light);
            background-image: var(--islamic-pattern);
            padding: 90px 8%;
            border-top: 1px solid var(--color-border);
            display: flex;
            justify-content: center;
        }

        .developer-box {
            width: 100%;
            max-width: 750px;
            background: var(--color-bg-white);
            padding: 50px 40px;
            border-radius: 30px;
            border: 1px solid rgba(197, 160, 89, 0.25);
            box-shadow: var(--shadow-md);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.3s ease;
        }

        .developer-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--color-accent);
        }

        .developer-box h2 {
            font-size: 32px;
            color: var(--color-primary);
            margin-bottom: 25px;
        }

        .developer-profile {
            display: flex;
            align-items: center;
            gap: 40px;
            text-align: left;
            width: 100%;
        }

        .developer-photo-frame {
            flex-shrink: 0;
            width: 170px;
            height: 170px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid var(--color-accent);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background: var(--color-bg-light);
        }

        .developer-photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .developer-box:hover .developer-photo-frame img {
            transform: scale(1.08);
        }

        .developer-info {
            flex-grow: 1;
        }

        .developer-info h3 {
            font-size: 26px;
            color: var(--color-primary);
            margin-bottom: 6px;
        }

        .developer-info .dev-role {
            font-size: 13px;
            color: var(--color-accent);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .developer-info .dev-bio {
            font-size: 15px;
            color: var(--color-text-muted);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .developer-links {
            display: flex;
            gap: 15px;
        }

        .dev-link-btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
            color: white !important;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(4, 44, 32, 0.15);
        }

        .dev-link-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(4, 44, 32, 0.3);
        }

        @media (max-width: 768px) {
            .developer-profile {
                flex-direction: column;
                text-align: center;
                gap: 25px;
            }

            .developer-photo-frame {
                width: 150px;
                height: 150px;
            }

            .developer-links {
                justify-content: center;
            }
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
        }

        @media(max-width:768px) {
            header {
                padding: 15px 5%;
            }

            section {
                padding: 60px 5%;
            }

            .hero h1 {
                font-size: 38px;
            }

            .quran-verse-card h2 {
                font-size: 28px;
                line-height: 1.6;
            }
        }
    </style>

</head>

<body>
    <!-- College Intro -->
    <div id="intro">
        <div class="intro-box">
            <div class="moon">☪</div>
            <h1 class="arabic-title arabic-font">وَقُل رَّبِّ زِدْنِي عِلْمًا</h1>
            <p class="verse-translation">"My Lord, Increase Me In Knowledge"</p>
            <h2 class="intro-college-name">Shamsul Ulama Islamic & Arts College</h2>
            <p class="location-tag">Pathiyankara, Thrikkunnapuzha, Alappuzha</p>
        </div>
    </div>

    <header>
        <div class="logo-wrap">
            <h1>Shamsul Ulama Islamic College</h1>
            <h2>Knowledge • Faith • Excellence</h2>
        </div>

        <!-- 3 Dot Button -->
        <button id="menuBtn" onclick="toggleMenu()">☰</button>

        <!-- Animated Menu -->
        <div id="menu">
            <a href="#index" onclick="toggleMenu()">🏠 Home</a>
            <a href="#about" onclick="toggleMenu()">ℹ️ About</a>
            <a href="<?php echo e(route('teachers')); ?>">👨‍🏫 Teachers</a>
            <a href="<?php echo e(route('management')); ?>">🏛️ Management</a>
            <a href="<?php echo e(route('gallery')); ?>">🖼 Gallery</a>
            <a href="<?php echo e(route('masa')); ?>">🤝 MASA (Union)</a>
            <a href="#contact" onclick="toggleMenu()">📞 Contact</a>
            <a href="#developer" onclick="toggleMenu()">💻 Developer</a>
        </div>
    </header>

    <section id="index" class="hero">
        <div class="hero-text">
            <div class="hero-bismillah arabic-font">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</div>
            <h1>Shamsul Ulama Islamic & Arts Sana'ee College</h1>
            <p>Blending traditional Islamic values with modern academic excellence to nurture the leaders of tomorrow.
            </p>
            <div class="hero-btn-group">
                <a href="#about" class="btn">Explore College</a>
                <a href="#contact" class="btn btn-secondary">Contact Us</a>
            </div>
            <div class="hero-snec">By SNEC</div>
        </div>
        <div class="hero-image-container">
            <div class="arch-frame">
                <div class="arch-frame-inner">
                    <img src="<?php echo e(asset('images/college1.JPG')); ?>" alt="College Campus">
                </div>
            </div>
        </div>
    </section>

    <section class="quran">
        <div class="quran-container">
            <div class="quran-verse-card">
                <h2 class="arabic-font">اقْرَأْ بِاسْمِ رَبِّكَ الَّذِي خَلَقَ</h2>
                <p>"Read in the name of your Lord who created"</p>
                <span>(Surah Al-Alaq : 1)</span>
            </div>
            <div class="quran-verse-card">
                <h2 class="arabic-font">وَقُل رَّبِّ زِدْنِي عِلْمًا</h2>
                <p>"My Lord, increase me in knowledge"</p>
                <span>(Surah Taha : 114)</span>
            </div>
        </div>
    </section>

    <section id="about">
        <h2 class="section-title">About Our College</h2>
        <div class="about-grid">
            <div class="about-image">
                <div class="arch-frame">
                    <div class="arch-frame-inner">
                        <img src="<?php echo e(asset('images/college2.JPG')); ?>" alt="College Building">
                    </div>
                </div>
            </div>
            <div class="about-text">
                <div class="about-tagline">Integrated Education</div>

                <h3>Welcome to Academic & Spiritual Excellence</h3>

                <p>
                    At Shamsul Ulama Islamic & Arts College, we are committed to nurturing
                    individuals through a harmonious blend of Islamic values, academic
                    excellence, and moral development. Our institution serves as a center
                    for learning, character building, and community engagement.
                </p>

                <p>
                    We provide a dynamic environment where students can strengthen their
                    faith, pursue quality education, and develop the skills needed to meet
                    the challenges of the modern world. Through Islamic studies, arts,
                    cultural activities, and leadership programs, we encourage holistic
                    growth that benefits both the individual and society.
                </p>

                <p>
                    Guided by experienced scholars and dedicated educators, our mission is
                    to cultivate knowledgeable, responsible, and compassionate individuals
                    who contribute positively to their communities while upholding Islamic
                    principles and ethical values.
                </p>

                <p>
                    As we move forward, we remain steadfast in preserving our rich Islamic
                    heritage while embracing innovation, creativity, and academic progress.
                    We warmly welcome students, parents, and visitors to become part of our
                    journey of knowledge, faith, and service.
                </p>

                <blockquote>
                    <strong>“Guided by Faith • Empowered by Knowledge • Dedicated to Service”</strong>
                </blockquote>
            </div>
            <a href="#courses" class="btn">View Courses</a>
        </div>
    </section>

    <section id="courses">
        <h2 class="section-title">Courses Offered</h2>
        <div class="courses-grid">
            <div class="card">
                <h3>SNEC Stream</h3>
                <p>Comprehensive Sharee'a program integrating Islamic jurisprudence, theology, Arabic linguistics, and
                    classical literature.</p>
            </div>
            <div class="card">
                <h3>Plus Two Level</h3>
                <p>Offering recognized senior secondary courses in Commerce and Humanities streams with moral studies.
                </p>
            </div>
            <div class="card">
                <h3>Degree Programs</h3>
                <p>Undergraduate courses including BA English and BA Sociology, coupled with intensive
                    Islamic education.</p>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>10+</h2>
                </div>
                <p>Learned Faculty</p>
            </div>
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>50+</h2>
                </div>
                <p>Students</p>
            </div>
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>100%</h2>
                </div>
                <p>Islamic Environment</p>
            </div>
        </div>
    </section>

    <section class="admission">
        <div class="admission-box">
            <h3>Admissions Started</h3>
            <p>Take the first step towards a bright academic career and spiritual growth. Join Shamsul Ulama Islamic &
                Arts College.</p>
            <button class="whatsapp-btn-pulse"
                onclick="window.open('https://wa.me/919747064013?text=I%20am%20interested%20in%20Admission%20enquiry','_blank')">
                Apply Online via WhatsApp
            </button>
        </div>
    </section>

    <section id="contact">
        <div class="contact-box">
            <h2>📞 Contact Us</h2>
            <p>We would love to hear from you. Send us a message or contact our admin panel directly.</p>

            <form action="https://formsubmit.co/shamsululamasnecalp@gmail.com" method="POST">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_template" value="table">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="tel" name="phone" placeholder="Phone Number">
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="hidden" name="_subject" value="New College Admission Enquiry">
                <button type="submit">Send Message ➜</button>
            </form>

            <div class="contact-info">
                <p>📍 Shamsul Ulama Islamic & Arts College, Pathiyankara, Thrikkunnapuzha, Alappuzha</p>
                <p>📧 shamsululamasnecalp@gmail.com</p>
                <p>📞 +91 92887 59269, +91 9747064013</p>
                <button class="whatsapp-btn-pulse"
                    onclick="window.open('https://wa.me/919747064013?text=I%20am%20interested%20in%20education%20at%20your%20college','_blank')">
                    💬 Chat Now on WhatsApp
                </button>
            </div>
        </div>
    </section>

    <section id="developer">
        <div class="developer-box">
            <div class="developer-profile">
                <div class="developer-photo-frame">
                    <img src="<?php echo e(asset('gallery_images/college/yaseen.png')); ?>" alt="Developer Muhammeed Yaseen E A">
                </div>
                <div class="developer-info">
                    <h3>Muhammed Yaseen E A</h3>
                    <div class="dev-role">Web Developer & Designer</div>
                    <p class="dev-bio">
                        This website was designed and developed by  Muhammed Yaseen E A, blending modern web design paradigms with a premium, seamless user interface to showcase Shamsul Ulama Islamic & Arts College.Muhammed Yaseen E A is a student at this college.
                </div>
            </div>
        </div>
    </section>

    <footer>
        <h3>Shamsul Ulama Islamic & Arts College</h3>
        <p>Knowledge • Faith • Excellence</p>
        <p class="copyright">© 2026 All Rights Reserved | Managed by SNEC</p>
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

        // Handle contact form submission via AJAX
        var contactForm = document.querySelector("#contact form");
        if (contactForm) {
            contactForm.addEventListener("submit", function (event) {
                event.preventDefault();

                var button = contactForm.querySelector("button[type='submit']");
                var originalText = button.innerHTML;

                // Create status message container if it doesn't exist
                var statusMessage = document.getElementById("form-status");
                if (!statusMessage) {
                    statusMessage = document.createElement("div");
                    statusMessage.id = "form-status";
                    statusMessage.style.marginTop = "15px";
                    statusMessage.style.padding = "12px 20px";
                    statusMessage.style.borderRadius = "8px";
                    statusMessage.style.fontSize = "15px";
                    statusMessage.style.fontWeight = "500";
                    statusMessage.style.transition = "all 0.3s ease";
                    contactForm.appendChild(statusMessage);
                }

                // Set loading state
                button.disabled = true;
                button.innerHTML = "Sending Message... ⏳";
                statusMessage.style.display = "none";

                var formData = {};
                var inputs = contactForm.querySelectorAll("input, textarea");
                inputs.forEach(function (input) {
                    if (input.name) {
                        formData[input.name] = input.value;
                    }
                });

                fetch("https://formsubmit.co/ajax/shamsululamasnecalp@gmail.com", {
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
                        statusMessage.textContent = "✓ Thank you! Your message has been sent successfully.";
                        statusMessage.style.color = "#155724";
                        statusMessage.style.backgroundColor = "#d4edda";
                        statusMessage.style.border = "1px solid #c3e6cb";
                        statusMessage.style.display = "block";
                        contactForm.reset();
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
<?php /**PATH D:\Laravel Project\collage web\resources\views/home.blade.php ENDPATH**/ ?>