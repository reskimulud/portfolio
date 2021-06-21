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
                        <li class="nav-item"><a class="nav-link" href="#skills" data-toggle="tab">Data Skill</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#education" data-toggle="tab">Data Pendidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience" data-toggle="tab">Data Pengalaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#certifications" data-toggle="tab">Data Sertifikat</a>
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
                                                        <?php $href = base_url('about') ?>
                                                        <button href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#image" data-popup="tooltip"
                                                            data-placement="top" title="Change Picture"
                                                            onclick="img(500, 500, 'about/aboutPic', '<?= $href; ?>')">
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
                            <div class="row">

                                <!-- data table -->
                                <div class="col-md-6">
                                    <div class="tooltip-demo">
                                        <button class="btn btn-primary mb-4 addmenu" data-toggle="modal"
                                            data-target="#newSkillModal" data-popup="tooltip" data-placement="top"
                                            title="Add Data">
                                            <i class=" fas fa-fw fa-plus-square"></i>
                                            Tambah Skill
                                        </button>
                                    </div>
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
                                                            <th scope="col">Kategori</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1 ?>
                                                        <?php foreach ($skills as $skill) : ?>
                                                        <tr class="odd gradeX">
                                                            <th scope="row"><?= $i; ?></th>
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
                                                            <td><?= $skill['category_name']; ?></td>
                                                            <td>
                                                                <div class="tooltip-demo">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#editSkillModal<?= $skill['id']; ?>"
                                                                        class="badge badge-info" data-popup="tooltip"
                                                                        data-placement="top" title="Edit Data"><i
                                                                            class=" fas fa-fw fa-edit"></i> edit</a>
                                                                    <a href="<?= base_url('about/deleteskill/') . $skill['id'] ?>"
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

                                <div class="col-md-6">
                                    <div class="tooltip-demo">
                                        <button class="btn btn-primary mb-4 addmenu" data-toggle="modal"
                                            data-target="#newCategorySkillModal" data-popup="tooltip"
                                            data-placement="top" title="Add Data">
                                            <i class=" fas fa-fw fa-plus-square"></i>
                                            Tambah Kategori
                                        </button>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i>
                                                Data Kategori
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive dt-responsive lg-12">
                                                <div class="table-responsi">
                                                    <table class="table table-hover table-responsive" width="100%"
                                                        cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Kategori</th>
                                                                <th>Posisi</th>
                                                                <th>Jumlah</th>
                                                                <td>Aksi</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1 ?>
                                                            <?php foreach ($categories as $category) : ?>
                                                            <?php $count = $this->db->get_where('about_skills', ['category_id' => $category['id']])->result_array(); $count = count($count); ?>
                                                            <tr>
                                                                <td><?= $i; ?></td>
                                                                <td><?= $category['category_name']; ?></td>
                                                                <td>
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#editPositionModal<?= $category['id']; ?>"
                                                                        data-popup="tooltip" data-placement="top"
                                                                        title="Ubah Posisi"><?= $category['position']; ?></a>
                                                                </td>
                                                                <td><?= $count; ?></td>
                                                                <td>
                                                                    <div class="tooltip-demo">
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#editCategorySkillModal<?= $category['id']; ?>"
                                                                            class="badge badge-info"
                                                                            data-popup="tooltip" data-placement="top"
                                                                            title="Edit Data"><i
                                                                                class=" fas fa-fw fa-edit"></i> edit</a>
                                                                        <?php if ($count == 0) : ?>
                                                                        <a href="<?= base_url('about/deletecategoryskill/') . $category['id'] ?>"
                                                                            class=" badge badge-secondary fas del-btn"
                                                                            data-popup="tooltip" data-placement="top"
                                                                            title="Delete Data"><i
                                                                                class=" fas fa-fw fa-trash-alt"></i>
                                                                            delete</a>
                                                                        <?php endif; ?>
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
                        <div class="tab-pane" id="education">
                            <div class="tooltip-demo">
                                <button class="btn btn-primary mb-4 addmenu" data-toggle="modal"
                                    data-target="#newEducationModal" data-popup="tooltip" data-placement="top"
                                    title="Add Data">
                                    <i class=" fas fa-fw fa-plus-square"></i>
                                    Tambah Pendidikan
                                </button>
                            </div>
                            <!-- data table -->
                            <div>
                                <div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i>
                                                Data Pendidikan
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive dt-responsive lg-12">
                                                <table class="table table-hover table-responsive" id="dataTable"
                                                    width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Degree</th>
                                                            <th scope="col">Kampus/Sekolah</th>
                                                            <th scope="col">Waktu</th>
                                                            <th scope="col">Lulus?</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1 ?>
                                                        <?php foreach ($educations as $education) : ?>
                                                        <tr class="odd gradeX">
                                                            <th scope="row"><?= $i; ?></th>
                                                            <td><?= $education['degree']; ?></td>
                                                            <td><?= $education['school']; ?></td>
                                                            <td><?= date('M, Y', $education['start']) ?> -
                                                                <?= ($education['is_graduated'] == 1) ? date('M, Y', $education['until']) : 'sekarang'; ?>
                                                            </td>
                                                            <td align="center">
                                                                <i
                                                                    class="fas fa-fw <?= ($education['is_graduated'] == 1) ? 'text-success fa-check-circle' : 'text-secondary fa-times-circle' ?>"></i>
                                                            </td>
                                                            <td><?= $education['description']; ?></td>
                                                            <td>
                                                                <div class="tooltip-demo">
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#editEducationModal<?= $education['id']; ?>"
                                                                        class="badge badge-info" data-popup="tooltip"
                                                                        data-placement="top" title="Edit Data"><i
                                                                            class=" fas fa-fw fa-edit"></i> edit</a>
                                                                    <a href="<?= base_url('about/deleteeducation/') . $education['id'] ?>"
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
                        <div class="tab-pane" id="experience">
                            <div class="tooltip-demo">
                                <button class="btn btn-primary mb-4 addmenu" data-toggle="modal"
                                    data-target="#newExperienceModal" data-popup="tooltip" data-placement="top"
                                    title="Add Data">
                                    <i class=" fas fa-fw fa-plus-square"></i>
                                    Tambah Pengalaman
                                </button>
                            </div>
                            <!-- data table -->
                            <div>
                                <div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i>
                                                Data Pengalaman
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive dt-responsive lg-12">
                                                <table class="table table-hover table-responsive" id="dataTable"
                                                    width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Pekerjaan</th>
                                                            <th scope="col">Tipe</th>
                                                            <th scope="col">Perusahaan</th>
                                                            <th scope="col">Waktu</th>
                                                            <th scope="col">Berhenti?</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1 ?>
                                                        <?php foreach ($experiences as $experience) : ?>
                                                        <tr class="odd gradeX">
                                                            <th scope="row"><?= $i; ?></th>
                                                            <td><?= $experience['job_title']; ?></td>
                                                            <td><?= $experience['type']; ?></td>
                                                            <td><?= $experience['company_name']; ?></td>
                                                            <td><?= date('M, Y', $experience['start']) ?> -
                                                                <?= ($experience['is_resigned'] == 1) ? date('M, Y', $experience['until']) : 'sekarang'; ?>
                                                            </td>
                                                            <td align="center">
                                                                <i
                                                                    class="fas fa-fw <?= ($experience['is_resigned'] == 1) ? 'text-success fa-check-circle' : 'text-secondary fa-times-circle' ?>"></i>
                                                            </td>
                                                            <td><?= $experience['description']; ?></td>
                                                            <td>
                                                                <div class="tooltip-demo">
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#editExperienceModal<?= $experience['id']; ?>"
                                                                        class="badge badge-info" data-popup="tooltip"
                                                                        data-placement="top" title="Edit Data"><i
                                                                            class=" fas fa-fw fa-edit"></i> edit</a>
                                                                    <a href="<?= base_url('about/deleteexperience/') . $experience['id'] ?>"
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
                        <div class="tab-pane" id="certifications">
                            <div class="tooltip-demo">
                                <button class="btn btn-primary mb-4 addmenu" data-toggle="modal"
                                    data-target="#newExperienceModal" data-popup="tooltip" data-placement="top"
                                    title="Add Data">
                                    <i class=" fas fa-fw fa-plus-square"></i>
                                    Tambah Sertifikat
                                </button>
                            </div>
                            <!-- data table -->
                            <div>
                                <div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i>
                                                Data Sertifikat
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive dt-responsive lg-12">
                                                <table class="table table-hover table-responsive" id="dataTable"
                                                    width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nama Sertifikat</th>
                                                            <th scope="col">Organisasi Penerbit</th>
                                                            <th scope="col">Waktu Diterbitkan</th>
                                                            <th scope="col">Kadaluarsa?</th>
                                                            <th scope="col">ID Kredensial</th>
                                                            <th scope="col">URL Kredensial</th>
                                                            <th scope="col">Deskripsi</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <th>1</th>
                                                            <td>Belajar Membuat Aplikasi Android
                                                                untuk Pemula</td>
                                                            <td>Dicoding</td>
                                                            <td>May 2021</td>
                                                            <td>May 2023</td>
                                                            <td>MRZMG39RKZYQ</td>
                                                            <td>https://dicoding.com/certificates/MRZMG39RKZYQ</td>
                                                            <td>Reski</td>
                                                            <td>
                                                                <div class="tooltip-demo">
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#editExperienceModal"
                                                                        class="badge badge-info" data-popup="tooltip"
                                                                        data-placement="top" title="Edit Data"><i
                                                                            class=" fas fa-fw fa-edit"></i> edit</a>
                                                                    <a href="<?= base_url('about/deleteexperience/') ?>"
                                                                        class=" badge badge-secondary fas del-btn"
                                                                        data-popup="tooltip" data-placement="top"
                                                                        title="Delete Data"><i
                                                                            class=" fas fa-fw fa-trash-alt"></i>
                                                                        delete</a>
                                                                </div>
                                                            </td>
                                                        </tr>
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
                <div class="form-group">
                    <select class="custom-select" name="category_id" id="category_id" required>
                        <option selected disabled value="">Pilih kategori...</option>

                        <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id']; ?>">
                            <?= $category['category_name']; ?></option>
                        <?php endforeach; ?>

                    </select>
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

