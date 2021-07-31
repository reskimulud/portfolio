<style>

</style>

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
                        <li class="nav-item"><a class="nav-link active" href="#portfolio"
                                data-toggle="tab">Portfolio</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#category" data-toggle="tab">Kategori</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <div class="tab-pane active" id="portfolio">
                            <div class="tooltip-demo">
                                <button class="btn btn-primary mb-4 addmenu" data-toggle="modal"
                                    data-target="#newPortfolioModal" data-popup="tooltip" data-placement="top"
                                    title="Add Data">
                                    <i class=" fas fa-fw fa-plus-square"></i>
                                    Tambah Portfolio
                                </button>
                            </div>
                            <!-- data table -->
                            <div>
                                <div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i>
                                                Data Portfolio
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive dt-responsive lg-12">
                                                <table class="table table-hover" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Kategori</th>
                                                            <th scope="col">Tanggal</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1 ?>
                                                        <?php foreach ($portfolios as $portfolio) : ?>
                                                        <tr class="odd gradeX">
                                                            <th scope="row"><?= $i; ?></th>
                                                            <td><a data-toggle="collapse"
                                                                    href="#collapseExample<?= $portfolio['id']; ?>"
                                                                    role="button" aria-expanded="false"
                                                                    aria-controls="collapseExample<?= $portfolio['id']; ?>"
                                                                    data-popup="tooltip" data-placement="top"
                                                                    title="Lihat gambar"><?= $portfolio['project_name']; ?></a>
                                                            </td>
                                                            <td><?= $portfolio['name']; ?></td>
                                                            <td><?= date('M, Y', $portfolio['date']) ?></td>
                                                            <td>
                                                                <div class="tooltip-demo">
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#editPortfolioModal<?= $portfolio['id']; ?>"
                                                                        class="badge badge-info" data-popup="tooltip"
                                                                        data-placement="top" title="Edit Data"><i
                                                                            class=" fas fa-fw fa-edit"></i> edit</a>
                                                                    <a href="<?= base_url('portfolio/deleteportfolio/') . $portfolio['id'] ?>"
                                                                        class=" badge badge-secondary fas del-btn"
                                                                        data-popup="tooltip" data-placement="top"
                                                                        title="Delete Data"><i
                                                                            class=" fas fa-fw fa-trash-alt"></i>
                                                                        delete</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="collapse"
                                                            id="collapseExample<?= $portfolio['id']; ?>">
                                                            <th style="display: none;"><?= $i; ?></th>
                                                            <td colspan="5">
                                                                <div class="row">
                                                                    <table class="table-borderless">
                                                                        <tr>
                                                                            <td><b>Project brief</b></td>
                                                                            <td><b>:</b></td>
                                                                            <td><?= $portfolio['project_brief']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Client</b></td>
                                                                            <td><b>:</b></td>
                                                                            <td><?= $portfolio['client']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Tools</b></td>
                                                                            <td><b>:</b></td>
                                                                            <td><?= $portfolio['tools']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Link</b></td>
                                                                            <td><b>:</b></td>
                                                                            <td><a target="_blank"
                                                                                    href="<?= $portfolio['link']; ?>">
                                                                                    <?= $portfolio['link']; ?>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="row">
                                                                    <button class="btn btn-primary mb-4 mr-4 addmenu"
                                                                        data-toggle="modal"
                                                                        data-target="#newEducationModal"
                                                                        data-popup="tooltip" data-placement="top"
                                                                        title="Add Data">
                                                                        <i class=" fas fa-fw fa-plus-square"></i>
                                                                        Tambah Portfolio
                                                                    </button>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="col">
                                                                        <button class="btn btn-neutral"
                                                                            data-toggle="modal"
                                                                            data-target="#viewPicture">
                                                                            <img src="<?= base_url('assets/img/portfolio/thumb/project-1.png'); ?>"
                                                                                class="img-thumbnail" alt="">
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td style="display: none;">2</td>
                                                            <td style="display: none;">2</td>
                                                            <td style="display: none;">2</td>
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
                        <div class="tab-pane" id="category">
                            <div class="tooltip-demo">
                                <button class="btn btn-primary mb-4 addmenu" data-toggle="modal"
                                    data-target="#newExperienceModal" data-popup="tooltip" data-placement="top"
                                    title="Add Data">
                                    <i class=" fas fa-fw fa-plus-square"></i>
                                    Tambah Kategori
                                </button>
                            </div>
                            <!-- data table -->
                            <div>
                                <div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i>
                                                Data Kategori
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive dt-responsive lg-12">
                                                <table class="table table-hover table-responsive" id="dataTable"
                                                    width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1 ?>
                                                        <?php foreach ($categories as $category) : ?>
                                                        <tr class="odd gradeX">
                                                            <th scope="row"><?= $i; ?></th>
                                                            <td><?= $category['name']; ?></td>
                                                            <td>
                                                                <div class="tooltip-demo">
                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#editExperienceModal<?= $category['id']; ?>"
                                                                        class="badge badge-info" data-popup="tooltip"
                                                                        data-placement="top" title="Edit Data"><i
                                                                            class=" fas fa-fw fa-edit"></i> edit</a>
                                                                    <a href="<?= base_url('about/deleteexperience/') . $category['id'] ?>"
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


