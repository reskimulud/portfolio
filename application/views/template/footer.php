<?php 

$webInfo        = web_info();
$notifications  = $this->database->adminNotification();
$count = 0;

?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; <?= (date('Y') == '2020') ? '2020' : '2020 - ' . date('Y'); ?> <?= $webInfo['name']; ?> |
        Template by. <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('assets/'); ?>js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- DataTables -->
<script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>

<!-- Croppie Image Crop tool -->
<script src="<?= base_url('assets/'); ?>plugins/croppie/croppie.min.js"></script>

<!-- SweetAlert fa-rotate-270 -->
<script src="<?= base_url('assets/'); ?>plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/sweetalert2.js"></script>

<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

$(document).ready(() => {
    $('#output-percentage').text($('#percentage').val() + '%');

    $('#percentage').on('change', () => {
        const valpercentage = $('#percentage').val();
        $('#output-percentage').text(valpercentage + '%');
    })
});

//has sub menu
$('#has-sub-menu').on('click', function() {
    if ($('#has-sub-menu').is(':checked')) {
        $('.menu-url').hide();
    } else {
        $('.menu-url').show();
    }
});

// is studied
$('#is_studied').on('click', () => {
    if ($('#is_studied').is(':checked')) {
        $('#until-form').hide();
        $('#is_graduated').val('0');
    } else {
        $('#until-form').show();
        $('#is_graduated').val('1');
    }
});

<?php if (isset($educations)) : ?>

<?php foreach ($educations as $education) : ?>
$('#is_studied<?= $education['id']; ?>').on('click', () => {
    if ($('#is_studied<?= $education['id']; ?>').is(':checked')) {
        $('#until-form<?= $education['id']; ?>').hide();
        $('#is_graduated<?= $education['id']; ?>').val('0');
    } else {
        $('#until-form<?= $education['id']; ?>').show();
        $('#is_graduated<?= $education['id']; ?>').val('1');
    }
});
<?php endforeach; ?>

<?php endif; ?>

<?php if ($this->uri->segment(1) != 'admin' || $this->uri->segment(2) == 'detail_invoice') : ?>
$(function() {
    // $('#dataTable').DataTable({
    // "paging": true,
    // "lengthChange": false,
    // "searching": false,
    // "ordering": true,
    // "info": true,
    // "autoWidth": false,
    // "responsive": true,
    // });
    $('.table').DataTable({
        // "paging": true,
        // "lengthChange": false,
        // "searching": false,
        // "ordering": true,
        // "info": true,
        // "autoWidth": false,
        // "responsive": true,
    });
});
<?php endif; ?>

$('.form-check-input.role').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
        url: "<?= base_url('admin/changeaccess'); ?>",
        type: 'post',
        data: {
            menuId: menuId,
            roleId: roleId
        },
        success: function() {
            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
        }
    });

});

//croppie upload image (modal)
function img(width, height, location, href) {
    //croppie image profile
    $uploadCrop = $("#upload-demo").croppie({
        enableExif: true,
        viewport: {
            width: width,
            height: height,
            type: "square",
        },
        boundary: {
            width: width + 100,
            height: height + 100,
        },
    });

    $("#upload").on("change", function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $uploadCrop
                .croppie("bind", {
                    url: e.target.result,
                })
                .then(function() {
                    console.log("jQuery bind complete");
                    $(".upload-result").show();
                });
        };
        reader.readAsDataURL(this.files[0]);
    });

    $(".upload-result").on("click", function(ev) {
        $uploadCrop
            .croppie("result", {
                type: "canvas",
                size: "viewport",
            })
            .then(function(resp) {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + location,
                    type: "POST",
                    data: {
                        image: resp,
                    },
                    success: function(data) {
                        // html = '<img src="' + resp + '" />';
                        // $("#upload-demo-i").html(html);
                        // location.replace(href);
                        replace(href);

                    }
                });
            });
        $(".save").show();
    });
}

function replace(href) {
    location.replace(href);
}
</script>

</body>

</html>