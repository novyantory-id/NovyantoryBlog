<?= $this->extend('penulis/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>

        <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('pesan') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>

        <form action="<?= base_url('penulis/password/store') ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="user_id" value="<?= session()->get('writter_id') ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password Lama</label>
                <input type="password" class="form-control <?= ($validation->hasError('password_lama')) ? 'is-invalid' : '' ?>" name="password_lama" placeholder="Masukkan password lama anda..">
                <div class="invalid-feedback"><?= $validation->getError('password_lama') ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password Baru</label>
                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" name="password" placeholder="Masukkan password baru anda..">
                <div class="invalid-feedback"><?= $validation->getError('password') ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('konfirmasi_password')) ? 'is-invalid' : '' ?>" name="konfirmasi_password" placeholder="Masukkan konfirmasi password baru anda..">
                <div class="invalid-feedback"><?= $validation->getError('konfirmasi_password') ?></div>
            </div>
            <button type="submit" class="btn btn-outline-primary m-1"><i class="ti ti-device-floppy"></i> Ubah Password</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>