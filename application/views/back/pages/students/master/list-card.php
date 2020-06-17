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
                        <div class="col-12">
                            <div class="collapse text-center" id="search-nav">
                                <form class="navbar-center navbar-form nav-search mr-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-search pr-1">
                                                <i class="fa fa-search search-icon"></i>
                                            </button>
                                        </div>
                                        <input type="text" placeholder="Search ..." class="form-control" onchange="btnAlpha(this)">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="list-data" class="row card-gap multi-column justify-content-center">
                        <?php
                            // for($i=0; $i < 10; $i++){
                        ?>
                        <!-- <div class="card col-lg-2 col-md-4 col-sm-6">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="card-header-btn mt-2 mb-2 p-2">
                                        <span class="badge badge-danger m-0 btn-left-card text-vsm">2015</span>
                                        <span class="badge badge-success m-0 mt-4 btn-left-card text-vsm">Lulus</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card-header-btn mb-2 p-2 dropleft">
                                        <a href="#" class="m-0 btn-right-card disable-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la flaticon-mark-1"></i></a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                            <a class="dropdown-item text-vsm" href="#">Action</a>
                                            <a class="dropdown-item text-vsm" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-vsm" href="#">Something else here</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="avatar avatar-lg center-img">
                                <a href="#" class="disable-link"><img src="<?=base_url('assets/img/students/avatars/')?>student.png" alt="foto-profil.jpg" class="avatar-img rounded"></a>
                            </div>
                            <div class="card-body p-0 pt-2 pb-2">
                                <a href="#" class="disable-link">
                                    <p class="text-small text-center text-dark pb-0 mb-0">Ragil Manggalaning Y</p>
                                    <p class="text-small text-center text-dark pb-0 mb-0"><span class="text-msm">E1E115042</span> | <span class="text-msm">08 Jun 1997</span></p>
                                    <p class="text-small text-center text-success pt-0 pb-0 mt-0 mb-0">ragilmanggalaning42@gmail.com</p>
                                    <p class="text-small text-center text-info pt-0 pb-0 mt-0 mb-0">+62 823 1146 3010</p>
                                </a>
                            </div>
                            <div class="progress-card m-0 p-0 pb-2">
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="80% data diri terisi"></div>
                                </div>
                            </div>
                        </div> -->
                        <?php
                            // }
                        ?>
                    </div>
                </div>
            </div>