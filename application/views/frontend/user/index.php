<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container mt-5 pt-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
                    <?php if (validation_errors()) : ?>
                    <div class="flash-error" data-flasherror="<?= $this->session->flashdata('error') ?>"></div>
                    <?php endif; ?>
                    <div class="flash-error" data-flasherror="<?= $this->session->flashdata('error') ?>"></div>

                    <style>
                    .img-circle {
                        border-radius: 50%;
                        height: 90px;
                    }
                    </style>

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline mt-3">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="<?= base_url('assets/img/profile/') . $user['image']; ?>"
                                    alt="User profile picture">
                            </div>

                            <h4 class="profile-username text-center"><?= $user['name']; ?></h4>

                            <p class="text-muted text-center">@<?= $user['username']; ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Dalam Keranjang</b> <a class="float-right">12</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Buku yang disukai</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Total Transaksi</b> <a class="float-right">2</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9 mt-3">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#detail" data-toggle="tab">Detail
                                        Profil</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body overflow-auto" style="max-height: 450px;">
                            <!-- detail -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="detail">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <p class="text-muted">
                                                    <?= $user['username']; ?>
                                                </p>
                                                <!-- <input type="email" class="form-control" id="inputName"
                                                    placeholder="Name"> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <p class="text-muted">
                                                    <?= $user['email']; ?>
                                                </p>
                                                <!-- <input type="email" class="form-control" id="inputEmail"
                                                    placeholder="Email"> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <p class="text-muted">
                                                    <?= $user['name']; ?>
                                                </p>
                                                <!-- <input type="text" class="form-control" id="inputName2"
                                                    placeholder="Name"> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience"
                                                class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-10">
                                                <p class="text-muted">
                                                    <?= $user['profession']; ?>
                                                </p>
                                                <!-- <textarea class="form-control" id="inputExperience"
                                                    placeholder="Experience"></textarea> -->
                                            </div>
                                        </div>

                                    </form>

                                    <div class="form-horizontal">
                                        <div class="row">
                                            <div class="offset-sm-2 col">
                                                <a href="<?= base_url('user/edit'); ?>">
                                                    <button class="btn btn-success"><i class="fas fa-fw fa-edit"></i>
                                                        Edit</button>
                                                </a>
                                                <a href="<?= base_url('user/changePassword'); ?>">
                                                    <button class="btn btn-danger"><i class="fas fa-fw fa-key"></i>
                                                        Ubah Password</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->