<footer class="footer">
    Copyright © 2024 - <?= $title ?>
</footer>

</div>

<script src="<?php echo base_url() . 'assets/node_modules/jquery/jquery-3.2.1.min.js' ?>"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="<?php echo base_url() . 'assets/node_modules/popper/popper.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/node_modules/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url() . 'assets/dist/js/perfect-scrollbar.jquery.min.js' ?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url() . 'assets/dist/js/waves.js' ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url() . 'assets/dist/js/sidebarmenu.js' ?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url() . 'assets/dist/js/custom.min.js' ?>"></script>
<script src="<?= base_url() ?>assets/node_modules/tinymce/tinymce.min.js"></script>
<script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
</script>
<script src="<?php echo base_url() . 'assets/node_modules/raphael/raphael-min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/node_modules/jquery-sparkline/jquery.sparkline.min.js' ?>"></script>
<!-- Popup message jquery -->
<script src="<?php echo base_url() . 'assets/node_modules/toast-master/js/jquery.toast.js' ?>"></script>

<script src="<?= base_url() ?>/assets/node_modules/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<script>
    $(document).ready(function() {
        jQuery('.timeline').timeline();
    });
</script>



<script src="<?= base_url() ?>assets/node_modules/sweetalert/sweetalert2.all.min.js"></script>

<?php if ($this->session->flashdata('message') == 'success') : ?>
    <script>
        Swal.fire({
            type: 'success',
            title: 'Success',
            icon: 'success',
            text: 'Data berhasil terkirim',
            // timer: 2000,
            showConfirmButton: true
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('message') == 'error') : ?>
    <script>
        Swal.fire({
            type: 'error',
            title: 'Opps!',
            text: 'Data gagal terkirim!',
            // text: 'Anda akan di arahkan dalam 2 Detik',
            // timer: 2000,
            showConfirmButton: true
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('message') == 'warning') : ?>
    <script>
        Swal.fire({
            type: 'warning',
            title: 'Deleted!',
            icon: 'warning',
            text: 'Data berhasil terhapus..!!',
            // text: 'Anda akan di arahkan dalam 2 Detik',
            // timer: 2000,
            showConfirmButton: true
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('message') == 'info') : ?>
    <script>
        Swal.fire({
            type: 'info',
            title: 'Info!',
            icon: 'success',
            text: 'Data Berhasil Terupdate..!!',
            // text: 'Anda akan di arahkan dalam 2 Detik',
            // timer: 2000,
            showConfirmButton: true
        })
    </script>
<?php endif; ?>


<div class="flash-tambah" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="flash-error" data-flasherror="<?= $this->session->flashdata('error'); ?>"></div>

<script>
    const flashData = $('.flash-tambah').data('flashdata');
    if (flashData) {
        Swal.fire({
            title: 'Sukses',
            text: flashData,
            type: 'success'
        });
    }

    const flashWarning = $('.flash-warning').data('flashwarning');
    if (flashWarning) {
        Swal.fire({
            title: flashWarning,
            text: 'Silakan Cek Kembali ',
            type: 'warning'
        });
    }

    const flashError = $('.flash-error').data('flasherror');
    if (flashError) {
        Swal.fire({
            title: flashError,
            text: 'Silakan Cek Kembali ',
            type: 'error'
        });
    }
</script>





</body>

</html>