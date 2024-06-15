<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Pt pencari</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="../assets/tamu/css/bootstrap.min.css" rel="stylesheet">

        <link href="../assets/tamu/css/bootstrap-icons.css" rel="stylesheet">

        <link href="../assets/tamu/css/templatemo-topic-listing.css" rel="stylesheet">      
    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <i class="bi-back"></i>
                        <span>Gaji Peg</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        </ul>
                        <div class="d-none d-lg-flex align-items-center">
                            <a href="/login" class="navbar-icon bi-person smoothscroll me-2"></a>
                            <a href="/login" class="text-decoration-none">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Bayar Gaji Cepat Hati Nikmat</h1>
                            <h6 class="text-center">Sistem Infomasi Penggjian</h6>
                            
                            <form method="get" action="/cari" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                @csrf
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1"></span>

                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Cari Nama Pegawai" aria-label="Search">

                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">
                        @if(isset($pegawai))
                        @foreach($pegawai as $p)
                            <div class="col-lg-4 col-12 mb-2 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $p->foto) }}" class="custom-block-image img-fluid" alt="Foto {{ $p->nama }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mt-4"> Nama  : {{$p->nama }}</h5>
                                                <p class="mb-0">Alamat : {{ $p->alamat }}</p>
                                                <p class="mb-0">Email : {{ $p->email }}</p>
                                                <p class="mb-0">Tanggal Masuk: {{ formatTanggal($p->tanggal_masuk) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">
                            <i class="bi-back"></i>
                            <span>Topic</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">How it works</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Thai</button></li>

                                <li><button class="dropdown-item" type="button">Myanmar</button></li>

                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution <a href="https://themewagon.com">ThemeWagon</a></p>
                        
                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="../assets/tamu/js/jquery.min.js"></script>
        <script src="../assets/tamu/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/tamu/js/jquery.sticky.js"></script>
        <script src="../assets/tamu/js/click-scroll.js"></script>
        <script src="../assets/tamu/js/custom.js"></script>

    </body>
</html>
