@extends('layout.main')

@section('container')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <title>ZAPLAUNDRY</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/lg.png') }}">
    <!--

    Template 2107 New Spot

	http://www.tooplate.com/view/2107-new-spot

    -->
</head>

<body>
    <div class="tm-container mx-auto">
        <section class="tm-section tm-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-bg-circle-white tm-flex-center-v">
                            <header class="text-center">
                                <h3 class="tm-site-title">ZAP LAUNDRY</h3>
                                <p class="tm-site-subtitle">TENTANG ZAP LAUNDRY</p>
                            </header>
                            <p>ZAP berdiri pada tahun 2016, merupakan bisnis laundry yang  menjalankan bisnis cuci setrika kiloan untuk pakaian koto, cuci sofa, cuci tas dan sepatu, serta house general cleaning.</p>
                            {{-- <p class="text-center mt-4 mb-0">
                                <a data-scroll href="#tm-section-2" class="btn tm-btn-secondary">Continue...</a>
                            </p> --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-2" class="tm-section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                        <h2 class="tm-color-secondary mb-4">KEUNGGULAN ZAP LAUNDRY</h2>
                        <ul class="dashed">
                            <li>Terdaftar resmi sebagai member ASLI (Asosiasi Laundry Indonesia) dengan ID: A.3504.0518.01008</li>
                            <li>Mesin cuci Front Loading yang dikenal handal dan tidak merusak pakaian</li>
                            <li>Sudah memakai Setrika Uap dengan hasil setrika lebih licin, halus, rapi dan cepat serta tidak mengkilapkan kain</li>
                            <li>Membantu meringankan pekerjaan Anda</li>
                            <li>Membantu Anda lebih hemat air, listrik, tenaga dan waktu</li>
                            <li>Free antar jemput cucian</li>
                            <li>Garansi laundry</li>
                            <li>Siap melayani jasa cuci “Express” (4-5 jam selesai)</li>
                        </ul>
                    </div>
                    <div class="col-xl-7 col-lg-6 tm-circle-img-container">
                        <img src="img/zaplaundry.jpg" alt="Image" class="rounded-circle tm-circle-img">
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-3" class="tm-section tm-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 tm-section-2-right">
                        <div class="tm-bg-circle-white tm-bg-circle-pad-2 tm-flex-center-v">
                            <header>
                                <h2 class="tm-color-primary">GENERAL CLEANING</h2>
                            </header>
                            <p>
                                Mengapa Memilih ZAP untuk General Cleaning?
                            </p>
                            <ul class="dashed">
                                <li>Pekerjaan detil dengan 40 checklist untuk seluruh ruangan</li>
                                <li>Semua alat dan bahan dari kami</li>
                                <li>Staff profesional dan berpengalaman</li>
                                <li>Proses pengerjaan yang cepat (kurang dari 3 hari)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tm-section pt-2 pb-3">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                            <h2 class="tm-color-secondary mb-4">LAYANAN CUCI SEPATU</h2>
                            <p>Sepatu sebagai alas kaki yang berguna sebagai pelindung kaki sekaligus penambah gaya agar penampilan lebih menarik. Terdapat berbagai jenis sepatu. Mulai dari sepatu sneaker, boots, safety, sport dan lain-lain. Bahan dari sepatu tersebut pun pasti beragam, perawatan atau cara membersihkannya tentu akan disesuaikan dengan bahan sepatu tersebut.
                                Begitu pula halnya dengan tas, kami selalu melakukan treatment dengan menggunakan bahan-bahan chemical yang sesuai dengan bahan tasnya.
                                ZAP menyediakan layanan cuci sepatu dan tas yang menggunakan bahan dan alat pencuci khusus yang disesuaikan dengan bahan-bahan sepatu dan tas yang tentunya aman.</p>
                        </div>
                        <div class="col-xl-7 col-lg-6 tm-circle-img-container">
                            <img src="img/cuci-sepatu.jpg" alt="Image" class="rounded-circle tm-circle-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <footer class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="small mb-4 tm-footer-text">Copyright &copy; 2018 Company Name 
                    
                    | Design: <a rel="nofollow" href="https://www.tooplate.com" class="tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </div>
        </footer> --}}
    </div>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <!-- https://github.com/cferdinandi/smooth-scroll -->
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            easing: 'easeInOutQuart',
            speed: 800
        });
    </script>
</body>
@endsection