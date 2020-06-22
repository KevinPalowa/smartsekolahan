<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message') ?>
            <form action="<?= base_url('user/changepassword') ?>" method="post">
                <form>
                    <div class="form-group">
                        <label for="currentPassword">Current password</label>
                        <input type="password" class="form-control" name="currentpassword" id="currentPassword">
                        <?= form_error('currentpassword', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New password</label>
                        <input type="password" class="form-control" name="newpassword1" id="newPassword">
                        <?= form_error('newpassword1', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="newPassword2">Repeat password</label>
                        <input type="password" class="form-control" name="newpassword2" id="newPassword2">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Change password</button>
                    </div>
                </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->