<div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Potensi Desa</h2>
        <?php foreach ($PotensiDesa as $row) : ?>
            <a href="<?= base_url('admin/profil/updatePotensiDesa/' . $row['id']); ?>" class="btn btn-primary btn-xs pull-right"><b>Update</b></a>
        </header>

        <div class="content-inner">
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Potensi Desa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td><?= $row['profil']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>