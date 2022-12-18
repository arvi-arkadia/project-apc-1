<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <p class="animate__animated animate__fadeInUp">Selamat Datang</p>
                        <h2 class="animate__animated animate__fadeInDown">Gerakan <span>Anak Petani Cerdas</span></h2>
                        <p class="animate__animated animate__fadeInUp">Organisasi non-profit yang membantu para keluarga dan anak.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et
                            tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et
                            tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section>
<!-- End Hero -->



<main id="main">

    <!-- ======= Info Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">

            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-attachment"></i></div>
                        <p class="judul">Penerima manfaat</p>
                        <h4 class="title">+ 8700</h4>
                        <p class="description">Total anak yang menerima manfaat dari Kami</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-money-bag"></i></div>
                        <p class="judul">Pendanaan</p>
                        <h4 class="title">+ 2 Miliar</h4>
                        <p class="description">Total pendanaan minimum yang dikeluarkan / tahun</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-group-students"></i></div>
                        <p class="judul">beasiswa</p>
                        <h4 class="title">+ 1000</h4>
                        <p class="description">Total anak yang menerima beasiswa dari Kami.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= Program Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Program Kami</h2>
                <!-- <p>Check out the great services we offer</p> -->
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-book-reader"></i></div>
                        <h4 class="title"><a href="">Pendidikan</a></h4>
                        <p class="description">Pendidikan gratis bagi anak-anak yang membutuhkan.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-health"></i></div>
                        <h4 class="title"><a href="">Kesehatan</a></h4>
                        <p class="description">Bantuan biaya kesehatan bagi mereka yang membutuhkan.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-group"></i></div>
                        <h4 class="title"><a href="">Sosial</a></h4>
                        <p class="description">Bantuan sosial bagi yang membutuhkan seperti sedekah, wakaf,dsb.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-user-voice"></i></div>
                        <h4 class="title"><a href="">Pemberdayaan Masyakarat</a></h4>
                        <p class="description">Pelatihan, edukasi, dan pembinaan kepada masyarakat.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Campaign Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">


            <div class="section-title" data-aos="fade-up">
                <h2>Campaign</h2>
                <!-- <p>Check out the great services we offer</p> -->
            </div>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sedekah Pangan</h4>
                            <!-- <span>Chief Executive Officer</span> -->
                            <p>Pangan untuk buka puasa, idul adha, ibu hamil dan lansia, dsb. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sedekah Wakaf</h4>
                            <!-- <span>Product Manager</span> -->
                            <p>Wakaf untuk pembangunan infrastruktur seperti MCK,Mushola, dll.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Beasiswa</h4>
                            <!-- <span>CTO</span> -->
                            <p>Bantuan biaya pendidikan bagi anak-anak yang membutuhkan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Fundrising</h4>
                            <!-- <span>Accountant</span> -->
                            <p>Donasi untuk membantu kegiatan sosial, pendidikan dan kesehatan bagi masyarakat yang membutuhkan.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">

            <div class="section-title">
                <h2>Partner Kami</h2>
                <p>Kerja sama yang kami lakukan untuk menjalankan kegiatan dan layanan kepada masyarakat. </p>
            </div>

            <div class="owl-carousel clients-carousel">
                <img src="assets/img/clients/client-1.png" alt="">
                <img src="assets/img/clients/client-2.png" alt="">
                <img src="assets/img/clients/client-3.png" alt="">
                <img src="assets/img/clients/client-4.png" alt="">
                <!-- <img src="assets/img/clients/client-5.png" alt=""> -->
                <!-- <img src="assets/img/clients/client-6.png" alt=""> -->
                <!-- <img src="assets/img/clients/client-7.png" alt=""> -->
                <!-- <img src="assets/img/clients/client-8.png" alt=""> -->
            </div>

        </div>
    </section>
    <!-- End Our Clients Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>Jadikan masa depan dunia lebih baik!</h3>
                    <p>Ayo tunjukan kepedulian kita pada mereka yang membutuhkan</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Donasi Sekarang</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->




</main>
<!-- End #main -->

<?= $this->endSection('content'); ?>