<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeNect - Tech & Coffee Community</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-color: #26d0f9;
            --primary-glow: rgba(38, 208, 249, 0.6);
            --dark-bg: #0a0c14;
            --card-bg: #121622;
            --accent: #7b35ff;
            --accent-glow: rgba(123, 53, 255, 0.4);
        }

        body {
            background-color: var(--dark-bg);
            color: white;
            font-family: 'Space Grotesk', sans-serif;
            background-image:
                radial-gradient(circle at 20% 25%, rgba(38, 208, 249, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 75%, rgba(123, 53, 255, 0.03) 0%, transparent 50%);
            overflow-x: hidden;
        }

        /* Futuristic grid background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(to right, rgba(38, 208, 249, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(38, 208, 249, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
            z-index: -1;
            pointer-events: none;
        }

        .navbar {
            background-color: rgba(10, 12, 20, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
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
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
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

        .telegram-btn i {
            margin-right: 8px;
        }

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
            left: 0;
            top: 0;
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

        .brand-pill i {
            color: var(--primary-color);
            margin-right: 10px;
            text-shadow: 0 0 10px var(--primary-glow);
            animation: steam 2s infinite ease-in-out;
        }

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
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .secondary-btn:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            box-shadow: 0 5px 20px rgba(38, 208, 249, 0.2);
            transform: translateY(-3px);
        }

        .card-custom {
            background: linear-gradient(135deg, rgba(18, 22, 34, 0.8), rgba(10, 12, 20, 0.8));
            border-radius: 20px;
            padding: 35px;
            border: 1px solid rgba(38, 208, 249, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2),
            0 0 20px rgba(38, 208, 249, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            transform: perspective(1000px) rotateX(5deg);
        }

        .card-custom::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent,
                rgba(38, 208, 249, 0.03),
                transparent
            );
            transform: rotate(45deg);
            animation: cardLight 6s linear infinite;
        }

        @keyframes cardLight {
            0% { transform: rotate(45deg) translateY(-100%); }
            100% { transform: rotate(45deg) translateY(100%); }
        }

        .card-custom:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3),
            0 0 30px rgba(38, 208, 249, 0.2);
            transform: perspective(1000px) rotateX(0deg) translateY(-5px);
        }

        .card-custom h3 {
            background: linear-gradient(90deg, white, var(--primary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .card-custom p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
            font-weight: 300;
        }

        .emoji {
            font-size: 1.3rem;
            display: inline-block;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

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

        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        /* Floating particles */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.5;
            animation: float 20s infinite ease-in-out;
        }

        .p1 {
            width: 10px;
            height: 10px;
            background: var(--primary-color);
            box-shadow: 0 0 10px var(--primary-glow);
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .p2 {
            width: 15px;
            height: 15px;
            background: var(--accent);
            box-shadow: 0 0 15px var(--accent-glow);
            top: 60%;
            left: 80%;
            animation-delay: -5s;
        }

        .p3 {
            width: 8px;
            height: 8px;
            background: white;
            box-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
            top: 80%;
            left: 30%;
            animation-delay: -10s;
        }

        .p4 {
            width: 12px;
            height: 12px;
            background: var(--primary-color);
            box-shadow: 0 0 12px var(--primary-glow);
            top: 30%;
            left: 70%;
            animation-delay: -15s;
        }

        .p5 {
            width: 9px;
            height: 9px;
            background: var(--accent);
            box-shadow: 0 0 9px var(--accent-glow);
            top: 70%;
            left: 20%;
            animation-delay: -7s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-50px) translateX(50px); }
            50% { transform: translateY(50px) translateX(-30px); }
            75% { transform: translateY(30px) translateX(70px); }
        }

        /* Future dots animation in the background */
        .dots-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -2;
            pointer-events: none;
        }

        .dot {
            position: absolute;
            width: 2px;
            height: 2px;
            border-radius: 50%;
            background-color: rgba(38, 208, 249, 0.3);
            animation: moveDots 7s linear infinite;
        }

        @keyframes moveDots {
            0% { transform: translateY(0) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-1500px) rotate(360deg); opacity: 0; }
        }

        @media (max-width: 991.98px) {
            .hero-title {
                font-size: 3.5rem;
            }

            .card-custom {
                margin-top: 30px;
            }
        }

        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .action-btn {
                display: block;
                width: 100%;
                margin-bottom: 15px;
                text-align: center;
                justify-content: center;
            }
        }
        .section-coffee-white {
            background-color: #ffffff;
            color: #000000;
            border-radius: 10px;
            padding: 50px 20px;
            position: relative;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
<!-- Dots animation -->
<div class="dots-container" id="dotsContainer"></div>

<!-- Floating particles -->
<div class="particles">
    <div class="particle p1"></div>
    <div class="particle p2"></div>
    <div class="particle p3"></div>
    <div class="particle p4"></div>
    <div class="particle p5"></div>
</div>

<!-- Curved line background element -->
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
                    <a class="nav-link" href="#">Despre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Evenimente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Alătură-te</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <a href="#" class="telegram-btn ms-3">
                <i class="bi bi-telegram"></i>
                Telegram
            </a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container py-5 content-wrapper">
    <div class="row align-items-center" style="min-height: 80vh;">
        <div class="col-lg-6">
            <div class="brand-pill mb-4">
                <i class="bi bi-cup-hot-fill"></i>
                <span>CoffeeNect</span>
            </div>
            <h1 class="hero-title" data-text="Tech & Coffee Community">Tech & Coffee<br>Community</h1>
            <p class="hero-subtitle">
                Coffee first.<br>
                Then, change the world.
            </p>
            <div class="d-flex flex-wrap">
                <a href="#" class="action-btn primary-btn mb-3">
                    <i class="bi bi-info-circle me-2"></i>
                    Descoperă mai multe
                </a>
                <a href="#" class="action-btn secondary-btn mb-3">
                    <i class="bi bi-telegram me-2"></i>
                    Alătură-te pe Telegram
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-custom mt-5 mt-lg-0">
                <h3>Bei cafea?</h3>
                <p>Hai sa ne cunoaștem <span class="emoji">😎</span></p>
            </div>
        </div>
    </div>
</div>

<!-- Secțiunea "Cum te alături?" -->
<div class="container py-5 section-coffee-white">
    <h2 class="mb-4 text-center">Cum te alături?</h2>
    <p class="text-center mb-5">
        Nu te poți alătura direct. Trebuie să fi participat măcar o dată la un eveniment
        CoffeeNect sau să fii invitat de un membru activ.
    </p>

    <div class="row g-4">
        <!-- Acces prin participare la evenimente -->
        <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100">
                <h3>Acces prin participare la evenimente</h3>
                <ul>
                    <li>☕ Participi la un hackathon sau eveniment CoffeeNect</li>
                    <li>☕ Primești un cod unic de acces după participare</li>
                    <li>☕ Poți accesa platforma folosind codul primit</li>
                </ul>
            </div>
        </div>

        <!-- Sistem "by friend only" -->
        <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100">
                <h3>Sistem „by friend only”</h3>
                <ul>
                    <li>☕ Poți fi invitat de un membru actual al comunității</li>
                    <li>☕ Fiecare invitație necesită un „aprobator” existent</li>
                    <li>☕ Pe profilul tău va apărea „Invited by [numele membrului]”</li>
                </ul>
            </div>
        </div>

        <!-- Acces Token QR la evenimente -->
        <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100">
                <h3>Access Token QR la evenimente</h3>
                <ul>
                    <li>☕ Primești un QR code valid o singură dată la eveniment</li>
                    <li>☕ Scanarea codului îți deblochează accesul la comunitate</li>
                    <li>☕ Funcționează pentru site, Discord și grupul Telegram</li>
                </ul>
            </div>
        </div>

        <!-- Badge-uri vizibile pe profil -->
        <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100">
                <h3>Badge-uri vizibile pe profil</h3>
                <ul>
                    <li>☕ „Hackathon Member”, „Contributor”, „Cafe Builder”</li>
                    <li>☕ Reflectă nivelul tău de implicare</li>
                    <li>☕ Menține motivația și vizibilitatea contribuțiilor</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Create animated dots in the background
    const dotsContainer = document.getElementById('dotsContainer');
    const numberOfDots = 50;

    for (let i = 0; i < numberOfDots; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');

        // Random position
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
