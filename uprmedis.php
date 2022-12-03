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
                                            <li class="breadcrumb-item"><a href="uppasien.php">Edit Data Pasien</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <!-- Contact form -->
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title" style="font-size: 15pt;"><b>Isi Pembaruan</b></h4>
                                    <p class="sub-header" style="font-size: 11pt;">
                                        UPDATE DATA REKAM MEDIS !
                                    </p>
                                    <form class="parsley-examples" method="post" action="uprmedisK.php" enctype="multipart/form-data">
                                    <?php
                                        require 'koneksi.php';
                                        $id = $_GET['id_rmed'];
                                        $sql="SELECT * FROM rmedis where id_rmed='$id'";
                                        $view=mysqli_query($mysql, $sql);
                                        while ($data=mysqli_fetch_array($view)) {
                                    ?>
                                        
                                        <div class="form-group row">
                                            <div class="col-6">
                                            <label>ID Rekam Medis</label>
                                            <input type="text" class="form-control" name="id_rmed" value="<?php echo $data['id_rmed']; ?>">
                                            </div>

                                            <div class="col-6">
                                            <label>Tanggal</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="tgl" id="datepicker-autoclose" value="<?php echo $data['tgl']; ?>">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label>Keluhan</label>
                                            <input type="text" class="form-control" name="keluhan" value="<?php echo $data['keluhan']; ?>">
                                        </div>

                                        <div class="form-group ">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <b><option disabled selected value="<?php echo $data['status']; ?>">Pilihan Status Proses</option></b>
                                                <option>Belum Di Proses</option>
                                                <option>Sedang Di Proses</option>
                                                <option>Sudah Di Proses</option>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-6">
                                            <label>Nama Pasien</label>
                                            <select class="form-control" name="nm_pas">
                                                <b><option disabled selected value="pilih">Pilihan Nama Pasien</option></b>
                                                <?php
                                                $ewe="SELECT * FROM pasien GROUP BY nm_pas ORDER BY nm_pas";
                                                $ssq=mysqli_query($mysql, $ewe);
                                                while ($ta=mysqli_fetch_array($ssq)) {
                                                ?>
                                                <option value="<?=$ta['nm_pas'];?>"><?php echo $ta['nm_pas'];?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>

                                            <div class="col-6">
                                            <label>Nama Dokter</label>
                                            <select class="form-control" name="nm_dr">
                                                <b><option disabled selected value="pilih">Pilihan Nama Dokter</option></b>
                                                <?php
                                                $ew="SELECT * FROM dokter GROUP BY nm_dr ORDER BY nm_dr";
                                                $sq=mysqli_query($mysql, $ew);
                                                while ($data=mysqli_fetch_array($sq)) {
                                                ?>
                                                <option value="<?=$data['nm_dr'];?>"><?php echo $data['nm_dr'];?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>

                                    <?php } ?>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="window.location.href='rmedis.php';">Cancel</button>
                                                </div>
                                            </div> <!-- /col -->
                                        </div> <!-- /row -->
                                    </form> <!-- /form -->
                                </div>
                            </div>
                        </div> <!-- end col -->

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