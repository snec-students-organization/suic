@extends('layouts.app')

@section('title', 'College Management - Shamsul Ulama Islamic & Arts College')

@section('styles')
<style>
    body {
        background: #f5f7fa;
    }

    /* Hero Section */
    .hero {
        height: 50vh;
        min-height: 350px;
        background: linear-gradient(rgba(13, 122, 95, 0.85), rgba(15, 81, 50, 0.92)),
            url("{{ asset('images/college1.JPG') }}") no-repeat center center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        padding: 20px;
        position: relative;
    }

    .hero-content {
        max-width: 800px;
    }

    .hero h1 {
        font-size: 55px;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .hero p {
        font-size: 20px;
        color: #f8d568;
        font-weight: 400;
        letter-spacing: 1px;
    }

    .hero::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: linear-gradient(to top, #f5f7fa, transparent);
    }

    /* Section Title styling */
    section {
        padding: 80px 8%;
    }

    .section-title-container {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-title {
        font-size: 38px;
        color: #0d7a5f;
        position: relative;
        display: inline-block;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #c5a059;
        border-radius: 2px;
    }

    /* Executive Leadership Cards */
    .leaders-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
        justify-content: center;
        margin-bottom: 80px;
    }

    .leader-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(13, 122, 95, 0.08);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 30px;
        text-align: center;
        position: relative;
    }

    .leader-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 8px;
        background: linear-gradient(90deg, #0d7a5f, #c5a059);
    }

    .leader-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(13, 122, 95, 0.15);
        border-color: rgba(197, 160, 89, 0.4);
    }

    .leader-avatar {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        margin-bottom: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 42px;
        font-weight: 700;
        color: #0f5132;
        background: linear-gradient(135deg, #e6f4ea, #d0e7d6);
        border: 4px solid #fff;
        box-shadow: 0 8px 20px rgba(15, 81, 50, 0.12);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .leader-card:hover .leader-avatar {
        transform: scale(1.08);
        box-shadow: 0 8px 25px rgba(197, 160, 89, 0.3);
        background: linear-gradient(135deg, #fef9e7, #fcf3cf);
        color: #c5a059;
    }

    .leader-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .leader-card h3 {
        font-size: 24px;
        color: #0f5132;
        margin-bottom: 8px;
    }

    .leader-role {
        font-size: 15px;
        color: #c5a059;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 20px;
        padding: 6px 16px;
        background: rgba(197, 160, 89, 0.1);
        border-radius: 20px;
    }

    .leader-bio {
        font-size: 14px;
        color: #666;
        line-height: 1.6;
        flex-grow: 1;
    }

    /* Committee Members Table/Grid */
    .committee-section {
        background: white;
        border-radius: 30px;
        padding: 60px 5%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        border: 1px solid rgba(0, 0, 0, 0.02);
    }

    .committee-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .member-item {
        padding: 25px;
        border-radius: 15px;
        background: #f8fafc;
        border-left: 4px solid #0d7a5f;
        transition: all 0.3s ease;
    }

    .member-item:hover {
        transform: translateX(8px);
        background: #f1f5f9;
        border-left-color: #c5a059;
    }

    .member-item h4 {
        font-size: 18px;
        color: #0f5132;
        margin-bottom: 5px;
    }

    .member-item p {
        font-size: 14px;
        color: #c5a059;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Vision & Quote Section */
    .vision-section {
        background: linear-gradient(135deg, #0b3d2e, #0f5132);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .vision-section::before {
        content: "☪";
        position: absolute;
        right: -50px;
        bottom: -80px;
        font-size: 350px;
        color: rgba(255, 255, 255, 0.03);
        pointer-events: none;
        font-family: serif;
    }

    .vision-container {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .vision-arabic {
        font-family: 'Amiri', serif;
        font-size: 48px;
        color: #f8d568;
        margin-bottom: 30px;
        line-height: 1.5;
    }

    .vision-quote {
        font-size: 20px;
        font-style: italic;
        line-height: 1.8;
        margin-bottom: 30px;
        position: relative;
        padding: 0 40px;
    }

    .vision-quote::before,
    .vision-quote::after {
        font-size: 60px;
        position: absolute;
        color: rgba(248, 213, 104, 0.3);
        font-family: Georgia, serif;
    }

    .vision-quote::before {
        content: "“";
        left: 0;
        top: -20px;
    }

    .vision-quote::after {
        content: "”";
        right: 0;
        bottom: -40px;
    }

    .vision-author {
        font-size: 16px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #f8d568;
        font-weight: 600;
    }

    .vision-author-sub {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.7);
        margin-top: 5px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 38px;
        }

        .hero p {
            font-size: 16px;
        }

        section {
            padding: 60px 5%;
        }

        .section-title {
            font-size: 30px;
        }

        .leaders-grid {
            gap: 30px;
        }

        .vision-arabic {
            font-size: 36px;
        }

        .vision-quote {
            font-size: 16px;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Our Management</h1>
        <p>Leading with faith, wisdom, and educational excellence</p>
    </div>
</section>

<!-- Executive Leadership Section -->
<section id="leaders">
    <div class="section-title-container">
        <h2 class="section-title">Core Leadership</h2>
    </div>

    <div class="leaders-grid">
        <!-- President -->
        <div class="leader-card">
            <div class="leader-avatar">
                <img src="{{ asset('gallery_images/usthad/teacher9.jpeg') }}" alt="Ismail Kunju Haaji">
            </div>
            <h3>Ismail Kunju Haaji</h3>
            <div class="leader-role">President</div>
            <p class="leader-bio">
            </p>
        </div>

        <!-- General Secretary -->
        <div class="leader-card">
            <div class="leader-avatar">
                <span>AF</span>
            </div>
            <h3>Shamsudheen V S</h3>
            <div class="leader-role">General Secretary</div>
            <p class="leader-bio">
            </p>
        </div>

        <!-- Working Secretary -->
        <div class="leader-card">
            <div class="leader-avatar">
                <img src="{{ asset('gallery_images/usthad/teacher12.JPG') }}" alt="K K A Saleem Faizy"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                <span style="display:none">KS</span>
            </div>
            <h3>K K A Saleem Faizy</h3>
            <div class="leader-role">Working Secretary</div>
            <p class="leader-bio">
            </p>
        </div>
    </div>

    <!-- Governing Body Section -->
    <div class="committee-section">
        <div class="section-title-container" style="margin-bottom: 40px;">
            <h2 class="section-title" style="font-size: 30px;">Governing Committee</h2>
        </div>

        <div class="committee-grid">
            <div class="member-item">
                <h4>Ismail Kunju Haaji</h4>
                <p>President</p>
            </div>

            <div class="member-item">
                <h4>Nisamudheen Faizy</h4>
                <p>Vice President</p>
            </div>

            <div class="member-item">
                <h4>Jamaludheen Mannani</h4>
                <p>Vice President</p>
            </div>

            <div class="member-item">
                <h4>Shamsudheen V S</h4>
                <p>General Secretary</p>
            </div>

            <div class="member-item">
                <h4>K K A Salim Faizy</h4>
                <p>Working Secretary</p>
            </div>

            <div class="member-item">
                <h4>Abdul Rahman Faizy</h4>
                <p>Joint Secretary</p>
            </div>

            <div class="member-item">
                <h4>K K M Salim</h4>
                <p> Joint Secretary</p>
            </div>

            <div class="member-item">
                <h4>Nasar Mamoolayil</h4>
                <p>Treasurer</p>
            </div>

            <div class="member-item">
                <h4>Mahmood Sufair Haithami</h4>
                <p>Principal (Ex-Officio)</p>
            </div>
        </div>
    </div>
</section>

<!-- Vision Quote Section -->
<section class="vision-section">
    <div class="vision-container">
        <div class="vision-arabic">وَقُل رَّبِّ زِدْنِي عِلْمًا</div>
        <p class="vision-quote">
            Education is not merely the acquisition of information, but the cultivation of character and deep faith.
            Our mission is to raise a generation that shines in both Islamic values and modern intellectual
            pursuits.
        </p>
        <div class="vision-author">Ismail Kunju Haaji</div>
        <div class="vision-author-sub">President, Shamsul Ulama Islamic & Arts College Committee</div>
    </div>
</section>
@endsection