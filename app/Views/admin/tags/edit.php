<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
        <form action="<?= base_url('admin/tags/update/' . $tags['id']) ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Tag</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama_tag')) ? 'is-invalid' : '' ?>" id="nama_tag" name="nama_tag" placeholder="Masukkan nama tag.." value="<?= $tags['nama_tag'] ?>">
                        <div class="invalid-feedback"><?= $validation->getError('nama_tag') ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control <?= ($validation->hasError('slug_tag')) ? 'is-invalid' : '' ?>" id="slug_tag" name="slug_tag" value="<?= $tags['slug_tag'] ?>" readonly>
                        <div class="invalid-feedback"><?= $validation->getError('slug_tag') ?></div>
                    </div>
                    <button class="btn btn-outline-primary m-1"><i class="ti ti-device-floppy"></i> Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>