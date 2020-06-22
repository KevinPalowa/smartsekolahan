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
                            <td><?= $m['nama'] ?></td>
                            <td><?= $m['nisn'] ?></td>
                            <td><?= $m['alamat'] ?></td>
                            <td><?= $m['jk'] == 'l' ? 'Laki laki' : 'Perempuan' ?></td>
                            <td><?= $m['tempat_lahir'] ?></td>
                            <td><?= $m['tanggal_lahir'] ?></td>
                            <td><a href="<?= base_url('siswa/edit/' . $m['id']) ?>" class="badge badge-success mr-3">Edit</a><a href="<?= base_url('siswa/delete/' . $m['id']) ?>" class="badge badge-danger tombol-hapus">Delete</a></td>
                        </tr>
                    <?php $i++;
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('siswa') ?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama siswa">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="kelas" class="form-control">
                                    <option value="x">X</option>
                                    <option value="xi">XI</option>
                                    <option value="xii">XII</option>
                                </select>
                            </div>
                            <div class="col">
                                <select name="jurusan" class="form-control">
                                    <?php foreach ($jurusan as $j) : ?>
                                        <option value="<?= $j['id'] ?>"><?= $j['jurusan'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="jk" class="form-control">
                            <option value="l">Laki - laki</option>
                            <option value="p">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="nik">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="asal sekolah" name="asal_sekolah" placeholder="asal sekolah">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="tanggal daftar" name="tanggal_daftar" placeholder="tanggal daftar">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="anak ke" name="anak_ke" placeholder="anak ke">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="jumlah sodara" name="jumlah_sodara" placeholder="jumlah sodara">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="telpon" name="telpon" placeholder="telpon">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="hp" name="hp" placeholder="hp">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="berat badan" name="berat_badan" placeholder="berat badan">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="tinggi badan" name="tinggi_badan" placeholder="tinggi badan">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="nama ayah" name="nama_ayah" placeholder="nama ayah">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="nama ibu" name="nama_ibu" placeholder="nama ibu">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="pendidikan ayah" name="pendidikan_ayah" placeholder="pendidikan ayah">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="pendidikan ibu" name="pendidikan_ibu" placeholder="pendidikan ibu">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="penghasilan ayah" name="penghasilan_ayah" placeholder="penghasilan ayah">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="pendidikan ibu" name="pendidikan_ibu" placeholder="pendidikan ibu">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="pekerjaan ayah" name="pekerjaan_ayah" placeholder="pekerjaan ayah">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="pekerjaan ibu" name="pekerjaan_ibu" placeholder="pekerjaan ibu">
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir">
                        </div>

                        <div class="col">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal lahir">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>