<!-- edit skill modal start -->
<?php foreach ($skills as $skill) : ?>
<div class="modal fade" id="editSkillModal<?= $skill['id']; ?>" tabindex="-1"
    aria-labelledby="editSkillModal<?= $skill['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSkillModal<?= $skill['id']; ?>Label">Ubah Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/editskill'); ?>
            <input type="hidden" name="id" value="<?= $skill['id']; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" value="<?= $skill['skill']; ?>" id="skill" name="skill"
                        placeholder="Nama Skill">
                </div>
                <div class="form-group">
                    <label for="percentage">Persentase (%)</label>
                    <input type="range" name="percentage" value="<?= $skill['percentage']; ?>" min="0" max="100"
                        class="form-control-range" id="percentage">
                    <div id="output-percentage"></div>
                </div>
                <div class="form-group">
                    <select class="custom-select" name="category_id" id="category_id">
                        <option disabled value="">Pilih kategori...</option>

                        <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id']; ?>"
                            <?= ($category['id'] == $skill['category_id']) ? 'selected' : ''; ?>>
                            <?= $category['category_name']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- edit skill modal end -->

<!-- add category skill modal start -->
<div class="modal fade" id="newCategorySkillModal" tabindex="-1" aria-labelledby="newCategorySkillModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newCategorySkillModalLabel">Tambah Kategori Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/categoryskill'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="category_name" name="category_name"
                        placeholder="Nama Kategori">
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
<!-- add category skill modal end -->

