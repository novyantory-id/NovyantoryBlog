<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Masuk - NovyantoryBlog</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/logos/favicon.png') ?> " />
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.min.css') ?> " />
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?> " />

    <style>
        .logo-home {
            font-size: 23px;
            color: gray;
            font-weight: 700;
        }
    </style>
</head>

<body class="overlay">
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="<?= base_url('/') ?>" class="text-nowrap logo-img d-flex justify-content-center">
                                    <img src="<?= base_url('assets/images/logos/favicon.png') ?> " width="30" alt="" />
                                    <span class="logo-home"> Novyantory<span class="text-success">Blog</span></span>
                                </a>
                                <p class="text-center">Personal Blog by Novyantory</p>

                                <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= session()->getFlashdata('pesan') ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif ?>


                                <form method="post" action="<?= base_url('login') ?>">
                                    <?= csrf_field() ?>
                                    <div class="panel-login mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="<?= ($validation->hasError('username')) ? 'is-invalid' : '' ?> form-control" id="exampleInputEmail1" name="username" placeholder="Username" aria-describedby="emailHelp">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('username') ?>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="<?= ($validation->hasError('password')) ? 'is-invalid' : '' ?> form-control" name="password" placeholder="Password" id="exampleInputPassword1">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password') ?>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js') ?> "></script>
    <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?> "></script>
</body>

</html>