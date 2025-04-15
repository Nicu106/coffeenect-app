@extends('layout.app')

@section('content')
    <style>
        .duo-subtitle {
            font-size: 1.05rem;
            font-weight: 500;
            color: #c08a3d;
            text-shadow: 0 0 2px rgba(0,0,0,0.2);
        }

        .section-coffee-white {
            background-color: #fefefe;
            color: #343a40;
            border-radius: 10px;
            padding: 50px 20px;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .card-custom {
            background-color: #fff;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 30px;
            transition: all 0.2s ease;
            color: #333;
        }
        .card-custom:hover {
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            transform: translateY(-2px);
        }

        .card-custom h3 {
            color: #6d4c2c;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .card-custom ul {
            font-size: 1.1rem;
            line-height: 1.6;
            padding-left: 1.2rem;
        }

        .card-custom li {
            margin-bottom: 0.5rem;
        }
    </style>
<div class="container py-5 section-coffee-white">
    <div class="text-center mb-4">
        <h2 class="mb-2">
            <i class="bi bi-cup-hot-fill me-2"></i>
            Cum te alături?
        </h2>
        <small class="text-muted duo-subtitle">Tech &amp; Coffee &ndash; un duo perfect!</small>
    </div>

    <p class="text-center mb-5">
        Nu te poți alătura direct. Trebuie să fi participat măcar o dată la un eveniment
        CoffeeNect sau să fii invitat de un membru activ.
    </p>

    <div class="row g-4">
        <!-- Invitație de la un prieten -->
        <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100 d-flex flex-column justify-content-between">
                <div>
                    <h3><i class="bi bi-person-check-fill me-2"></i>Invitație personală</h3>
                    <ul>
                        <li>☕ Ai fost invitat de un membru activ al comunității</li>
                        <li>☕ Numele tău va fi asociat cu „Invited by [nume]”</li>
                        <li>☕ Fiecare membru are acces la o singură invitație pe lună</li>
                    </ul>
                </div>
                <div class="mt-3">
                    <p class="mb-0 text-muted">Acces prin încredere și recomandare</p>
                </div>
            </div>
        </div>

        <!-- Participare la evenimente (3 badge-uri) -->
        <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100 d-flex flex-column justify-content-between">
                <div>
                    <h3><i class="bi bi-calendar-check-fill me-2"></i>3 Evenimente tech</h3>
                    <ul>
                        <li>☕ Ai participat la 3 evenimente tech din Republica Moldova</li>
                        <li>☕ Trimiți poze cu badge-urile sau coduri de acces</li>
                        <li>☕ Se verifică autenticitatea lor manual</li>
                    </ul>
                </div>
                <div class="mt-3">
                    <p class="mb-0 text-muted">Acces pe bază de prezență activă</p>
                </div>
            </div>
        </div>

        <!-- Proiecte demonstrabile -->
        <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100 d-flex flex-column justify-content-between">
                <div>
                    <h3><i class="bi bi-tools me-2"></i>Demo de proiect</h3>
                    <ul>
                        <li>☕ Prezinți o idee/proiect de automatizare sau startup</li>
                        <li>☕ Poți trimite un link demo sau cod pe GitHub</li>
                        <li>☕ Contribuția trebuie să fie reală și verificabilă</li>
                    </ul>
                </div>
                <div class="mt-3">
                    <p class="mb-0 text-muted">Acces pe bază de inițiativă și creație</p>
                </div>
            </div>
        </div>

        <!-- Pitch video / implicare publică -->
        <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100 d-flex flex-column justify-content-between">
                <div>
                    <h3><i class="bi bi-camera-video-fill me-2"></i>Pitch sau implicare</h3>
                    <ul>
                        <li>☕ Încarci un video (max. 2 min) în care faci un pitch de idee</li>
                        <li>☕ Sau demonstrezi implicarea ta în research, comunități sau evenimente</li>
                        <li>☕ Poți trimite și un link cu dovezi media/publice</li>
                    </ul>
                </div>
                <div class="mt-3">
                    <p class="mb-0 text-muted">Acces pe bază de prezență și inițiativă publică</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
