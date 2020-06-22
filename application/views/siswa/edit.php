<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <form action="<?= base_url('siswa') ?>" method="post">

        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <input type="text" value="<?= $siswa[0]['nama'] ?>" class="form-control" id="nama" name="nama" placeholder="Nama siswa">
                </div>
                <div class="form-group">
                    <input type="text" value="<?= $siswa[0]['nis'] ?>" class="form-control" id="nis" name="nis" placeholder="NIS">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?= $siswa[0]['alamat'] ?>" id="alamat" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="jk" name="jk" value="<?= $siswa[0]['jk'] ?>" placeholder="Jenis kelamin">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $siswa[0]['kelas'] ?>" placeholder="Kelas">
                </div>
                <div class="form-group">
                    <input value="<?= $siswa[0]['jurusan'] ?>" type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                </div>
                <div class="form-group">
                    <input type="text" value="<?= $siswa[0]['tempat_lahir'] ?>" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal lahir" value="<?= $siswa[0]['tanggal_lahir'] ?>">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>

    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->