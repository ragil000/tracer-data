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
				
				<a href="<?=base_url('admin/')?>" class="logo">
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
					<!-- <div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div> -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<!-- <li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li> -->
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Pesan 									
										<!-- <a href="#" class="small">Tandai semua sudah dibaca</a> -->
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#" onclick="btnAlpha(this)">
												<div class="notif-img"> 
													<img src="<?=base_url('assets/admin-assets/')?>assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														Apakah akun forum saya...
													</span>
													<span class="time">5 menit yang lalu</span> 
												</div>
											</a>
											<a href="#" onclick="btnAlpha(this)">
												<div class="notif-img"> 
													<img src="<?=base_url('assets/admin-assets/')?>assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Terimakasih admin
													</span>
													<span class="time">12 menit yang lalu</span> 
												</div>
											</a>
											<a href="#" onclick="btnAlpha(this)">
												<div class="notif-img"> 
													<img src="<?=base_url('assets/admin-assets/')?>assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Bagaimana cara memposting...
													</span>
													<span class="time">12 menit yang lalau</span> 
												</div>
											</a>
											<a href="#" onclick="btnAlpha(this)">
												<div class="notif-img"> 
													<img src="<?=base_url('assets/admin-assets/')?>assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 menit yang lalu</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);" onclick="btnAlpha(this)">Lihat semua pesan<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">Anda memiliki 3 notifikasi</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#" onclick="btnAlpha(this)">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														5 akun alumni baru telah...
													</span>
													<span class="time">5 menit yang lalu</span> 
												</div>
											</a>
											<a href="#" onclick="btnAlpha(this)">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad mengomentari postingan...
													</span>
													<span class="time">12 menit yang lalu</span> 
												</div>
											</a>
											<a href="#" onclick="btnAlpha(this)">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah menyukai postingan...
													</span>
													<span class="time">17 menit yang lalu</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);" onclick="btnAlpha(this)">Lihat semua notifikasi<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Akses Cepat Menu</span>
									<span class="subtitle op-8">Pintasan</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#" onclick="btnAlpha(this)">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Laporan</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#" onclick="btnAlpha(this)">
												<div class="quick-actions-item">
													<i class="flaticon-interface-6"></i>
													<span class="text">Berita</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#" onclick="btnAlpha(this)">
												<div class="quick-actions-item">
													<i class="flaticon-internet"></i>
													<span class="text">Forum</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#" onclick="btnAlpha(this)">
												<div class="quick-actions-item">
													<i class="flaticon-suitcase"></i>
													<span class="text">Loker</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#" onclick="btnAlpha(this)">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Kuesioner</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#" onclick="btnAlpha(this)">
												<div class="quick-actions-item">
													<i class="flaticon-envelope-1"></i>
													<span class="text">Email</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?=base_url('assets/admin-assets/')?>assets/<?=$data_account->photo_profile ? $data_account->photo_profile : 'img/profile.jpg'?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?=base_url('assets/admin-assets/')?>assets/<?=$data_account->photo_profile ? $data_account->photo_profile : 'img/profile.jpg'?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php if($data_account->full_name) echo limitText($data_account->full_name, 22); else if($data_account->username) echo limitText($data_account->username, 22); else echo limitText($data_account->email, 22); ?></h4>
												<p class="text-muted"><?=limitText($data_account->email, 22)?></p><a href="<?=base_url('back/student/profil-mahasiswa')?>" class="btn btn-xs btn-secondary btn-sm">Lihat Profil</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" onclick="btnAlpha(this)">Riwayat Aktifitas</a>
										<a class="dropdown-item" href="#" onclick="btnAlpha(this)">Kontribusi</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" onclick="btnAlpha(this)">Pengaturan Akun</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?=base_url('logout')?>">Keluar</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?=base_url('assets/admin-assets/')?>assets/<?=$data_account->photo_profile ? $data_account->photo_profile : 'img/profile.jpg'?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php if($data_account->full_name) echo limitText($data_account->full_name, 22); else if($data_account->username) echo limitText($data_account->username, 22); else echo limitText($data_account->email, 22); ?>
									<span class="user-level"><?=$data_account->role?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#" onclick="btnAlpha(this)">
											<span class="link-collapse">Riwayat Aktifitas</span>
										</a>
									</li>
									<li>
										<a href="#" onclick="btnAlpha(this)">
											<span class="link-collapse">Kontribusi</span>
										</a>
									</li>
									<li>
										<a href="#" onclick="btnAlpha(this)">
											<span class="link-collapse">Pengaturan Akun</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active" id="dasbor">
							<a href="<?=base_url('dashboard')?>">
								<i class="fas fa-desktop"></i>
								<p>Dasbor</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Master</h4>
						</li>
						<li class="nav-item" id="mahasiswax">
							<a href="<?=base_url('back/student/daftar-mahasiswa')?>">
								<i class="flaticon-add-user"></i>
								<p>Mahasiswa</p>
							</a>
						</li>
						<li id="parent-mahasiswa" class="nav-item">
							<a data-toggle="collapse" href="#mahasiswa">
								<i class="flaticon-add-user"></i>
								<p>Mahasiswa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="mahasiswa">
								<ul class="nav nav-collapse">
									<li id="child-mahasiswa-1" class="child-nav-item">
										<a href="<?=base_url('back/student/daftar-mahasiswa')?>">
											<span class="sub-item">Data Mahasiswa</span>
										</a>
									</li>
									<li id="child-mahasiswa-2" class="child-nav-item">
										<a href="<?=base_url('back/student/ubah-status-mahasiswa')?>">
											<span class="sub-item">Ubah Status</span>
										</a>
									</li>
									<li class="child-nav-item">
										<a href="#" onclick="btnAlpha(this)">
											<span class="sub-item">Data Mata Kuliah</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Kuesioner dan Email</h4>
						</li>
						<li id="parent-kuesioner" class="nav-item">
							<a data-toggle="collapse" href="#kuesioner">
								<i class="flaticon-list"></i>
								<p>Kuesioner</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="kuesioner">
								<ul class="nav nav-collapse">
									<li id="child-kuesioner-1" class="child-nav-item">
										<a href="<?=base_url('admin/form/')?>">
											<span class="sub-item">Riwayat Kuesioner</span>
										</a>
									</li>
									<li class="child-nav-item">
										<a href="#" onclick="btnAlpha(this)">
											<span class="sub-item">Pharmacy Form</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li id="parent-email" class="nav-item">
							<a data-toggle="collapse" href="#email">
								<i class="flaticon-envelope-3"></i>
								<p>Email</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="email">
								<ul class="nav nav-collapse">
									<li class="child-nav-item">
										<a href="#" onclick="btnAlpha(this)">
											<span class="sub-item">Riwayat Pengiriman</span>
										</a>
									</li>
									<li id="child-email-2" class="child-nav-item">
										<a href="<?=base_url('admin/email/kirim-email')?>">
											<span class="sub-item">Kirim Email</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" onclick="btnAlpha(this)">
								<i class="flaticon-circle"></i>
								<p>Menu Lainnya</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
        <!-- End Sidebar -->
        
        <div class="main-panel">