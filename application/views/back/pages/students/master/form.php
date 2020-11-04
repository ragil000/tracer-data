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
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Formulir isian data mahasiswa</div>
								</div>
								<div class="card-body">
									<form class="form" action="<?=base_url().$base_path_url.'create'?>" method="POST">
										<?=!empty($edit_detail) ? '<input type="text" name="user_id" value="'.$edit_detail->user_id.'" hidden> <input type="text" name="profile_id" value="'.$edit_detail->profile_id.'" hidden>' : ''?>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group form-group-default">
													<label>Jurusan</label>
													<select class="form-control required" id="major_id" name="major_id">
														<?=$major_opt?>
													</select>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<div id="sandbox-container" class="span5">
														<input type="text" id="nim" name="nim" placeholder="NIM" value="<?=!empty($edit_detail) ? $edit_detail->nim : ''?>" class="form-control required">
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="email" id="email" name="email" placeholder="Alamat email" value="<?=!empty($edit_detail) ? $edit_detail->email : ''?>" class="form-control required">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="text" id="date-of-entry" name="date_of_entry" placeholder="Tanggal masuk pertama" value="<?=!empty($edit_detail) ? $edit_detail->date_of_entry : ''?>" data-language="in" class="datepicker-here form-control required">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<input type="password" id="password" name="password" placeholder="Password" value="" class="form-control <?=!empty($edit_detail) ? '' : 'required'?>">
												</div>
											</div>
											<input type="text" name="status" value="active" hidden>
										</div>
									</div>
									<div class="card-action">
										<button type="button" class="btn btn-success" onclick="btnConfirm(this)" data-message="Anda akan menyimpan data ini!" data-type="<?=!empty($edit_detail) ? 'btnUpdate' : 'btnCreate'?>" data-url="<?=!empty($edit_detail) ? base_url('back/student/update') : base_url('back/student/create')?>" data-ajax="true" data-refress="true">Simpan</button>
										<button type="button" class="btn btn-danger" onclick="btnCancel(this)" data-message="Anda akan kembali pada halaman sebelumnya!" data-type="btnCancel" data-url="<?=$base_path_url.'daftar-mahasiswa'?>">Kembali</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>