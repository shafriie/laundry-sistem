
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sistem Laundry</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url('asset'); ?>/assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="<?php echo base_url('asset'); ?>/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('asset'); ?>/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('asset'); ?>/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('asset'); ?>/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('asset'); ?>/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar" id="topnav">

                <!-- Top navbar -->
                <?php $this->load->view('Layout/header'); ?>
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20">Transaksi</h4>
                            </div>
                        </div> <!-- end row -->

                        <div class="row p-t-50">

                            <div class="col-sm-12">
                                <form id="form-transaksi" class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nomor Transaksi</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="no_trans" placeholder="No Transaksi" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal</label>
                                                <div class="col-md-10">
                                                <input type="date" name="tanggal" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Kasir</label>
                                                <div class="col-md-10">
                                                    <select name="kasir" class="form-control" required>
                                                        <option value="">-- choose --</option>
                                                        <?php foreach ($kasir as $rows): ?>
                                                            <option value="<?php echo $rows['id_kasir'] ?>"><?php echo $rows['nama_kasir'] ?>
                                                            </option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" align="right">
                                                <button id="btn-add-detail" class="btn btn-danger">Add (+)</button>
                                            </div>
                                            <div class="form-group">
                                                <table id="table-data" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Jenis Barang</th>
                                                            <th>Harga Barang</th>
                                                            <th>Jenis Layanan</th>
                                                            <th>Harga Layanan</th>
                                                            <th>Qty</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                                <button type="reset" class="btn btn-info">Reset</button>
                                            </div>
                                        </form>
                            </div>
                        </div>

                        <!-- end row -->

                    </div>
                    <!-- end container -->



                    <?php $this->load->view('Layout/footer'); ?>

                </div>
                <!-- End #page-right-content -->

                <div class="clearfix"></div>

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('asset'); ?>/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/js/jquery.slimscroll.min.js"></script>

        <!-- Datatable js -->
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="<?php echo base_url('asset'); ?>/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="<?php echo base_url('asset'); ?>/assets/pages/jquery.datatables.init.js"></script>

        <!-- App Js -->
        <script src="<?php echo base_url('asset'); ?>/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $('#form-transaksi').on('submit', function(event) {
                    event.preventDefault();
                    $.ajax({
                        url: '<?php echo base_url('transaksi/submit'); ?>',
                        type: 'POST',
                        dataType: 'JSON',
                        data: $(this).serialize(),
                        success: function(x){
                            console.log(x);
                            if (x.info){
                                alert('Sukses menambah data');
                                location.reload();
                            }
                            else
                            {
                                alert('Gagal menambah data');
                                
                            }
                        }
                    });
                });

                var no = 1;
                $('body').on('click', '#btn-add-detail', function(event) {
                    event.preventDefault();
                    var number = no++;
                    $('#table-data').append('<tr id="rows'+number+'"><td>'+number+'</td><td><select class="form-control" onchange="getHargaBarang('+number+')" id="jenis_barang'+number+'" name="jenis_barang['+number+']"></select></td><td><input type="text" readonly class="form-control" id="harga_barang'+number+'" name="harga_barang['+number+']"></td><td><select onchange="getHargaLayanan('+number+')" name="jenis_layanan['+number+']" id="jenis_layanan'+number+'" class="form-control"></select></td><td><input type="text" readonly class="form-control" id="harga_layanan'+number+'" name="harga_layanan['+number+']"></td><td><input onblur="hitungTotal('+number+')" id="qty'+number+'" type="number"  class="form-control" name="qty['+number+']"></td><td><input id="total'+number+'" type="text" readonly class="form-control" name="total['+number+']"></td><td><button onclick="removeRows('+number+')" type="button" class="btn btn-info">Delete</button></td></tr>');

                        loadJenisBarang(number);
                        loadJenisLayanan(number);

                });
            });

            function removeRows(number)
            {
                $('#rows'+number).remove();
            }

            function loadJenisBarang(number)
            {
                $.ajax({
                    url: '<?php echo base_url('transaksi/getJenisBarang'); ?>',
                    type: 'POST',
                    success: function(x){
                        console.log(x);
                        $('#jenis_barang'+number).html(x);
                    }
                });
            }

            function loadJenisLayanan(number)
            {
                $.ajax({
                    url: '<?php echo base_url('transaksi/getJenisLayanan'); ?>',
                    type: 'POST',
                    success: function(x){
                        console.log(x);
                        $('#jenis_layanan'+number).html(x);
                    }
                });
            }

            function hitungTotal(number)
            {
                var qty = $('#qty'+number).val();
                var harga_barang = $('#harga_barang'+number).val();
                var harga_layanan = $('#harga_layanan'+number).val();

                var total = ( parseInt(harga_barang) * parseInt(qty) ) + parseInt(harga_layanan);
                $('#total'+number).val(total);
            }

            function getHargaBarang(number)
            {
                var jenis_barang = $('#jenis_barang'+number).val();
                $.ajax({
                    url: '<?php echo base_url('transaksi/getWhereBarang'); ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {jenis_barang: jenis_barang},
                    success: function(x){
                        console.log(x);
                        $('#harga_barang'+number).val(x.harga_perkilo);
                    }
                });
            }

            function getHargaLayanan(number)
            {
                var jenis_layanan = $('#jenis_layanan'+number).val();
                $.ajax({
                    url: '<?php echo base_url('transaksi/getWhereLayanan'); ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {jenis_layanan: jenis_layanan},
                    success: function(x){
                        console.log(x);
                        $('#harga_layanan'+number).val(x.harga);
                    }
                });
            }
        </script>

    </body>
</html>