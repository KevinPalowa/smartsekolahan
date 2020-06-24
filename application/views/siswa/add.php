<div class="container">
    <h4 class="text-center bg-primary m-0 text-white p-2">Tambah Data siswa</h4>
    <form action="<?= base_url('siswa/add') ?>" class="bg-white p-3 border" method="post">
        <div class="form-group">
            <label for="inputEmail">Tanggal Daftar</label>
            <input type="date" class="form-control" id="tanggaldaftar" name="tanggal_daftar">
        </div>


        <div class="form-group">
            <label for="inputEmail">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="inputEmail">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik">
        </div>

        <div class="form-group">
            <label for="inputEmail">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn">
        </div>

        <div class="form-row mb-3">
            <div class="col">
                <label for="inputEmail">Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="">-- Pilih Kelas --</option>
                    <option value="vii">VII</option>
                    <option value="vii">VIII</option>
                    <option value="ix">IX</option>
                </select>
            </div>

            <div class="col">
                <label for="inputEmail">Rombel</label>
                <select name="rombel" class="form-control">
                    <option value="">-- Pilih Rombel --</option>
                    <?php foreach ($rombel as $r) : ?>
                        <option value="<?= $r['id'] ?>"><?= $r['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
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

        <div class="form-group">
            <label for="inputEmail">Agama</label>
            <select name="agama" class="form-control">
                <option value="">-- Pilih Agama --</option>
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

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail">Anak Ke</label>
                    <input type="text" class="form-control" name="anak_ke" value="" onkeypress="return onlyNumbers(event)">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail">Jumlah saudara</label>
                    <input type="text" class="form-control" name="jumlah_saudara" value="" onkeypress="return onlyNumbers(event)">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail">Alamat</label>
            <textarea class="form-control" rows="3" name="alamat"></textarea>
        </div>

        <h6>Kecamatan</h6>
        <div class="form-group">
            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
        </div>


        <div class="form-group">
            <label for="inputEmail">Telpon</label>
            <input type="text" class="form-control" id="telpon" name="telpon">
        </div>


        <div class="form-group">
            <label for="inputEmail">Handphone</label>
            <input type="text" class="form-control" id="hp" name="hp">
        </div>


        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail">Berat badan</label>
                    <input type="text" class="form-control" name="berat_badan" value="" onkeypress="return onlyNumbers(event)" placeholder="kg">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="inputEmail">Tinggi Badan</label>
                    <input type="text" class="form-control" name="tinggi_badan" value="" onkeypress="return onlyNumbers(event)" placeholder="cm">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail">Keterangan</label>
            <textarea class="form-control" rows="3" name="keterangan"></textarea>
        </div>

        <div class="form-row mb-3">
            <div class="col">
                <label for="inputEmail">Nama Ayah</label>
                <input type="text" class="form-control" id="namaayah" name="nama_ayah">
            </div>

            <div class="col">
                <label for="inputEmail">Nama Ibu</label>
                <input type="text" class="form-control" id="namaibu" name="nama_ibu">
            </div>
        </div>

        <div class="form-row mb-3">
            <div class="col">
                <label for="inputEmail">Pendidikan Ayah</label>
                <select name="pendidikan_ayah" class="form-control">
                    <option value="">-- Pilih Pendidikan Ayah --</option>
                    <option value="tidak diisi">(tidak diisi)</option>
                    <option value="d1">D1</option>
                    <option value="d2">D2</option>
                    <option value="d3">D3</option>
                    <option value="d4">D4</option>
                    <option value="informal">Informal</option>
                    <option value="lainnya">Lainnya</option>
                    <option value="nonformal">Non formal</option>
                    <option value="paketA">Paket A</option>
                    <option value="paketB">Paket B</option>
                    <option value="paketC">Paket C</option>
                    <option value="paud">PAUD</option>
                    <option value="putusSd">Putus SD</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                    <option value="sd">SD / sederajat</option>
                    <option value="sma">SMA / sederajat</option>
                    <option value="smp">SMP / sederajat</option>
                    <option value="tidakSekolah">Tidak sekolah</option>
                    <option value="tk">TK / sederajat</option>
                </select>
            </div>

            <div class="col">
                <label for="inputEmail">Pendidikan Ibu</label>
                <select name="pendidikan_ibu" class="form-control">
                    <option value="">-- Pilih Pendidikan Ibu --</option>
                    <option value="tidak diisi">(tidak diisi)</option>
                    <option value="d1">D1</option>
                    <option value="d2">D2</option>
                    <option value="d3">D3</option>
                    <option value="d4">D4</option>
                    <option value="informal">Informal</option>
                    <option value="lainnya">Lainnya</option>
                    <option value="nonformal">Non formal</option>
                    <option value="paketA">Paket A</option>
                    <option value="paketB">Paket B</option>
                    <option value="paketC">Paket C</option>
                    <option value="paud">PAUD</option>
                    <option value="putusSd">Putus SD</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                    <option value="sd">SD / sederajat</option>
                    <option value="sma">SMA / sederajat</option>
                    <option value="smp">SMP / sederajat</option>
                    <option value="tidakSekolah">Tidak sekolah</option>
                    <option value="tk">TK / sederajat</option>
                </select>
            </div>
        </div>



        <div class="form-row mb-3">
            <div class="col">
                <label for="inputEmail">Pekerjaan Ayah</label>
                <select name="pekerjaan_ayah" class="form-control">
                    <option value="">-- Pilih pekerjaan Ayah --</option>
                    <option value="tidak diisi">(tidak diisi)</option>
                    <option value="buruh">Buruh</option>
                    <option value="karyawan_swasta">Karyawan Swasta</option>
                    <option value="lainnya">Lainnya</option>
                    <option value="nelayan">Nelayan</option>
                    <option value="pedagang_besar">Pedagang Besar</option>
                    <option value="pedagang_kecil">Pedagang Kecil</option>
                    <option value="pensiunan">Pensiunan</option>
                    <option value="petani">Petani</option>
                    <option value="peternak">Peternak</option>
                    <option value="pnp">PNS/TNI/Polri</option>
                    <option value="sudah_meninggal">Sudah Meninggal</option>
                    <option value="tki">Tenaga Kerja Indonesia</option>
                    <option value="tidak_bekerja">Tidak bekerja</option>
                    <option value="tdd">Tidak dapat diterapkan</option>
                    <option value="wiraswasta">Wiraswasta</option>
                    <option value="wirausaha">Wirausaha</option>
                </select>
            </div>

            <div class="col">
                <label for="inputEmail">Pekerjaan Ibu</label>
                <select name="pekerjaan_ibu" class="form-control">
                    <option value="">-- Pilih pekerjaan ibu --</option>
                    <option value="tidak diisi">(tidak diisi)</option>
                    <option value="buruh">Buruh</option>
                    <option value="karyawan_swasta">Karyawan Swasta</option>
                    <option value="lainnya">Lainnya</option>
                    <option value="nelayan">Nelayan</option>
                    <option value="pedagang_besar">Pedagang Besar</option>
                    <option value="pedagang_kecil">Pedagang Kecil</option>
                    <option value="pensiunan">Pensiunan</option>
                    <option value="petani">Petani</option>
                    <option value="peternak">Peternak</option>
                    <option value="pnp">PNS/TNI/Polri</option>
                    <option value="sudah_meninggal">Sudah Meninggal</option>
                    <option value="tki">Tenaga Kerja Indonesia</option>
                    <option value="tidak_bekerja">Tidak bekerja</option>
                    <option value="tdd">Tidak dapat diterapkan</option>
                    <option value="wiraswasta">Wiraswasta</option>
                    <option value="wirausaha">Wirausaha</option>
                </select>
            </div>
        </div>



        <div class="form-row mb-3">
            <div class="col">
                <label for="inputEmail">Penghasilan ayah</label>
                <select name="penghasilan_ayah" class="form-control">
                    <option value="">-- Pilih penghasilan Ayah --</option>
                    <option value="tidak diisi">(tidak diisi)</option>
                    <option value="1">Kurang dari Rp 1.000.000</option>
                    <option value="11">Kurang dari Rp. 500,000</option>
                    <option value="9">Lainnya</option>
                    <option value="3">Lebih dari Rp 2.000.000</option>
                    <option value="16">Lebih dari Rp. 20,000,000</option>
                    <option value="2">Rp 1.000.000 - Rp 2.000.000</option>
                    <option value="13">Rp. 1,000,000 - Rp. 1,999,999</option>
                    <option value="14">Rp. 2,000,000 - Rp. 4,999,999</option>
                    <option value="15">Rp. 5,000,000 - Rp. 20,000,000</option>
                    <option value="12">Rp. 500,000 - Rp. 999,999</option>
                    <option value="99">Tidak Berpenghasilan</option>
                </select>
            </div>

            <div class="col">
                <label for="inputEmail">Penghasilan Ibu</label>
                <select name="penghasilan_ibu" class="form-control">
                    <option value="">-- Pilih penghasilan Ibu --</option>
                    <option value="tidak diisi">(tidak diisi)</option>
                    <option value="1">Kurang dari Rp 1.000.000</option>
                    <option value="11">Kurang dari Rp. 500,000</option>
                    <option value="9">Lainnya</option>
                    <option value="3">Lebih dari Rp 2.000.000</option>
                    <option value="16">Lebih dari Rp. 20,000,000</option>
                    <option value="2">Rp 1.000.000 - Rp 2.000.000</option>
                    <option value="13">Rp. 1,000,000 - Rp. 1,999,999</option>
                    <option value="14">Rp. 2,000,000 - Rp. 4,999,999</option>
                    <option value="15">Rp. 5,000,000 - Rp. 20,000,000</option>
                    <option value="12">Rp. 500,000 - Rp. 999,999</option>
                    <option value="99">Tidak Berpenghasilan</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
    </form>
</div>