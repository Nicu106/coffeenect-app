@extends('layout.app')

@section('content')
<section class="contact-hero d-flex align-items-center justify-content-center position-relative">
    <div class="grid-overlay"></div>
    <div class="text-center">
        <h1 class="hero-title">Hai să vorbim</h1>
        <p class="hero-subtitle">Ne poți contacta doar pe Telegram</p>
        <a href="https://t.me/+Cy42hiMBQRZlMDIy" target="_blank" class="btn-telegram">
            <i class="bi bi-telegram me-2"></i> Telegram
        </a>
    </div>
</section>

<style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
    }

    .contact-hero {
        height: 100vh;
        background: linear-gradient(135deg, #0a0e17, #131c2e);
        background-size: 600% 600%;
        animation: moveBG 15s ease infinite;
        position: relative;
        color: white;
    }

    .grid-overlay {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        pointer-events: none;
        background-image:
            linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
        background-size: 40px 40px;
        z-index: 0;
    }

    .hero-title {
        font-size: 4rem;
        font-weight: 700;
        background: linear-gradient(90deg, #26d0f9, #6e72fc);
        -webkit-background-clip: text;
        color: transparent;
        margin-bottom: 1rem;
        z-index: 1;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: rgba(255,255,255,0.7);
        margin-bottom: 2rem;
        z-index: 1;
    }

    .btn-telegram {
        display: inline-block;
        padding: 0.8rem 2rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 50px;
        background: linear-gradient(90deg, #26d0f9, #6e72fc);
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        z-index: 1;
    }

    .btn-telegram:hover {
        transform: scale(1.05);
        box-shadow: 0 0 15px rgba(38, 208, 249, 0.5);
    }

    @keyframes moveBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>
@endsection
