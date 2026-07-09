<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>College Management - Shamsul Ulama Islamic & Arts College</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Amiri:wght@400;700&display=swap"
        rel="stylesheet">

    <style>
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
            background: #f5f7fa;
            color: #333;
            overflow-x: hidden;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 15px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        }

        .logo-container {
            display: flex;
            flex-direction: column;
        }

        header h1 {
            font-size: 24px;
            font-weight: 700;
            color: #0d7a5f;
        }

        header h2 {
            font-size: 12px;
            font-weight: 500;
            color: #c89b3c;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        #menuBtn {
            font-size: 30px;
            border: none;
            background: none;
            color: #0f5132;
            cursor: pointer;
            z-index: 1001;
            transition: transform 0.3s ease;
        }

        #menuBtn:hover {
            transform: scale(1.1);
        }

        #menu {
            position: fixed;
            top: 75px;
            right: 8%;
            width: 250px;
            background: rgba(15, 81, 50, 0.98);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            opacity: 0;
            transform: translateY(-20px) scale(0.9);
            pointer-events: none;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            z-index: 1000;
        }

        #menu.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }

        #menu a {
            display: block;
            padding: 18px 25px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s ease;
        }

        #menu a:hover {
            background: #c89b3c;
            color: #0f5132;
            padding-left: 35px;
        }

        #menu a:last-child {
            border-bottom: none;
        }

        /* Hero Section */
        .hero {
            height: 60vh;
            min-height: 400px;
            background: linear-gradient(rgba(13, 122, 95, 0.85), rgba(15, 81, 50, 0.92)),
                url("<?php echo e(asset('images/college1.JPG')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
            margin-top: 70px;
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
            background: #c89b3c;
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
            background: linear-gradient(90deg, #0d7a5f, #c89b3c);
        }

        .leader-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(13, 122, 95, 0.15);
            border-color: rgba(200, 155, 60, 0.4);
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
            box-shadow: 0 8px 25px rgba(200, 155, 60, 0.3);
            background: linear-gradient(135deg, #fef9e7, #fcf3cf);
            color: #c89b3c;
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
            color: #c89b3c;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
            padding: 6px 16px;
            background: rgba(200, 155, 60, 0.1);
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
            border-left-color: #c89b3c;
        }

        .member-item h4 {
            font-size: 18px;
            color: #0f5132;
            margin-bottom: 5px;
        }

        .member-item p {
            font-size: 14px;
            color: #c89b3c;
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

        /* Footer styling */
        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 40px 20px;
            font-size: 15px;
        }

        footer h3 {
            margin-bottom: 10px;
            font-weight: 600;
            color: #c89b3c;
            letter-spacing: 1px;
        }

        footer p {
            color: #bbb;
            margin-bottom: 8px;
        }

        footer p:last-child {
            font-size: 13px;
            color: #777;
            margin-top: 15px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            header {
                padding: 15px 5%;
            }

            #menu {
                right: 5%;
            }

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
</head>

<body>

    <header>
        <div class="logo-container">
            <h1>Shamsul Ulama Islamic College</h1>
            <h2>Management & Governance</h2>
        </div>

        <button id="menuBtn" onclick="toggleMenu()">☰</button>

        <div id="menu">
            <a href="<?php echo e(route('home')); ?>#index">🏠 Home</a>
            <a href="<?php echo e(route('home')); ?>#about">ℹ️ About</a>
            <a href="<?php echo e(route('teachers')); ?>">👨‍🏫 Teachers</a>
            <a href="<?php echo e(route('management')); ?>">🏛️ Management</a>
            <a href="<?php echo e(route('gallery')); ?>">🖼 Gallery</a>
            <a href="<?php echo e(route('masa')); ?>">🤝 MASA (Union)</a>
            <a href="<?php echo e(route('home')); ?>#contact">📞 Contact</a>
            <a href="<?php echo e(route('home')); ?>#developer">💻 Developer</a>
        </div>
    </header>

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
                    <img src="<?php echo e(asset('gallery_images/usthad/teacher9.jpeg')); ?>" alt="">
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
                    <img src="<?php echo e(asset('gallery_images/usthad/teacher12.JPG')); ?>" alt="K K A Saleem Faizy"
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

    <footer>
        <h3>Shamsul Ulama Islamic & Arts College</h3>
        <p>Knowledge • Faith • Excellence</p>
        <p>© 2026 All Rights Reserved</p>
    </footer>

    <script>
        function toggleMenu() {
            document.getElementById("menu").classList.toggle("show");
        }

        // Close menu when clicking outside
        window.onclick = function (event) {
            if (!event.target.matches('#menuBtn')) {
                var menu = document.getElementById("menu");
                if (menu.classList.contains('show')) {
                    menu.classList.remove('show');
                }
            }
        }
    </script>

</body>

</html><?php /**PATH D:\Laravel Project\collage web\resources\views/management.blade.php ENDPATH**/ ?>