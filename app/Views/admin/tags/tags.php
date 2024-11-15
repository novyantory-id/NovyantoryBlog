<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
        <a href="<?= base_url('admin/tags/create') ?>" class="btn btn-outline-primary m-1"><i class="ti ti-pencil-plus"></i> Tambah Data</a>
        <table class="table table-hover" id="datatables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tag</th>
                    <th>Slug</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($tags as $t) : ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $t['nama_tag'] ?></td>
                        <td><?= $t['slug_tag'] ?></td>
                        <td>
                            <a href="<?= base_url('admin/tags/edit/' . $t['id']) ?>" class="btn btn-outline-warning m-1"><i class="ti ti-edit" title="edit data"></i></a>
                            <a href="<?= base_url('admin/tags/delete/' . $t['id']) ?>" class="btn btn-outline-danger m-1 tombol-hapus"><i class="ti ti-trash" title="hapus data"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>