<!-- edit category skill modal start -->
<?php foreach ($categories as $category) : ?>
<div class="modal fade" id="editCategorySkillModal<?= $category['id']; ?>" tabindex="-1"
    aria-labelledby="editCategorySkillModal<?= $category['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategorySkillModal<?= $category['id']; ?>Label">Ubah Kategori Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/editcategoryskill'); ?>
            <input type="hidden" name="id" value="<?= $category['id']; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="category_name" name="category_name"
                        placeholder="Nama Kategori" value="<?= $category['category_name']; ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- edit category skill modal end -->

<!-- edit position category skill modal start -->
<?php foreach ($categories as $category) : ?>
<div class="modal fade" id="editPositionModal<?= $category['id']; ?>" tabindex="-1"
    aria-labelledby="editPositionModal<?= $category['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPositionModal<?= $category['id']; ?>Label">Ubah Posisi Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/editpositioncategoryskill'); ?>
            <input type="hidden" name="id" value="<?= $category['id']; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="number" class="form-control" id="position" name="position"
                        placeholder="Posisi Kategori" min="1" max="<?= $max_position; ?>"
                        value="<?= $category['position']; ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- edit position category skill modal end -->

<!-- add education modal start -->
<div class="modal fade" id="newEducationModal" tabindex="-1" aria-labelledby="newEducationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEducationModalLabel">Tambah Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/education'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="degree" name="degree"
                        placeholder="Nama Gelar/Program Studi/Tingkat">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="school" name="school" placeholder="Nama Kampus/Sekolah">
                </div>
                <div class="form-group">
                    <label for="start-month">Dari</label>
                    <div class="row">
                        <div class="col">
                            <select name="start-month" class="form-control" id="start-month">
                                <option value="" disabled selected>--masukan bulan--</option>
                                <option value="" disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Tahun" name="start-year"
                                id="start-year" maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="form-group until-form" id="until-form" style="display: block;">
                    <label for="until-month">Sampai</label>
                    <div class="row">
                        <div class="col">
                            <select name="until-month" class="form-control" id="until-month">
                                <option value="" disabled selected>--masukan bulan--</option>
                                <option value="" disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Tahun" name="until-year"
                                id="until-year" maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input is_studied" name="is_studied" id="is_studied">
                    <label class="form-check-label" for="is_studied">Masih berkuliah/belajar disini</label>
                </div>
                <input type="hidden" name="is_graduated" class="is_graduated" id="is_graduated" value="1">
                <div class="form-group">
                    <textarea name="description" id="description" class="form-control ckeditor"
                        placeholder="Deskripsi"></textarea>
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
<!-- add education modal end -->

