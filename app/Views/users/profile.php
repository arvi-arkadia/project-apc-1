<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark h2 text-decoration-none" href="/">Profil : Admin</a>
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
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group" id="List">
                        <div class="text-center">
                            <svg class="list-group-item list-group-item-action bd-placeholder-img rounded" width="200" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 200x200">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">200x200</text>
                            </svg>
                        </div>
                        <button type="button" class="list-group-item list-group-item-action h5 active" data-toggle="list" href="#settings">Your Posts</button>
                        <button type="button" class="list-group-item list-group-item-action h5" href="#profile_card" data-toggle="list">Profile</button>
                        <button type="button" class="list-group-item list-group-item-action h5" data-toggle="list" href="#change_pass">Edit Password</button>
                        <button type="button" class="list-group-item list-group-item-action h5" data-toggle="list" href="#stats">Stats</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane" id="profile_card" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div id="profile_card">
                                        <?= form_open('users/profile/update') ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name">First Name</label>
                                                <?php $fname_data = [
                                                    'id'       =>   'first_name',
                                                    'class'    =>   'form-control',
                                                    'name'     =>   'fname'
                                                ]; ?>
                                                <?= form_input($fname_data) ?>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="last_name">Last Name</label>
                                                <?php $lname_data = [
                                                    'id'       =>   'last_name',
                                                    'class'    =>   'form-control',
                                                    'name'     =>   'lname'
                                                ]; ?>
                                                <?= form_input($lname_data) ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="bio">Bio</label>
                                            <textarea name="bio" class="form-control" id="bio" rows="3"></textarea>
                                        </div>
                                        <?= form_button(['class' => 'btn btn-primary', 'content' => 'Update', 'id' => 'profile_update']) ?>
                                        <?= form_close() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="change_pass" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <?= form_open('users/pass_change') ?>
                                    <div class="form-row align-items-center">
                                        <div class="col-4">
                                            <label for="">Old Password:</label>
                                            <?= form_password(['class' => 'form-control mb-2', 'name' => 'old_pass']) ?>
                                        </div>
                                        <div class="col-4">
                                            <label for="">New Password:</label>
                                            <?= form_password(['class' => 'form-control mb-2', 'name' => 'pass1']) ?>
                                        </div>
                                        <div class="col-4">
                                            <label for="">Retype new password</label>
                                            <?= form_password(['class' => 'form-control mb-2', 'name' => 'pass2']) ?>
                                        </div>
                                    </div>
                                    <?= form_submit(['class' => 'btn btn-danger', 'value' => 'Update']) ?>
                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="stats" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                                    <canvas id="post_stats" width="200" height="200"></canvas>
                                    <script>
                                        var ctx = document.getElementById("post_stats");
                                        var chart = new Chart(ctx, {
                                            // The type of chart we want to create
                                            type: 'bar',

                                            // The data for our dataset
                                            data: {
                                                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                                datasets: [{
                                                    label: 'My First dataset',
                                                    backgroundColor: 'rgb(255, 99, 132)',
                                                    borderColor: 'rgb(255, 99, 132)',
                                                    data: [0, 10, 5, 2, 20, 30, 45]
                                                }]
                                            },

                                            // Configuration options go here
                                            options: {}
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="settings" role="tabpanel">
                            <?php
                            $blogs = $posts;
                            $blog_category = $categories;
                            $badge_class = ["badge-primary", "badge-secondary", "badge-success", "badge-danger", "badge-warning", "badge-info", "badge-dark"];
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <?php if (empty($blogs)) : ?>
                                        <div class="card mb-3">
                                            <div class="row no-gutters border rounded overflow-hidden flex-md-row">
                                                <div class="card-body">
                                                    <h2 class="card-title mb-2">It seems you didn't write a blog</h2>
                                                    <p class="card-text">Write a blog by clicking down the button</p>
                                                    <a href="<?= base_url() ?>/users/post" class="btn btn-success">WRITE A BLOG</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php foreach ($blogs as $key => $blog_key) : ?>
                                        <div class="card mb-3">
                                            <div class="row no-gutters border rounded overflow-hidden flex-md-row">
                                                <div class="card-body">
                                                    <?php $temp_array = $blog_category[$blog_key['blog_id']]; ?>
                                                    <?php foreach ($temp_array as $key => $category) : ?>
                                                        <?php $single_badge = array_rand($badge_class, 1); ?>
                                                        <a href="/category/<?= $category ?>" class="d-inline-block mb-2 badge <?= $badge_class[$single_badge] ?>"><?= $category ?></a>
                                                    <?php endforeach; ?>
                                                    <h2 class="card-title mb-0"><?= $blog_key['blog_title'] ?></h2>
                                                    <p class="card-text mb-1"><small class="text-muted"><?= $blog_key['blog_created_time'] ?></small></p>
                                                    <p class="card-text"><?= strip_tags(htmlspecialchars_decode(word_limiter($blog_key['blog_body'], 19)), ENT_HTML5) ?></p>
                                                    <a href="/post/edit" class="btn btn-primary">EDIT</a>
                                                    <a href="/post/delete/<?= $blog_key['blog_id'] ?>" class="btn btn-danger">DELETE</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

</main>
<!-- End #main -->

<?= $this->endSection('content'); ?>