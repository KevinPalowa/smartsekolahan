<div class="container">
    <h4 class="text-center bg-primary m-0 text-white p-2">Tambah Data siswa</h4>
    <form action="<?= base_url('rombel/add') ?>" class="bg-white p-3 border" method="post">
        <div class="form-group">
            <label for="inputEmail">Nama Rombel</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>


        <div class="form-group">
            <label for="inputEmail">Maximal Rombel</label>
            <input type="number" class="form-control" id="max" name="max">
        </div>

        <div class="form-group">
            <label for="inputEmail">Kelas</label>
            <select name="wali_kelas" class="form-control">
                <option value="">-- Pilih Wali Kelas --</option>
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