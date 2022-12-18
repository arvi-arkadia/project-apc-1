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
                <?php
                $blog = $posts;
                $blog_cat = $categories;
                $blogs_chunk = array_chunk($blog, 2);
                $badge_class = ["badge-primary", "badge-secondary", "badge-success", "badge-danger", "badge-warning", "badge-info", "badge-dark"];
                ?>
                <?php if ($blog === null) : ?>
                    <div class="row mb-2">
                        <h2>No blogs are present </h2>
                    </div>
                <?php else : ?>
                    <?php foreach ($blogs_chunk as $key => $items) : ?>
                        <?php foreach ($items as $key => $value) : ?>




                            <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                                <article class="entry">
                                    <?php $temp_array = $blog_cat[$value['blog_id']]; ?>
                                    <div class="entry-img">
                                        <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="entry-title">
                                        <?php foreach ($temp_array as $key => $catg) : ?>
                                            <?php $single_badge = array_rand($badge_class, 1); ?>
                                            <a href="/category/<?= $catg ?>" class="d-inline-block mb-2 badge <?= $badge_class[$single_badge] ?>"><?= $catg ?></a>
                                        <?php endforeach; ?>
                                        <a href="blog-single.html">
                                            <h2 class="card-title mb-0"><?= $value['blog_title'] ?></h2>
                                        </a>
                                    </h2>
                                    <div class="entry-meta">
                                        <ul>
                                            <!-- <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li> -->
                                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= $value['blog_created_time'] ?></time></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p class="card-text"><?= strip_tags(htmlspecialchars_decode(word_limiter($value['blog_body'], 19)), ENT_HTML5) ?></p>
                                        <div class="read-more">
                                            <!-- <a href="/posts/?= $value['blog_id'] ?>" class="stretched-link">Continue reading</a> -->
                                            <a href="/blog_single/<?= $value['blog_id'] ?>" class="stretched-link">Continue reading</a>
                                        </div>
                                    </div>
                                </article>
                                <!-- End blog entry -->
                            </div>

                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>


            <div class="blog-pagination" data-aos="fade-up">
                <ul class="justify-content-center">
                    <li class="disabled"><i class="icofont-rounded-left"></i></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End Blog Section -->

</main>
<!-- End #main -->

<?= $this->endSection('content'); ?>