@extends('layouts.main')

@section('content')
    <h2 class="fw-bold text-uppercase title-text">
        Halaman ini dibuat oleh: <span style="color: #f0db4f;">2301010096 - SITI ASMAWATI</span>
    </h2>

    <div class="row justify-content-center mt-5">
        {{-- Kartu Profil 1 --}}
        <div class="col-md-5 col-11 mb-4">
            <div class="profile-card text-center p-4">
                <div class="profile-img mb-3">
                    <img src="{{ asset('images/lenna.png') }}" alt="Aranta" class="rounded-circle shadow">
                </div>
                <h4 class="fw-bold text-white">SITI ASMAWATI</h4>
                <p class="text-light mb-3">2301010096</p>
                <div class="bio-box p-3 mt-2">
                    <small class="text-uppercase text-muted d-block mb-1">Bio</small>
                    <p class="text-white mb-0">Professional front end developer and pusing banget </p>
                </div>
            </div>
        </div>

        {{-- Kartu Profil 2 --}}
        <div class="col-md-5 col-11 mb-4">
            <div class="profile-card text-center p-4">
                <div class="profile-img mb-3">
                    <img src="{{ asset('images/snow white.jpg') }}" alt="Arthur" class="rounded-circle shadow">
                </div>
                <h4 class="fw-bold text-white">MIFTAHUL JANAH</h4>
                <p class="text-light mb-3">2301010081</p>
                <div class="bio-box p-3 mt-2">
                    <small class="text-uppercase text-muted d-block mb-1">Bio</small>
                    <p class="text-white mb-0">Designing front-end is my passion sir 💖</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .profile-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            backdrop-filter: blur(15px);
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.4);
        }

        .profile-img img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.8);
        }

        .bio-box {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
        }

        .title-text {
            margin-top: 40px;
            font-size: 1.8rem;
            text-shadow: 1px 1px 8px rgba(0,0,0,0.8);
        }

        @media (max-width: 768px) {
            .profile-img img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
@endsection
