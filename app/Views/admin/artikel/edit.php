<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>
<h5 class="card-title fw-semibold ms-4 mb-4"><?= $title ?></h5>

<form action="<?= base_url('admin/artikel/update/' . $artikel['id']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="row">
        <div class="col-xl-8">
            <input type="text" name="user_id" value="<?= $artikel['user_id'] ?>">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <input type="text" class="form-control <?= ($validation->hasError('judul_artikel')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" name="judul_artikel" placeholder="Masukkan judul disini" value="<?= $artikel['judul_artikel'] ?>">
                        <div class="invalid-feedback"><?= $validation->getError('judul_artikel') ?></div>
                    </div>
                    <div class="mb-3">
                        <textarea name="isi" id="summernote" cols="30" rows="10" class="form-control summernote <?= ($validation->hasError('isi')) ? 'is-invalid' : '' ?>"><?= $artikel['isi'] ?></textarea>
                        <div class="invalid-feedback"><?= $validation->getError('isi') ?></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Slug</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keyword</label>
                        <input type="text" class="form-control <?= ($validation->hasError('keyword')) ? 'is-invalid' : '' ?>" name="keyword" id="keyword" value="<?= $artikel['keyword'] ?>">
                        <div class="invalid-feedback"><?= $validation->getError('keyword') ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control <?= ($validation->hasError('slug_artikel')) ? 'is-invalid' : '' ?>" name="slug_artikel" id="slug_artikel" value="<?= $artikel['slug_artikel'] ?>" readonly>
                        <div class="invalid-feedback"><?= $validation->getError('slug_artikel') ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5>Kategori</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <select name="kategori_id" id="" class="form-control <?= ($validation->hasError('kategori_id')) ? 'is-invalid' : '' ?>">
                            <option value="<?= $artikel['kategori_id'] ?>" selected><?= $artikel['nama_kategori'] ?></option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback"><?= $validation->getError('kategori_id') ?></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Feature Image</h5>
                </div>
                <div class="card-body">
                    <input type="hidden" value="<?= $artikel['gambar_artikel'] ?>" name="gambar_lama">
                    <input type="file" class="form-control <?= ($validation->hasError('gambar_artikel')) ? 'is-invalid' : '' ?>" name="gambar_artikel">
                    <div class="invalid-feedback"><?= $validation->getError('gambar_artikel') ?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Publish</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-dark 50 m-1">Save Draft</button>
                        <button type="submit" class="btn btn-primary m-1">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection() ?>