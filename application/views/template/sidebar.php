<div class="wrapper">
    <div class="sidebar">
        <ul>
            <img src="<?= base_url('asset/img/logo1.png'); ?>" alt="logo-icon" class="avatar1">
            <div class="user"><?= $user['username']; ?></div>
            <div class="card-name"></div>
            <section class="menu">
                <h3 class="menu-1">Menu</h3>
                <li class="content embed"><a href="<?= base_url('user'); ?>" class="menu">My Drive</a></li>
                <hr>
                <li class="content"><a href="<?= base_url('Auth/logout'); ?>" class="menu">Logout</a></li>
            </section>
        </ul>
    </div>
    <!-- end sidebar -->