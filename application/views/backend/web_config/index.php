<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-6">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
                    <?php if (validation_errors()) : ?>
                    <div class="flash-error" data-flasherror="<?= $this->session->flashdata('error') ?>"></div>
                    <?php endif; ?>
                    <div class="flash-error" data-flasherror="<?= $this->session->flashdata('error') ?>"></div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#info" data-toggle="tab">Informasi
                                Website</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#detail" data-toggle="tab">Detail
                                Profil</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="info">
                            <?= form_open_multipart('webconfig/web_detail'); ?>
                            <div class="form-horizontal">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Nama Website</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $detail['name']; ?>" name="name"
                                            class="form-control" id="name" placeholder="Nama Website">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" value="<?= $detail['email']; ?>" name="email"
                                            class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="domain" class="col-sm-2 col-form-label">Nama Domain</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="domain" class="form-control" id="domain"
                                            value="<?= base_url(); ?>" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Meta Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Meta Deskripsi"><?= $detail['description']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keyword" class="col-sm-2 col-form-label">Meta Keyword</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $detail['keyword']; ?>" name="keyword"
                                            class="form-control" id="keyword" placeholder="Meta Keyword">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="favicon" class="col-sm-2 col-form-label">Favicon</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file mb-3">
                                            <input type="file" name="favicon" class="custom-file-input" id="favicon"
                                                accept="image/x-icon">
                                            <label class="custom-file-label" for="favicon">Pilih
                                                file...</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-2">
                                        <p class="d-inline">Favicon saat ini :</p> <img width="20%"
                                            src="<?= base_url('favicon.ico'); ?>" alt="favicon">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="logo-dark" class="col-sm-2 col-form-label">Logo Dark</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file mb-3">
                                            <input type="file" name="logo-dark" class="custom-file-input" id="logo-dark"
                                                accept="image/x-icon">
                                            <label class="custom-file-label" for="logo-dark">Pilih
                                                file...</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3">
                                        <p class="d-inline">Logo Dark saat ini :</p> <img height="25px"
                                            src="<?= base_url('assets/images/logo-dark.png'); ?>" alt="logo-dark">
                                    </div>
                                </div>

                                <hr class="my-3">
                                <h4 class="mb-4">Informasi Kontak</h4>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Alamat Kantor</label>
                                    <div class="col-sm-10">
                                        <textarea name="address" class="form-control" id="address"
                                            placeholder="Alamat"><?= $detail['address']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gmaps" class="col-sm-2 col-form-label">Alamat Google Maps</label>
                                    <div class="col-sm-10">
                                        <textarea name="gmaps" class="form-control" id="gmaps" rows="6"
                                            placeholder="Google Maps"><?= $detail['gmaps']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputSkills" class="col-sm-2 col-form-label">No. Telepon</label>
                                    <div class="input-group col-sm-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="telp">+62</span>
                                        </div>
                                        <input type="number" value="<?= ($detail['telp']) ? $detail['telp'] : ''; ?>"
                                            name="telp" id="telp" class="form-control" aria-describedby="telp">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="github" class="col-sm-2 col-form-label">Github</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $detail['github']; ?>" name="github"
                                            class="form-control" id="github" placeholder="Github">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $detail['facebook']; ?>" name="facebook"
                                            class="form-control" id="facebook" placeholder="Facebook">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $detail['instagram']; ?>" name="instagram"
                                            class="form-control" id="instagram" placeholder="Instagram">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $detail['twitter']; ?>" name="twitter"
                                            class="form-control" id="twitter" placeholder="Twitter">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pinterest" class="col-sm-2 col-form-label">Pinterest</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $detail['pinterest']; ?>" name="pinterest"
                                            class="form-control" id="pinterest" placeholder="Pinterest">
                                    </div>
                                </div>

                                <hr class="my-3">
                                <h4 class="mb-4">Privasi dan Kebijakan</h4>

                                <div class="form-group row">
                                    <label for="policy" class="col-sm-2 col-form-label">Privasi dan Kebijakan
                                        <small>(Privacy
                                            and Policy)</small></label>
                                    <div class="col-sm-10">
                                        <textarea name="policy" class="form-control" id="policy" rows="6"
                                            placeholder="Privasi dan Kebijakan"><?= $detail['policy']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="terms" class="col-sm-2 col-form-label">Syarat dan Ketentuan
                                        <small>(Terms and
                                            Conditions)</small></label>
                                    <div class="col-sm-10">
                                        <textarea name="terms" class="form-control" id="terms" rows="6"
                                            placeholder="Syarat dan Ketentuan"><?= $detail['terms']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Perbarui</button>
                                    </div>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->