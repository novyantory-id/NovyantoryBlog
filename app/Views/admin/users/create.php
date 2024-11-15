<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
        <form action="<?= base_url('admin/users/store') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ?>" name="fullname" placeholder="Masukkan nama lengkap.." value="<?= set_value('fullname') ?>">
                <div class="invalid-feedback"><?= $validation->getError('fullname') ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" name="username" placeholder="Masukkan username baru.." value="<?= set_value('username') ?>">
                <div class="invalid-feedback"><?= $validation->getError('username') ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" name="password" placeholder="Masukkan password anda..">
                <div class="invalid-feedback"><?= $validation->getError('password') ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('konfirmasi_password')) ? 'is-invalid' : '' ?>" name="konfirmasi_password" placeholder="Masukkan konfirmasi password anda..">
                <div class="invalid-feedback"><?= $validation->getError('konfirmasi_password') ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">No. HP</label>
                    <input type="number" class="form-control <?= ($validation->hasError('no_handphone')) ? 'is-invalid' : '' ?>" name="no_handphone" placeholder="Masukkan nomor handphone anda.." value="<?= set_value('no_handphone') ?>">
                    <div class="invalid-feedback"><?= $validation->getError('no_handphone') ?></div>
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" name="email" placeholder="Masukkan email aktif anda.." value="<?= set_value('email') ?>">
                    <div class="invalid-feedback"><?= $validation->getError('email') ?></div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bio</label>
                <input type="text" class="form-control <?= ($validation->hasError('bio')) ? 'is-invalid' : '' ?>" name="bio" placeholder="Masukkan bio anda.." value="<?= set_value('bio') ?>">
                <div class="invalid-feedback"><?= $validation->getError('bio') ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Avatar</label>
                <input type="file" class="form-control <?= ($validation->hasError('avatar')) ? 'is-invalid' : '' ?>" name="avatar" value="<?= set_value('avatar') ?>">
                <div class="invalid-feedback"><?= $validation->getError('avatar') ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Role</label>
                <select name="role" id="" class="form-control <?= ($validation->hasError('role')) ? 'is-invalid' : '' ?>" value="<?= set_value('role') ?>">
                    <option value="">--Pilih Role User--</option>
                    <option value="Admin">Admin</option>
                    <option value="Penulis">Penulis</option>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('role') ?></div>
            </div>
            <button type="submit" class="btn btn-outline-primary m-1"><i class="ti ti-device-floppy"></i> Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>