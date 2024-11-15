<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
        <a href="<?= base_url('admin/artikel/create') ?>" class="btn btn-outline-primary m-1"><i class="ti ti-pencil-plus"></i> Add Post</a>
        <div class="table-responsive">
            <table class="table table-hover" id="datatables">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Penulis</th>
                        <th>Created</th>
                        <th>Judul Artikel</th>
                        <th>Slug</th>
                        <th>Isi</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($artikel as $a) : ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <td class="name-container">
                                <?= $a['username'] ?>
                                <a href="<?= base_url('admin/artikel/edit/' . $a['id']) ?>" class="detail-link">Edit</a>
                                <a href="<?= base_url('admin/artikel/delete/' . $a['id']) ?>" class="text-danger tombol-hapus detail-link">Delete</a>
                            </td>
                            <td><?= date('d-m-Y, H:i', strtotime($a['created_at'])) ?></td>
                            <td><?= $a['judul_artikel'] ?></td>
                            <td><?= $a['slug_artikel'] ?></td>
                            <td><?= esc(substr(strip_tags($a['isi']), 0, 75)) . strlen($a['isi']) > 100 ? esc(substr(strip_tags($a['isi']), 0, 75)) . '...' : '' ?></td>
                            <td><?= $a['nama_kategori'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>