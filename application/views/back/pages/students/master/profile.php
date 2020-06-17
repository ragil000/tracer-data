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
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#office" role="tab" aria-selected="false">Data Pekerjaan</a> </li>
										</ul>
									</div>
								</div>
								<div class="tab-content" id="profile">
									<div class="card-body tab-pane fade active show" id="public" role="tabpanel">
										<div class="row mt-3">
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Nama</label>
													<input type="text" class="form-control" name="name" placeholder="Name" value="Gangsar Simanjuntak">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Email</label>
													<input type="email" class="form-control" name="email" placeholder="Name" value="gangsar@example.com">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Nomor Kontak</label>
													<input type="text" class="form-control" name="number" placeholder="Nomor Kontak" value="+6282311463010">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Tempat Lahir</label>
													<input type="text" class="form-control" name="Tempat Lahir" placeholder="Name" value="Kendari">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Tanggal Lahir</label>
													<input type="text" class="form-control" data-language="in" data-position="bottom left" onfocus="getDatepicker(this)" id="datepicker" name="datepicker" value="1997-03-21" placeholder="Birth Date">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Jenis Kelamin</label>
													<select class="form-control" id="gender">
														<option selected>Laki-Laki</option>
														<option>Perempuan</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Facebook (link)</label>
													<input type="text" class="form-control" name="" value="https://www.facebook.com/RagilManggalaningYudhanto" placeholder="https://linkedin.com/in/example">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Instagram (link)</label>
													<input type="text" class="form-control" name="" value="https://www.instagram.com/ragilyudhanto/" placeholder="https://linkedin.com/in/example">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-group-default">
													<label>Linkedin (link)</label>
													<input type="text" class="form-control" name="" value="https://www.linkedin.com/in/ragil-manggalaning-yudhanto-7a1172162/" placeholder="https://linkedin.com/in/example">
												</div>
											</div>
										</div>
										<div class="row mt-3 mb-1">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Kutipan Singkat</label>
													<textarea class="form-control" name="about" placeholder="About Me" rows="3">Kegagalan itu seperti obat. Jika ingin sembuh dari sakitnya, kita harus rela menahan rasa pahit saat menelannya.</textarea>
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Alamat</label>
													<input type="text" class="form-control" value="JL. Raya Bogor, Km 31. No.61, Sukamaju, Kec. Cilodong, Kota Depok, Jawa Barat 16415" name="address" placeholder="Address">
												</div>
											</div>
										</div>
										<div class="text-right mt-3 mb-3">
											<button class="btn btn-success" onclick="btnAlpha(this)">Simpan Perubahan</button>
											<button class="btn btn-danger" onclick="btnAlpha(this)">Batalkan</button>
										</div>
									</div>
									<div class="card-body tab-pane fade" id="parent" role="tabpanel">
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Nama Ayah</label>
													<input type="text" class="form-control" name="name" placeholder="Nama Ayah" value="Prapto Simanjuntak">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Nama Ibu</label>
													<input type="text" class="form-control" name="email2" placeholder="Nama Ibu" value="Ningsih Tinampi">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Pekerjaan Ayah</label>
													<input type="text" class="form-control" name="email3" placeholder="Pekerjaan Ayah" value="Guru SD (PNS)">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Pekerjaan Ibu</label>
													<input type="text" class="form-control" name="email5" placeholder="Pekerjaan Ibu" value="Ibu Rumah Tangga (IRT)">
												</div>
											</div>
										</div>
										<div class="row mt-3 mb-1">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Nomor Kontak Orang Tua/Wali</label>
													<input type="text" class="form-control" name="email6" placeholder="Nomor Kontak" value="+6282311463010">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Alamat Orang Tua/Wali</label>
													<input type="text" class="form-control" value="JL. Raya Bogor, Km 31. No.61, Sukamaju, Kec. Cilodong, Kota Depok, Jawa Barat 16415" name="address" placeholder="Alamat Orang Tua/Wali">
												</div>
											</div>
										</div>
										<div class="text-right mt-3 mb-3">
											<button class="btn btn-success" onclick="btnAlpha(this)">Simpan Perubahan</button>
											<button class="btn btn-danger" onclick="btnAlpha(this)">Batalkan</button>
										</div>
									</div>
									<div class="card-body tab-pane fade" id="study" role="tabpanel">
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Asal SMA/Sederajat</label>
													<input type="text" class="form-control" placeholder="Nama SMA/Sederajat" value="SMAN 1 Maginti">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Tanggal Masuk Kampus</label>
													<input type="text" class="form-control" data-language="in" data-position="bottom left" onfocus="getDatepicker(this)" id="datepicker2" name="datepicker" value="2015-01-01" placeholder="Birth Date">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Tanggal Yudisium</label>
													<input type="text" class="form-control" data-language="in" data-position="bottom left" onfocus="getDatepicker(this)" id="datepicker5" name="datepicker" value="2019-11-25" placeholder="Birth Date">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Tanggal Wisuda</label>
													<input type="text" class="form-control" data-language="in" data-position="bottom left" onfocus="getDatepicker(this)" id="datepicker3" name="datepicker" value="2019-12-01" placeholder="Birth Date">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Judul Skripsi</label>
													<input type="text" class="form-control" value="JL. Raya Bogor, Km 31. No.61, Sukamaju, Kec. Cilodong, Kota Depok, Jawa Barat 16415" name="address" placeholder="Alamat Orang Tua/Wali">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Dosen Pembimbing I</label>
													<select class="form-control" id="gender">
														<option selected>Sutrisno, S.Farm., M.Farm</option>
														<option>DR. Karyo Subandono, S.Farm., M.Farm</option>
														<option>Annisa Sulistia, S.Farm., M.Farm</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Dosen Pembimbing II</label>
													<select class="form-control" id="gender">
														<option>Sutrisno, S.Farm., M.Farm</option>
														<option>DR. Karyo Subandono, S.Farm., M.Farm</option>
														<option selected>Annisa Sulistia, S.Farm., M.Farm</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Nomor Ijazah</label>
													<input type="text" class="form-control" placeholder="Nomor ijazah" value="004111">
												</div>
											</div>
										</div>
										<div class="text-right mt-3 mb-3">
											<button class="btn btn-success" onclick="btnAlpha(this)">Simpan Perubahan</button>
											<button class="btn btn-danger" onclick="btnAlpha(this)">Batalkan</button>
										</div>
									</div>
									<div class="card-body tab-pane fade" id="office" role="tabpanel">
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Nama Institusi/Perusahaan</label>
													<input type="text" class="form-control" placeholder="Nama institusi/perusahaan" value="PT. Kimia Farma">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Tanggal Mulai Bekerja</label>
													<input type="text" class="form-control" data-language="in" data-position="bottom left" onfocus="getDatepicker(this)" id="datepicker8" name="datepicker" value="2015-01-01" placeholder="Birth Date">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Posisi/Jabatan</label>
													<input type="text" class="form-control" value="Asisten Apoteker" name="address" placeholder="Posisi/jabatan">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-group-default">
													<label>Gaji (Rp per bulan)</label>
													<input type="text" class="form-control" value="5.000.000" name="address" placeholder="Gaji">
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Alamat Instansi/Perusahaan</label>
													<input type="text" class="form-control" value="JL. Raya Bogor, Km 31. No.61, Sukamaju, Kec. Cilodong, Kota Depok, Jawa Barat 16415" name="address" placeholder="Alamat Orang Tua/Wali">
												</div>
											</div>
										</div>
										<div class="text-right mt-3 mb-3">
											<button class="btn btn-success" onclick="btnAlpha(this)">Simpan Perubahan</button>
											<button class="btn btn-danger" onclick="btnAlpha(this)">Batalkan</button>
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
										<div class="name">Gangsar Simanjuntak, S.Farm</div>
										<div class="job">E1E115035</div>
										<div class="desc">gangsar@example.com</div>
										<div class="social-media">
											<p>"Kegagalan itu seperti obat. Jika ingin sembuh dari sakitnya, kita harus rela menahan rasa pahit saat menelannya."</p>
										</div>
										<div class="social-media">
											<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="https://www.facebook.com/RagilManggalaningYudhanto"> 
												<span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
											</a>
											<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="https://www.instagram.com/ragilyudhanto/"> 
												<span class="btn-label just-icon"><i class="flaticon-instagram"></i> </span> 
											</a>
											<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="https://www.linkedin.com/in/ragil-manggalaning-yudhanto-7a1172162/"> 
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