<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <!-- <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark h2 text-decoration-none" href="/">Blog Anak Petani Cerdas</a>
                </div> -->
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <path d="M21 21l-5.2-5.2"></path>
                        </svg>
                    </a>

                    <?php if (!isset($_SESSION['session-id'])) : ?>
                        <a class="btn btn-sm btn-outline-secondary" href="/login">LOGIN</a>
                    <?php else : ?>
                        <div class="dropdown ml-2">
                            <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item mt-1" href="<?= base_url() ?>/users/profile"><i class="fa fa-user" aria-hidden="true"></i>
                                    My Profile</a>
                                <a class="dropdown-item mt-1" href="<?= base_url() ?>/users/post"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Write a Post</a>
                                <a class="dropdown-item mt-1" href="<?= base_url() ?>/users/categories"><i class="fa fa-object-group" aria-hidden="true"></i>
                                    Create a Category</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Logout</a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Artikel</li>
                <li>Blog</li>

            </ol>
            <h2>Blog</h2>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-16 entries">

                    <article class="entry entry-single">
                        <?php foreach ($blog as $key => $post) : ?>

                            <div class="entry-img">
                                <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html"><?= $post['blog_title'] ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <!-- <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li> -->
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= $post['blog_created_time'] ?></time></a></li>
                                    <!-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li> -->
                                </ul>
                            </div>

                            <div class="entry-content">

                                <img src="<?= base_url(); ?>/assets/img/blog-1.jpg" class="img-fluid" alt="">

                                <p>
                                    <?= htmlspecialchars_decode($post['blog_body'], ENT_HTML5) ?>
                                </p>

                                <blockquote>
                                    <i class="icofont-quote-left quote-left"></i>
                                    <p>
                                        Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                                    </p>
                                    <i class="las la-quote-right quote-right"></i>
                                    <i class="icofont-quote-right quote-right"></i>
                                </blockquote>

                            </div>

                        <?php endforeach; ?>

                    </article>
                    <!-- End blog entry -->


                    <!-- End blog comments -->

                </div>
                <!-- End blog entries list -->
                <h1 class="mb-3"></h1>
                <hr style="border-top: 3px solid black !important">
                <div id="blog_content">

                </div>

                <!-- End blog sidebar -->

            </div>

        </div>
    </section>
    <!-- End Blog Section -->

</main>
<!-- End #main -->

<?= $this->endSection('content'); ?>