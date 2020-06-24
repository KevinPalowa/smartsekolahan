<div class="container">
    <h4 class="text-center bg-primary m-0 text-white p-2">Tambah Data siswa</h4>
    <form action="<?= base_url('lms/add') ?>" enctype="multipart/form-data" class="bg-white p-3 border" method="post">
        <div class="form-group">
            <label for="inputEmail">Nama Tugas</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>


        <div class="form-group">
            <label for="inputEmail">Rombel</label>
            <select name="rombel" class="form-control" id="">
                <option value="">--- Pilih Rombel</option>
                <?php foreach ($rombel as $r) : ?>
                    <option value="<?= $r['id'] ?>"><?= $r['nama'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="inputEmail">File</label>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
    </form>
</div>