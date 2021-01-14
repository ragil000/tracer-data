			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Kirim Kuesioner</h4>
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
								<a href="#">Kuesioner dan Email</a>
							</li>
                            <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="<?=base_url('back/form/form-studio')?>">Kuesioner Studio</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Kirim Kuesioner</a>
							</li>
						</ul>
                    </div>
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Formulir pengiriman kuesioner</div>
								</div>
								<div class="card-body">
									<form class="form" action="" method="POST">
										<?=!empty($edit_detail) ? '<input type="text" name="user_id" value="'.$edit_detail->user_id.'" hidden> <input type="text" name="profile_id" value="'.$edit_detail->profile_id.'" hidden>' : ''?>
										<div class="row">
											<div class="col-lg-4">
												<div class="form-group form-group-default">
													<label>Mahasiswa</label>
													<select class="form-control required" id="status" onchange="toogle(this, '.input-child-lulus', 'Lulus', true)" name="status">
														<option value="">--Pilih mahasiswa--</option>
														<option value="Semua Mahasiswa">Semua Mahasiswa</option>
														<option value="Semua S1">Semua S1</option>
														<option value="Semua Apoteker">Semua Apoteker</option>
														<option value="Semua Alumni S1">Semua Alumni S1</option>
														<option value="Semua Alumni Apoteker">Semua Alumni Apoteker</option>
														<option value="Ketik Sendiri">Ketik Sendiri</option>
													</select>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="form-group form-group-default">
													<label>Format pesan</label>
													<textarea name="" class="form-control">Silahkan kepada saudara/i untuk mengisi dan melengkapi data tracer studi pada link ini <a href="#">Klik Link Ini</a>
													</textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="card-action">
										<button type="button" class="btn btn-success" data-message="Anda akan menyimpan data ini!" data-type="btnUpdate" data-url="<?=base_url('back/student/updateStatus')?>" data-ajax="true" data-refress="true">Kirim</button>
										<button type="button" class="btn btn-danger" onclick="btnCancel(this)" data-message="Anda akan kembali pada halaman sebelumnya!" data-type="btnCancel" data-url="<?=$base_path_url.'form-studio'?>">Kembali</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>