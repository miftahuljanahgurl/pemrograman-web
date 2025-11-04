<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Project' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('images/bckground.webp') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.55);
            min-height: 100vh;
            padding-bottom: 40px;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.65);
            backdrop-filter: blur(4px);
        }

        .navbar a.nav-link {
            color: white !important;
            font-weight: 500;
        }

        .navbar a.nav-link:hover {
            color: #f0db4f !important;
        }

        .navbar-brand {
            font-weight: bold;
            color: #f0db4f !important;
        }

        .title-text {
            text-shadow: 1px 1px 6px rgba(0,0,0,0.8);
            margin-top: 40px;
            font-size: 1.6rem;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .gallery-item img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }

        .caption {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: linear-gradient(transparent, rgba(0,0,0,0.75));
            color: #fff;
            text-align: center;
            font-weight: 600;
            padding: 10px 0;
            font-size: 1rem;
        }

        footer {
            text-align: center;
            color: #ddd;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.6);
            border-top: 1px solid rgba(255,255,255,0.2);
            margin-top: 60px;
        }

        @media (max-width: 768px) {
            .navbar-text {
                font-size: 0.8rem;
            }
            .title-text {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="overlay">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Home</a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                </ul>
                <span class="navbar-text small">
                    *2301010096 - SITI ASMAWATI (Genap) *2301010081 -MIFTAHUL JANAH (GANJIL)
                </span>
            </div>
        </nav>

        <div class="container text-center text-light">
            @yield('content')
        </div>

        <footer>
            <p>© 2025 SITI ASMAWATI - MIFTAHUL JANAH — Laravel Herd Project</p>
        </footer>
    </div>
</body>
</html>
