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
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="collapse text-center pr-0 mr-0" id="search-nav">
                                <form class="navbar-center navbar-form nav-search mr-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-search pr-1">
                                                <i class="fa fa-search search-icon"></i>
                                            </button>
                                        </div>
                                        <input type="text" id="any" onkeyup="filter(this)" placeholder="Cari mahasiswa..." class="form-control disable-enter">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 text-sm-center text-xs-center">
                            <a href="<?=base_url().$base_path_url.'tambah-mahasiswa'?>" style="text-decoration: none;">
                                <button class="btn btn-primary mr-lg-4">
                                    <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    Tambah Mahasiswa
                                </button>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 text-lg-right text-sm-center text-xs-center">
                            <!-- <a href="<?=base_url().$page_url.'?display=table'?>" style="text-decoration:none;">
                                <button type="button" id="display-table" class="btn btn-icon btn-light btn-display">
                                    <i class="icon-list"></i>
                                </button>
                            </a> -->
                            <a href="<?=base_url().$page_url.'?display=card'?>" style="text-decoration:none;">
                                <button type="button" id="display-card" class="btn btn-icon btn-primary btn-display">
                                    <i class="icon-grid"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col-12 pt-3">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group form-group-default">
                                        <select class="form-control select2-init" onchange="filter(this)" id="major_id" name="major_id">
                                            <?=$major_opt?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form-group-default">
                                        <select class="form-control select2-init" onchange="filter(this)" id="status" name="status">
                                            <?=$status_opt?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form-group-default">
                                        <select class="form-control select2-init" onchange="filter(this)" id="date_of_entry" name="date_of_entry">
                                            <?=$date_of_entry_opt?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form-group-default">
                                        <select class="form-control select2-init" onchange="filter(this)" id="date_of_graduate" name="date_of_graduate">
                                            <?=$date_of_graduate_opt?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list-data" class="row card-gap multi-column justify-content-center">
                        <!-- data from js ajax -->
                    </div>
                </div>
            </div>