<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark h2 text-decoration-none" href="/">Profil : Tambah Blog</a>
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
            <?= form_open("post/create", [
                'enctype' => 'multipart/form-data'
            ]) ?>
            <div class="form-group">
                <label for="post_title" class="font-weight-bolder">Post Title:</label>
                <?php $post_title = ["id" => "post_title", "class" => "form-control", "name" => "post_title", "placeholder" => "Enter your post title", "required" => "true"]; ?>
                <?= form_input($post_title) ?>
            </div>
            <div class="form-group">
                <label for="post_title" class="font-weight-bolder">Post Category:</label>
                <select id="post_categories" name="post_category[]" class="chosen-select" data-placeholder="Search Category" multiple="multiple" style="width:100%;">
                    <?php foreach ($cat_options as $key => $value) : ?>
                        <option id="<?= $value["cat_id"] ?>"><?= ucfirst($value["cat_name"]) ?></option>';
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="editor" class="font-weight-bolder">Post content:</label>
                <textarea name="post_content" id="editor" cols="30" rows="10"></textarea>
            </div>
            <input class="btn btn-success submit-btn" type="submit" name="" value="SAVE AND POST">
            <?= form_close() ?>
        </div>

    </section>

</main>
<!-- End #main -->

<?= $this->endSection('content'); ?>