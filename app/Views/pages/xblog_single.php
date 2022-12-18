<!-- Page Header-->
<?php foreach ($blog as $key => $post) : ?>

    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1><?= $post['blog_title'] ?></h1>
                        <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
                        <span class="meta">
                            Posted by
                            <?= $post['blog_created_time'] ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-10">
                    <div id="blog_content">
                        <?= htmlspecialchars_decode($post['blog_body'], ENT_HTML5) ?>
                    </div>
                    <a href="#!"><img class="img-fluid" src="assets/img/post-sample-image.jpg" alt="..." /></a>
                    <h2 class="section-heading">The Final Frontier</h2>
                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>
                    <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>
                    <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>



                </div>
            </div>
        </div>
    </article>
<?php endforeach; ?>