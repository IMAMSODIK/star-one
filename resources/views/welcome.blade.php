<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Star One Education Center | Trusted Tutoring to Boost Grades and Confidence!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="{{ asset('landing_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_assets/css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <style>
        #section_6 {
            background: linear-gradient(135deg, #f9fbfd 0%, #eef3f8 100%);
            padding: 80px 0;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        /* Efek hover pada card */
        .promo-card {
            transition: all 0.4s ease;
            transform: translateY(0);
        }

        .promo-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Efek hover pada gambar (zoom halus) */
        .promo-img-wrapper {
            overflow: hidden;
        }

        .promo-img {
            transition: transform 0.6s ease;
        }

        .promo-card:hover .promo-img {
            transform: scale(1.08);
        }

        /* Tombol hover efek */
        .promo-btn {
            transition: all 0.3s ease;
        }

        .promo-btn:hover {
            background-color: #0d6efd;
            color: #fff;
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.4);
            transform: scale(1.05);
        }
    </style>
</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('own_assets/images/logo.png') }}" alt="" style="width: 100px">
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-house smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#section_3" id="navbarLightDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Our Courses
                            </a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="topics-listing.html">English Class</a></li>
                                <li><a class="dropdown-item" href="topics-listing.html">Mandarin Class</a></li>
                                <li><a class="dropdown-item" href="topics-listing.html">Computer Class</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Our Event</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Promo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">FAQs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_7">Contact</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-house smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto text-center">
                        <h1 class="text-white">Star One Education Center</h1>
                        <h6 class="text-white mb-4">Tempat Bimbel Terbaik untuk Mengembangkan Potensi Belajarmu</h6>

                        <a href="/register" class="btn custom-btn btn-lg mt-3 smoothscroll">
                            Daftar Sekarang
                        </a>
                    </div>

                </div>
            </div>
        </section>



        <section class="featured-section" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="#about-us">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">About Us</h5>

                                        <p class="mb-0">
                                            Star One Education Center adalah lembaga bimbingan belajar yang berkomitmen
                                            membantu siswa mencapai prestasi terbaik.
                                        </p>
                                        <p></p>
                                        <p class="mb-0">
                                            Kami menghadirkan pengajar berpengalaman dan metode belajar interaktif agar
                                            proses belajar lebih menyenangkan dan efektif.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                <img src="{{ asset('own_assets/images/banner.jpeg') }}"
                                    class="custom-block-image img-fluid" alt="">

                                <div class="custom-block-overlay-text d-flex p-3">
                                    <div>
                                        <h5 class="text-white mb-2">Kenapa Memilih Kami</h5>

                                        <p class="text-white">Kami berkomitmen memberikan pengalaman belajar terbaik
                                            untuk setiap siswa.</p>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-person-check fs-2 text-warning me-3"></i>
                                            <div>
                                                <p class="mb-1 text-white">Pengajar Berpengalaman</p>
                                            </div>
                                        </div>

                                        <!-- 2 -->
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-lightbulb fs-2 text-warning me-3"></i>
                                            <div>
                                                <p class="mb-1 text-white">Metode Belajar Interaktif</p>
                                            </div>
                                        </div>

                                        <!-- 4 -->
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-building fs-2 text-warning me-3"></i>
                                            <div>
                                                <p class="mb-1 text-white">Fasilitas Nyaman</p>
                                            </div>

                                        </div>

                                        <!-- 5 -->
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-calendar-check fs-2 text-warning me-3"></i>
                                            <div>
                                                <p class="mb-1 text-white">Jadwal Fleksibel</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="section-overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="explore-section section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Browse Our Courses</h1>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="english-tab" data-bs-toggle="tab"
                                data-bs-target="#english-tab-pane" type="button" role="tab"
                                aria-controls="english-tab-pane" aria-selected="true">English Class</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mandarin-tab" data-bs-toggle="tab"
                                data-bs-target="#mandarin-tab-pane" type="button" role="tab"
                                aria-controls="mandarin-tab-pane" aria-selected="false">Mandarin Class</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="computer-tab" data-bs-toggle="tab"
                                data-bs-target="#computer-tab-pane" type="button" role="tab"
                                aria-controls="computer-tab-pane" aria-selected="false">Computer Class</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="english-tab-pane" role="tabpanel"
                                aria-labelledby="english-tab" tabindex="0">
                                <div class="row justify-content-center">

                                    <!-- English Regular -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">English Regular</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Kelas dasar bahasa Inggris untuk pondasi grammar dan
                                                        membangun kepercayaan diri berkomunikasi sehari-hari.
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/re.jpeg') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <!-- Tombol di bawah gambar -->
                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20English%20Regular%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Conversation Class -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">Conversation Class</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Belajar ngomong bahasa Inggris dengan cara seru dan santai.
                                                        Bikin kamu makin lancar, percaya diri, dan nggak takut salah!
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/cc.png') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20Conversation%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- TOEFL Preparation Class -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">TOEFL Preparation Class</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Latihan seru, strategi jitu, hasil maksimal! Siap bantu kamu
                                                        raih skor TOEFL impian
                                                        dengan cara belajar yang fun dan efektif.
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/tp.png') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20TOEFL%20Preparation%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IELTS Preparation Class -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">IELTS Preparation Class</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Belajar strategi dan latihan intens biar skor IELTS kamu naik
                                                        drastis!
                                                        siap bantu kamu capai target untuk
                                                        kuliah atau kerja di luar negeri.
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/tp.png') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20IELTS%20Preparation%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Legal English -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">Legal English</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Belajar istilah hukum, cara komunikasi formal, dan drafting
                                                        dokumen legal biar makin
                                                        percaya diri di dunia hukum internasional.
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/le.png') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20Legal%20English%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="mandarin-tab-pane" role="tabpanel"
                                aria-labelledby="mandarin-tab" tabindex="0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">Mandarin Class</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Belajar Mandarin dengan cara seru dan santai! Mulai dari
                                                        percakapan dasar sampai bisa ngobrol lancar di situasi
                                                        sehari-hari
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/mc.png') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <!-- Tombol di bawah gambar -->
                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20English%20Regular%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="computer-tab-pane" role="tabpanel"
                                aria-labelledby="computer-tab" tabindex="0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">Office Class</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Belajar Microsoft Word, Excel, dan PowerPoint dengan cara
                                                        praktis dan fun! Cocok buat kamu yang mau jago kerja kantor,
                                                        ngatur data, dan bikin presentasi keren tanpa ribet!
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/oc.png') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <!-- Tombol di bawah gambar -->
                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20English%20Regular%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">Programming Class</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Belajar ngoding dari nol sampai bisa bikin project sendiri! Gaya
                                                        belajarnya santai, step-by-step, dan dijamin nggak bikin pusing
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/pc.png') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <!-- Tombol di bawah gambar -->
                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20English%20Regular%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
                                        <div
                                            class="custom-block bg-white shadow-lg w-100 d-flex flex-column justify-content-between">
                                            <a href="topics-detail.html" class="d-flex flex-column h-100">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-2">Graphic Design</h5>
                                                    <p class="mb-0" style="text-align: justify;">
                                                        Belajar desain grafis dari dasar sampai bisa bikin karya keren
                                                        sendiri! Seru, kreatif, dan cocok buat kamu yang pengin jadi
                                                        desainer masa kini tanpa ribet!
                                                    </p>
                                                </div>

                                                <img src="{{ asset('own_assets/images/gdc.png') }}"
                                                    class="custom-block-image img-fluid mt-3 mb-3" alt="">
                                            </a>

                                            <!-- Tombol di bawah gambar -->
                                            <div class="d-flex justify-content-between mt-auto">
                                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20English%20Regular%20Class"
                                                    target="_blank" class="btn custom-btn btn-lg mt-3 smoothscroll">
                                                    <i class="bi bi-whatsapp"></i> Konsultasi
                                                </a>
                                                <a href="/register" class="btn custom-btn mt-3 custom-border-btn">
                                                    Daftar Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>


        <section class="timeline-section section-padding" id="section_4">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h3 class="mb-4 text-white">Our Events</h3>
                    </div>

                    <div class="col-lg-8 col-12 mt-3 mx-auto">
                        <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                            <div class="d-flex position-relative">
                                <!-- Gambar -->
                                <div class="position-relative" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#videoModal">
                                    <img src="{{ asset('own_assets/videos/thumbnail1.png') }}"
                                        class="custom-block-image img-fluid" alt="">

                                    <!-- Tombol Play di Tengah -->
                                    <div class="position-absolute top-50 start-50 translate-middle bg-light rounded-circle shadow"
                                        style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; opacity: 0.9;">
                                        <i class="bi bi-play-fill fs-2 text-primary"></i>
                                    </div>
                                </div>

                                <div class="custom-block-topics-listing-info d-flex">
                                    <div>
                                        <h6 class="mb-2">Sosialisasi di SD Panca Budi Medan</h6>
                                        <p class="mb-0">Tim bimbingan belajar bahasa Inggris kami mengadakan event
                                            sosialisasi di SD Panca Budi Medan, bertujuan...</p>
                                        <a href="#"
                                            class="btn custom-btn mt-3 mt-lg-4">Selengkapnya</a>
                                    </div>
                                    <span class="badge bg-design rounded-pill ms-auto">✅️</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h2 class="fw-bold mb-3">✨ Our Promo This Month ✨</h2>
                        <p class="text-muted">Nikmati penawaran spesial dari Bimbel Bahasa Inggris kami hanya di bulan
                            ini!</p>
                    </div>

                    <div class="col-lg-8 col-md-10">
                        <div class="promo-card card shadow-lg border-0 rounded-4 overflow-hidden">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-6 promo-img-wrapper">
                                    <img src="{{ asset('own_assets/images/promo.png') }}"
                                        class="promo-img img-fluid w-100 h-100 object-fit-cover"
                                        alt="Promo English Class">
                                </div>
                                <div class="col-md-6 bg-white p-4 p-lg-5">
                                    <h4 class="fw-bold mb-3 text-primary">Diskon 30% Kelas Bahasa Inggris!</h4>
                                    <p class="text-secondary mb-4">
                                        Daftarkan dirimu di bulan ini dan dapatkan potongan harga 30% untuk semua
                                        program kursus bahasa Inggris.
                                        Jadikan pengalaman belajar lebih menyenangkan dengan tutor profesional dan
                                        metode interaktif!
                                    </p>
                                    <a href="/register"
                                        class="btn custom-btn mt-3 mt-lg-4">
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="faq-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="{{ asset('landing_assets/images/faq_graphic.jpg') }}" class="img-fluid"
                            alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Apa itu Star One Education Center?
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Star One Education Center adalah lembaga kursus yang fokus membantu siswa dari berbagai jenjang untuk menguasai <strong>bahasa Inggris</strong>,
                                        <strong>bahasa Mandarin</strong> dan juga <strong>Komputer</strong> melalui metode belajar interaktif dan menyenangkan.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Siapa saja yang bisa ikut program ini?
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Program kami terbuka untuk <strong>siswa SD, SMP, SMA, mahasiswa, hingga umum</strong> yang ingin meningkatkan kemampuan bahasa Inggris dan Mandarin serta skill Komputer juga.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Apakah tersedia kelas online dan offline?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ya! Kami menyediakan dua pilihan — <strong>kelas offline</strong> di tempat belajar kami dan <strong>kelas online</strong> interaktif melalui platform video conference.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Berapa biaya kursusnya?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Biaya kursus bervariasi tergantung tingkat dan durasi program. Kamu bisa menghubungi kami untuk mendapatkan rincian harga dan promo terbaru.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Bagaimana cara mendaftar?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Cukup klik tombol <strong>Daftar Sekarang<strong> di halaman utama atau hubungi kami melalui WhatsApp untuk pendaftaran dan konsultasi program.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Apakah peserta mendapat sertifikat?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Tentu, setiap peserta yang menyelesaikan program akan mendapatkan <strong>sertifikat kelulusan resmi</strong> dari Bimbel kami.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-section section-padding section-bg" id="section_7">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">Get in touch</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                            <iframe class="google-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63713.690873785206!2d98.5409071486328!3d3.563137700000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f9163002895%3A0x412d3046351f140c!2sSTAR-ONE%20Education%20Center%20Medan%20Selayang!5e0!3m2!1sid!2sid!4v1761673729217!5m2!1sid!2sid"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h5 class="mb-3">STAR-ONE Education Center Medan Selayang</h5>

                            <p>Jl. Bunga Asoka No.11C, Asam Kumbang, Kec. Medan Selayang, Kota Medan, Sumatera Utara</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="https://wa.me/081263783942?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20Star%20One%20Education%20Center" class="site-footer-link">
                                    0812-6378-3942
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    info@staroneeducation.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <hr class="mt-2">

                    <div class="row mt-2">
                        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                            <iframe class="google-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63713.690873785206!2d98.5409071486328!3d3.563137700000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e3bad1a97d3%3A0xe99eaab10e6fd69e!2sSTAR-ONE%20Education%20Center%20Medan%20Helvetia!5e0!3m2!1sid!2sid!4v1761673822211!5m2!1sid!2sid"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h5 class="mb-3">STAR-ONE Education Center Medan Helvetia</h5>

                            <p>Sei Sikambing C. II, Kec. Medan Helvetia, Kota Medan, Sumatera Utara</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20Star%20One%20Education%20Center" class="site-footer-link">
                                    0851-7330-1768
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                    info@staroneeducation.com
                                </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="index.html">
                        <img src="{{ asset('own_assets/images/logo.png') }}" alt="" style="width: 100px">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Resources</h6>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#section_1" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_2" class="site-footer-link">About Us</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_3" class="site-footer-link">Our Course</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_4" class="site-footer-link">Our Event</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_5" class="site-footer-link">Promo</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_6" class="site-footer-link">FAQs</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_7" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Information</h6>

                    <p class="text-white d-flex mb-1">
                        <a href="https://wa.me/081263783942?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20Star%20One%20Education%20Center" class="site-footer-link">
                            0812-6378-3942
                        </a>
                    </p>

                    <p class="text-white d-flex mb-1">
                        <a href="https://wa.me/085173301768?text=Halo%20admin,%20saya%20ingin%20konsultasi%20tentang%20Star%20One%20Education%20Center" class="site-footer-link">
                            0851-7330-1768
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:info@staroneeducation.com" class="site-footer-link">
                            info@staroneeducation.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">

                    <p class="copyright-text mt-lg-5 mt-4">Copyright © 2025 Star One Education Center. All rights reserved.
                    </p>

                </div>

            </div>
        </div>
    </footer>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark border-0">
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <video id="popupVideo" controls muted style="width: 100%; height: 100%;">
                            <source src="{{ asset('own_assets/videos/first_event.mp4') }}" type="video/mp4">
                            Browser tidak mendukung video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('landing_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing_assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing_assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('landing_assets/js/click-scroll.js') }}"></script>
    <script src="{{ asset('landing_assets/js/custom.js') }}"></script>

    <script>
        var videoModal = document.getElementById('videoModal');
        var popupVideo = document.getElementById('popupVideo');

        // Trigger video play saat modal dibuka
        videoModal.addEventListener('shown.bs.modal', function() {
            popupVideo.play();
        });

        // Pause video saat modal ditutup
        videoModal.addEventListener('hidden.bs.modal', function() {
            popupVideo.pause();
            popupVideo.currentTime = 0; // reset ke awal
        });
    </script>

</body>

</html>
