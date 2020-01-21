<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <title><?= $title; ?></title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kotak cf">
                    <div class="header">
                        <img src="<?= base_url(); ?>asset/img/logo1.png" alt="Logo" class="Logo">
                        <h3 class="Login">Login</h3>
                    </div>

                    <?= $this->session->flashdata('message'); ?>
                    <form class="form" action="<?= base_url('auth'); ?>" method="post">
                        <section class="username">
                            <input type="text" class="form-control input" placeholder="Enter Your Email" name="email" autocomplete="off">
                            <?= form_error('email', '<small class="text-danger" style="position:relative; top:3px;margin-left:55px; font-size: .930em; font-weight: 100">', '</small>'); ?>
                        </section>
                        <br>
                        <section class="password">
                            <input type="password" class="form-control input" placeholder="Enter Your Password" name="password" autocomplete="off">
                            <?= form_error('password', '<small class="text-danger" style="position:relative; top:3px;margin-left:55px; font-size: .930em; font-weight: 100">', '</small>'); ?>

                        </section>

                        <section class="form-group">
                            <button class="signin-btn-lg cf btn " name="signin">Sign In</button>
                            <br><br>
                            <a href="<?= base_url('auth/signup'); ?>" class="create">Create Account ?</a>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>