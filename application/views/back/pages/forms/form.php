			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?=base_url('admin')?>">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Mahasiswa</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Data Mahasiswa</a>
                            </li>
                            <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Tambah Data Mahasiswa</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Formulir isian data mahasiswa</div>
								</div>
								<div class="card-body">
									<form class="form" action="<?=base_url('admin/student/create')?>" method="POST">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<div id="sandbox-container" class="span5">
														<input type="text" id="full-name" name="full_name" placeholder="Nama lengkap" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="email" id="email" name="email" placeholder="Alamat email" value="" class="form-control">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<div id="sandbox-container" class="span5">
														<input type="text" id="nim" name="nim" placeholder="NIM" value="" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="text" id="date-of-entry" name="date_of_entry" placeholder="Tanggal masuk pertama" value="" data-language="in" class="datepicker-here form-control">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="text" id="date-of-birth" name="date_of_birth" placeholder="Tanggal lahir" value="" data-language="in" class="datepicker-here form-control">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="text" id="username" name="username" placeholder="Username" value="" class="form-control">
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="password" id="password" name="password" placeholder="Password" value="" class="form-control">
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="password" id="check-password" placeholder="Ulangi password" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="card-action">
										<button type="button" class="btn btn-success" onclick="btnConfirm(this)" data-message="Anda akan menyimpan data ini!" data-type="btnCreate" data-ajax="exist" data-url="<?=base_url('admin/student/create')?>">Simpan</button>
										<button type="button" class="btn btn-danger" onclick="btnConfirm(this)" data-message="Anda akan kembali pada halaman sebelumnya!" data-type="btnCancel" data-url="<?=$pageUrl?>">Batal</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>