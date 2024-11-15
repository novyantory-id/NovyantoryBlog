<?= $this->extend('layout.php') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6 hero-tagline my-auto">
                <h1>Selamat Datang di Website NovyantoryBlog</h1>
                <p><span class="fw-bold">Novyantory Blog</span> adalah Website yang akan memberikan informasi tentang tanaman buah dan sayuran</p>
                <a href="<?= base_url('artikel') ?>">
                    <button class="button-lg-primary">Temukan Sekarang</button>
                </a>
            </div>
        </div>

        <img src="<?= base_url('assets/images/frontend/main.png') ?>" alt="" class="position-absolute end-0 bottom-0 img-hero">
        <img src="<?= base_url('assets/images/frontend/trolly.png') ?>" alt="" class="position-absolute start-0 bottom-0 img-hero-trolly">
        <img src="<?= base_url('assets/images/frontend/leaf right.png') ?>" alt="" class="leaf-img position-absolute top-0 start-0 img-hero-leaf">
        <img src="<?= base_url('assets/images/frontend/leaf left.png') ?>" alt="" class="leaf-img position-absolute top-0 end-0">
    </div>
</section>
<!-- Hero Section End -->


<!-- Carousel Section -->
<section id="fitur" class="mt-5 overflow-hidden">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2>Hal Menarik Disini</h2>
            </div>
        </div>


        <div class="container position-relative">
            <div class="row">
                <div class="col-12 carousel-track d-flex justify-content-start">
                    <?php foreach ($slide as $key => $s) : ?>
                        <div class="card-fitur me-3 position-relative">
                            <img src="<?= base_url('assets/slides/' . $s['gambar_slide']) ?>" alt="" class="img-fitur">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div>
                                    <h5><?= $s['judul_slide'] ?></h5>
                                    <p><?= $s['kutipan_slide'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="button-arrow button-arrow-left position-absolute start-0 top-50 translate-middle-y" data-bs-target="#carouselExample">
                <i class="bi bi-caret-left-fill"></i>
            </button>
            <button class="button-arrow button-arrow-right position-absolute end-0 top-50 translate-middle-y" data-bs-target="#carouselExample">
                <i class="bi bi-caret-right-fill"></i>
            </button>
        </div>
    </div>
</section>
<!-- Carousel Section End-->

<!-- Main Artikel -->
<section id="artikel-utama">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2>Artikel Utama</h2>
            </div>
        </div>

        <div class="row">
            <?php foreach ($artikel as $a) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card p-2">
                        <img src="<?= base_url('assets/images/artikel/' . $a['gambar_artikel']) ?>" alt="">
                        <div class="card-body">
                            <div class="card-usercategory d-flex justify-content-between">
                                <span><i class="bi bi-person-fill"></i> <?= $a['username'] ?></span>
                                <span><i class="bi bi-tag-fill"></i> <?= $a['nama_kategori'] ?></span>
                            </div>
                            <h4><?= $a['judul_artikel'] ?></h4>
                            <p><?= esc(substr(strip_tags($a['isi']), 0, 75)) . strlen($a['isi']) > 100 ? esc(substr(strip_tags($a['isi']), 0, 75)) . '...' : '' ?></p>
                            <button class="button-white">
                                <a href="<?= base_url('/' . $a['slug_artikel']); ?>">Selengkapnya</a>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="button-more">
            <a href="<?= base_url('artikel') ?>">Lebih Banyak Lagi...</a>
        </button>
    </div>
</section>
<!-- Main Artikel End -->

<!-- Categories Section -->
<section id="categories">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Kategori Artikel</h2>
                <span>Temukan kategori artikel yang ingin dicari</span>
            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($kategori as $k) : ?>
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <a href="<?= base_url('kategori/' . $k['slug_kategori']) ?>" class="text-decoration-none">
                        <div class="card-categories">
                            <div class="circle-icon position-relative mx-auto">
                                <img src="<?= base_url('assets/images/frontend/categories.png') ?>" alt="" class="img-categories position-absolute top-50 start-50 translate-middle">
                            </div>
                            <h3 class="mt-4"><?= $k['nama_kategori'] ?></h3>
                            <p class="mt-3"><?= $k['deskripsi'] ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Contact Us -->
<section id="contact">
    <div class="container-fluid overlayy h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h3>Know Me More? Follow All My Social Media</h3>
                    <div class="contact">
                        <h6>Contact</h6>
                        <div class="mb-3">
                            <i class="bi bi-geo-alt-fill"></i>
                            <a href="#">Lampung, Indonesia</a>
                        </div>

                        <div class="mb-3">
                            <i class="bi bi-envelope"></i></i>
                            <a href="#">yourname@gmail.com</a>
                        </div>
                    </div>
                    <h6>Social Media</h6>
                    <a href="#" class="me-2"><i class="bi bi-discord"></i></a>
                    <a href="#" class="me-2"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#">Novyantory</a>
                </div>
                <div class="col-md-6">
                    <div class="card-contact w-100">
                        <form action="">
                            <h2>Any Question?</h2>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example">
                                <label for="floatingInput" class="d-flex align-items-center">Enter your email address..</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example">
                                <label for="floatingInput" class="d-flex align-items-center">Your Ask..</label>
                            </div>

                            <button type="submit" class="button-contact">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->

<?= $this->endSection() ?>