<!-- edit education modal start -->
<?php foreach ($educations as $education) : ?>
<div class="modal fade" id="editEducationModal<?= $education['id']; ?>" tabindex="-1"
    aria-labelledby="editEducationModal<?= $education['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEducationModal<?= $education['id']; ?>Label">Ubah data Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/editeducation'); ?>
            <input type="hidden" name="id" value="<?= $education['id']; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="degree" name="degree"
                        placeholder="Nama Gelar/Program Studi/Tingkat" value="<?= $education['degree']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" value="<?= $education['school']; ?>" class="form-control" id="school"
                        name="school" placeholder="Nama Kampus/Sekolah">
                </div>
                <div class="form-group">
                    <label for="start-month">Dari</label>
                    <div class="row">
                        <div class="col">
                            <select name="start-month" class="form-control" id="start-month">
                                <option value="" disabled selected>--masukan bulan--</option>
                                <option value="" disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option <?= ($month['id'] == date('m', $education['start'])) ? 'selected' : ''; ?>
                                    value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" value="<?= date('Y', $education['start']); ?>" class="form-control"
                                placeholder="Tahun" name="start-year" id="start-year" maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="form-group until-form" id="until-form<?= $education['id']; ?>"
                    style="display: <?= ($education['is_graduated'] == 1) ? 'block' : 'none'; ?>;">
                    <label for="until-month">Sampai</label>
                    <div class="row">
                        <div class="col">
                            <select name="until-month" class="form-control" id="until-month">
                                <option value="" disabled selected>--masukan bulan--</option>
                                <option value="" disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option
                                    <?= (!empty($education['until']) && $month['id'] == date('m', $education['until'])) ? 'selected' : ''; ?>
                                    value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Tahun" name="until-year"
                                id="until-year" maxlength="4"
                                value="<?= (!empty($education['until'])) ? date('Y', $education['until']) : ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input is_studied" name="is_studied"
                        id="is_studied<?= $education['id']; ?>"
                        <?= ($education['is_graduated'] == 1) ? '' : 'checked' ; ?>>
                    <label class="form-check-label" for="is_studied<?= $education['id']; ?>">Masih berkuliah/belajar
                        disini</label>
                </div>
                <input type="hidden" name="is_graduated" class="is_graduated" id="is_graduated<?= $education['id']; ?>"
                    value="<?= $education['is_graduated']; ?>">
                <div class="form-group">
                    <textarea name="description" id="description" class="form-control ckeditor"
                        placeholder="Deskripsi"><?= $education['description']; ?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- edit education modal end -->


