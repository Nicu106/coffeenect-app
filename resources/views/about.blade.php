@extends('layout.app')

@section('content')
<section class="founder-section text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Fondatorul CoffeNect</h1>
        <p class="lead mb-5">Această comunitate a fost creată cu scopul de a conecta oameni pasionați de  startups, tech, automatizare și cafea. Cred în puterea ideilor bune născute la o masă cu espresso.</p>

        <div class="founder-card mx-auto mb-5">
            <img src="https://media.licdn.com/dms/image/v2/D4E03AQF9nxdt6xhqQA/profile-displayphoto-shrink_200_200/B4EZT0Nuw.HgAY-/0/1739264028530?e=2147483647&v=beta&t=GXf7asjIHrqUQgJ-VjKD25iidLGCv01Zt74hbDvgt_s" alt="Fondator" class="rounded-circle shadow-lg mb-3" style="width: 160px; height: 160px; object-fit: cover;">
            <h2 class="h4 mb-1">Cociorva Nicolae</h2>
            <p class="text-muted">Fondator & Builder la CoffeNect</p>
        </div>
    </div>
</section>

<section class="core-members-section bg-dark text-white py-5">
    <div class="container text-center">
        <h2 class="mb-4">Membrii de bază ai comunității</h2>
        <p class="text-muted mb-5">Construim împreună. În curând, profilurile principale vor fi disponibile public.</p>

        <div class="row justify-content-center g-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="placeholder-card d-flex align-items-center justify-content-center">
                        <span class="coming-text">COMING<br>SOON</span>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<style>
    .founder-card {
        max-width: 340px;
        padding: 2rem;
        border-radius: 20px;
        background: linear-gradient(135deg, #0f172a, #1e293b);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    }

    .placeholder-card {
        height: 180px;
        border-radius: 16px;
        background: linear-gradient(135deg, #1a1c2c, #2f3147);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(56, 189, 248, 0.2);
        position: relative;
        overflow: hidden;
        transition: 0.3s ease;
    }

    .placeholder-card::before {
        content: '';
        position: absolute;
        width: 140%;
        height: 140%;
        background: radial-gradient(circle, rgba(56,189,248,0.1) 0%, transparent 70%);
        animation: shimmerGlow 6s ease-in-out infinite;
        top: -20%;
        left: -20%;
        z-index: 0;
    }

    .coming-text {
        font-size: 1.4rem;
        font-weight: 700;
        color: #38bdf8;
        text-shadow: 0 0 8px rgba(56,189,248,0.3);
        position: relative;
        z-index: 2;
        animation: fadeInPop 2s infinite;
        text-align: center;
    }

    @keyframes shimmerGlow {
        0% { transform: translate(0%, 0%); }
        50% { transform: translate(20%, 15%) rotate(5deg); }
        100% { transform: translate(0%, 0%); }
    }

    @keyframes fadeInPop {
        0%, 100% { opacity: 0.6; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.08); }
    }
</style>
@endsection
