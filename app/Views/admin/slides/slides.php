<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
        <a href="<?= base_url('admin/slides/create') ?>" class="btn btn-outline-primary m-1"><i class="ti ti-pencil-plus"></i> Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar Slide</th>
                        <th>Judul Slide</th>
                        <th>Kutipan Slide</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($slides as $s) : ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <td>
                                <img src="<?= base_url('assets/slides/' . $s['gambar_slide']) ?>" alt="" class="img-fluid auto">
                            </td>
                            <td><?= $s['judul_slide'] ?></td>
                            <td><?= $s['kutipan_slide'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/slides/edit/' . $s['id']) ?>" class="btn btn-outline-warning m-1"><i class="ti ti-edit" title="edit data"></i></a>
                                <a href="<?= base_url('admin/slides/delete/' . $s['id']) ?>" class="btn btn-outline-danger m-1 tombol-hapus"><i class="ti ti-trash" title="hapus data"></i></a>
                            </td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>