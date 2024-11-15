<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
        <a href="<?= base_url('admin/users/create') ?>" class="btn btn-outline-primary m-1"><i class="ti ti-pencil-plus"></i> Tambah Data</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>No Handphone</th>
                    <th>Email</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($writter as $w) : ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $w['username'] ?></td>
                        <td><?= $w['fullname'] ?></td>
                        <td><?= $w['no_handphone'] ?></td>
                        <td><?= $w['email'] ?></td>
                        <td>
                            <a href="<?= base_url('admin/users/detail/' . $w['id']) ?>" class="btn btn-outline-success m-1"><i class="ti ti-details" title="detail data"></i></a>

                            <a href="<?= base_url('admin/users/edit/' . $w['id']) ?>" class="btn btn-outline-warning m-1"><i class="ti ti-edit" title="edit data"></i></a>

                            <a href="<?= base_url('admin/users/delete/' . $w['id']) ?>" class="btn btn-outline-danger m-1 tombol-hapus"><i class="ti ti-trash" title="hapus data"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>