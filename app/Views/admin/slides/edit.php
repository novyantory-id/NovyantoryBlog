<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
        <form action="<?= base_url('admin/slides/update/' . $slides['id']) ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Gambar Slide</label>
                        <input type="hidden" value="<?= $slides['gambar_slide'] ?>" name="gambar_lama">
                        <input type="file" class="form-control <?= ($validation->hasError('judul_slide')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" name="gambar_slide">
                        <div class="invalid-feedback"><?= $validation->getError('gambar_slide') ?></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul Slide</label>
                        <input type="text" class="form-control <?= ($validation->hasError('judul_slide')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" name="judul_slide" value="<?= $slides['judul_slide'] ?>" placeholder="Masukkan judul slide..">
                        <div class="invalid-feedback"><?= $validation->getError('judul_slide') ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kutipan Slide</label>
                        <input type="text" class="form-control <?= ($validation->hasError('kutipan_slide')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" name="kutipan_slide" value="<?= $slides['kutipan_slide'] ?>" placeholder="Masukkan kutipan slide..">
                        <div class="invalid-feedback"><?= $validation->getError('kutipan_slide') ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-outline-primary m-1"><i class="ti ti-device-floppy"></i> Update</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>