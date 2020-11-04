			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Profil</h4>
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
								<a href="<?=base_url('admin/student/read-mahasiswa')?>">Daftar Data Mahasiswa</a>
                            </li>
                            <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Profil Mahasiswa</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="card card-with-nav">
								<div class="card-header">
									<div class="row row-nav-line">
										<ul class="nav nav-tabs nav-line nav-color-secondary w-100 pl-3" id="profile" role="tablist">
											<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#public" role="tab" aria-selected="true">Data Umum</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#parent" role="tab" aria-selected="false">Data Orang Tua/Wali</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#study" role="tab" aria-selected="false">Data Pendidikan</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#archievement" role="tab" aria-selected="false">Data Prestasi</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#job" role="tab" aria-selected="false">Data Pekerjaan</a> </li>
										</ul>
									</div>
								</div>
								<div class="tab-content" id="profile">
									<div class="card-body tab-pane fade active show" id="public" role="tabpanel">
										<form action="" id="form-profile" method="POST">
											<div class="row mt-3">
												<input type="text" name="user_id" value="<?=$profile[0]->user_id?>" hidden>
												<input type="text" name="profile_id" value="<?=$profile[0]->profile_id?>" hidden>
												<div class="col-md-4">
													<div class="form-group form-group-default">
														<label>Nama</label>
														<input type="text" class="form-control required" name="full_name" placeholder="Nama lengkap" value="<?=$profile[0]->full_name?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-group-default">
														<label>Email</label>
														<input type="email" class="form-control required" name="email" placeholder="Email" value="<?=$profile[0]->email?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-group-default">
														<label>Nomor Kontak</label>
														<input type="text" class="form-control required" name="phone" placeholder="Nomor kontak" value="<?=$profile[0]->phone?>">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-4">
													<div class="form-group form-group-default">
														<label>Tempat Lahir</label>
														<input type="text" class="form-control required" name="place_of_birth" placeholder="Tempat lahir" value="<?=$profile[0]->place_of_birth?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-group-default">
														<label>Tanggal Lahir</label>
														<input type="text" class="form-control required" data-language="in" data-position="bottom left" onclick="getDatepicker(this)" name="date_of_birth" value="<?=$profile[0]->date_of_birth?>" placeholder="Tanggal lahir">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group form-group-default">
														<label>Jenis Kelamin</label>
														<select class="form-control required" id="gender" name="gender">
															<?php
																$genderMale = 'selected';
																$genderFemale = '';
																if($profile[0]->gender == 'f') {
																	$genderMale = '';
																	$genderFemale = 'selected';
																}																
															?>
															<option <?=$genderMale?> value="m">Laki-Laki</option>
															<option <?=$genderFemale?> value="f">Perempuan</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Facebook (link)</label>
														<input type="text" class="form-control" name="facebook" value="<?=$profile[0]->facebook?>" placeholder="https://www.facebook.com/contoh">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Instagram (link)</label>
														<input type="text" class="form-control" name="instagram" value="<?=$profile[0]->instagram?>" placeholder="https://www.instagram.com/contoh">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Twitter (link)</label>
														<input type="text" class="form-control" name="twitter" value="<?=$profile[0]->twitter?>" placeholder="https://www.twitter.com/contoh">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Linkedin (link)</label>
														<input type="text" class="form-control" name="linkedin" value="<?=$profile[0]->linkedin?>" placeholder="https://linkedin.com/in/contoh">
													</div>
												</div>
											</div>
											<div class="row mt-3 mb-1">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Hobi</label>
														<textarea class="form-control" name="hobby" placeholder="Hobi" maxlength="250" rows="3"><?=$profile[0]->hobby?></textarea>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Kutipan Singkat</label>
														<textarea class="form-control" name="quote" placeholder="Kutipan/quote" maxlength="350" rows="3"><?=$profile[0]->quote?></textarea>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Alamat</label>
														<textarea class="form-control required" name="address" placeholder="Alamat"><?=$profile[0]->address?></textarea>
													</div>
												</div>
											</div>
											<div class="text-right mt-3 mb-3">
												<button type="button" class="btn btn-success" onclick="btnConfirm(this, 'form-profile')" data-message="Anda akan menyimpan data ini!" data-type="btnUpdate" data-ajax="true" data-refress="false" data-url="<?=base_url('back/student/updateProfile')?>">Simpan Perubahan</button>
											</div>
										</form>
									</div>
									<div class="card-body tab-pane fade" id="parent" role="tabpanel">
										<form action="" id="form-parent" method="POST">
											<input type="text" name="profile_id" value="<?=$profile[0]->profile_id?>" hidden>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Nama Ayah</label>
														<input type="text" class="form-control required" name="father_full_name" placeholder="Nama ayah" value="<?=$parent[0]->father_full_name?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Nama Ibu</label>
														<input type="text" class="form-control required" name="mother_full_name" placeholder="Nama ibu" value="<?=$parent[0]->mother_full_name?>">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Pekerjaan Ayah</label>
														<input type="text" class="form-control" name="father_job" placeholder="Pekerjaan ayah" value="<?=$parent[0]->father_job?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Pekerjaan Ibu</label>
														<input type="text" class="form-control" name="mother_job" placeholder="Pekerjaan ibu" value="<?=$parent[0]->mother_job?>">
													</div>
												</div>
											</div>
											<div class="row mt-3 mb-1">
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Nomor Kontak Orang Tua/Wali</label>
														<input type="text" class="form-control required" name="guardian_phone" placeholder="Nomor kontak orangtua/wali" value="<?=$parent[0]->guardian_phone?>">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Alamat Orang Tua/Wali</label>
														<textarea class="form-control required" name="guardian_address" placeholder="Alamat orang tua/wali"><?=$parent[0]->guardian_address?></textarea>
													</div>
												</div>
											</div>
											<div class="text-right mt-3 mb-3">
												<button type="button" class="btn btn-success" onclick="btnConfirm(this, 'form-parent')" data-message="Anda akan menyimpan data ini!" data-type="btnUpdate" data-ajax="true" data-refress="false" data-url="<?=base_url('back/student/updateParent')?>">Simpan Perubahan</button>
											</div>
										</form>
									</div>
									<div class="card-body tab-pane fade" id="study" role="tabpanel">
										<form action="" id="form-study" method="POST" enctype="multipart/form-data" data-url="<?=base_url('back/student/updateStudy')?>">
											<input type="text" name="profile_id" value="<?=$profile[0]->profile_id?>" hidden>
											<div class="row mt-3 mb-0">
												<div class="col-md-12">
													<h4 class="text-primary"><b><?=$education[0]->major?></b></h4>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Asal SMA/Sederajat</label>
														<input type="text" class="form-control" name="origin" placeholder="Asal SMA/Sederajat" value="<?=$education[0]->origin?>" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Tanggal Masuk Kampus</label>
														<input type="text" class="form-control" data-language="in" data-position="bottom left" onclick="getDatepicker(this)" name="date_of_entry" value="<?=$education[0]->date_of_entry?>" placeholder="Tanggal masuk" disabled>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Tanggal Yudisium</label>
														<input type="text" class="form-control" data-language="in" data-position="bottom left" onclick="getDatepicker(this)" name="date_of_judicial" value="<?=$education[0]->date_of_judicial?>" placeholder="Tanggal yudisium" disabled>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Tanggal Wisuda</label>
														<input type="text" class="form-control" data-language="in" data-position="bottom left" onclick="getDatepicker(this)" name="date_of_graduate" value="<?=$education[0]->date_of_graduate?>" placeholder="Tanggal wisuda" disabled>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Judul Skripsi</label>
														<input type="text" class="form-control" name="thesis_title" value="<?=$education[0]->thesis_title?>" placeholder="Judul skripsi" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-12">
													<div class="form-group form-group-default">
														<label>Abstrak Skripsi</label>
														<textarea class="form-control" name="thesis_abstract" placeholder="Abstrak skripsi" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>><?=$education[0]->thesis_abstract?></textarea>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Dosen Pembimbing I</label>
														<select class="form-control select2-init" id="thesis_supervisor1" name="thesis_supervisor1" value="<?=$education[0]->thesis_supervisor1?>" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>
															<?php
																if(!$education[0]->thesis_supervisor1) {	
															?>
															<option selected value="">--Pilih dosen pembimbing I--</option>
															<?php
																}
																foreach($teacher as $value) {
															?>
															<option value="<?=$value->id?>" <?=$education[0]->thesis_supervisor1_id == $value->id ? 'selected' : ''?>><?=$value->nip.' - '.$value->full_name?></option>
															<?php
																}
															?>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Dosen Pembimbing II</label>
														<select class="form-control select2-init" id="thesis_supervisor2" name="thesis_supervisor2" value="<?=$education[0]->thesis_supervisor2?>" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>
															<?php
																if(!$education[0]->thesis_supervisor2) {	
															?>
															<option selected value="">--Pilih dosen pembimbing II--</option>
															<?php
																}
																foreach($teacher as $value) {
															?>
															<option value="<?=$value->id?>" <?=$education[0]->thesis_supervisor2_id == $value->id ? 'selected' : ''?>><?=$value->nip.' - '.$value->full_name?></option>
															<?php
																}
															?>
														</select>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>IPK</label>
														<input type="text" class="form-control" name="score" value="<?=$education[0]->score?>" placeholder="IPK" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Nomor Ijazah</label>
														<input type="text" class="form-control" name="certificate_code" value="<?=$education[0]->certificate_code?>" placeholder="Nomor ijazah" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>File Ijazah</label>
														<button type="button" onclick="clickUpload('#certificate_file', '#text-certificate')" class="btn btn-sm btn-primary disable-link" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>
															<i class="icon-doc"></i> <?=$education[0]->certificate_file ? '<span id="text-certificate">Ganti File</span>' : '<span id="text-certificate">Pilih File</span>'?>
														</button>
														<input type="file" id="certificate_file" class="form-control" name="certificate_file" placeholder="File skripsi" data-type="jpg,jpeg,png,doc,docx,pdf" data-size="2240000" hidden>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>File Skripsi</label>
														<button type="button" onclick="clickUpload('#thesis_file', '#text-thesis')" class="btn btn-sm btn-primary disable-link" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>
															<i class="icon-doc"></i> <?=$education[0]->thesis_file ? '<span id="text-thesis">Ganti File</span>' : '<span id="text-thesis">Pilih File</span>'?>
														</button>
														<input type="file" id="thesis_file" class="form-control" name="thesis_file" placeholder="File skripsi" data-type="jpg,jpeg,png,doc,docx,pdf" data-size="2240000" hidden>
													</div>
												</div>
											</div>
											<div class="text-right mt-3 mb-3">
												<button type="button" class="btn btn-success" onclick="btnConfirm(this, 'form-study')" data-message="Anda akan menyimpan data ini!" data-type="btnUpdate" data-ajax="true" data-refress="false" data-url="<?=base_url('back/student/updateStudy')?>" data-form="true" <?=$profile[0]->status == 'Lulus' ? '' : 'disabled'?>>Simpan Perubahan</button>
											</div>
										</form>
									</div>
									<div class="card-body tab-pane fade" id="archievement" role="tabpanel">
										<form action="" method="POST" id="form-archievement" enctype="multipart/form-data" data-url="<?=base_url('back/student/updateArchievement')?>">
											<input type="text" name="profile_id" value="<?=$profile[0]->profile_id?>" hidden>
											<input type="text" id="data-from-database" value="<?=count($archievement)?>" hidden>
											<input type="text" id="archievement-count-row" name="total_data" value="<?=count($archievement) == 0 ? 1 : count($archievement)?>" hidden>
											<div class="row">
												<div class="col-12 text-right mb-3" id="btn-archievement">
													<button type="button" class="btn btn-sm btn-primary" onclick="setNewArchievement()">
														<span class="btn-label">
															<i class="fa fa-plus text-xsmall"></i>
														</span>
														Tambah
													</button>
												</div>
												<?php
													if($archievement) {
														$count = 0;
														foreach($archievement as $row) {
												?>
												<div class="col-12 card" id="row-archievement-<?=$count?>">
													<div class="row mt-3">
														<div class="col-12">
															<button type="button" class="btn btn-sm btn-icon btn-danger btn-delete-archievement" data-row="<?=$count?>" onclick="deleteArchievement(this)">
																<i class="fa fa-trash text-xsmall"></i>
															</button>
														</div>
													</div>
													<div class="row mt-3">
														<input type="text" name="archievement_id[]" value="<?=$row->id?>" hidden>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Nama Prestasi</label>
																<input type="text" class="form-control required" name="archievement_name[]" placeholder="Nama institusi/perusahaan" value="<?=$row->archievement_name?>">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Bidang Prestasi</label>
																<input type="text" class="form-control required" name="field_of_archievement[]" placeholder="Bidang prestasi" value="<?=$row->field_of_archievement?>">
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Tanggal Penghargaan</label>
																<input type="text" class="form-control required" data-language="in" data-position="bottom left" onclick="getDatepicker(this)" name="date_of_archievement[]" placeholder="Tanggal penghargaan" value="<?=$row->date_of_archievement?>">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Skala Prestasi</label>
																<input type="text" class="form-control required" name="regional_level[]" placeholder="Skala prestasi" value="<?=$row->regional_level?>">
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Detail Prestasi</label>
																<textarea type="text" class="form-control" name="archievement_detail[]" placeholder="Detail prestasi"><?=$row->archievement_detail?></textarea>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>File Bukti</label>
																<button type="button" onclick="clickUpload('#archievement_file_<?=$count?>', '#text-archievement-<?=$count?>')" class="btn btn-sm btn-primary disable-link">
																	<i class="icon-doc"></i> <?=$row->archievement_file ? '<span id="text-archievement-'.$count.'">Ganti File</span>' : '<span id="text-archievement-'.$count.'">Pilih File</span>'?>
																</button>
																<input type="file" id="archievement_file_<?=$count?>" class="form-control" name="archievement_file[]" placeholder="File sertifikat/penghargaan/bukti lain" data-type="jpg,jpeg,png,doc,docx,pdf" data-size="2240000" hidden>
															</div>
														</div>
													</div>
												</div>
												<?php
															$count++;
														}
													}else {
												?>
												<div class="col-12 card" id="row-archievement-0">
													<div class="row mt-3">
														<div class="col-12">
															<button type="button" class="btn btn-sm btn-icon btn-danger btn-delete-archievement" data-row="0" onclick="deleteArchievement(this)">
																<i class="fa fa-trash text-xsmall"></i>
															</button>
														</div>
													</div>
													<div class="row mt-3">
														<input type="text" name="archievement_id[]" value="" hidden>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Nama Prestasi</label>
																<input type="text" class="form-control required" name="archievement_name[]" placeholder="Nama institusi/perusahaan" value="">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Bidang Prestasi</label>
																<input type="text" class="form-control required" name="field_of_archievement[]" placeholder="Bidang prestasi" value="">
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Tanggal Penghargaan</label>
																<input type="text" class="form-control required" data-language="in" data-position="bottom left" onclick="getDatepicker(this)" name="date_of_archievement[]" placeholder="Tanggal penghargaan" value="">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Skala Prestasi</label>
																<input type="text" class="form-control required" name="regional_level[]" placeholder="Skala prestasi" value="">
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Detail Prestasi</label>
																<textarea type="text" class="form-control" name="archievement_detail[]" placeholder="Detail prestasi"></textarea>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>File Bukti</label>
																<button type="button" onclick="clickUpload('#archievement_file_0', '#text-archievement-0')" class="btn btn-sm btn-primary disable-link">
																	<i class="icon-doc"></i> <span id="text-archievement-0">Pilih File</span>
																</button>
																<input type="file" id="archievement_file_0" class="form-control" name="archievement_file[]" placeholder="File sertifikat/penghargaan/bukti lain" data-type="jpg,jpeg,png,doc,docx,pdf" data-size="2240000" hidden>
															</div>
														</div>
													</div>
												</div>
												<?php
													}
												?>
											</div>
											<div class="text-right mt-3 mb-3">
												<button type="button" class="btn btn-success" onclick="btnConfirm(this, 'form-archievement')" data-message="Anda akan menyimpan data ini!" data-type="btnUpdate" data-ajax="true" data-refress="false" data-url="<?=base_url('back/student/updateArchievement')?>" data-form="true">Simpan Perubahan</button>
											</div>
										</form>
									</div>
									<div class="card-body tab-pane fade" id="job" role="tabpanel">
										<form action="" method="POST" id="form-job">
											<input type="text" name="profile_id" value="<?=$profile[0]->profile_id?>" hidden>
											<div class="row mt-3">
												<input type="text" name="job_id" value="" hidden>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Nama Institusi/Perusahaan</label>
														<input type="text" class="form-control required" name="company" placeholder="Nama institusi/perusahaan" value="<?=$job[0]->company?>" <?=$profile[0]->status == 'Lulus' ? '' : ''?>>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Tanggal Mulai Bekerja</label>
														<input type="text" class="form-control required" data-language="in" data-position="bottom left" onclick="getDatepicker(this)" name="date_of_entry" placeholder="Tanggal mulai bekerja" value="<?=$job[0]->date_of_entry?>" <?=$profile[0]->status == 'Lulus' ? '' : ''?>>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Posisi/Jabatan</label>
														<input type="text" class="form-control required" name="position" placeholder="Posisi/jabatan" value="<?=$job[0]->position?>" <?=$profile[0]->status == 'Lulus' ? '' : ''?>>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Gaji (Rp per bulan)</label>
														<input type="text" class="form-control" name="salary" placeholder="Gaji" value="<?=$job[0]->salary?>" <?=$profile[0]->status == 'Lulus' ? '' : ''?>>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Kabupaten/Kota</label>
														<select class="form-control select2-init required" name="city" <?=$profile[0]->status == 'Lulus' ? '' : ''?>>
															<?php
																if(!$job[0]->city_id) {	
															?>
															<option selected value="">--Pilih kabupaten/kota--</option>
															<?php
																}
																foreach($city as $value) {
															?>
															<option value="<?=$value->id?>" <?=$job[0]->city_id == $value->id ? 'selected' : ''?>><?=ucwords(strtolower($value->name))?></option>
															<?php
																}
															?>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Alamat Instansi/Perusahaan</label>
														<input type="text" class="form-control required" name="address" placeholder="Alamat instansi/perusahaan" value="<?=$job[0]->address?>" <?=$profile[0]->status == 'Lulus' ? '' : ''?>>
													</div>
												</div>
											</div>
										</form>
										<div class="text-right mt-3 mb-3">
											<button type="button" class="btn btn-success" onclick="btnConfirm(this, 'form-job')" data-message="Anda akan menyimpan data ini!" data-type="btnUpdate" data-ajax="true" data-refress="false" data-url="<?=base_url('back/student/updateJob')?>" <?=$profile[0]->status == 'Lulus' ? '' : ''?>>Simpan Perubahan</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-header" style="background-image: url(<?=base_url('/assets/admin-assets/assets/img/blogpost.jpg')?>)">
									<div class="profile-picture">
										<div class="avatar avatar-xl">
											<img src="<?=base_url('/assets/admin-assets/assets/img/profile.jpg')?>" alt="..." class="avatar-img rounded-circle">
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="user-profile text-center">
										<span class="badge badge-warning"><?=$education[0]->major?></span>
										<span class="badge badge-<?=$profile[0]->status != 'DO' ? 'success' : 'danger'?>"><?=$profile[0]->status?></span>
										<div class="name"><?=$profile[0]->full_name?></div>
										<div class="job"><?=$profile[0]->nim?></div>
										<div class="desc"><?=$profile[0]->email?></div>
										<div class="social-media">
											<p>"<?=$profile[0]->quote ? $profile[0]->quote : '-'?>"</p>
										</div>
										<div class="social-media">
											<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="<?=$profile[0]->facebook ? $profile[0]->facebook : '#'?>"> 
												<span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
											</a>
											<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="<?=$profile[0]->instagram ? $profile[0]->instagram : '#'?>"> 
												<span class="btn-label just-icon"><i class="flaticon-instagram"></i> </span> 
											</a>
											<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="<?=$profile[0]->twitter ? $profile[0]->twitter : '#'?>"> 
												<span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span> 
											</a>
											<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="<?=$profile[0]->linkedin ? $profile[0]->linkedin : '#'?>"> 
												<span class="btn-label just-icon"><i class="flaticon-linkedin"></i> </span> 
											</a>
										</div>
										<div class="view-profile">
											<a href="#" class="btn btn-secondary btn-block">
												<span class="btn-label">
													<i class="flaticon-envelope-1"></i>
												</span>
												Kirimi Email
											</a>
										</div>
									</div>
								</div>
								<div class="card-footer text-center">
									<span class="text-info">75% informasi profil telah terisi</span>
									<div class="progress progress-sm">
										<div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
                    </div>
				</div>
			</div>