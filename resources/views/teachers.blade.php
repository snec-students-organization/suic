@extends('layouts.app')

@section('title', 'Our Teachers | Shamsul Ulama Islamic & Arts College')

@section('styles')
<style>
    body {
        background: linear-gradient(rgba(0, 40, 30, .9), rgba(1, 51, 28, 0.9)),
            url('{{ asset("gallery_images/college/college3.jpg") }}') no-repeat center center fixed !important;
        background-size: cover !important;
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
        color: #ffffff;
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
        background: rgba(139, 202, 181, 0.2);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
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
        color: #ffffff;
    }

    .teacher-info h2 {
        font-size: 24px;
        margin-bottom: 8px;
        color: #ffffff;
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
</style>
@endsection

@section('content')
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
            <img src="{{ asset('gallery_images/usthad/teacher4.jpeg') }}" alt="Mahmood Sufair Haithami">
            <div class="teacher-info">
                <h2>Mahmood Sufair Haithami</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 2 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher11.jpeg') }}" alt="Muhammed Hisham Faizy">
            <div class="teacher-info">
                <h2>Muhammed Hisham Faizy</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 3 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher2.JPG') }}" alt="Saleem Faizy Kollam">
            <div class="teacher-info">
                <h2>Saleem Faizy Kollam</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 4 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher1.JPG') }}" alt="Niyas Madani">
            <div class="teacher-info">
                <h2>Niyas Madani</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 5 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher3.jpeg') }}" alt="Abdul Rahman Sana'ee">
            <div class="teacher-info">
                <h2>Abdul Rahman Sana'ee</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 6 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher10.JPG') }}" alt="Hasan Faizy">
            <div class="teacher-info">
                <h2>Hasan Faizy</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 7 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher7.JPG') }}" alt="Shajahan Baqawi">
            <div class="teacher-info">
                <h2>Shajahan Baqawi</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 8 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher8.jpg') }}" alt="Abdullah Hudawi">
            <div class="teacher-info">
                <h2>Abdullah Hudawi</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 9 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher5.jpeg') }}" alt="Shajahan Mannani">
            <div class="teacher-info">
                <h2>Shajahan Mannani</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 10 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher6.jpeg') }}" alt="Rajan Sir">
            <div class="teacher-info">
                <h2>Rajan Sir</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 11 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher8.jpg') }}" alt="Shamnad Sir">
            <div class="teacher-info">
                <h2>Shamnad Sir</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

        <!-- Teacher 12 -->
        <div class="teacher-card">
            <img src="{{ asset('gallery_images/usthad/teacher8.jpg') }}" alt="Vishag Sir">
            <div class="teacher-info">
                <h2>Vishag Sir</h2>
                <h4></h4>
                <p></p>
                <div class="social"></div>
            </div>
        </div>

    </div>

</section>
@endsection