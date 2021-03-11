<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>js/adminlte.min.js"></script>

<script>
$('.agreeTerms').on('click', function() {

    if ($('.agreeTerms').is(':checked')) {
        $('.btn-block').removeAttr('disabled');
    } else {
        $('.btn-block').attr('disabled');
    }
});
</script>

</body>

</html>