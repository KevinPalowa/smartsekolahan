<?php

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <h5>Edit sub menu</h5>
    <form action="<?= base_url('menu/submenuedit') ?>" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub menu name</label>
                        <input value="<?= $subMenuEdit['title'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="submenu">
                        <input value="<?= $subMenuEdit['id'] ?>" type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub menu url</label>
                        <input value="<?= $subMenuEdit['url'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="url">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub menu icon</label>
                        <input value="<?= $subMenuEdit['icon'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="icon">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub menu active</label>
                        <input value="<?= $subMenuEdit['is_active'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="is_active">
                    </div>

                    <button class="btn btn-primary">Edit menu</button>
                </div>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->