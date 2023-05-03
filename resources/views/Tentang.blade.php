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
        <!-- About Section-->
         <section class="page-section bg-primary text-white mb-0" id="Tentang">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Tentang Saya</h2>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Saya merupakan seorang Mahasiswi dari Jambi yang sedang menempuh pendidikan S1 di Universitas Sriwijaya, Sumatera Selatan. Saya sangat tertarik untuk mencari pengalaman dengan mengikuti kegiatan yang saya sukai dan minati didalam dan diluar kampus untuk mengembangkan bakat dan minat yang saya miliki. Saya memiliki minat dan passion dalam seni Desain Grafis dan Video Editing.Saya memiliki pengalaman organisasi internal jurusan dan organisasi kedaerahan kampus dengan diberikan tanggungjawab untuk menghandle bagian Media dan Informasi organisasi yang biasa bekerja dalam hal desain dan media</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Saya sangat menyukai Desain dan Video Editing sejak masih sekolah menengah. Saya biasanya menerima pekerjaan jasa Desain grafis seperti desain banner dan desain kemasan juga saya menerima pekerjaan jasa editing video baik itu dalam menerima pekerjaan jasa maupun dalam kegiatan organisasi. </p></div>
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
