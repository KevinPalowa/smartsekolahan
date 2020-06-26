<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $siswa ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Guru</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $guru ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-graduation-cap  fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Rombel</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $rombel ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="card-title m-b-0">SMK PARIWISATA METLAND SCHOOL</h4>
                </div>

                <table>
                    <tr>
                        <td>NPSN</td>
                        <td> : </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td valign="top">Alamat</td>
                        <td valign="top"> : </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td> : </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> : </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td> : </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SK Pendirian Sekolah</td>
                        <td> : </td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>