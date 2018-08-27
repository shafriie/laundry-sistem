
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

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url('asset'); ?>/assets/plugins/morris/morris.css">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles 
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
                                <h4 class="header-title m-t-0 m-b-20">Petugas</h4>
                            </div>
                        </div> <!-- end row -->

                        <div class="row p-t-50">
                            <div class="col-sm-12">
                                <div class="m-b-20 table-responsive">
                                    <h5><b>Ini Data Layanan</b></h5>
                                    <p class="text-muted font-13 m-b-30">
                                        <a href="<?php echo base_url('layanan/add'); ?>" class="btn btn-danger">(+) Add</a>
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr bgcolor="yellow">
                                            <th>No</th>
                                            <th>Jenis Layanan</th>
                                            <th>Harga</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=0;
                                            foreach ($layanan as $rows): $no++ ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $rows['nama_layanan']; ?></td>
                                                    <td><?php echo $rows['harga']; ?></td>
                                                    
                                                    <td align="center">
                                                        <a href="<?php echo base_url('layanan/edit/'.$rows['id']); ?>"><i class="fa fa-pencil"> </i></a>
                                                        &nbsp;&nbsp;
                                                        <a href="<?php echo base_url('layanan/delete/'.$rows['id']); ?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')" href=""><i class="fa fa-trash"> </i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
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

    </body>
</html>