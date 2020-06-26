<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

        <div class="row">
            <div class="col-lg">
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
                <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>') ?>

                <!-- Button trigger modal -->
                <a href="<?= base_url('mapel/add') ?>" class="btn btn-primary mb-3">Add New Siswa</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mata pelajaran</th>
                            <th scope="col">Guru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- End of Main Content -->

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->