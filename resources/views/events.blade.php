@extends('layout.app')

@section('content')
<!-- PAGINA EVENIMENTE CU ELEMENTE ANIMATE SI COMING SOON -->
<section class="events-coming-soon d-flex flex-column align-items-center justify-content-center position-relative">
    <div class="events-grid-overlay"></div>
    <h1 class="display-1 futurist-text center-title">COMING <br> SOON</h1>
    <!-- Elemente flotante animate -->
    <div class="floating-shape shape1"></div>
    <div class="floating-shape shape2"></div>
    <div class="floating-shape shape3"></div>
    <div class="floating-shape shape4"></div>
</section>

<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Elimină scroll-ul */
    }

    .events-grid-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        background-image:
            linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
        background-size: 40px 40px;
        z-index: 0;
    }

    .events-coming-soon {
        position: relative;
        z-index: 1; /* Keep event content above grid overlay */
        height: 100%;
        width: 100%;
        overflow: hidden;
        background: linear-gradient(135deg, #101c2c, #203d53, #101c2c);
        background-size: 600% 600%;
        animation: bgGradient 10s ease infinite;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @keyframes bgGradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .futurist-text {
        background: linear-gradient(90deg, #26d0f9, #6e72fc);
        -webkit-background-clip: text;
        color: transparent;
        text-shadow: none;
        font-weight: 700;
        animation: flicker 2s infinite alternate;
        font-size: 15rem;
    }

    @keyframes flicker {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0.8;
        }
    }

    /* Elemente flotante animate */
    .floating-shape {
        position: absolute;
        width: 80px;
        height: 80px;
        background: rgba(38, 208, 249, 0.05);
        border-radius: 50%;
        animation: floatShape 10s linear infinite;
    }

    .shape1 {
        top: 10%;
        left: 20%;
        animation-delay: 0s;
    }

    .shape2 {
        top: 40%;
        left: 70%;
        animation-delay: 3s;
    }

    .shape3 {
        top: 70%;
        left: 30%;
        animation-delay: 6s;
    }

    .shape4 {
        top: 20%;
        left: 80%;
        animation-delay: 9s;
    }

    @keyframes floatShape {
        0% {
            transform: translateY(0) scale(1);
        }
        50% {
            transform: translateY(-50px) scale(1.2);
        }
        100% {
            transform: translateY(0) scale(1);
        }
    }

    .center-title {
        max-width: 80%;
        margin: 0 auto;
        text-align: center;
    }

    @media (max-width: 1200px) {
        .futurist-text {
            font-size: 10rem;
        }
    }

    @media (max-width: 768px) {
        .futurist-text {
            font-size: 6rem;
        }
    }

    @media (max-width: 480px) {
        .futurist-text {
            font-size: 3.5rem;
        }
    }
</style>
@endsection
