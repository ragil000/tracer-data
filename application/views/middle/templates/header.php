<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Pharmacy Tracer Data</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?=base_url('assets/admin-assets/')?>assets/img/logo/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?=base_url('assets/admin-assets/')?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?=base_url('assets/admin-assets/')?>assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?=base_url('assets/admin-assets/')?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin-assets/')?>assets/css/atlantis.min.css">
	
	<!-- theme plugins style -->
	<?php if(!empty($theme_style)) $this->load->view($theme_style); ?>

    <!-- custom css -->
    <link rel="stylesheet" href="<?=base_url('assets/admin-assets/')?>assets/css/style.css">

</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="#" class="logo">
					<img src="<?=base_url('assets/admin-assets/')?>assets/img/logo/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<!-- null -->
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
        
        <div class="main-panel">