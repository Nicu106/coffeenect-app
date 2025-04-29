@extends('layout.app')

@section('content')
    <div class="container py-5 content-wrapper">
        <div class="row align-items-center" style="min-height: 80vh;">
            <div class="col-lg-6">
                <div class="brand-pill mb-4">
                    <i class="bi bi-cup-hot-fill"></i>
                    <span>CoffeeNect</span>
                </div>
                <h1 class="hero-title" data-text="Tech & Coffee Community">
                    Tech & Coffee<br>Community
                </h1>
                <p class="hero-subtitle">
                    Coffee first.<br>
                    Then, change the world.
                </p>
                <div class="d-flex flex-wrap">
                    <a href="#" class="action-btn primary-btn mb-3">
                        <i class="bi bi-info-circle me-2"></i>
                        Descoperă mai multe
                    </a>
                    <a href="{{route('contacts')}}" class="action-btn secondary-btn mb-3">
                        <i class="bi bi-telegram me-2"></i>
                        Alătură-te pe Telegram
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-home mt-5 mt-lg-0">
                    <h3>Bei cafea?</h3>
                    <p>Hai să ne cunoaștem <span class="emoji">😎</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5 section-coffee-white">
        <div class="text-center mb-4">
            <h2 class="mb-2">
                <i class="bi bi-lightbulb-fill me-2"></i>
                Ce facem la CoffeNect?
            </h2>
        </div>

    <div class="container my-5">
        <div class="promo-idea-highlight mx-auto text-center p-5 position-relative">
            <div class="glow-effect"></div>
            <h2 class="animated-gradient-title z-1 position-relative">O idee → MVP într-o lună</h2>
            <p class="lead mt-3 z-1 position-relative">Alătură-te unei comunități care face, nu doar visează.</p>
        </div>
    </div>
        <p class="text-center fs-5 mb-4">
            ☕ La CoffeNect nu doar vorbim, ci <strong>căutăm idei bune</strong> și le testăm rapid.<br>
            Ne inspirăm din <strong>proiecte internaționale</strong>, <strong>idei ale membrilor</strong> sau <strong>probleme reale a celor apropiați</strong>.<br>
            Facem <strong>idei hunting</strong> împreună, dezvoltăm un MVP în comunitate și îl testăm live.<br>
            Ideea care funcționează devine <strong>produsul oficial CoffeNect</strong>.

        </p>
        <br>
        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4 text-white">
            <div class="col">
                <div class="p-4 h-100 rounded bg-gradient border border-light-subtle" style="background: linear-gradient(135deg, #4e4376, #2b5876);">
                    <h4>🌍 Proiecte internaționale adaptate</h4>
                    <p class="mt-2">
                        Luăm idei dovedite din SUA/EU și le adaptăm la realitatea noastră, cu suflet local și viziune globală.
                        Ce a mers acolo poate funcționa și aici – cu gust de cafea bună.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 h-100 rounded bg-gradient border border-light-subtle" style="background: linear-gradient(135deg, #c94b4b, #4b134f);">
                    <h4>🧠 Idei proprii ale membrilor</h4>
                    <p class="mt-2">
                        Ai o idee care nu-ți iese din cap? Spune-ne! Aici nu stă nimeni pe margine.
                        Comunitatea te ajută să o validezi, construiești un MVP și poate chiar următorul startup.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 h-100 rounded bg-gradient border border-light-subtle" style="background: linear-gradient(135deg, #1e3c72, #2a5298);">
                    <h4>🏪 Soluții pentru afaceri locale</h4>
                    <p class="mt-2">
                        Discutăm direct cu cafenele, businessuri și echipe din Chișinău.
                        Descoperim împreună unde se pot crea automatizări și produse reale care aduc valoare – azi, nu „într-o zi”.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 h-100 rounded bg-gradient border border-light-subtle" style="background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);">
                    <h4>🧩 Experimente AI & automatizare</h4>
                    <p class="mt-2">
                        Avem libertatea să creăm și să ne jucăm. Chatboți, micro-tool-uri, extensii sau orice idee ieșită din comun.
                        Dacă e smart, o facem. Dacă e utilă, o lansăm. Dacă e amuzantă, o testăm la cafea.
                    </p>
                </div>
            </div>
        </div>


    </div>
    <style>
        .emoji {
            font-size: 1.3rem;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        /* Ex. ceva specific doar paginii home */
        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        .promo-idea-highlight {
            max-width: 700px;
            background: linear-gradient(145deg, #111827, #1f2937);
            border: 2px solid rgba(38, 208, 249, 0.3);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            color: #fff;
            overflow: hidden;
            z-index: 1;
        }

        .promo-idea-highlight .glow-effect {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(38, 208, 249, 0.15), transparent 60%);
            animation: moveGlow 8s ease-in-out infinite;
            top: -50%;
            left: -50%;
            z-index: 0;
        }

        @keyframes moveGlow {
            0% {
                transform: translate(0%, 0%);
            }
            25% {
                transform: translate(50%, 20%);
            }
            50% {
                transform: translate(20%, 50%);
            }
            75% {
                transform: translate(70%, 80%);
            }
            100% {
                transform: translate(0%, 0%);
            }
        }

        .animated-gradient-title {
            font-size: 2.8rem;
            font-weight: 700;
            background: linear-gradient(90deg, #38bdf8, #7c3aed, #38bdf8);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: animatedTextGradient 6s ease infinite;
        }

        @keyframes animatedTextGradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card-home {
            background: linear-gradient(135deg, rgba(18,22,34,0.8), rgba(10,12,20,0.8));
            border-radius: 20px;
            padding: 35px;
            border: 1px solid rgba(38, 208, 249, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2), 0 0 20px rgba(38, 208, 249, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            transform: perspective(1000px) rotateX(5deg);
            color: #fff;
        }
        .card-home::before {
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
            0% {
                transform: rotate(45deg) translateY(-100%);
            }
            100% {
                transform: rotate(45deg) translateY(100%);
            }
        }
        .card-home:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3), 0 0 30px rgba(38, 208, 249, 0.2);
            transform: perspective(1000px) rotateX(0deg) translateY(-5px);
        }

        .card-home h3 {
            background: linear-gradient(90deg, #fff, var(--primary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        .card-home p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            font-weight: 300;
            margin-bottom: 0;
        }
    </style>
@endsection
