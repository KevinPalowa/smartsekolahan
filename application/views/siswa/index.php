<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
            <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>') ?>

            <!-- Button trigger modal -->
            <a href="<?= base_url('siswa/add') ?>" class="btn btn-primary mb-3">Add New Siswa</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tempat lahir</th>
                        <th scope="col">Tanggal lahir</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $m['nama_siswa'] ?></td>
                            <td><?= $m['nisn'] ?></td>
                            <td><?= $m['alamat'] ?></td>
                            <td><?= $m['jk'] == 'l' ? 'Laki laki' : 'Perempuan' ?></td>
                            <td><?= $m['nama_rombel'] ?></td>
                            <td><?= $m['tempat_lahir'] ?></td>
                            <td><?= $m['tanggal_lahir'] ?></td>
                            <td><a href="<?= base_url('siswa/edit/' . $m['id_siswa']) ?>" class="badge badge-success mr-3">Edit</a><a href="<?= base_url('siswa/delete/' . $m['id_siswa']) ?>" class="badge badge-danger tombol-hapus">Delete</a></td>
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