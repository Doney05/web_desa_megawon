<div id="content">
    <header>
        <h2 class="page_title">Update potensi desa</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <?php echo form_open('admin/profil/updatePotensiDesa', array('method' => 'POST')); ?>
            <input type="hidden" name="id" value="<?= $PotensiDesa['id']; ?>">

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" value="<?= $PotensiDesa['judul']; ?>">
                <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="title">Sejarah Desa</label>
                <textarea class="form-control summernote" placeholder="Profil pemerintah desa" name="profil"><?= $PotensiDesa['profil']; ?></textarea>
                <?= form_error('profil', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="clearfix">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>