<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container">
        <h4 class="text-center bg-primary m-0 text-white p-2">Tambah Data Guru</h4>
        <form action="#" class="bg-white p-3 border" method="post">
            <div class="form-group">
                <label for="inputEmail">Nama Guru</label>
                <input type="text" class="form-control" id="nama_guru" name="nama">
            </div>

            <div class="form-group">
                <label for="inputEmail">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip">
            </div>

            <div class="form-group">
                <label for="inputEmail">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik">
            </div>

            <div class="form-group">
                <label for="inputEmail">NUPTK</label>
                <input type="text" class="form-control" id="nupt" name="nuptk">
            </div>

            <div class="form-group">
                <label for="inputEmail">Jenis Kelamin</label>
                <div class="form-group checksetkelas">
                    <label>
                        <input type="radio" name="jk" value="P" class="minimal" checked>
                        <span>Perempuan</span>
                    </label>
                    &nbsp;&nbsp;&nbsp;
                    <label>
                        <input type="radio" name="jk" value="L" class="minimal">
                        <span>Laki-laki</span>
                    </label>
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col">
                    <label for="inputEmail">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatlahir" name="tempat_lahir">
                </div>

                <div class="col">
                    <label for="inputEmail">Tanggal lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
            </div>

            <div class="form-group ">
                <label for="inputEmail">Status Kepegawaian</label>
                <select name="status_kepegawaian" class="form-control">
                    <option value="">--Pilih Status Kepegawaian--</option>
                    <option value="cpns">CPNS</option>
                    <option value="gty_pty">GTY/PTY</option>
                    <option value="guru_bantuan_pusat">Guru Bantu Pusat</option>
                    <option value="guru_honor_sekolah">Guru Honor Sekolah</option>
                    <option value="HD_TK.I_provinsi">Honor Daerah TK.I Provinsi</option>
                    <option value="HD_TK.II_kab/kota">Honor Daerah TK.II Kab/Kota</option>
                    <option value="kontak_kerja_WNA">Kontrak Kerja WNA</option>
                    <option value="lainnya">Lainnya</option>
                    <option value="pns">PNS</option>
                    <option value="pns_depag">PNS Depag</option>
                    <option value="pns_diperbantukan">PNS Diperbantukan</option>
                    <option value="tenaga_honor_sekolah">Tenaga Honor Sekolah</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputEmail">Jenis PTK</label>
                <select name="jenis_ptk" class="form-control">
                    <option value="">--Pilih Jenis PTK--</option>
                    <option value="guru_bk">Guru BK</option>
                    <option value="guru_inklusi">Guru Inklusi</option>
                    <option value="guru_kelas">Guru Kelas</option>
                    <option value="guru_magang">Guru Magang</option>
                    <option value="guru_mapel">Guru Mapel</option>
                    <option value="guru_pendamping">Guru Pendamping</option>
                    <option value="guru_tik">Guru TIK</option>
                    <option value="kepala_sekolah">Kepala Sekolah</option>
                    <option value="kindergarten_teacher">Kindergarten Teacher</option>
                    <option value="play_group_teacher">Play Group Teacher</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputEmail">Agama</label>
                <select name="agama" class="form-control">
                    <option value="">--Pilih Agama--</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katholik">Katholik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghuchu">Kong Hu Chu</option>
                    <option value="kkty">Kepercayaan kpd Tuhan YME</option>
                    <option value="tidak_diisi">Tidak diisi</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputEmail">Alamat</label>
                <textarea class="form-control" name="alamat" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="inputEmail">Telepon</label>
                <input type="text" class="form-control" name="telepon" value="">
            </div>

            <div class="form-group">
                <label for="inputEmail">Handphone</label>
                <input type="text" class="form-control" name="hp" value="">
            </div>

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="email" value="" required>
            </div>

            <div class="form-group">
                <label for="inputEmail">Tanggal masuk</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->