<!-- add experience modal start -->
<div class="modal fade" id="newExperienceModal" tabindex="-1" aria-labelledby="newExperienceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newExperienceModalLabel">Tambah Pengalaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/experience'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="job_title" name="job_title"
                        placeholder="Nama Pekerjaan">
                </div>
                <div class="form-group">
                    <select class="custom-select" name="type" id="type" required>
                        <option selected disabled value="">Pilih tipe pekerjaan...</option>

                        <?php foreach ($type as $ty) : ?>
                        <option value="<?= $ty; ?>"><?= $ty; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="company_name" name="company_name"
                        placeholder="Nama Perusahaan">
                </div>
                <div class="form-group">
                    <label for="start-month">Dari</label>
                    <div class="row">
                        <div class="col">
                            <select name="start-month" class="form-control" id="start-month">
                                <option value="" disabled selected>--masukan bulan--</option>
                                <option value="" disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Tahun" name="start-year"
                                id="start-year" maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="form-group until-form" id="until-form-exp" style="display: block;">
                    <label for="until-month">Sampai</label>
                    <div class="row">
                        <div class="col">
                            <select name="until-month" class="form-control" id="until-month">
                                <option value="" disabled selected>--masukan bulan--</option>
                                <option value="" disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Tahun" name="until-year"
                                id="until-year" maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input is_worked" name="is_worked" id="is_worked">
                    <label class="form-check-label" for="is_worked">Masih bekerja disini</label>
                </div>
                <input type="hidden" name="is_resigned" class="is_resigned" id="is_resigned" value="1">
                <div class="form-group">
                    <textarea name="description" id="description" class="form-control ckeditor"
                        placeholder="Deskripsi"></textarea>
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
<!-- add experience modal end -->

<!-- edit experience modal start -->
<?php foreach ($experiences as $experience) : ?>
<div class="modal fade" id="editExperienceModal<?= $experience['id']; ?>" tabindex="-1"
    aria-labelledby="editExperienceModal<?= $experience['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editExperienceModal<?= $experience['id']; ?>Label">Ubah data Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('about/editexperience'); ?>
            <input type="hidden" name="id" value="<?= $experience['id']; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Nama Pekerjaan"
                        value="<?= $experience['job_title']; ?>">
                </div>
                <div class="form-group">
                    <select class="custom-select" name="type" id="type" required>
                        <option disabled value="">Pilih tipe pekerjaan...</option>

                        <?php foreach ($type as $ty) : ?>
                        <option <?= ($experience['type'] == $ty) ? 'selected' : ''; ?> value="<?= $ty; ?>"><?= $ty; ?>
                        </option>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div class="form-group">
                    <input type="text" value="<?= $experience['company_name']; ?>" class="form-control"
                        id="company_name" name="company_name" placeholder="Nama Perusahaan">
                </div>
                <div class="form-group">
                    <label for="start-month">Dari</label>
                    <div class="row">
                        <div class="col">
                            <select name="start-month" class="form-control" id="start-month">
                                <option value="" disabled selected>--masukan bulan--</option>
                                <option value="" disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option <?= ($month['id'] == date('m', $experience['start'])) ? 'selected' : ''; ?>
                                    value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" value="<?= date('Y', $experience['start']); ?>" class="form-control"
                                placeholder="Tahun" name="start-year" id="start-year" maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="form-group until-form" id="until-form<?= $experience['id']; ?>"
                    style="display: <?= ($experience['is_resigned'] == 1) ? 'block' : 'none'; ?>;">
                    <label for="until-month">Sampai</label>
                    <div class="row">
                        <div class="col">
                            <select name="until-month" class="form-control" id="until-month">
                                <option value="" disabled selected>--masukan bulan--</option>
                                <option value="" disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option
                                    <?= (!empty($experience['until']) && $month['id'] == date('m', $experience['until'])) ? 'selected' : ''; ?>
                                    value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Tahun" name="until-year"
                                id="until-year" maxlength="4"
                                value="<?= (!empty($experience['until'])) ? date('Y', $experience['until']) : ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input is_worked" name="is_worked"
                        id="is_worked<?= $experience['id']; ?>"
                        <?= ($experience['is_resigned'] == 1) ? '' : 'checked' ; ?>>
                    <label class="form-check-label" for="is_worked<?= $experience['id']; ?>">Masih bekerja
                        disini</label>
                </div>
                <input type="hidden" name="is_resigned" class="is_resigned" id="is_resigned<?= $experience['id']; ?>"
                    value="<?= $experience['is_resigned']; ?>">
                <div class="form-group">
                    <textarea name="description" id="description" class="form-control ckeditor"
                        placeholder="Deskripsi"><?= $experience['description']; ?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- edit experience modal end -->