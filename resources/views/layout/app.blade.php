<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeNect - Tech & Coffee Community</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Stiluri generale -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-color: #26d0f9;
            --primary-glow: rgba(38, 208, 249, 0.6);
            --dark-bg: #0a0c14;
            --accent: #7b35ff;
            --accent-glow: rgba(123, 53, 255, 0.4);
        }

        /* FUNDAL și TEXT GLOBAL */
        body {
            background-color: var(--dark-bg);
            color: white;
            font-family: 'Space Grotesk', sans-serif;
            background-image:
                radial-gradient(circle at 20% 25%, rgba(38, 208, 249, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 75%, rgba(123, 53, 255, 0.03) 0%, transparent 50%);
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* GRID FUTURIST ÎN FUNDAL */
        body::before {
            content: '';
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-image:
                linear-gradient(to right, rgba(38, 208, 249, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(38, 208, 249, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
            z-index: -1;
            pointer-events: none;
        }

        /* NAVBAR */
        .navbar {
            background-color: rgba(10, 12, 20, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(38, 208, 249, 0.2);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar-brand {
            color: var(--primary-color);
            font-weight: bold;
            display: flex;
            align-items: center;
            text-shadow: 0 0 10px var(--primary-glow);
            transition: all 0.3s ease;
        }
        .navbar-brand:hover {
            color: white;
            text-shadow: 0 0 15px var(--primary-color);
        }
        .navbar-brand i {
            margin-right: 8px;
            animation: steam 2s infinite ease-in-out;
        }
        @keyframes steam {
            0% { transform: translateY(0) rotate(0deg); opacity: 0.7; }
            50% { transform: translateY(-3px) rotate(5deg); opacity: 1; }
            100% { transform: translateY(0) rotate(0deg); opacity: 0.7; }
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            margin: 0 10px;
            position: relative;
            padding: 5px 0;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0; height: 2px;
            bottom: 0; left: 0;
            background: linear-gradient(90deg, var(--primary-color), var(--accent));
            transition: width 0.3s ease;
            box-shadow: 0 0 10px var(--primary-glow);
        }
        .nav-link:hover {
            color: white;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }
        .nav-link:hover::after {
            width: 100%;
        }

        /* BUTON TELEGRAM */
        .telegram-btn {
            background: linear-gradient(135deg, rgba(38, 208, 249, 0.1), rgba(123, 53, 255, 0.1));
            color: var(--primary-color);
            border: 1px solid rgba(38, 208, 249, 0.3);
            border-radius: 30px;
            padding: 8px 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            box-shadow: 0 0 15px rgba(38, 208, 249, 0.2);
        }
        .telegram-btn:hover {
            background: linear-gradient(135deg, rgba(38, 208, 249, 0.2), rgba(123, 53, 255, 0.2));
            border-color: var(--primary-color);
            box-shadow: 0 0 20px rgba(38, 208, 249, 0.4);
            color: white;
            transform: translateY(-2px);
        }

        /* TITLU, SUBTITLU GLOBAL */
        .hero-title {
            font-size: 4.5rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--primary-color), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1.5rem;
            position: relative;
            letter-spacing: -1px;
            line-height: 1.1;
        }
        .hero-title::after {
            content: attr(data-text);
            position: absolute;
            left: 0; top: 0;
            z-index: -1;
            color: transparent;
            -webkit-text-stroke: 1px rgba(38, 208, 249, 0.3);
        }
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2.5rem;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.4;
        }

        /* BRAND-PILL (CoffeeNect chestia rotundă) */
        .brand-pill {
            background: linear-gradient(135deg, rgba(38, 208, 249, 0.1), rgba(123, 53, 255, 0.1));
            border: 1px solid rgba(38, 208, 249, 0.2);
            border-radius: 40px;
            padding: 10px 24px;
            display: inline-flex;
            align-items: center;
            margin-bottom: 30px;
            box-shadow: 0 0 20px rgba(38, 208, 249, 0.15);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }
        .brand-pill:hover {
            box-shadow: 0 0 30px rgba(38, 208, 249, 0.3);
            transform: translateY(-2px) scale(1.02);
        }

        /* BUTOANE */
        .action-btn {
            border-radius: 40px;
            padding: 14px 30px;
            font-weight: 600;
            margin-right: 15px;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            letter-spacing: 0.5px;
        }
        .primary-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--accent));
            color: white;
            border: none;
            box-shadow: 0 5px 20px rgba(38, 208, 249, 0.3);
        }
        .primary-btn::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
            z-index: -1;
        }
        .primary-btn:hover {
            box-shadow: 0 5px 30px rgba(38, 208, 249, 0.5);
            transform: translateY(-3px);
            color: white;
        }
        .primary-btn:hover::before {
            left: 100%;
        }
        .secondary-btn {
            background-color: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .secondary-btn:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            box-shadow: 0 5px 20px rgba(38, 208, 249, 0.2);
            transform: translateY(-3px);
        }

        /* ANIMAȚII PARTICULE / DOTS (generale) */
        .dots-container {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            overflow: hidden;
            z-index: -2;
            pointer-events: none;
        }
        .dot {
            position: absolute;
            width: 2px; height: 2px;
            border-radius: 50%;
            background-color: rgba(38, 208, 249, 0.3);
            animation: moveDots 7s linear infinite;
        }
        @keyframes moveDots {
            0%   { transform: translateY(0) rotate(0deg); opacity: 0; }
            10%  { opacity: 1; }
            90%  { opacity: 1; }
            100% { transform: translateY(-1500px) rotate(360deg); opacity: 0; }
        }

        .particles {
            position: absolute;
            width: 100%; height: 100%;
            top: 0; left: 0;
            pointer-events: none;
        }
        .particle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.5;
            animation: float 20s infinite ease-in-out;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-50px) translateX(50px); }
            50% { transform: translateY(50px) translateX(-30px); }
            75% { transform: translateY(30px) translateX(70px); }
        }

        /* LINIE CURBATĂ DIN FUNDAL */
        .curved-line {
            position: absolute;
            top: 50px;
            width: 100%;
            height: 200px;
            z-index: 0;
            opacity: 0.15;
            filter: blur(5px);
        }
        .curved-line path {
            stroke-dasharray: 1500;
            stroke-dashoffset: 1500;
            animation: lineDraw 15s linear infinite alternate;
        }
        @keyframes lineDraw {
            0% { stroke-dashoffset: 1500; }
            100% { stroke-dashoffset: 0; }
        }

        /* MEDIA QUERIES, ETC. */
        @media (max-width: 991.98px) {
            .hero-title { font-size: 3.5rem; }
        }
        @media (max-width: 767.98px) {
            .hero-title { font-size: 2.8rem; }
            .action-btn {
                display: block;
                width: 100%;
                margin-bottom: 15px;
                text-align: center;
                justify-content: center;
            }
        }

        /* FOOTER */
        .footer-custom {
            background: rgba(10, 12, 20, 0.85);
            border-top: 1px solid rgba(38, 208, 249, 0.15);
            position: relative;
            width: 100%;
            z-index: 10;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            backdrop-filter: blur(6px);
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
            margin-top: auto;
        }

        .footer-custom strong {
            color: var(--primary-color);
            text-shadow: 0 0 5px var(--primary-glow);
        }

        @media (max-width: 767.98px) {
            .footer-custom {
                font-size: 0.75rem;
                padding: 0.8rem;
            }
        }
    </style>
