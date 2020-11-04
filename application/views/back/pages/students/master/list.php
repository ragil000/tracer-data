            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
						<h4 class="page-title">Daftar Data Mahasiswa</h4>
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
								<a href="#">Daftar Data Mahasiswa</a>
                            </li>
						</ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="collapse text-center pr-0 mr-0" id="search-nav">
                                <form class="navbar-center navbar-form nav-search mr-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-search pr-1">
                                                <i class="fa fa-search search-icon"></i>
                                            </button>
                                        </div>
                                        <input type="text" placeholder="Cari mahasiswa..." class="form-control" onchange="btnAlpha(this)">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <button class="btn btn-primary mr-lg-4">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                Tambah Mahasiswa
                            </button>
                        </div>
                        <div class="col-lg-5 text-right">
                            <a href="<?=base_url().$page_url.'?display=table'?>" style="text-decoration:none;">
                                <button type="button" id="display-table" class="btn btn-icon btn-light btn-display">
                                    <i class="icon-list"></i>
                                </button>
                            </a>
                            <a href="<?=base_url().$page_url.'?display=card'?>" style="text-decoration:none;">
                                <button type="button" id="display-card" class="btn btn-icon btn-primary btn-display">
                                    <i class="icon-grid"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="card col-12">
                            <div class="card-header">
                            
                            </div>
                            <div class="card-body">
                                <table class="table table-head-bg-success">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Angkatan</th>
                                            <th scope="col">Jurusan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>