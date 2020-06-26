<div class="container">
    <h4 class="text-center bg-primary m-0 text-white p-2">Tambah Data siswa</h4>
    <form action="<?= base_url('akademik/add') ?>" class="bg-white p-3 border" method="post">
        <div class="form-group">
            <label for="inputEmail">Hari</label>
            <select name="hari" class="form-control">
                <option value="">-- Pilih Hari --</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
            </select>
        </div>

        <div class="form-group">
            <label for="inputEmail">Mata pelajaran</label>
            <select name="mapel" class="form-control">
                <option value="">-- Pilih Mapel --</option>
                <?php foreach ($mapel as $m) : ?>
                    <option value="<?= $m['id'] ?>"><?= $m['nama'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="inputEmail">Kelas</label>
            <select name="kelas" class="form-control">
                <option value="">-- Pilih Kelas --</option>
                <?php foreach ($kelas as $k) : ?>
                    <option value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="inputEmail">Guru</label>
            <select name="guru" class="form-control">
                <option value="">-- Pilih Guru --</option>
                <?php foreach ($guru as $g) : ?>
                    <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
    </form>
</div>