<!-- add portfolio modal start -->
<div class="modal fade" id="newPortfolioModal" tabindex="-1" aria-labelledby="newPortfolioModalLabel"
    aria-hidden="true">
    <div class="modal-dialog    ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPortfolioModalLabel">Tambah Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('portfolio/addportfolio'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="project_name" name="project_name"
                        placeholder="Nama Projek">
                </div>
                <div class="form-group">
                    <select class="custom-select" name="category_id" id="category_id" required>
                        <option selected disabled value="">Pilih kategori...</option>

                        <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id']; ?>">
                            <?= $category['name']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="month">Tanggal</label>
                    <div class="row">
                        <div class="col">
                            <select name="month" class="custom-select" id="month">
                                <option disabled selected>--masukan bulan--</option>
                                <option disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Tahun" name="year" id="year"
                                maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="client" name="client" placeholder="Klien">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="link" name="link" placeholder="Link web/source code">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="tools" name="tools" placeholder="Tools">
                </div>
                <div class="form-group">
                    <textarea name="project_brief" id="project_brief" class="form-control ckeditor"
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
<!-- add portfolio modal end -->

<!-- edit portfolio modal start -->
<?php foreach ($portfolios as $portfolio) : ?>
<div class="modal fade" id="editPortfolioModal<?= $portfolio['id']; ?>" tabindex="-1"
    aria-labelledby="editPortfolioModal<?= $portfolio['id']; ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPortfolioModal<?= $portfolio['id']; ?>Label">Ubah data Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('portfolio/editportfolio'); ?>
            <input type="hidden" name="id" value="<?= $portfolio['id']; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="project_name" name="project_name"
                        value="<?= $portfolio['project_name']; ?>" placeholder="Nama Projek">
                </div>
                <div class="form-group">
                    <select class="custom-select" name="category_id" id="category_id" required>
                        <option disabled value="">Pilih kategori...</option>

                        <?php foreach ($categories as $category) : ?>
                        <option <?= ($portfolio['category_id'] == $category['id']) ? 'selected' : ''; ?>
                            value="<?= $category['id']; ?>">
                            <?= $category['name']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="month">Tanggal</label>
                    <div class="row">
                        <div class="col">
                            <select name="month" class="custom-select" id="month">
                                <option disabled selected>--masukan bulan--</option>
                                <option disabled></option>

                                <?php foreach ($months as $month) : ?>
                                <option <?= ($month['id'] == date('m', $portfolio['date'])) ? 'selected' : ''; ?>
                                    value="<?= $month['id']; ?>"><?= $month['month']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Tahun" name="year" id="year"
                                value="<?= date('Y', $portfolio['date']); ?>" maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="client" name="client"
                        value="<?= $portfolio['client']; ?>" placeholder="Klien">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="link" name="link" value="<?= $portfolio['link']; ?>"
                        placeholder="Link web/source code">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="tools" name="tools" value="<?= $portfolio['tools']; ?>"
                        placeholder="Tools">
                </div>
                <div class="form-group">
                    <textarea name="project_brief" id="project_brief" class="form-control ckeditor"
                        placeholder="Deskripsi"><?= $portfolio['project_brief']; ?></textarea>
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
<!-- edit portfolio modal end -->


<!-- Modal -->
<div class="modal fade" id="viewPicture" tabindex="-1" aria-labelledby="viewPictureLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewPictureLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col">
                    <img src="<?= base_url('/assets/img/portfolio/thumb/project-1.png'); ?>" class="img-thumbnail"
                        alt="">
                </div>
            </div>
            <div class="modal-footer">
                <a href="" class="del-btn">
                    <button type="button" class="btn btn-secondary">Hapus</button>
                </a>
            </div>
        </div>
    </div>
</div>