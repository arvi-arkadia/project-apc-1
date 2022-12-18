<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main">
    <div class="container mt-12" style="width: 100%; margin: 0 auto;max-width: 350px;padding: 15px;padding-top: 20%;padding-bottom:10%;border: 0px solid #d8dee2;background-color: white;">
        <?php $errors = \Config\Services::validation()->getErrors(); //best wasy to show the errors;
        $sess = \Config\Services::session();
        ?>
        <?= form_open('signup/register'); ?>
        <?= csrf_field() ?>
        <p class="text-center h3 mt-2"> Signup</p>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="e_mail" id="email" class="form-control" placeholder="johndoe@example.com" aria-describedby="helpId" required="true">
            <small id="helpId" class="text-muted">E-mail will not be shared with anyone</small>
        </div>
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" name="uname" id="Username" class="form-control" placeholder="Username" required="true">
            <small id="helpId" class="text-muted">Must be unique</small>
        </div>
        <div class="form-group">
            <label for="pass_wd">Password</label>
            <input type="password" name="passwd" id="pass_wd" class="form-control" placeholder="Password" required="true">
        </div>
        <div class="form-group">
            <label for="re-pass">Confirm-password</label>
            <input type="password" name="confirm_pass" id="re-pass" class="form-control" placeholder="Re-type password" required="true">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-secondary btn-block" name="sub" id="formsub" value="SignUp">
        </div>
        <?= form_close(); ?>
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
                echo '<script>toastr.error("', esc($error), '");</script>';
            }
        }
        if ($sess->has('username')) {
            $val = $_SESSION['username'];
            echo '<script>toastr.warning("', esc($val), '")</script>';
            $sess->destroy();
        }
        ?>
    </div>
</main>
<!-- End #main -->
<?= $this->endSection('content'); ?>