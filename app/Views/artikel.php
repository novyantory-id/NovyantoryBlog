<?= $this->extend('layout.php') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 mt-5">
            <div class="search-artikel my-5 d-flex justify-content-end">
                <input type="text" id="search" placeholder="Temukan Artikel...">
            </div>

            <div id="data-container">
                <?php foreach ($artikel as $a) : ?>
                    <div class="card-artikel mb-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?= base_url('assets/images/artikel/' . $a['gambar_artikel']) ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-8 card-body-artikel">
                                <h4><a href="<?= base_url('/' . $a['slug_artikel']) ?>"><?= $a['judul_artikel'] ?></a></h4>
                                <h6 class="d-flex justify-content-start"><i class="bi bi-tag-fill me-2"><?= $a['nama_kategori'] ?></i>
                                    <span><i class="bi bi-clock-history"></i>
                                        <td><?= date('d-m-Y, H:i', strtotime($a['created_at'])) ?></td>
                                    </span>
                                </h6>
                                <p><?= esc(substr(strip_tags($a['isi']), 0, 75)) . strlen($a['isi']) > 100 ? esc(substr(strip_tags($a['isi']), 0, 75)) . '...' : '' ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="pagination-container"></div>

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