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
                <div class="kotak-sign cf">
                    <div class="header">
                        <img src="<?= base_url(); ?>asset/img/logo1.png" alt="Logo" class="Logo">
                        <h3 class="title">Create Your Account</h3>
                        <p>to join with us</p>
                    </div>

                    <form class="form" action="<?= base_url('auth/signup'); ?>" method="post">
                        <section class="username-s">
                            <input type="text" class="form-control full-name" placeholder="Full Name" name="username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger" style="position:relative; top:3px;margin-left:55px; font-size: .930em; font-weight: 100">', '</small>'); ?>
                        </section>

                        <section class="email-s">
                            <input type="text" class="form-control email" placeholder="username@gmail.com" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger" style="position:relative; top:3px;margin-left:55px; overflow: auto; font-size: .930em; font-weight: 100">', '</small>'); ?>
                            <p class="text">You can use letter, number and period.</p>
                        </section>

                        <section class="password">
                            <div class="row">
                                <input type="password" class="form-control password-input" placeholder="Password" name="password">

                                <input type="password" class="form-control confirm-input" placeholder="Confirm" name="confirm">

                            </div>
                            <p class="text">You can use letter, number and period.</p>
                            <br>
                        </section>

                        <section class="form-group">
                            <a href="<?= base_url('auth'); ?>" class="create">Sign In ?</a>

                            <button type="submit" class="signin cf btn ">Sign Up</button>
                        </section>
                    </form>
                    <div class="hero">
                        <img src="<?= base_url(); ?>asset/img/Security-icon.png" alt="icon" class="icon-back">
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>