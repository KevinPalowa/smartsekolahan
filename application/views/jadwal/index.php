<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('jurusan', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
            <!-- Button trigger modal -->
            <a href="<?= base_url('akademik/add') ?>" class="btn btn-primary mb-3">Add New Jadwal</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Senin</th>
                        <th scope="col">Selasa</th>
                        <th scope="col">Rabu</th>
                        <th scope="col">Kamis</th>
                        <th scope="col">Jumat</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->