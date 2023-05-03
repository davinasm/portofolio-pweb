<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Davina - Portofolio</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('templates.partials.navbar')
        <!-- Masthead-->
         <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- foto dapin-->
                <img class="masthead-avatar mb-5" src="assets/img/dapin.png" alt="..." />
                <h1 class="masthead-heading text-uppercase mb-0">Hello! I'm Davina</h1>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Mahasiswa Sistem Informasi - Graphic Designer - Video Editor</p>
            </div>
        </header>
        <!-- Project Section-->
       <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Project Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portofolio</h2>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/porto1.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/porto2.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/porto3.png" alt="..." />
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
         <section class="page-section bg-primary text-white mb-0" id="Tentang">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Tentang Saya</h2>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Saya merupakan seorang Mahasiswi dari Jambi yang sedang menempuh pendidikan S1 di Universitas Sriwijaya, Sumatera Selatan. Saya sangat tertarik untuk mencari pengalaman dengan mengikuti kegiatan yang saya sukai dan minati didalam dan diluar kampus untuk mengembangkan bakat dan minat yang saya miliki. Saya memiliki minat dan passion dalam seni Desain Grafis dan Video Editing. </p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Saya sangat menyukai Desain dan Video Editing sejak masih sekolah menengah. Saya biasanya menerima pekerjaan jasa Desain grafis seperti desain banner dan desain kemasan juga saya menerima pekerjaan jasa editing video baik itu dalam menerima pekerjaan jasa maupun dalam kegiatan organisasi. Saya memiliki pengalaman organisasi internal jurusan dan organisasi kedaerahan kampus dengan diberikan tanggungjawab untuk menghandle bagian Media dan Informasi organisasi yang biasa bekerja dalam hal desain dan media</p></div>
                </div>
            </div>
        </section>
         <!-- Contact Section-->
         <section class="page-section" id="Kontak">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Hubungi</h2>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nama</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Harus diisi ya!</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Harus diisi ya!</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">No Telepon</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Harus diisi ya!</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Pesan</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Pesan nya di isi ya!</div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Pesan kamu telah dikirim!</div>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Pesan tidak terkirim!</div></div>
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
         @include('templates.partials.footer')
        <!-- Portfolio Modals-->
        @include('templates.partials.portofolio-modal')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
