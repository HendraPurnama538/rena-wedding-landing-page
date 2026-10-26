<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Rena Wedding Service')</title>
    <meta name="description"
        content="Paket wedding, makeup, attire, prewedding, dan siraman Rena Wedding Service.">

    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --pink: #c97f88;
            --pink-dark: #a95e6a;
            --cream: #fff9f0;
            --cream-dark: #f6eadc;
            --brown: #513628;
            --muted: #806d60;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            margin: 0;
            background: var(--cream);
            color: var(--brown);
            font-family: 'DM Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        .brand {
            font-family: 'Playfair Display', serif;
        }

        .navbar {
            background: rgba(255, 249, 240, .96);
            border-bottom: 1px solid #ead8c9;
        }

        .brand {
            color: var(--brown);
            font-size: 1.4rem;
        }

        .nav-link {
            color: var(--brown);
            font-weight: 600;
        }

        .nav-link:hover {
            color: var(--pink-dark);
        }

        .btn-rena {
            background: var(--pink);
            color: white;
            border: 1px solid var(--pink);
            border-radius: 30px;
            padding: 11px 22px;
            font-weight: 600;
        }

        .btn-rena:hover {
            background: var(--pink-dark);
            border-color: var(--pink-dark);
            color: white;
        }

        .btn-outline-rena {
            color: var(--pink-dark);
            border: 1px solid var(--pink);
            border-radius: 30px;
            padding: 10px 20px;
        }

        .btn-outline-rena:hover {
            background: var(--pink);
            color: white;
        }

        .section-padding {
            padding: 75px 0;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 38px;
        }

        .section-heading h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            margin-bottom: 12px;
        }

        .section-heading p {
            color: var(--muted);
            max-width: 650px;
            margin: auto;
        }

        .eyebrow {
            color: var(--pink-dark);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: .75rem;
            font-weight: 700;
        }

        .hero {
            padding: 65px 0;
            background: linear-gradient(135deg, #fff4ec, #f7dfdd);
        }

        .hero-image {
            width: 100%;
            max-height: 570px;
            object-fit: cover;
            border-radius: 180px 180px 18px 18px;
            box-shadow: 0 15px 45px #67412b20;
        }

        .hero h1 {
            font-size: clamp(2.7rem, 5vw, 4.8rem);
            line-height: 1.1;
        }

        .hero p {
            color: var(--muted);
            line-height: 1.8;
        }

        /* Overflow protection */
        body {
            overflow-x: hidden;
        }

        .package-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            background: white;
            border: 1px solid #eddbce;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(104, 67, 43, 0.06);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .package-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(104, 67, 43, 0.12);
        }

        .package-card img {
            width: 100%;
            aspect-ratio: 16 / 10;
            object-fit: cover;
        }

        .package-card .card-body {
            padding: 22px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .package-card .card-body .btn {
            margin-top: auto;
        }

        .package-card h3 {
            font-size: 1.35rem;
        }

        .price {
            color: var(--pink-dark);
            font-size: 1.25rem;
            font-weight: 700;
        }

        .package-card ul {
            padding-left: 20px;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .attire-section {
            background: linear-gradient(180deg, var(--cream) 0%, #fffbf7 100%);
        }

        .attire-card {
            background: white;
            border: 1px solid #eddbce;
            border-radius: 18px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 8px 25px rgba(104, 67, 43, 0.06);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .attire-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 35px rgba(104, 67, 43, 0.14);
        }

        .attire-img-wrap {
            position: relative;
            width: 100%;
            aspect-ratio: 3 / 4;
            overflow: hidden;
            background: #fdf5ef;
        }

        .attire-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .attire-card:hover .attire-img-wrap img {
            transform: scale(1.05);
        }

        .attire-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(255, 249, 240, 0.92);
            color: var(--pink-dark);
            backdrop-filter: blur(6px);
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 5px 12px;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            border: 1px solid #eed6cc;
        }

        .attire-body {
            padding: 20px 18px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .attire-body h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.15rem;
            color: var(--brown);
            margin-bottom: 8px;
            line-height: 1.35;
        }

        .attire-body p {
            color: var(--muted);
            font-size: 0.88rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .catalog-section {
            background: #fff2ed;
        }

        .catalog-item-wrapper {
            position: relative;
            background: white;
            border: 1px solid #ead8c9;
            border-radius: 14px;
            overflow: hidden;
            padding: 8px;
            box-shadow: 0 4px 15px rgba(104, 67, 43, 0.05);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .catalog-item-wrapper:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(104, 67, 43, 0.12);
        }

        .catalog-image {
            display: block;
            width: 100%;
            aspect-ratio: 3 / 4;
            object-fit: contain;
            background: #fff;
            border-radius: 10px;
            cursor: zoom-in;
        }

        .catalog-title {
            font-weight: 700;
            font-size: 0.95rem;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
            color: var(--brown);
        }

        .contact-panel {
            background: white;
            border: 1px solid #eddbce;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(104, 67, 43, 0.06);
        }

        footer {
            background: #513628;
            color: #fff7ef;
            padding: 35px 0;
        }

        footer a {
            color: #ffe0dd;
            text-decoration: none;
            transition: color .2s ease;
        }

        footer a:hover {
            color: #ffffff;
        }

        .floating-contact {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 1000;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transition: transform .2s ease;
        }

        .floating-contact:hover {
            transform: scale(1.05);
        }

        /* Responsive Breakpoints */
        @media (max-width: 991.98px) {
            .hero {
                text-align: center;
                padding: 48px 0;
            }

            .hero h1 {
                font-size: clamp(2.3rem, 6vw, 3.5rem);
            }

            .hero .d-flex {
                justify-content: center;
            }

            .hero-image {
                max-height: 480px;
                margin-top: 10px;
            }
        }

        @media (max-width: 767.98px) {
            .section-padding {
                padding: 48px 0;
            }

            .section-heading h2 {
                font-size: 1.85rem;
            }

            .section-heading p {
                font-size: 0.95rem;
            }

            .hero-image {
                max-height: 380px;
                border-radius: 90px 90px 16px 16px;
            }

            .package-card .card-body {
                padding: 18px 16px;
            }

            .package-card h3 {
                font-size: 1.25rem;
            }

            .price {
                font-size: 1.15rem;
            }

            .package-card ul {
                font-size: 0.9rem;
            }

            .catalog-title {
                font-size: 0.85rem;
            }

            .contact-panel {
                padding: 28px 18px;
            }

            .contact-panel h2 {
                font-size: 1.7rem;
            }

            .btn-rena, .btn-outline-rena {
                padding: 9px 18px;
                font-size: 0.92rem;
            }

            .floating-contact {
                right: 14px;
                bottom: 14px;
                padding: 9px 18px;
                font-size: 0.88rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2.1rem;
            }

            .hero-image {
                max-height: 300px;
                border-radius: 60px 60px 14px 14px;
            }

            .catalog-image {
                aspect-ratio: 1 / 1.25;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.jpg') }}"
                     alt="Logo Rena Wedding Service"
                     width="42"
                     height="42"
                     class="rounded-circle border border-warning-subtle shadow-sm object-fit-cover">
                <div>
                    RENA
                    <small class="d-block" style="font-size: .55rem; letter-spacing: 3px">
                        WEDDING SERVICE
                    </small>
                </div>
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false"
                aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paket">Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#attire">Attire</a></li>
                    <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item">
                        <a class="btn btn-rena btn-sm ms-lg-2"
                            href="https://wa.me/6285747356369" target="_blank"
                            rel="noopener noreferrer">Konsultasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container text-center">
            <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <img src="{{ asset('images/logo.jpg') }}"
                     alt="Rena Wedding Logo"
                     width="48"
                     height="48"
                     class="rounded-circle border border-warning shadow-sm object-fit-cover">
                <span class="brand text-white fs-4">Rena Wedding Service</span>
            </div>
            <p class="mb-2">Momen istimewa, kenangan selamanya.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3 mt-2">
                <a href="https://www.instagram.com/renawedding_attire/"
                    target="_blank" rel="noopener noreferrer">
                    Instagram Attire (@renawedding_attire)
                </a>
                <span class="text-white-50">·</span>
                <a href="https://www.instagram.com/gallery_renawedding/"
                    target="_blank" rel="noopener noreferrer">
                    Instagram Gallery (@gallery_renawedding)
                </a>
            </div>
            <div class="small mt-3">
                &copy; {{ date('Y') }} Rena Wedding Service
            </div>
        </div>
    </footer>

    <a class="btn btn-rena floating-contact"
        href="https://wa.me/6285747356369"
        target="_blank" rel="noopener noreferrer"
        aria-label="Hubungi Rena melalui WhatsApp">
        WhatsApp
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 60
        });
    </script>
    @stack('scripts')
</body>

</html>