<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?=base_url('assets/admin-assets')?>/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?=base_url('assets/admin-assets')?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/admin-assets')?>/assets/css/atlantis.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/admin-assets')?>/assets/css/style.css">

</head>
    <body class="bg-blue-soft">
        <div class="wrapper">
            <div class="main-panel-login">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title text-center">Masuk</div>
                                </div>
                                <div class="card-body">
                                    <form action="<?=base_url('admin/login/auth')?>" method="POST">
                                        <div class="row">
                                            <div class="col-12" id="alert">
                                                <div class="alert alert-danger bg-red-soft" role="alert">
                                                   <i class="icon-ban text-light pr-2"></i><span class="text-light"> <?=@$_SESSION['message']?></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                        </div>
                                                        <input type="email" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-shield-alt"></i></span>
                                                        </div>
                                                        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-success">
                                                    <span class="btn-label">
                                                        <i class="fa fa-paper-plane pr-1"></i>
                                                    </span>
                                                    Masuk
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="btnAlpha(this)">
                                        Pharmacy Tracer Data
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="btnAlpha(this)">
                                        Forum
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="btnAlpha(this)">
                                        Tentang
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright ml-auto">
                            2020, develope <i class="fa fa-heart heart text-danger"></i> by <a href="#">SilentProject</a>
                        </div>				
                    </div>
                </footer>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/core/popper.min.js"></script>
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery UI -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

        <!-- jQuery Scrollbar -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


        <!-- Chart JS -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/chart.js/chart.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Circle -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/chart-circle/circles.min.js"></script>

        <!-- Datatables -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/datatables/datatables.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- jQuery Vector Maps -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

        <!-- Sweet Alert -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

        <!-- Atlantis JS -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/atlantis.min.js"></script>

        <!-- Atlantis DEMO methods, don't include it in your project! -->
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/setting-demo.js"></script>

        <!-- custom javascript -->
        <script>
            var alertFlash = <?=json_encode(@$_SESSION['status'])?>
        </script>
        <script src="<?=base_url('assets/admin-assets')?>/assets/js/back/auth/login.js"></script>
    </body>
</html>