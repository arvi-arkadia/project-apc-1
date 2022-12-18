<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Anak Petani Cerdas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">

    <link href="<?= base_url(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/about.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/contact.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/article.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/blog.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/chosen/chosen_v1.8.7/chosen.css">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <?= $this->include('layout/topbar'); ?>

    <!-- ======= Header ======= -->
    <?= $this->include('layout/header'); ?>
    <!-- End Header -->

    <?= $this->renderSection('content'); ?>

    <!-- ======= Footer ======= -->
    <?= $this->include('layout/footer'); ?>


    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

    <?php
    $errors = \Config\Services::validation()->getErrors(); //best wasy to show the errors;
    $sess = session();
    $sess->start(); ?>
    <script>
        $(document).ready(function() {
            var csrf_name = "<?= csrf_token() ?>";
            var csrf_hash = "<?= csrf_hash() ?>";
            var csrf_val = {
                [csrf_name]: csrf_hash
            };
            var xhr = $.ajax({
                url: "<?= base_url() ?>/users/profdata",
                method: "POST",
                dataType: "json",
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                },
                data: csrf_val,
                success: function(data) {
                    var dat = data;
                    if (dat.user_fname === null && dat.user_lname === null) {
                        $("#first_name").attr("placeholder", "Enter your first name");
                        $("#last_name").attr("placeholder", "Enter your last name");
                        $("#bio").attr("placeholder", "Enter your Bio");
                    } else {
                        $("#first_name").val(dat.user_fname);
                        $("#last_name").val(dat.user_lname);
                        $("#bio").val(dat.user_about);
                    }
                    var csrf = xhr.getResponseHeader("X-CSRF-TOKEN");
                    $("[name=csrf_test_name]").val(csrf);
                }
            });
        });
        $('#List button').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
        $("#profile_update").click(function() {
            var datas;
            var csrf_name = "<?= csrf_token() ?>";
            var csrf_hash = $("[name=csrf_test_name]").val();
            var fname = $("#first_name").val();
            var lname = $("#last_name").val();
            var bio = $("#bio").val();
            var up_data = {
                "user_fname": fname,
                "user_lname": lname,
                "user_about": bio
            };
            var xhr = $.ajax({
                url: "<?= base_url() ?>/users/update_profile",
                method: "POST",
                dataType: "json",
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                },
                data: {
                    [csrf_name]: csrf_hash,
                    "user_data": JSON.stringify(up_data)
                },
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Updated',
                        text: 'Changes are updated successfully',
                    });
                    var csrf = xhr.getResponseHeader("X-CSRF-TOKEN");
                    $("[name=csrf_test_name]").val(csrf);
                },
                error: function(err) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "Something went wrong",
                        footer: '<a href>What went wrong?</a>'
                    });
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "7000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    <?php
    if (!empty($errors)) {
        foreach ($errors as $key => $error) {
            echo '<script>toastr.error("' . esc($error) . '");</script>';
        }
    }

    if ($sess->has('old')) {
        echo '<script>toastr.error("' . esc($_SESSION['old']) . '");</script>';
    }

    if ($sess->has('success')) {
        echo '<script>Swal.fire({
        icon: "success",
        title: "Updated",
        text: "Password updated successfully",
    });</script>';
    }

    if ($sess->has('posted')) {
        echo '<script>Swal.fire({
        icon: "success",
        title:"Saved",
        text: "Posted Sucessfully",
    });</script>';
    }

    if ($sess->has('error')) {
        echo '<script>Swal.fire({
        icon: "error",
        title:"Error",
        text: "Error Occured",
    });</script>';
    }

    if ($sess->has('post_deleted')) {
        echo '<script>Swal.fire({
        icon: "success",
        title:"Success",
        text: "Deleted Sucessfully",
    });</script>';
    }
    ?>

    <script>
        let post_editor_data;
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote', 'insertTable', '|', 'undo', 'redo']
            })
            .then(newEditor => {
                post_editor_data = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="<?= base_url(); ?>/chosen/chosen_v1.8.7/chosen.jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $(".chosen-select").chosen({
            no_results_text: "Oops, nothing found!",
            max_selected_options: 4,
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "3000",
            "hideDuration": "1000",
            "timeOut": "7000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $("#cat_update").on('click', function() {
            var csrf_name = "<?= csrf_token() ?>";
            var csrf_hash = $("[name=csrf_test_name]").val();

            var category = $("#categories").val();
            var cat_j_data = {
                "category_name": category
            }
            var xhr = $.ajax({
                url: "<?= base_url() ?>/users/cat_create",
                method: "POST",
                dataType: "json",
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                },
                data: {
                    [csrf_name]: csrf_hash,
                    "cat_data": JSON.stringify(cat_j_data)
                },
                success: function(data) {
                    if (data.msg == "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Created',
                            text: 'Your category has been created',
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    } else {
                        if (data.msg == "error") {
                            Swal.fire({
                                icon: 'error',
                                title: "Invalid Input",
                                text: data.category_name
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Already exists',
                                text: "The category already exsists"
                            });
                        }
                    }
                    var csrf = xhr.getResponseHeader("X-CSRF-TOKEN");
                    $("[name=csrf_test_name]").val(csrf);
                },
                error: function(err) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "Something went wrong",
                        footer: '<a href>What went wrong?</a>'
                    });
                    var csrf = xhr.getResponseHeader("X-CSRF-TOKEN");
                    $("[name=csrf_test_name]").val(csrf);
                }
            });
        });
    </script>
    <?php
    $validation_error = \Config\Services::validation()->getErrors();
    if (!empty($validation_error)) {
        foreach ($validation_error as $key => $value) {
            echo '<script>tostr.error("' . $value . '")</script>';
        }
    }
    ?>
</body>

</html>