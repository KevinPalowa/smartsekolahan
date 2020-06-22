<?php
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <h5>Edit role</h5>
    <form action="<?= base_url('admin/role/edit') ?>" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role Name</label>
                        <input value="<?= $roledit['role'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="role">
                        <input value="<?= $roledit['id'] ?>" type="hidden" name="id">
                    </div>
                    <button class="btn btn-primary">Edit role</button>
                </div>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->