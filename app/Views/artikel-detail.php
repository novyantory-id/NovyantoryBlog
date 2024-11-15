<?= $this->extend('layout.php') ?>

<?= $this->section('content') ?>

<div class="container-fluid container-artikel overflow-hidden">
    <div class="row">
        <div class="col-12 mt-3 w-100">
            <div class="breadcrumb-artikel d-flex align-items-center my-5">
                <div class="bread-crumb-artikel-isi pt-3">
                    <div class="row ms-2">
                        <div class="back-to-home col-1 d-flex align-items-center">
                            <a href="<?= base_url('/') ?>"><i class="bi bi-house-fill"></i></a>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                        <div class="artikel-judul col-7 d-flex mt-2 ms-3">
                            <p>Artikel
                                <i class="bi bi-arrow-right"></i>
                                <?= esc($artikel_detail['judul_artikel']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="ms-4">
                    <img src=" <?= base_url('assets/images/artikel/' . $artikel_detail['gambar_artikel']) ?>" alt="" class="img-artikel">
                    <div class="field-artikel">
                        <p><?= esc($artikel_detail['nama_kategori']) ?> | <span> 31 Agustus 2024</span></p>
                        <p>Created by <?= esc($artikel_detail['username']) ?></p>
                    </div>
                    <!-- isi Konten -->
                    <div class="mt-3 mb-5">
                        <h2><?= esc($artikel_detail['judul_artikel']) ?></h2>
                        <?= $artikel_detail['isi'] ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="ms-4">
                    <h5 class="mb-3">Artikel Lainnya</h5>

                    <?php foreach ($artikel as $a) : ?>
                        <div class="artikel-lainnya mb-2">
                            <a href="<?= base_url('/' . $a['slug_artikel']); ?>" class="d-flex align-items-center">
                                <img src="<?= base_url('assets/images/artikel/' . $a['gambar_artikel']) ?>" alt="">
                                <p><?= $a['judul_artikel'] ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>

                    <!-- Category Artikel -->
                    <div class="my-5">
                        <div class="card-categories-artikel">
                            <div>
                                <h4>
                                    Categories
                                </h4>
                                <?php foreach ($kategori as $k) : ?>
                                    <a href="<?= base_url('kategori/' . $k['slug_kategori']) ?>" class="text-success text-decoration-none">
                                        <p>
                                            <?= $k['nama_kategori'] ?>
                                        </p>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>