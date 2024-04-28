<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BPJN Sulawesi Tenggara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('/')}}logo_pu.jpeg" />

    <!-- Libraries Stylesheet -->
    <!-- <link href="{{asset('/')}}assets/lib/animate/animate.min.css" rel="stylesheet"> -->
    <link href="{{asset('/')}}assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .news-container {
            width: 100%;
            overflow: hidden;
            color: #fff;
            /* background-color: #f4f4f4; */
        }

        .news-ticker {
            white-space: nowrap;
            animation: marquee 20s linear infinite;
        }

        /* @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        } */
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="https://binamarga.pu.go.id"><img width="10%" src="https://binamarga.pu.go.id/balai-babel/templates/frontend/img/home-logo.png" alt="Home Logo"></a>
                </div>
            </div>
            <!-- <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1> -->
                <img src="{{asset('/')}}logo_pu.jpeg" alt="Logo"> BPJN Sulawesi Tenggara
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Visi Misi</a>
                            <a href="#" class="dropdown-item">Struktur Organisasi</a>
                            <a href="#" class="dropdown-item">Informasi Pejabat</a>
                            <a href="#" class="dropdown-item">Tugas dan Fungsi</a>
                            <a href="#" class="dropdown-item">Sejarah</a>
                            <a href="#" class="dropdown-item">Lokasi Kantor</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Organisasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Sub Bagian Umum dan Tata Usaha</a>
                            <a href="#" class="dropdown-item">Seksi Pembangunan Jalan dan Jembatan</a>
                            <a href="#" class="dropdown-item">Seksi Preservasi</a>
                            <a href="#" class="dropdown-item">Seksi Keterpaduan Pembangunan Infrastruktur Jalan</a>
                            <a href="#" class="dropdown-item">Satuan Kerja</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Sub Bagian Umum dan Tata Usaha</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pelayanan Publik</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Sub Bagian Umum dan Tata Usaha</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Publikasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Sub Bagian Umum dan Tata Usaha</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Galeri</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Sub Bagian Umum dan Tata Usaha</a>
                        </div>
                    </div>
                    <a href="index.html" class="nav-item nav-link">Kontak</a>

                </div>
                <!-- <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a> -->
            </div>
        </nav>


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="{{asset('/')}}assets/img/banner-bpjn-2.png" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Selamat Datang di</h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">Website BPJN Sulawesi Tenggara</h1>
                        <!-- <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p> -->
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="{{asset('/')}}assets/img/banner-bpjn-1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Selamat Datang di</h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">Website BPJN Sulawesi Tenggara</h1>
                        <!-- <p class="mb-5 fs-5 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p> -->
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Lebih lanjut</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-12" style="background-color:#ffc107; padding: 10px"> -->
        <!-- <div class="col-12" style="background-color:#ffc107; padding: 10px"> -->
        <div class="col-12" style="background-color:#2c3e50; padding: 10px">
            <div class="container">

                <div class="row">
                    <div class="col-1">
                        <span style="border-radius:10px; background-color: #fba026; padding:1% 5%; color:#000">
                            PENGUMUMAN
                        </span>
                    </div>
                    <div class="col-10" style="margin-left:5%">
                        <div class="btn-group" role="group">
                            <a style="color: #fff; margin-right:10%" href="#" id="prevButton"><i class="fas fa-chevron-left"></i></a>
                            <div class="news-container">
                                <div id="newsTicker" class="news-ticker"></div>
                            </div>
                            <a style="color: #fff; margin-left:10%" href="#" id="nextButton"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" style="background-color:#cbd6c9; padding: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-1" style="vertical-align:middle">
                        <span style="color: #000;">PENCARIAN</span>
                    </div>
                    <div class="col-7" style="margin-left:5%">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" class="form-control" style="padding: 5px 10px" placeholder="Cari berita/pengumuman/galeri di sini">
                            </div>
                            <div class="col-2">
                                <button style="color: #fff;" type="button" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0" style="color:#000">Berite Terkini</h4>
                </div>
                <!-- <h1 class="display-3 mb-4">Our Service Given Physio Therapy By Expert.</h1> -->
                <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{asset('/')}}assets/img/service-1.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Message Therapy</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{asset('/')}}assets/img/service-2.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Physiotherapy</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{asset('/')}}assets/img/service-3.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Heat & Cold Therapy</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{asset('/')}}assets/img/service-4.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Chiropatic Therapy</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{asset('/')}}assets/img/service-3.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Work Injuries</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{asset('/')}}assets/img/service-1.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Spot Injuries</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{asset('/')}}assets/img/service-4.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Regular Therapy</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{asset('/')}}assets/img/service-2.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Back Pain</h5>
                                <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0" style="color:#000">GALERI FOTO</h4>
                </div>
                <!-- <h1 class="display-3 mb-4">Physiotherapy Services from Professional Therapist</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <div class="team-img rounded-top h-100">
                            <img src="{{asset('/')}}assets/img/bpjn-3.jpeg" class="img-fluid rounded-top w-100" alt="">

                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>Nama Galeri</h5>
                            <p class="mb-0">tanggal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <div class="team-img rounded-top h-100">
                            <img src="{{asset('/')}}assets/img/banner-bpjn-2.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>Full Name</h5>
                            <p class="mb-0">Rehabilitation Therapist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <div class="team-img rounded-top h-100">
                            <img src="{{asset('/')}}assets/img/bpjn-3.jpeg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>Full Name</h5>
                            <p class="mb-0">Doctor of Physical therapy</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        <div class="team-img rounded-top h-100">
                            <img src="{{asset('/')}}assets/img/banner-bpjn-2.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>Full Name</h5>
                            <p class="mb-0">Doctor of Physical therapy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0" style="color:#000">Aplikasi Terkait</h4>
                </div>
                <!-- <h1 class="display-3 mb-4">Aplikasi Terkait</h1> -->
                <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img width="50%" src="https://binamarga.pu.go.id/balai-babel/uploads/images/sites/173/5440a249adee5403cdc2b5cc711500f9.png" style="margin:2px" class="sitess" alt="e-Monitoring Online" title="e-Monitoring Online">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">E-monitoring</h5>
                                <p class="mb-0">E-monitoring adalah sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img width="50%" src="https://binamarga.pu.go.id/balai-babel/uploads/images/sites/174/a4dc9648fac2b13a6faaa93aef828e6d.png" style="margin:2px" class="sitess" alt="LPSE" title="LPSE">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">LPSE</h5>
                                <p class="mb-0">LPSE adalah sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img width="50%" src="https://binamarga.pu.go.id/balai-babel/uploads/images/sites/231/986ed3b763479b59a944914db19a5cf8.jpg" style="margin:2px" class="sitess" alt="SIPLA" title="SIPLA">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">SIPLA</h5>
                                <p class="mb-0">Sipla adalah sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img width="50%" src="https://binamarga.pu.go.id/balai-babel/uploads/images/sites/225/58e885ae584344d5562f0ccb3bcc2af2.png" style="margin:2px" class="sitess" alt="WISPU KEMENTRIAN PUPR" title="WISPU KEMENTRIAN PUPR">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">WBS PU</h5>
                                <p class="mb-0">WBS PU adalah sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img width="50%" src="https://binamarga.pu.go.id/balai-babel/uploads/images/sites/227/cc7a3bc5c49029c0117fe42617500d37.png" style="margin:2px" class="sitess" alt="PPID PUPR" title="PPID PUPR">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">E-PPID</h5>
                                <p class="mb-0">E-PPID adalah sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img width="50%" src="https://binamarga.pu.go.id/balai-babel/uploads/images/sites/228/d8e1ee4be99cfe32bdc72f610c4121e2.png" style="margin:2px" class="sitess" alt="eMonitoring pupr" title="eMonitoring pupr">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">E-monitoring</h5>
                                <p class="mb-0">E-monitoring adalah sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img width="50%" src="https://binamarga.pu.go.id/balai-babel/uploads/images/sites/229/d8a1227e97cc7c85cf00db438a04b345.png" style="margin:2px" class="sitess" alt="JDIH PUPR" title="JDIH PUPR">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">JDIH PUPR</h5>
                                <p class="mb-0">JDIH PUPR adalah sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img width="50%" src="https://binamarga.pu.go.id/balai-babel/uploads/images/sites/226/244acf25ef899a97b952f5910d768a0d.png" style="margin:2px" class="sitess" alt="SIMANTU PUPR " title="SIMANTU PUPR ">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Simantu PUPR</h5>
                                <p class="mb-0">Simantu PUPR adalah sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->



    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Profil</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Visi & Misi</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Struktur Organisasi</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Informasi Pejabat</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Kontak</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Galeri</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Galeri Foto</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Navigasi</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> e-PPID</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Peta Situs</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Kontak Kami</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> BPJN Sulawesi Tenggara</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> Jalan .......</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> email@example.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/lib/wow/wow.min.js"></script>
    <script src="{{asset('/')}}assets/lib/easing/easing.min.js"></script>
    <script src="{{asset('/')}}assets/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('/')}}assets/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="{{asset('/')}}assets/js/main.js"></script>

    <script>
        // Array of news headlines
        // Array of news headlines
        const headlines = [
            "Breaking News: Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            "New Product Launch: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "Sports Update: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.",
            "World News: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
        ];

        let index = 0;
        const newsTicker = document.getElementById('newsTicker');

        // Function to display current headline
        function displayHeadline() {
            newsTicker.textContent = headlines[index];
        }

        // Function to handle next button click
        document.getElementById('nextButton').addEventListener('click', function() {
            index = (index + 1) % headlines.length;
            displayHeadline();
        });

        // Function to handle back button click
        document.getElementById('prevButton').addEventListener('click', function() {
            index = (index - 1 + headlines.length) % headlines.length;
            displayHeadline();
        });

        // Call the displayHeadline function initially
        displayHeadline();
    </script>

</body>

</html>