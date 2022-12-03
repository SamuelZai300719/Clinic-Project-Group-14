<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>KLINIK KECANTIKAN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        

        <!-- C3 Chart css -->
        <link href="assets/libs/c3/c3.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="dashboard.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="https://i.postimg.cc/j2Q1Zv74/logo-klinik.png" alt="" height="60">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="https://i.postimg.cc/NfcVzfX2/logo-klinik-black.png" alt="" height="50">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>

                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="dashboard.php">
                                    <i class="mdi mdi-home-circle"></i>
                                    <span> HOME </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-account-outline"></i>
                                    <span> PEOPLE DATA </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="dokter.php">Data Dokter</a></li>
                                    <li><a href="pasien.php">Data Pasien</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="produk.php">
                                    <i class="mdi mdi-medical-bag"></i>
                                    <span> Produk </span>
                                </a>
                            </li>

                            <li>
                                <a href="rmedis.php">
                                    <i class="mdi mdi-clipboard-text"></i>
                                    <span> Rekam Medis </span>
                                </a>
                            </li>

                            <li>
                                <a href="login.php">
                                    <i class="menu-icon icon-logout"></i>
                                    <span> Log Out </span>
                                </a>
                            </li>
                
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
                                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->    

                        <div class="row">
                            <div class="col-6">
                                <div class="card-box">
                                <h4 class="header-title">Data Dokter</h4>
                                    <p class="sub-header">
                                        Kumpulan data dokter - dokter KlinikHub
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table m-0 table-hover">
                                            <thead class="bg-light">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No. Hp</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            </thead>
                                            <?php
                                                require 'koneksi.php';
                                                $sql="SELECT * FROM dokter where id_dr";
                                                $view=mysqli_query($mysql, $sql);
                                                while ($data=mysqli_fetch_array($view)) {
                                            ?>     
                                                <tbody>
                                                
                                                    <tr>                                              
                                                        <td><?php echo $data ['nm_dr']; ?></td>
                                                    
                                                        <td><?php echo $data ['email']; ?></td>
                                                    
                                                        <td><?php echo $data ['tlp']; ?></td>
                                                    
                                                        <td><?php echo $data ['ket']; ?></td>
                                                    </tr>
                                                </tbody>
                                            <?php } ?>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-6">
                                <div class="card-box">
                                    <h4 class="header-title">Data Pasien</h4>
                                    <p class="sub-header">
                                        Kumpulan data pasien - pasien KlinikHub
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table m-0 table-hover">
                                            <thead class="bg-light">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jenis kelamin</th>
                                                <th>No. Hp</th>
                                                <th>Keluhan</th>
                                                <th>Nama dokter</th>
                                            </tr>
                                            </thead>

                                            </thead>
                                            <?php
                                                require 'koneksi.php';
                                                $sql="SELECT * FROM pasien where id_pas";
                                                $view=mysqli_query($mysql, $sql);
                                                while ($data=mysqli_fetch_array($view)) {
                                            ?>     
                                                <tbody>
                                                
                                                    <tr>                                              
                                                        <td><?php echo $data ['nm_pas']; ?></td>
                                                    
                                                        <td><?php echo $data ['jk_pas']; ?></td>
                                                    
                                                        <td><?php echo $data ['tlp_pas']; ?></td>
                                                    
                                                        <td><?php echo $data ['keluhan']; ?></td>

                                                        <td><?php echo $data ['nm_dr']; ?></td>
                                                    </tr>
                                                </tbody>
                                            <?php } ?>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">

                        <div class="col-6">
                                <div class="card-box">
                                    <h4 class="header-title">Data Pasien</h4>
                                    <p class="sub-header">
                                        Kumpulan data produk KlinikHub
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table m-0 table-hover">
                                            <thead class="bg-light">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Keterangan</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                            </tr>
                                            </thead>

                                            </thead>
                                            <?php
                                                require 'koneksi.php';
                                                $sql="SELECT * FROM produk where id_produk";
                                                $view=mysqli_query($mysql, $sql);
                                                while ($data=mysqli_fetch_array($view)) {
                                            ?>     
                                                <tbody>
                                                
                                                    <tr>                                              
                                                        <td><?php echo $data ['nama_produk']; ?></td>
                                                    
                                                        <td><?php echo $data ['ket_produk']; ?></td>
                                                    
                                                        <td><?php echo $data ['harga']; ?></td>
                                                    
                                                        <td><?php echo $data ['stok']; ?></td>

                                                    </tr>
                                                </tbody>
                                            <?php } ?>
                                        </table>

                                    </div>
                                </div>
                            </div>

                    
                        <div class="col-6">
                                <div class="card-box">
                                    <h4 class="header-title">Data Pasien</h4>
                                    <p class="sub-header">
                                        Kumpulan data rekam medis KlinikHub
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table m-0 table-hover">
                                            <thead class="bg-light">
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Nama pasien</th>
                                                <th>Nama Dokter</th>
                                                <th>Keluhan</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>

                                            </thead>
                                            <?php
                                                require 'koneksi.php';
                                                $sql="SELECT * FROM rmedis where id_rmed";
                                                $view=mysqli_query($mysql, $sql);
                                                while ($data=mysqli_fetch_array($view)) {
                                            ?>     
                                                <tbody>
                                                
                                                    <tr>                                              
                                                        <td><?php echo $data ['tgl']; ?></td>
                                                    
                                                        <td><?php echo $data ['nm_pas']; ?></td>
                                                    
                                                        <td><?php echo $data ['nm_dr']; ?></td>
                                                    
                                                        <td><?php echo $data ['keluhan']; ?></td>

                                                        <td><?php echo $data ['status']; ?></td>

                                                    </tr>
                                                </tbody>
                                            <?php } ?>
                                        </table>

                                    </div>
                                </div>

                        </div> <!-- end row -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2022 &copy; Created by <a href="#">KELOMPOK 14</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-16 m-0 text-white">4 Tema</h4>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-3">
                    
                    <div class="mb-2">
                        <img src="assets/images/layouts/light.jpeg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/dark.jpeg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/rtl.jpeg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/dark-rtl.jpeg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark-rtl.min.css" />
                        <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Pilih Mode
        </a>

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--C3 Chart-->
        <script src="assets/libs/d3/d3.min.js"></script>
        <script src="assets/libs/c3/c3.min.js"></script>

        <script src="assets/libs/echarts/echarts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>