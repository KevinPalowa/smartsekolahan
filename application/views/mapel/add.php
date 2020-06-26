<div class="container">
    <h4 class="text-center bg-primary m-0 text-white p-2">Tambah Data siswa</h4>
    <form action="<?= base_url('mapel/add') ?>" class="bg-white p-3 border" method="post">
        <div class="form-group">
            <label for="inputEmail">Mata Pelajaran</label>
            <input type="text" class="form-control" id="tanggaldaftar" name="mapel">
        </div>


        <div class="form-row mb-3">
            <div class="col">
                <label for="inputEmail">Guru</label>
                <select name="guru" class="form-control">
                    <option value="">-- Pilih guru --</option>
                    <?php foreach ($guru as $g) : ?>
                        <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
    </form>

</div>