
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
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('asset'); ?>/assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar" id="topnav">
                <?php $this->load->view('Layout/header');  ?>
                <!-- Top navbar -->
                
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20">Dashboard</h4>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Halaman Menu Utama</h4>
                                    <div class="table-responsive">
                                        <p>Selamat Datang, <?php echo $this->session->userdata('fullname'); ?>
                                            <br>
                                            Lolipop 113 sadhaushdusahuwehu whfuwefhuwehfuwe hweufhweufhweufhwefuwhefu whfuhfuhwue
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

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

        <!--Morris Chart-->
		<script src="<?php echo base_url('asset'); ?>/assets/plugins/morris/morris.min.js"></script>
		<script src="<?php echo base_url('asset'); ?>/assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="<?php echo base_url('asset'); ?>/assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="<?php echo base_url('asset'); ?>/assets/js/jquery.app.js"></script>

    </body>
</html>