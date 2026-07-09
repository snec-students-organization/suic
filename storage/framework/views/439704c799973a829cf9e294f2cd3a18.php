<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery | Shamsul Ulama Islamic & Arts College</title>

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
            background:
                linear-gradient(rgba(248, 250, 252, .96), rgba(248, 250, 252, .96)),
                url("https://www.transparenttextures.com/patterns/arabesque.png");
            color: #333;
        }

        /* MENU BUTTON */
        #menuBtn {
            position: fixed;
            top: 15px;
            right: 15px;
            font-size: 32px;
            border: none;
            background: rgba(255, 255, 255, .15);
            backdrop-filter: blur(10px);
            color: white;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1001;
        }

        /* MENU */
        #menu {
            position: fixed;
            top: 80px;
            right: 20px;
            width: 240px;
            background: rgba(8, 60, 45, .95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            overflow: hidden;
            opacity: 0;
            transform: translateY(-20px);
            pointer-events: none;
            transition: .4s;
            z-index: 1000;
        }

        #menu.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        #menu a {
            display: block;
            padding: 16px 20px;
            color: white;
            text-decoration: none;
            transition: .3s;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
        }

        #menu a:hover {
            background: #FFD700;
            color: #083c2d;
            padding-left: 28px;
        }

        /* HERO */
        .hero {
            min-height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            color: white;
            background:
                linear-gradient(rgba(0, 50, 35, .82), rgba(0, 50, 35, .82)),
                url("<?php echo e(asset('gallery_images/college/college4.JPG')); ?>");
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            max-width: 900px;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .arabic {
            font-family: 'Amiri', serif;
            font-size: 2.3rem;
            color: #FFD700;
            margin-bottom: 10px;
        }

        .hero span {
            font-style: italic;
            color: #eee;
        }

        /* SECTION TITLE */
        .section-title {
            text-align: center;
            padding: 70px 20px 30px;
        }

        .section-title h2 {
            color: #0d7a5f;
            font-size: 2.5rem;
        }

        .section-title p {
            margin-top: 10px;
            color: #666;
        }

        .section-title::after {
            content: "☪";
            display: block;
            color: #FFD700;
            font-size: 2rem;
            margin-top: 15px;
        }

        /* GALLERY */
        .gallery {
            width: 90%;
            margin: auto;
            padding-bottom: 80px;

            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .gallery-item {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            transition: .5s;
            position: relative;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
        }

        .gallery-item img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: .6s;
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(133, 133, 133, 0.75);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 28px;
            opacity: 0;
            transition: .4s;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .caption {
            padding: 22px;
            text-align: center;
        }

        .caption h3 {
            color: #000000ff;
            margin-bottom: 8px;
        }

        .caption p {
            color: #666;
        }

        /* LIGHTBOX */
        #lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .95);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #lightbox img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 15px;
        }

        #close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            cursor: pointer;
        }

        /* FOOTER */
        footer {
            background: #0f574dff;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        footer h3 {
            color: #FFD700;
            margin-bottom: 10px;
        }

        /* MOBILE */
        @media(max-width:768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .arabic {
                font-size: 1.7rem;
            }

            .gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <button id="menuBtn" onclick="toggleMenu()">☰</button>

    <div id="menu">
        <a href="<?php echo e(route('home')); ?>#index">🏠 Home</a>
        <a href="<?php echo e(route('home')); ?>#about">ℹ About</a>
        <a href="<?php echo e(route('teachers')); ?>">👨‍🏫 Teachers</a>
        <a href="<?php echo e(route('management')); ?>">🏛 Management</a>
        <a href="<?php echo e(route('gallery')); ?>">🖼 Gallery</a>
        <a href="<?php echo e(route('masa')); ?>">🤝 MASA</a>
        <a href="<?php echo e(route('home')); ?>#contact">📞 Contact</a>
        <a href="<?php echo e(route('home')); ?>#developer">💻 Developer</a>
    </div>

    <section class="hero">
        <div class="hero-content">
            <h1>College Gallery</h1>
            <p>Moments of Knowledge • Faith • Excellence</p>

            <div class="arabic">
                وَقُل رَّبِّ زِدْنِي عِلْمًا
            </div>

            <span>"My Lord, increase me in knowledge."</span>
        </div>
    </section>

    <div class="section-title">
        <h2>Our Memorable Moments</h2>
        <p>Capturing the Journey of Education and Spiritual Growth</p>
    </div>

    <section class="gallery">

    <div class="gallery-item">
        <img src="<?php echo e(asset('gallery_images/college/college4.JPG')); ?>" alt="">
        <div class="overlay">📸</div>
        <div class="caption">
            <h3>Campus View</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?php echo e(asset('gallery_images/college/class3.JPG')); ?>" alt="">
        <div class="overlay">📖</div>
        <div class="caption">
            <h3>Classroom</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?php echo e(asset('gallery_images/college/Library.png')); ?>" alt="">
        <div class="overlay">📚</div>
        <div class="caption">
            <h3>Library</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?php echo e(asset('gallery_images/college/cup.JPG')); ?>" alt="">
        <div class="overlay">🎤</div>
        <div class="caption">
            <h3>Sports</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?php echo e(asset('gallery_images/college/class2.JPG')); ?>" alt="">
        <div class="overlay">🎓</div>
        <div class="caption">
            <h3>Education</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?php echo e(asset('gallery_images/college/achivment.JPG')); ?>" alt="">
        <div class="overlay">🏆</div>
        <div class="caption">
            <h3>Achievements</h3>
            <p></p>
        </div>
    </div>

</section>

    <div id="lightbox">
        <span id="close" onclick="closeLightbox()">&times;</span>
        <img id="lightboxImg">
    </div>

    <footer>
        <h3>Shamsul Ulama Islamic & Arts College</h3>
        <p>Guided by Faith • Empowered by Knowledge • Dedicated to Service</p>
    </footer>

    <script>
        function toggleMenu() {
            document.getElementById("menu").classList.toggle("show");
        }

        document.addEventListener("click", function (e) {
            const menu = document.getElementById("menu");
            const btn = document.getElementById("menuBtn");

            if (!menu.contains(e.target) && !btn.contains(e.target)) {
                menu.classList.remove("show");
            }
        });

        const images = document.querySelectorAll(".gallery-item img");

        images.forEach(img => {
            img.addEventListener("click", () => {
                document.getElementById("lightbox").style.display = "flex";
                document.getElementById("lightboxImg").src = img.src;
            });
        });

        function closeLightbox() {
            document.getElementById("lightbox").style.display = "none";
        }
    </script>

</body>
</html>     <?php /**PATH H:\Yaseen E A\Coding\html\collage web\resources\views/gallery.blade.php ENDPATH**/ ?>