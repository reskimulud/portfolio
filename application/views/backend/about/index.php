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
                        <li class="nav-item"><a class="nav-link active" href="#info" data-toggle="tab">Tentang Saya</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#skills" data-toggle="tab">Data Skil</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="info">
                            <div class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-2 d-flex align-items-center">Picture</div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src=" <?= base_url('assets/img/') . $about['image']; ?>"
                                                    class="img-thumbnail">
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <div class="col-1 mb-1">
                                                        <button href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#image" data-popup="tooltip"
                                                            data-placement="top" title="Change Picture"
                                                            onclick="img(500, 500, 'about/aboutPic', 'about')">
                                                            <i class="fas fa-fw fa-edit"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-1">
                                                        <?php if ($about['image'] != 'default.jpg') : ?>
                                                        <a href="<?= base_url('user/del_img/') . $about['image']; ?>"
                                                            data-popup="tooltip" data-placement="top"
                                                            title="Delete Image" class="btn btn-secondary del-btn"><i
                                                                class="fas fa-fw fa-trash-alt"></i></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <?= form_open_multipart('about/about'); ?>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $about['name']; ?>" name="name"
                                            class="form-control" id="name" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" value="<?= $about['email']; ?>" name="email"
                                            class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Tentang</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control ckeditor" id="ckeditor"
                                            placeholder="Tentang"><?= $about['description']; ?></textarea>
                                    </div>
                                </div>

                                <hr class="my-3">
                                <h4 class="mb-4">Informasi Kontak</h4>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea name="address" class="form-control" id="address"
                                            placeholder="Alamat"><?= $about['address']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gmaps" class="col-sm-2 col-form-label">Alamat Google Maps</label>
                                    <div class="col-sm-10">
                                        <textarea name="gmaps" class="form-control" id="gmaps" rows="6"
                                            placeholder="Google Maps"><?= $about['gmaps']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputSkills" class="col-sm-2 col-form-label">No. Telepon</label>
                                    <div class="input-group col-sm-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="telp">+62</span>
                                        </div>
                                        <input type="number" value="<?= ($about['telp']) ? $about['telp'] : ''; ?>"
                                            name="telp" id="telp" class="form-control" aria-describedby="telp">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="github" class="col-sm-2 col-form-label">Github</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $about['github']; ?>" name="github"
                                            class="form-control" id="github" placeholder="Github">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $about['facebook']; ?>" name="facebook"
                                            class="form-control" id="facebook" placeholder="Facebook">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $about['instagram']; ?>" name="instagram"
                                            class="form-control" id="instagram" placeholder="Instagram">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $about['twitter']; ?>" name="twitter"
                                            class="form-control" id="twitter" placeholder="Twitter">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pinterest" class="col-sm-2 col-form-label">Pinterest</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $about['pinterest']; ?>" name="pinterest"
                                            class="form-control" id="pinterest" placeholder="Pinterest">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="linkedin" class="col-sm-2 col-form-label">LinkedIn</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $about['linkedin']; ?>" name="linkedin"
                                            class="form-control" id="linkedin" placeholder="LinkedIn">
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Perbarui</button>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="skills">
                            <div class="tooltip-demo">
                                <button class="btn btn-primary mb-4 addmenu" data-toggle="modal"
                                    data-target="#newSkillModal" data-popup="tooltip" data-placement="top"
                                    title="Add Data">
                                    <i class=" fas fa-fw fa-plus-square"></i>
                                    Tambah Skill
                                </button>
                            </div>
                            <!-- data table -->
                            <div>
                                <div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i>
                                                Data Skil
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive dt-responsive lg-12">
                                                <table class="table table-hover table-responsive" id="dataTable"
                                                    width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Skil</th>
                                                            <th scope="col">Presentase</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1 ?>
                                                        <?php foreach ($skills as $skill) : ?>
                                                        <tr class="odd gradeX">
                                                            <th scope="row">1</th>
                                                            <td><?= $skill['skill']; ?></td>
                                                            <td>
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="range"
                                                                            value="<?= $skill['percentage']; ?>"
                                                                            class="form-control-range" disabled>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="tooltip-demo">
                                                                    <a href="<?= base_url('menu/editmenu/') ?>"
                                                                        data-toggle="modal" data-target="#editMenuModal"
                                                                        class="badge badge-info" data-popup="tooltip"
                                                                        data-placement="top" title="Edit Data"><i
                                                                            class=" fas fa-fw fa-edit"></i> edit</a>
                                                                    <a href="<?= base_url('menu/deletemenu/') ?>"
                                                                        class=" badge badge-secondary fas del-btn"
                                                                        data-popup="tooltip" data-placement="top"
                                                                        title="Delete Data"><i
                                                                            class=" fas fa-fw fa-trash-alt"></i>
                                                                        delete</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php $i++ ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

<!-- modal about=pic start -->
<div class="modal fade" id="image" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Change Image Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col">
                    <div class="mb-4">
                        <strong>Select Image:</strong>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="upload" name="upload" accept="image/*">
                            <label class="custom-file-label" for="name">Choose file</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="upload-demo" style="width:350px"></div>
                    </div>
                    <!-- <div class="mt-4">
                        <div id="upload-demo-i"></div>
                    </div> -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary upload-result" style="display:none;">Save Change</button>
            </div>
        </div>
    </div>
</div>
<!-- modal about=pic end -->

<!-- add skill modal start -->
<div class="modal fade" id="newSkillModal" tabindex="-1" aria-labelledby="newSkillModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSkillModalLabel">Tambah Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/skill'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="skill" name="skill" placeholder="Nama Skill">
                </div>
                <div class="form-group">
                    <label for="percentage">Persentase (%)</label>
                    <input type="range" name="percentage" min="0" max="100" class="form-control-range" id="percentage">
                    <div id="output-percentage"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<!-- add skill modal end -->