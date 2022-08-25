<div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Sejarah desa</h2>
        <?php foreach ($sejarahDesa as $row) : ?>
        <a href="<?= base_url('admin/profil/updateSejarahDesa/' . $row['id']); ?>" class="btn btn-primary btn-xs pull-right"><b>Update</b></a>
    </header>

    <div class="content-inner">
        <?= $this->session->flashdata('message'); ?>
        <table class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Sejarah desa</th>
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