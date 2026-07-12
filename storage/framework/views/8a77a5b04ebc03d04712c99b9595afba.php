<?php $__env->startSection('title', 'MASA - Manbaul Afnan Students\' Association'); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        /* Header Logo Customization */
        .header-logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            flex-shrink: 0;       /* prevent logo from compressing */
        }

        /* Override logo-wrap inside the MASA header link */
        .header-logo-container .logo-wrap h1 {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .header-logo {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            border: 2px solid var(--color-accent);
            object-fit: cover;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            flex-shrink: 0;
        }

        .header-logo-container:hover .header-logo {
            transform: rotate(360deg);
        }

        @media(max-width: 768px) {
            .header-logo {
                height: 32px;
                width: 32px;
            }
        }

        /* MASA Intro Loader */
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

        .hideIntro {
            opacity: 0;
            visibility: hidden;
        }

        /* Sections Base Styling */
        section {
            padding: clamp(80px, 6.5vw, 112px) max(5vw, calc((100vw - 1280px) / 2));
            position: relative;
        }

        .section-title {
            text-align: center;
            font-size: clamp(32px, 2.7vw, 42px);
            margin: 0 auto 50px;
            max-width: 900px;
            color: var(--color-primary);
            position: relative;
            padding-bottom: 20px;
            line-height: 1.25;
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
            height: auto;
            min-height: clamp(650px, 88svh, 820px);
            background: linear-gradient(135deg, var(--color-primary-dark), #032b1f);
            background-image: var(--islamic-pattern-dark), linear-gradient(135deg, var(--color-primary-dark), #032b1f);
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(300px, 0.85fr);
            gap: clamp(40px, 5vw, 80px);
            align-items: center;
            color: white;
            padding-top: clamp(105px, 11vh, 140px);
            padding-bottom: clamp(70px, 8vh, 105px);
        }

        .hero-text {
            z-index: 2;
            max-width: 760px;
        }

        .hero-bismillah {
            font-size: 20px;
            color: var(--color-accent-light);
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .hero h1 {
            font-size: clamp(38px, 3.2vw, 54px);
            line-height: 1.15;
            margin-bottom: 20px;
            color: var(--color-accent);
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
        }

        .hero p {
            font-size: clamp(16px, 1.25vw, 19px);
            line-height: 1.7;
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
            max-width: clamp(320px, 29vw, 420px);
            aspect-ratio: 1;
            height: auto;
            position: relative;
            border-radius: 50%;
            border: 3px solid var(--color-accent);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            padding: 8px;
            background: rgba(4, 44, 32, 0.6);
        }

        .arch-frame-inner {
            width: 100%;
            height: 100%;
            border-radius: 50%;
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

        /* Quran Verse Section */
        .quran {
            background: var(--color-primary-dark);
            background-image: var(--islamic-pattern-dark);
            color: white;
            text-align: center;
            padding: clamp(80px, 6.5vw, 105px) max(5vw, calc((100vw - 1280px) / 2));
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
            font-size: clamp(32px, 2.8vw, 40px);
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
            gap: clamp(50px, 6vw, 90px);
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-image {
            display: flex;
            justify-content: center;
        }

        .about-image .arch-frame {
            max-width: 350px;
        }

        .about-text h3 {
            font-size: clamp(28px, 2.3vw, 36px);
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
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 30px;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            align-items: stretch;
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
            height: 100%;
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

        /* Stats Section */
        .stats {
            background: var(--color-primary);
            background-image: var(--islamic-pattern-dark);
            color: white;
            padding: clamp(65px, 5.5vw, 85px) max(5vw, calc((100vw - 1280px) / 2));
            border-top: 2px solid var(--color-accent);
            border-bottom: 2px solid var(--color-accent);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 40px;
            text-align: center;
            width: 100%;
            max-width: 1050px;
            margin: 0 auto;
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

        /* Union Cabinet */
        #cabinet {
            background: var(--color-bg-light);
            background-image: var(--islamic-pattern);
        }

        .cabinet-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 30px;
            width: 100%;
            max-width: 1200px;
            margin: 40px auto 0;
            align-items: stretch;
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
            height: 100%;
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

        /* Initiatives & Events Timeline */
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
            padding: clamp(75px, 6vw, 95px) max(5vw, calc((100vw - 1280px) / 2));
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

        .masa-footer-logo {
            width: 60px;
            height: 60px;
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

        /* ================================================
           MASA PAGE — RESPONSIVE STYLES
        ================================================ */

        /* Large tablets / small laptops (1200px) */
        @media (max-width: 1200px) {
            section {
                padding: 76px 6%;
            }

            .quran {
                padding: 76px 6%;
            }

            .stats {
                padding: 64px 6%;
            }

            #suggestions {
                padding: 72px 6%;
            }

            .hero {
                min-height: 650px;
                padding: 105px 6% 72px;
                gap: 30px;
            }

            .hero h1 {
                font-size: 38px;
            }

            .arch-frame {
                max-width: 320px;
            }

            .wings-grid,
            .cabinet-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 24px;
            }

            .card {
                padding: 34px 24px;
            }

            .cabinet-card {
                padding: 30px 20px;
            }
        }

        /* Tablet / small desktop (992px) */
        @media (max-width: 992px) {
            section {
                padding: 70px 5%;
            }

            .quran,
            #suggestions {
                padding: 64px 5%;
            }

            .stats {
                padding: 58px 5%;
            }

            /* Hero: stack vertically */
            .hero {
                grid-template-columns: 1fr;
                text-align: center;
                height: auto;
                min-height: auto;
                padding: 100px 5% 65px;
                gap: 30px;
            }

            .hero-text {
                max-width: 760px;
                margin: 0 auto;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 17px;
                max-width: 100%;
            }

            .hero-btn-group {
                justify-content: center;
            }

            .hero-image-container {
                margin-top: 10px;
            }

            .arch-frame {
                max-width: 280px;
            }

            /* About: stack vertically */
            .about-grid {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .about-image {
                order: -1;
            }

            .about-image .arch-frame {
                max-width: 240px;
                margin: 0 auto;
            }

            /* Timeline: single column */
            .timeline::before {
                left: 24px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 60px;
                padding-right: 15px;
                text-align: left !important;
                left: 0 !important;
            }

            .timeline-dot {
                left: 16px !important;
                right: auto !important;
            }

            /* Wings grid: 2 columns */
            .wings-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            /* Cabinet: 2 columns */
            .cabinet-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            /* Stats: 2 columns */
            .stats-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        /* Large desktop and ultra-wide screens */
        @media (min-width: 1600px) {
            .hero h1 {
                max-width: 760px;
            }

            .wings-grid,
            .about-grid,
            .cabinet-grid {
                max-width: 1280px;
            }

            .contact-box {
                max-width: 800px;
            }
        }

        /* Mobile portrait (768px) */
        @media (max-width: 768px) {
            section {
                padding: 48px 5%;
            }

            /* Compact intro screen */
            .intro-box {
                max-width: 360px;
                padding: 20px;
            }

            .intro-logo-wrap {
                margin-bottom: 14px;
            }

            .intro-logo {
                width: 82px;
                height: 82px;
                padding: 4px;
            }

            .arabic-title {
                margin-top: 10px;
                font-size: 30px;
            }

            .verse-translation {
                margin-top: 8px;
                font-size: 13px;
                line-height: 1.5;
            }

            .intro-college-name {
                margin-top: 16px;
                font-size: 18px;
                line-height: 1.35;
            }

            .location-tag {
                margin-top: 7px;
                font-size: 10px;
                letter-spacing: 1.4px;
            }

            /* Smaller header branding */
            .header-logo {
                width: 28px;
                height: 28px;
            }

            .header-logo-container {
                gap: 7px;
                min-width: 0;
            }

            .header-logo-container .logo-wrap h1 {
                font-size: 14px;
            }

            .header-logo-container .logo-wrap h2 {
                font-size: 8px;
            }

            /* Hero */
            .hero {
                min-height: auto;
                padding: 72px 5% 42px;
                gap: 20px;
            }

            .hero h1 {
                font-size: 26px;
                line-height: 1.3;
            }

            .hero p {
                margin-bottom: 24px;
                font-size: 14px;
                line-height: 1.6;
            }

            .hero-bismillah {
                margin-bottom: 10px;
                font-size: 14px;
            }

            .hero-btn-group {
                flex-direction: column;
                align-items: center;
                gap: 12px;
            }

            .btn {
                width: 100%;
                max-width: 240px;
                padding: 11px 16px;
                font-size: 13px;
                text-align: center;
            }

            .hero-snec {
                margin-top: 14px;
                font-size: 10px;
                letter-spacing: 2px;
            }

            /* Arch frame: smaller circle */
            .arch-frame {
                max-width: 165px;
            }

            /* Section titles */
            .section-title {
                margin-bottom: 28px;
                padding-bottom: 15px;
                font-size: 24px;
            }

            /* Quran verse card */
            .quran {
                padding: 48px 5%;
            }

            .quran-verse-card {
                margin-bottom: 25px;
                padding: 28px 16px;
                border-radius: 18px;
            }

            .quran-verse-card h2 {
                margin-bottom: 14px;
                font-size: 23px;
                line-height: 1.6;
            }

            .quran-verse-card p {
                font-size: 13px;
            }

            .quran-verse-card span {
                font-size: 10px;
                letter-spacing: 1.4px;
            }

            /* About text */
            .about-text h3 {
                margin-bottom: 14px;
                font-size: 21px;
            }

            .about-text p {
                margin-bottom: 18px;
                font-size: 14px;
                line-height: 1.6;
            }

            .about-tagline {
                font-size: 10px;
                letter-spacing: 1.4px;
            }

            .about-image .arch-frame {
                max-width: 155px;
            }

            /* Wings: single column */
            .wings-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .card {
                padding: 24px 18px;
                border-radius: 16px;
            }

            .card-icon {
                margin-bottom: 12px;
                font-size: 28px;
            }

            .card h3 {
                margin-bottom: 9px;
                font-size: 18px;
            }

            .card p {
                font-size: 13px;
            }

            /* Stats: single column */
            .stats {
                padding: 48px 5%;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }

            .stat-badge {
                width: 68px;
                height: 68px;
                margin-bottom: 12px;
            }

            .stat-item h2 {
                font-size: 24px;
            }

            .stat-item p {
                font-size: 11px;
                letter-spacing: 1.2px;
            }

            /* Cabinet: single column */
            .cabinet-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .cabinet-card {
                padding: 22px 16px;
                border-radius: 16px;
            }

            .cabinet-avatar {
                width: 72px;
                height: 72px;
                margin-bottom: 14px;
                font-size: 21px;
            }

            .cabinet-card h3 {
                font-size: 17px;
            }

            .cabinet-role {
                margin-bottom: 10px;
                font-size: 10px;
            }

            .cabinet-year {
                font-size: 12px;
            }

            /* Timeline */
            .timeline {
                padding: 10px 0;
            }

            .timeline-content {
                padding: 18px;
            }

            .timeline-content h3 {
                font-size: 17px;
            }

            .timeline-content p {
                font-size: 13px;
            }

            /* Contact / Suggestions */
            #suggestions {
                padding: 48px 5%;
            }

            .contact-box {
                padding: 28px 18px;
                border-radius: 20px;
            }

            .contact-box h2 {
                font-size: 21px;
            }

            .contact-box p {
                margin-bottom: 22px;
                font-size: 13px;
            }

            .contact-box input,
            .contact-box textarea,
            .contact-box select {
                padding: 13px 16px;
                font-size: 14px;
            }

            .contact-box button {
                padding: 13px;
                font-size: 13px;
            }

            .masa-footer-logo {
                width: 46px !important;
                height: 46px !important;
            }
        }

        /* Small mobile (480px) */
        @media (max-width: 480px) {
            section {
                padding: 42px 4%;
            }

            .hero {
                padding: 68px 4% 38px;
            }

            .hero h1 {
                font-size: 20px;
            }

            .hero p {
                font-size: 14px;
            }

            .arch-frame {
                max-width: 140px;
            }

            .section-title {
                font-size: 20px;
            }

            .quran-verse-card h2 {
                font-size: 20px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .contact-box {
                padding: 24px 14px;
            }

            .about-text h3 {
                font-size: 19px;
            }

            .intro-logo {
                width: 72px;
                height: 72px;
            }

            .arabic-title {
                font-size: 26px;
            }

            .intro-college-name {
                font-size: 16px;
            }

            .about-image .arch-frame {
                max-width: 135px;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header-left'); ?>
    <a href="<?php echo e(route('masa')); ?>" class="header-logo-container">
        <img src="<?php echo e(asset('gallery_images/college/masalogo.png')); ?>" alt="MASA Logo" class="header-logo">
        <div class="logo-wrap">
            <h1>MASA UNION</h1>
            <h2>Shamsul Ulama Islamic College</h2>
        </div>
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- MASA Intro Loader -->
    <div id="intro">
        <div class="intro-box">
            <div class="intro-logo-wrap">
                <img src="<?php echo e(asset('gallery_images/college/masalogo.png')); ?>" alt="MASA Logo" class="intro-logo">
            </div>
            <h1 class="arabic-title arabic-font">وَتَعَاوَنُوا عَلَى الْبِرِّ وَالتَّقْوَىٰ</h1>
            <p class="verse-translation">"And cooperate in righteousness and piety"</p>
            <h2 class="intro-college-name">MANBAUL AFNAN STUDENTS' ASSOCIATION</h2>
            <p class="location-tag">Shamsul Ulama Islamic & Arts College</p>
        </div>
    </div>

    <!-- Hero Section -->
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
                    <img src="<?php echo e(asset('gallery_images/college/masalogo.png')); ?>" alt="MASA UNION Logo">
                    <div
                        style="position: absolute; inset: 0; box-shadow: inset 0 0 40px rgba(0, 0, 0, 0.35); pointer-events: none; border-radius: 50%;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quran Verse Section -->
    <section class="quran">
        <div class="quran-container">
            <div class="quran-verse-card">
                <h2 class="arabic-font">وَتَعَاوَنُوا عَلَى الْبِرِّ وَالتَّقْوَىٰ ۖ وَلَا تَعَاوَنُوا عَلَى الْإِثْمِ
                    وَالْعُدْوَانِ</h2>
                <p>"And cooperate in righteousness and piety, but do not cooperate in sin and aggression."</p>
                <span>(Surah Al-Ma'idah : 2)</span>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="about-grid">
            <div class="about-image">
                <div class="arch-frame">
                    <div class="arch-frame-inner">
                        <img src="<?php echo e(asset('gallery_images/college/masalogo.png')); ?>" alt="College Campus Activity">
                    </div>
                </div>
            </div>
            <div class="about-text">
                <div class="about-tagline">Nurturing Union</div>
                <h3>Cooperation & Progress</h3>
                <p>
                    Manbaul Afnan Students' Association (MASA) is the students' council of Shamsul Ulama Islamic College.
                    Guided by the principles of faith, education, and mutual help, the union organizes literary debates,
                    sports events, social services, and spiritual programs that complement the academic journey.
                </p>
                <p>
                    Our cabinet consists of dedicated representatives who strive to bridge student opinions and college
                    administration,
                    creating a supportive and engaging campus life for all.
                </p>
            </div>
        </div>
    </section>

    <!-- Wings Section -->
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

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>8+</h2>
                </div>
                <p>Active Wings</p>
            </div>
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>15+</h2>
                </div>
                <p>Annual Events</p>
            </div>
            <div class="stat-item">
                <div class="stat-badge">
                    <h2>100%</h2>
                </div>
                <p>Student Unity</p>
            </div>
        </div>
    </section>

    <!-- Union Cabinet Section -->
    <section id="cabinet">
        <h2 class="section-title">Union Cabinet (2026-2027)</h2>
        <div class="cabinet-grid">
            <div class="cabinet-card">
                <div class="cabinet-avatar">FA</div>
                <h3>Fayiz V A</h3>
                <div class="cabinet-role">Chairman</div>
                <p class="cabinet-year">Final Year Digree</p>
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">AJ</div>
                <h3>Abdul Javad</h3>
                <div class="cabinet-role">Convinor</div>
                <p class="cabinet-year">Third Year Digree</p>
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
                <p class="cabinet-year">Final Year Digree</p>
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">SH</div>
                <h3>Shamnad</h3>
                <div class="cabinet-role">Vice Chairman</div>
                <p class="cabinet-year">Third Year Digree</p>
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">IB</div>
                <h3>Ibrahim</h3>
                <div class="cabinet-role">Join Convinor</div>
                <p class="cabinet-year">Final Year Degree</p>
            </div>
            <div class="cabinet-card">
                <div class="cabinet-avatar">AJ</div>
                <h3>Ali Javad</h3>
                <div class="cabinet-role">Join Convinor</div>
                <p class="cabinet-year">Third Year Degree</p>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->


    <!-- Suggestions Box -->
    <section id="suggestions">
        <div class="contact-box">
            <h2>💡 Student Suggestion Box</h2>
            <p>Have a great idea or feedback for MASA? Submit your suggestions directly to the cabinet panel anonymously or
                with your details.</p>

            <form action="<?php echo e(route('masa.suggestion')); ?>" method="POST">
                <?php echo csrf_field(); ?>

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
                    <option value="dawah">Literary Wing</option>
                    <option value="literary">Library Wing</option>
                    <option value="welfare">Cultural Sphere</option>
                    <option value="media">Media Wing</option>
                    <option value="sports">Store Board</option>
                    <option value="medical">Medical Wing</option>
                    <option value="social">Social Affairs</option>
                    <option value="creative">Creative Commune</option>
                    <option value="general">General Union Suggestion</option>
                </select>

                <textarea name="suggestion" rows="5" placeholder="Share your ideas or feedback here..." required></textarea>

                <button type="submit">Submit to MASA Cabinet ➜</button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <footer>
        <div style="margin-bottom: 20px; display: inline-block;">
            <img src="<?php echo e(asset('gallery_images/college/masalogo.png')); ?>" alt="MASA Logo" class="masa-footer-logo"
                style="height: 60px; width: 60px; border-radius: 50%; border: 2px solid var(--color-accent); padding: 3px; background: white; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
        </div>
        <h3>MANBAUL AFNAN STUDENTS' ASSOCIATION (MASA)</h3>
        <p>Shamsul Ulama Islamic & Arts College</p>
        <p class="copyright">© 2026 All Rights Reserved | Managed by MASA Cabinet</p>
    </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        // Intro Loader Hide
        window.addEventListener('load', function () {
            setTimeout(function () {
                var intro = document.getElementById("intro");
                if (intro) {
                    intro.classList.add("hideIntro");
                }
            }, 1500);
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Laravel Project\collage web\resources\views/masa.blade.php ENDPATH**/ ?>