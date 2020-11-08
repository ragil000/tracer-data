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
								<a href="#">Ubah Status Mahasiswa</a>
							</li>
						</ul>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Formulir ubah status mahasiswa</div>
								</div>
								<div class="card-body">
									<form class="form" action="" method="POST">
										<?=!empty($edit_detail) ? '<input type="text" name="user_id" value="'.$edit_detail->user_id.'" hidden> <input type="text" name="profile_id" value="'.$edit_detail->profile_id.'" hidden>' : ''?>
										<div class="row">
											<div class="col-lg-4">
												<div class="form-group form-group-default">
													<label>Status Mahasiswa</label>
													<select class="form-control required" id="status" onchange="toogle(this, '.input-child-lulus', 'Lulus', true)" name="status">
														<option value="">--Pilih status--</option>
														<option value="Aktif">Aktif</option>
														<option value="Cuti">Cuti</option>
														<option value="Lulus">Lulus</option>
														<option value="DO">DO</option>
													</select>
												</div>
												<div class="row mt-3">
													<div class="col-lg-6 p-0">
														<div class="form-group">
															<!-- <label for="successInput">Success Input</label> -->
															<input type="text" id="date_of_judicial" class="form-control input-child-lulus" data-language="in" data-position="bottom left" onmouseover="getDatepicker(this)" onclick="getDatepicker(this)" name="date_of_judicial" placeholder="Tanggal yudusium" value="" hidden>
														</div>
													</div>
													<div class="col-lg-6 p-0">
														<div class="form-group">
															<!-- <label for="successInput">Success Input</label> -->
															<input type="text" id="date_of_graduate" class="form-control input-child-lulus" data-language="in" data-position="bottom left" onmouseover="getDatepicker(this)" onclick="getDatepicker(this)" name="date_of_graduate" placeholder="Tanggal wisuda" value="" hidden>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="form-group form-group-default">
													<label>Nama Mahasiswa</label>
													<select class="form-control js-example-basic-multiple" id="profile_id" name="profile_id[]" multiple="multiple">
														<?=$student_opt?>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="card-action">
										<button type="button" class="btn btn-success" onclick="btnConfirm(this)" data-message="Anda akan menyimpan data ini!" data-type="btnUpdate" data-url="<?=base_url('back/student/updateStatus')?>" data-ajax="true" data-refress="true">Simpan</button>
										<button type="button" class="btn btn-danger" onclick="btnCancel(this)" data-message="Anda akan kembali pada halaman sebelumnya!" data-type="btnCancel" data-url="<?=$base_path_url.'daftar-mahasiswa'?>">Kembali</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>