<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Teachers | Islamic College</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Amiri:wght@700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
    background: linear-gradient(rgba(0, 40, 30, .9), rgba(1, 51, 28, 0.9)),
        url('{{ asset("gallery_images/college/college3.jpg") }}');
}

        .teachers-section {
            padding: 80px 8%;
        }

        .title {
            text-align: center;
            margin-bottom: 60px;
        }

        .title h3 {
            color: #d4af37;
            font-family: 'Amiri', serif;
            font-size: 40px;
            margin-bottom: 10px;
        }

        .title h1 {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .title p {
            max-width: 700px;
            margin: auto;
            color: #ddd;
        }

        .teacher-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .teacher-card {
            background: #8bcab5ff;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 25px;
            overflow: hidden;
            transition: .4s;
        }

        .teacher-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(212, 175, 55, .3);
        }

        .teacher-card img {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }

        .teacher-info {
            padding: 25px;
            text-align: center;
        }

        .teacher-info h2 {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .teacher-info h4 {
            color: #d4af37;
            margin-bottom: 12px;
            font-weight: 500;
        }

        .teacher-info p {
            color: #ddd;
            font-size: 14px;
            line-height: 1.6;
        }

        .social {
            margin-top: 20px;
        }

        .social a {
            text-decoration: none;
            color: white;
            margin: 0 8px;
            font-size: 20px;
            transition: .3s;
        }

        .social a:hover {
            color: #d4af37;
        }

        /* 3-dot menu button */
.menu-btn{
    position: fixed;
    top: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255,255,255,.2);
    color: #fff;
    font-size: 28px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

.menu-content{
    position: fixed;
    top: 80px;
    right: 20px;
    background: rgba(0,20,15,.95);
    backdrop-filter: blur(15px);
    border-radius: 15px;
    min-width: 180px;
    overflow: hidden;
    display: none;
    z-index: 1000;
}

.menu-content.show{
    display: block;
}

.menu-content a{
    display: block;
    padding: 15px 20px;
    color: white;
    text-decoration: none;
    border-bottom: 1px solid rgba(255,255,255,.1);
    transition: .3s;
}

.menu-content a:hover{
    background: rgba(212,175,55,.2);
    color: #d4af37;
}
    </style>
</head>

<script>
function toggleMenu() {
    document.getElementById("menu").classList.toggle("show");
}

document.addEventListener("click", function (e) {
    if (!e.target.closest(".menu-btn") && !e.target.closest(".menu-content")) {
        document.getElementById("menu").classList.remove("show");
    }
});
</script>

<body>

<!-- Three Dot Menu -->
<div class="menu-btn" onclick="toggleMenu()">
   ☰
</div>

<div class="menu-content" id="menu">
    <a href="{{ route('home') }}#index">🏠 Home</a>
            <a href="{{ route('home') }}#about">ℹ️ About</a>
            <a href="{{ route('teachers') }}">👨‍🏫 Teachers</a>
            <a href="{{ route('management') }}">🏛️ Management</a>
            <a href="{{ route('gallery') }}">🖼 Gallery</a>
            <a href="{{ route('masa') }}">🤝 MASA (Union)</a>
            <a href="{{ route('home') }}#contact">📞 Contact</a>
            <a href="{{ route('home') }}#developer">💻 Developer</a>
</div>

    <section class="teachers-section">

        <div class="title">
            <h3>بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</h3>
            <h1>Meet Our Esteemed Teachers</h1>
            <p>
                Our dedicated faculty members combine Islamic wisdom,
                academic excellence and moral leadership to guide
                students toward success in this world and the Hereafter.
            </p>
        </div>

        <div class="teacher-container">

            <!-- Teacher 1 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher4.jpeg') }}" alt="">
                <div class="teacher-info">
                    <h2>Mahmood Sufair Haithami</h2>
                    <h4></h4>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 2 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher11.jpeg') }}" alt="">
                <div class="teacher-info">
                    <h2>Muhammed Hisham Faizy</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 3 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher2.JPG') }}" alt="">
                <div class="teacher-info">
                    <h2>Saleem Faizy Kollam</h2>
                    <h4> </h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 4 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher1.JPG') }}" alt="">
                <div class="teacher-info">
                    <h2>Niyas Madani</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 5 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher3.jpeg') }}" alt="">
                <div class="teacher-info">
                    <h2>Abdul Rahman Sana'ee</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 6 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher10.JPG') }}" alt="">
                <div class="teacher-info">
                    <h2>Hasan Faizy</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 7 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher7.JPG') }}" alt="">
                <div class="teacher-info">
                    <h2>Shajahan Baqawi</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 8 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher8.jpg') }}" alt="">
                <div class="teacher-info">
                    <h2>Abdullah Hudawi</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 9 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher5.jpeg') }}" alt="">
                <div class="teacher-info">
                    <h2>Shajahan Mannani</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 10 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher6.jpeg') }}" alt="">
                <div class="teacher-info">
                    <h2>Rajan Sir</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 11 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher8.jpg') }}" alt="">
                <div class="teacher-info">
                    <h2>Shamnad Sir</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

            <!-- Teacher 12 -->
            <div class="teacher-card">
                <img src="{{ asset('gallery_images/usthad/teacher8.jpg') }}" alt="">
                <div class="teacher-info">
                    <h2>Vishag Sir</h2>
                    <h4></h4>
                    <p>
                    </p>
                    <div class="social">
                    </div>
                </div>
            </div>

        </div>

    </section>

</body>

</html>