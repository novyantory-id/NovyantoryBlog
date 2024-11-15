<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>

        <div class="row">
            <div class="col-md-6">
                <form method="post" action="<?= base_url('admin/kategori/update/' . $kategori['id']) ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                        <input type="text" class="<?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : '' ?> form-control" name="nama_kategori" id="nama_kategori" aria-describedby="emailHelp" placeholder="Masukkan nama kategori" value="<?= $kategori['nama_kategori'] ?>">
                        <div class="invalid-feedback"><?= $validation->getError('nama_kategori') ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="<?= ($validation->hasError('slug_kategori')) ? 'is-invalid' : '' ?> form-control" name="slug_kategori" id="slug_kategori" aria-describedby="emailHelp" placeholder="Masukkan slug kategori" value="<?= $kategori['slug_kategori'] ?>">
                        <div class="invalid-feedback"><?= $validation->getError('slug_kategori') ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                        <input type="text" class="<?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?> form-control" name="deskripsi" aria-describedby="emailHelp" placeholder="Masukkan deskripsi kategori" value="<?= $kategori['deskripsi'] ?>">
                        <div class="invalid-feedback"><?= $validation->getError('deskripsi') ?></div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary m-1"><i class="ti ti-device-floppy"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection() ?>