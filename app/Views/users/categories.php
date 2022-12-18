<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark h2 text-decoration-none" href="/">Profil : Tambah Kategori</a>
                </div>
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
        </div>
    </section>

    <section id="blog" class="blog">
        <div class="container" style="padding-top: 2%;">
            <label for="categories" class=" font-weight-bolder">Create a new categories</label>
            <?= form_open() ?>
            <div class="form-row">
                <div class="col-md-10">
                    <?php $cat_data = [
                        'id'       =>   'categories',
                        'class'    =>   'form-control',
                        'name'     =>   'category',
                        'placeholder' => 'Create a new categories'
                    ]; ?>
                    <?= form_input($cat_data) ?>
                </div>
                <div class="col-md-2">
                    <?= form_button(['class' => 'btn btn-primary btn-block', 'content' => 'Create', 'id' => 'cat_update']) ?>
                </div>
            </div>
            <?= form_close() ?>
            <div class="card mt-4">
                <div class="card-body">
                    <div id="categories_data">
                        <?php $badge_class = ["badge-primary", "badge-secondary", "badge-success", "badge-danger", "badge-warning", "badge-info", "badge-dark"]; ?>
                        <?php if (!empty($cat)) : ?>
                            <?php foreach ($cat as $key => $value) {
                                $single_badge = array_rand($badge_class, 1);
                                echo '<a class="m-2 text-capitalize text-wrap badge ' . $badge_class[$single_badge] . '" href="' . base_url() . '/category/' . $value['cat_name'] . '">' . $value['cat_name'] . '</a>';
                            } ?>
                        <?php else : ?>
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'No data',
                                    text: "There is no category available",
                                    footer: 'Create a category of your own'
                                });
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
<!-- End #main -->

<?= $this->endSection('content'); ?>