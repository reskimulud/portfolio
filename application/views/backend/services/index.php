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
                <div class="col-lg-12">

                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
                    <?php if (validation_errors()) : ?>
                    <div class="flash-error" data-flasherror="<?= $this->session->flashdata('error') ?>"></div>
                    <?php endif; ?>

                    <div class="tooltip-demo">
                        <button class="btn btn-primary mb-4 addmenu" data-toggle="modal" data-target="#newServiceModal"
                            data-popup="tooltip" data-placement="top" title="Add Data">
                            <i class=" fas fa-fw fa-plus-square"></i>
                            Tambah Layanan
                        </button>
                    </div>
                    <!-- data table -->
                    <div>
                        <div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Data
                                        Layanan
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive dt-responsive lg-12">
                                        <table class="table table-hover table-responsive" id="dataTable" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Icon</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($services as $service) : ?>
                                                <tr class="odd gradeX">
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $service['name'] ?></td>
                                                    <td><i class="<?= $service['icon'] ?>"></i></td>
                                                    <td><?= $service['description'] ?></td>
                                                    <td>
                                                        <div class="tooltip-demo">
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#editServiceModal<?= $service['id'] ?>"
                                                                class="badge badge-info" data-popup="tooltip"
                                                                data-placement="top" title="Edit Data"><i
                                                                    class=" fas fa-fw fa-edit"></i> edit</a>
                                                            <a href="<?= base_url('services/deleteservice/') . $service['id'] ?>"
                                                                class=" badge badge-secondary fas del-btn"
                                                                data-popup="tooltip" data-placement="top"
                                                                title="Delete Data"><i
                                                                    class=" fas fa-fw fa-trash-alt"></i> delete</a>
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
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Modal -->
<div class="modal fade" id="newServiceModal" tabindex="-1" role="dialog" aria-labelledby="newServiceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title edittitle" id="newServiceModal">Tambah Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('services') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Ikon Layanan">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" class="form-control"
                            placeholder="Deskripsi"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary editbutton"><i
                            class=" fas fa-fw fa-plus-square"></i>Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- End of Main Content -->

<?php foreach ($services as $service) : ?>
<!-- Modal -->
<div class="modal fade" id="editServiceModal<?= $service['id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="editServiceModalLabel<?= $service['id'] ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title edittitle" id="editServiceModal<?= $service['id'] ?>">Edit Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('services/editservice/') ?>" method="POST">
                <div class="modal-body">

                    <input type="hidden" name="id" value="<?= $service['id']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $service['name']; ?>"
                            placeholder="Nama Layanan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $service['icon']; ?>"
                            placeholder="Ikon Layanan">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" class="form-control"
                            placeholder="Deskripsi"><?= $service['description']; ?></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary editbutton"><i
                            class=" fas fa-fw fa-edit"></i>Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>