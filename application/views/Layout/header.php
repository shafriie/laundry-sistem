<div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- LOGO -->
                            <div class="topbar-left">
                                <div class="">
                                    <a href="index.html" class="logo">
                                        MONDE&nbsp;LAUNDRY
                                        <!-- <img src="<?php echo base_url('asset'); ?>/assets/images/logo.png" alt="logo" class="logo-lg" />
                                        <img src="<?php echo base_url('asset'); ?>/assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" /> -->
                                    </a>
                                </div>
                            </div>

                            <div class="navbar-custom navbar-left">
                                <div id="navigation">
                                    <!-- Navigation Menu-->
                                    <?php if ($this->session->userdata('level') == 1): ?>
                                        <ul class="navigation-menu">
                                        <li>
                                            <a href="<?php echo base_url('dashboard'); ?>">
                                                <span><i class="ti-home"></i></span><span> Dashboard </span> </a>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="<?php echo base_url('pelanggan'); ?>"> <span><i class="ti-files"></i></span><span> Pelanggan </span> </a>
                                            
                                        </li>

                                        <li class="has-submenu">
                                            <a href="<?php echo base_url('kasir'); ?>"><span><i class="ti-spray"></i></span><span> Kasir </span> </a>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="<?php echo base_url('barang'); ?>"> <span><i class="ti-widget"></i></span><span> Barang </span> </a>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="<?php echo base_url('layanan'); ?>"> <span><i class="mdi mdi-folder"></i></span><span> Layanan </span> </a>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="<?php echo base_url('transaksi'); ?>" <span><i class="ti-settings"></i></span><span> Transaksi </span> </a>
                                        </li>

                                    </ul>
                                    <!-- End navigation menu  -->
                                    <?php else: ?>
                                        <ul class="navigation-menu">
                                        <li>
                                            <a href="<?php echo base_url('dashboard'); ?>">
                                                <span><i class="ti-home"></i></span><span> Dashboard </span> </a>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="<?php echo base_url('transaksi'); ?>" <span><i class="ti-settings"></i></span><span> Transaksi </span> </a>
                                        </li>

                                    </ul>
                                    <?php endif ?>
                                    
                                </div>
                            </div>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="top-menu-item-xs">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>
                                
                                <li class="dropdown top-menu-item-xs">
                                   
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url('asset'); ?>/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        
                                        <li><a href="<?php echo base_url('logout'); ?>"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->