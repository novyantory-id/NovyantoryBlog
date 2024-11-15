<?= $this->extend('layout.php') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 mt-5">
            <div class="search-artikel mt-3 mb-3 d-flex justify-content-start">
                <h3>Artikel Kategori: <?= ucfirst($slug_kategori) ?></h3>
            </div>
            <?php foreach ($artikelKategori as $ak) : ?>
                <div class="card-artikel mb-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?= base_url('assets/images/artikel/' . $ak['gambar_artikel']) ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-8 card-body-artikel">
                            <h4><a href="<?= base_url('/' . $ak['slug_artikel']) ?>"><?= $ak['judul_artikel'] ?></a></h4>
                            <h6><i class="bi bi-person-fill"></i> <?= $ak['username'] ?> | <span><i class="bi bi-tag-fill"> 31 Agu 2024 </i> </span></h6>
                            <p><?= esc(substr(strip_tags($ak['isi']), 0, 75)) . strlen($ak['isi']) > 100 ? esc(substr(strip_tags($ak['isi']), 0, 75)) . '...' : '' ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 my-5">
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


<?= $this->endSection() ?>