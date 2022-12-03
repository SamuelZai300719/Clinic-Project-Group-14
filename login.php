<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

</head>

<body class="authentication-bg authentication-bg-pattern d-flex align-items-center pb-0 vh-100">


    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">

                        <div class="card-body p-4  bg-dark bg-gradient text-white">

                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <h1 class="text-white">
                                        	LOG IN
                                        </h1>
                                        <hr align="center" width="375" size="10" color="white">
                                    </div>
                                    <h5 class="text-uppercase mb-1 mt-2 text-white">Log In</h5>
                                    <p class="mb-0">Login akun anda!</p>
                                </div>

                                <div class="account-content mt-2">
                                    <form class="form-horizontal" method="post" action="loginK.php">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">Username</label>
                                                <input class="form-control" type="email" name="username" required="" placeholder="Tono@masyarakat.com">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" checked="">
                                                    <label for="remember">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">
                                                	Log In
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="row mt-3 pt-2">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted mb-0">Belum punya akun? <a href="registeradm.php" class="text-white ml-1"><b>Daftar</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
	
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>
</html>