<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12">
                <img src="<?= base_url('assets/images/profile/' . $writter['avatar']) ?>" alt="" class="img-fluid 50">
            </div>
            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12">
                <table class="table">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>:</td>
                        <td><?= $writter['fullname'] ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>:</td>
                        <td><?= $writter['username'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><?= $writter['email'] ?></td>
                    </tr>
                    <tr>
                        <th>No. Handphone</th>
                        <td>:</td>
                        <td><?= $writter['no_handphone'] ?></td>
                    </tr>
                    <tr>
                        <th>Bio</th>
                        <td>:</td>
                        <td><?= $writter['bio'] ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>:</td>
                        <td><?= $writter['status'] ?></td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>:</td>
                        <td><?= $writter['role'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>