<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
            <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>') ?>

            <!-- Button trigger modal -->
            <a href="<?= base_url('rombel/add') ?>" class="btn btn-primary mb-3">Add New Rombel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Wali Kelas</th>
                        <th scope="col">Max</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($rombel as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $m['nama'] ?></td>
                            <td><?= $m['wk_id'] ?></td>
                            <td><?= $m['max'] ?></td>
                            <td><a href="<?= base_url('rombel/edit/' . $m['id']) ?>" class="badge badge-success mr-3">Edit</a><a href="<?= base_url('rombel/delete/' . $m['id']) ?>" class="badge badge-danger tombol-hapus">Delete</a></td>
                        </tr>
                    <?php $i++;
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->