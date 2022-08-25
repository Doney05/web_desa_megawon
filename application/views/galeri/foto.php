<section id="content">
    <div class="container">
        <div class="row">

        <div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Data foto</h2>
        <a href="" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#tambahfoto"><b>Tambah foto</b></a>
    </header>

    <div class="content-inner">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($image as $row) : ?>
                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><img src="<?= base_url('upload_file/images/' . $row['galery']); ?>" class="img-thumbnail" style="width:80px; height:60px;"></td>
                        <td><?= $row['keterangan']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/galery/editFoto/' . $row['id']); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"> </span></a> |
                            <a onclick="return confirm('Anda yakin mau menghapus kategori ini?')" href="<?= base_url('admin/galery/hapusFoto/' . $row['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"> </span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