</head>
<body>

<!-- Animații glob -->
<div class="dots-container" id="dotsContainer"></div>
<div class="particles">
    <div class="particle p1"></div>
    <div class="particle p2"></div>
    <div class="particle p3"></div>
    <div class="particle p4"></div>
    <div class="particle p5"></div>
</div>
<svg class="curved-line" viewBox="0 0 1200 200" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,100 C300,20 600,180 1200,100" stroke="#26d0f9" fill="none" stroke-width="3"/>
</svg>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="bi bi-cup-hot-fill"></i>
            CoffeeNect
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Despre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('events')}}">Evenimente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('participate')}}">Alătură-te</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacts')}}">Contact</a>
                </li>
            </ul>
            <a href="#" class="telegram-btn ms-3">
                <i class="bi bi-telegram"></i>
                Telegram
            </a>
        </div>
    </div>
</nav>

<!-- Yield pentru conținutul specific paginilor -->
@yield('content')

<!-- FOOTER -->
<footer class="footer-custom text-center py-3 mt-auto">
    <div class="container">
        <p class="mb-1">
            Made with ☕ & ❤️ by the <strong>CoffeeNect</strong> community.
        </p>
        <small class="text-muted">
            © 2025 CoffeeNect · Tech meets Coffee · Chișinău, Moldova
        </small>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script global: generare dotted background -->
<script>
    const dotsContainer = document.getElementById('dotsContainer');
    const numberOfDots = 50;

    for (let i = 0; i < numberOfDots; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');

        // Poziție random
        const left = Math.floor(Math.random() * 100);
        const delay = Math.random() * 7;
        const size = Math.random() * 3 + 1;

        dot.style.left = `${left}%`;
        dot.style.animationDelay = `${delay}s`;
        dot.style.width = `${size}px`;
        dot.style.height = `${size}px`;

        // Randomize the color between primary and accent
        if (Math.random() > 0.7) {
            dot.style.backgroundColor = 'rgba(123, 53, 255, 0.3)';
            dot.style.boxShadow = '0 0 5px rgba(123, 53, 255, 0.5)';
        }

        dotsContainer.appendChild(dot);
    }
</script>
</body>
</html>
