
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
                                <h4 class="header-title m-t-0 m-b-20">Form Edit Pelanggan</h4>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="POST" class="form-horizontal" role="form" action="<?php echo base_url('pelanggan/updatePelanggan'); ?>">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Username</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                                    <input type="text" class="form-control" name="username" placeholder="Username" required value="<?php echo $username ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Fullname</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="<?php echo $fullname ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Password</label>
                                                <div class="col-md-10">
                                                    <input required type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password ?>">
                                                </div>
                                            </div>

                                            <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                                <button type="reset" class="btn btn-info">Reset</button>
                                            </div>

                                        </form>
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

        <!-- App Js -->
        <script src="<?php echo base_url('asset'); ?>/assets/js/jquery.app.js"></script>

    </body>
</html>