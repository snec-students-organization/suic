@extends('layouts.app')

@section('title', 'Gallery | Shamsul Ulama Islamic & Arts College')

@section('styles')
<style>
    .hero {
        min-height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 60px 20px;
        color: white;
        background:
            linear-gradient(rgba(0, 50, 35, .82), rgba(0, 50, 35, .82)),
            url("{{ asset('gallery_images/college/college4.JPG') }}") no-repeat center center;
        background-size: cover;
    }

    .hero-content {
        max-width: 900px;
        margin: 0 auto;
    }

    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 15px;
    }

    .hero p {
        font-size: 1.2rem;
        margin-bottom: 20px;
        color: rgba(255, 255, 255, 0.9);
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
        font-size: 0.95rem;
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
        color: #c5a059;
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
        cursor: pointer;
    }

    .gallery-item:hover {
        transform: translateY(-10px);
    }

    .gallery-item img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: .6s;
        display: block;
    }

    .gallery-item:hover img {
        transform: scale(1.08);
    }

    .overlay {
        position: absolute;
        inset: 0;
        background: rgba(4, 44, 32, 0.75);
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
        background: var(--color-bg-white);
    }

    .caption h3 {
        color: var(--color-text-dark);
        margin-bottom: 8px;
    }

    .caption p {
        color: var(--color-text-muted);
        font-size: 14px;
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
        user-select: none;
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
@endsection

@section('content')
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
        <img src="{{ asset('gallery_images/college/college4.JPG') }}" alt="Campus View">
        <div class="overlay">📸</div>
        <div class="caption">
            <h3>Campus View</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="{{ asset('gallery_images/college/class3.JPG') }}" alt="Classroom">
        <div class="overlay">📖</div>
        <div class="caption">
            <h3>Classroom</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="{{ asset('gallery_images/college/Library.png') }}" alt="Library">
        <div class="overlay">📚</div>
        <div class="caption">
            <h3>Library</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="{{ asset('gallery_images/college/cup.JPG') }}" alt="Sports">
        <div class="overlay">🎤</div>
        <div class="caption">
            <h3>Sports</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="{{ asset('gallery_images/college/class2.JPG') }}" alt="Education">
        <div class="overlay">🎓</div>
        <div class="caption">
            <h3>Education</h3>
            <p></p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="{{ asset('gallery_images/college/achivment.JPG') }}" alt="Achievements">
        <div class="overlay">🏆</div>
        <div class="caption">
            <h3>Achievements</h3>
            <p></p>
        </div>
    </div>

</section>

<div id="lightbox">
    <span id="close" onclick="closeLightbox()">&times;</span>
    <img id="lightboxImg" alt="Enlarged gallery item">
</div>
@endsection

@section('scripts')
<script>
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

    // Close lightbox on clicking escape key or clicking outside
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            closeLightbox();
        }
    });

    document.getElementById("lightbox").addEventListener("click", function(e) {
        if (e.target !== document.getElementById("lightboxImg") && e.target !== document.getElementById("close")) {
            closeLightbox();
        }
    });
</script>
@endsection