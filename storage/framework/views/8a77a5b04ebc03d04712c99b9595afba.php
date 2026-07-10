<?php $__env->startSection('title', 'MASA - Manbaul Afnan Students\' Association'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    /* Header Logo Customization */
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
        padding-top: 60px;
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

    /* Union Cabinet */
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

    /* Mobile Responsive styling overrides */
    @media(max-width:992px) {
        .hero {
            grid-template-columns: 1fr;
            text-align: center;
            height: auto;
            padding-bottom: 60px;
            padding-top: 100px;
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
        .hero h1 {
            font-size: 32px;
        }

        .quran-verse-card h2 {
            font-size: 28px;
            line-height: 1.6;
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
                <div style="position: absolute; inset: 0; box-shadow: inset 0 0 40px rgba(0, 0, 0, 0.35); pointer-events: none; border-radius: 180px 180px 15px 15px;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Quran Verse Section -->
<section class="quran">
    <div class="quran-container">
        <div class="quran-verse-card">
            <h2 class="arabic-font">وَتَعَاوَنُوا عَلَى الْبِرِّ وَالتَّقْوَىٰ ۖ وَلَا تَعَاوَنُوا عَلَى الْإِثْمِ وَالْعُدْوَانِ</h2>
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
                    <img src="<?php echo e(asset('images/college2.JPG')); ?>" alt="College Campus Activity">
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
                Our cabinet consists of dedicated representatives who strive to bridge student opinions and college administration,
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

<!-- Timeline Section -->


<!-- Suggestions Box -->
<section id="suggestions">
    <div class="contact-box">
        <h2>💡 Student Suggestion Box</h2>
        <p>Have a great idea or feedback for MASA? Submit your suggestions directly to the cabinet panel anonymously or with your details.</p>

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
        <img src="<?php echo e(asset('gallery_images/college/masalogo.png')); ?>" alt="MASA Logo"
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