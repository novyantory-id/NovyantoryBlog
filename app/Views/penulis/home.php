<?= $this->extend('penulis/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Dashboard</h5>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-success p-1">
                    <div class="card-body text-center">
                        <h5 class="fw-semibold mb-4">Jumlah Artikel</h5>
                        <p><strong><?= $totalArtikel ?> Artikel</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-warning p-1">
                    <div class="card-body text-center">
                        <h5 class="fw-semibold mb-4">Jumlah Artikel Saya</h5>
                        <p><strong><?= $totalArtikelByUser ?> Artikel</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-secondary p-1">
                    <div class="card-body text-center">
                        <h5 class="fw-semibold mb-4">Jumlah User</h5>
                        <p><strong><?= $totalUser ?> User</strong></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>