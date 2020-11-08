            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
						<h4 class="page-title">Dasbor Kuesioner</h4>
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
								<a href="#">Dasbor Kuisioner</a>
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
                    <div class="row mt-4">
                        <div class="col-lg-12" id="form-timeline-top" style="max-height: 70vh;">
                            <div class="card full-height">
                                <div class="card-header">
                                    <div class="card-title">Daftar Kuesioner</div>
                                </div>
                                <div class="card-body" style="max-height: 90%;">
                                    <ol class="activity-feed soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 80%;">
                                        <li class="feed-item feed-item-secondary">
                                            <time class="date" datetime="7-12">12 Jul <span class="text-small">13:33 WITA</span> </time>
                                            <div class="card m-0 p-2 shadow bg-active">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link"> "Tracer alumni perioder Juli-Desember 2020"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-primary">
                                            <time class="date" datetime="1-6">6 Jan <span class="text-small">9:10 WITA</span> </time>
                                            <div class="card-hover m-0 p-2">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="btnAlpha(this)"> "Tracer alumni perioder Januari-Juni 2020"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-warning">
                                            <time class="date" datetime="7-10">10 Jul <span class="text-small">14:26 WITA</span> </time>
                                            <div class="card-hover m-0 p-2">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="btnAlpha(this)"> "Tracer alumni perioder Juli-Desember 2019"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-info">
                                            <time class="date" datetime="1-17">17 Jan <span class="text-small">8:17 WITA</span> </time>
                                            <div class="card-hover m-0 p-2">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="btnAlpha(this)"> "Tracer alumni perioder Januari-Juni 2019"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-danger">
                                            <time class="date" datetime="1-19">19 Jul <span class="text-small">12:11 WITA</span> </time>
                                            <div class="card-hover m-0 p-2">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="btnAlpha(this)"> "Tracer alumni perioder Juli-Desember 2018"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-default"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3" id="form-timeline-left" style="max-height: 150vh;">
                            <div class="card full-height">
                                <div class="card-header">
                                    <div class="card-title">Daftar Kuesioner</div>
                                </div>
                                <div class="card-body" style="max-height: 100%;">
                                    <ol class="activity-feed soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 90%;">
                                        <li class="feed-item feed-item-secondary">
                                            <time class="date" datetime="7-12">12 Jul <span class="text-small">13:33 WITA</span> </time>
                                            <div class="card m-0 p-2 shadow bg-active">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link"> "Tracer alumni perioder Juli-Desember 2020"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-primary">
                                            <time class="date" datetime="1-6">6 Jan <span class="text-small">9:10 WITA</span> </time>
                                            <div class="card-hover m-0 p-2">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="btnAlpha(this)"> "Tracer alumni perioder Januari-Juni 2020"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-warning">
                                            <time class="date" datetime="7-10">10 Jul <span class="text-small">14:26 WITA</span> </time>
                                            <div class="card-hover m-0 p-2">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="btnAlpha(this)"> "Tracer alumni perioder Juli-Desember 2019"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-info">
                                            <time class="date" datetime="1-17">17 Jan <span class="text-small">8:17 WITA</span> </time>
                                            <div class="card-hover m-0 p-2">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="btnAlpha(this)"> "Tracer alumni perioder Januari-Juni 2019"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-danger">
                                            <time class="date" datetime="1-19">19 Jul <span class="text-small">12:11 WITA</span> </time>
                                            <div class="card-hover m-0 p-2">
                                                <span class="text">Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="btnAlpha(this)"> "Tracer alumni perioder Juli-Desember 2018"</a></span>
                                            </div>
                                        </li>
                                        <li class="feed-item feed-item-default"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 pb-5" id="form-view">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hasil Kuesioner (12 Juli 2020 <span class="text-medium">13:33 WITA</span>)</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2 pb-4">
                                            <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show" id="v-pills-result-tab-icons" data-toggle="pill" href="#v-pills-result-icons" role="tab" aria-controls="v-pills-result-icons" aria-selected="true">
                                                    <i class="flaticon-chart-pie"></i>
                                                    <span class="text-small badge badge-success">128 responden</span><br>
                                                    Hasil
                                                </a>
                                                <a class="nav-link" id="v-pills-questionnaire-tab-icons" data-toggle="pill" href="#v-pills-questionnaire-icons" role="tab" aria-controls="v-pills-questionnaire-icons" aria-selected="false">
                                                    <i class="flaticon-file-1"></i>
                                                    Kuesioner
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="tab-content" id="v-pills-with-icon-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-result-icons" role="tabpanel" aria-labelledby="v-pills-result-tab-icons">
                                                    <div class="row mb-4">
                                                        <div class="col-12 text-right">
                                                            <button class="btn btn-success" onclick="btnAlpha(this)">
                                                                <span class="btn-label">
                                                                    <i class="fa fa-file-excel"></i>
                                                                </span>
                                                                Buat File Excel
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">1</span> Apa kegiatan anda saat ini?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 pt-0">
                                                            <div class="card mt-0 pt-0">
                                                                <div class="card-body">
                                                                    <div class="chart-container">
                                                                        <canvas id="pieChart" style="width: 25%; height: 25%"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <h4><strong>Bagian untuk yang sudah bekerja</strong></h4>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">2</span> Nama perusahaan tempat anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Kalbe Farma</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Sanbe Farma</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Dexa Medica</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Pharos Indonesia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Tempo Scan Pasific</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Kimia Farma</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Fahrenheit </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Sanofi Aventis </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Soho </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Novell Pharm </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">3</span> Alamat perusahaan tempat anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Biak No.27 Roxy Cideng, RT.2/RW.10, Ps. Manggis, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12970</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Taman Tanah Abang III No.23, RT.15/RW.4, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>RSIA Hermina Lantai 4, JL. Raya Jatinegara Barat, No. 126, Jatinegara, Balimester, RT.10/RW.1, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13310</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. H. R. Rasuna Said No.Blok B, RT.5/RW.2, Kuningan, Setia Budi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Kramat Sawah XIV Gg. H. Ayub No.347, RW.7, Paseban, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10440</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. M.H. Thamrin No.1, RT.8/RW.4, Gondangdia, Kec. Menteng, jakarta, Daerah Khusus Ibukota Jakarta 10110</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>RS. St. Carolus, Jl. Salemba Raya No.41, RT.3/RW.5, Paseban, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10440</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Sawah Lunto No.4, RT.3/RW.10, Ps. Manggis, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12970</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>RT.2/RW.10, Pasar Manggis, Setia Budi, South Jakarta City, Jakarta 12970</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Letjend Suprapto No.14, RT.10/RW.7, East Cempaka Putih, Cempaka Putih, Central Jakarta City, Jakarta 10510</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">4</span> Alamat web perusahaan tempat anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.kalbe.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.sanbe-farma.com/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.dexa-medica.com/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>http://www.pharos.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.temposcangroup.com/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.kimiafarma.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.fahrenheit.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.sanofi.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>http://www.sohoglobalhealth.com/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>http://www.novellpharm.com/</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">5</span> Sektor perusahaan/industri tempat anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Aneka industri</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri barang konsumsi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Aneka industri</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri barang konsumsi</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">6</span> Tanggal mulai anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>2 Januari 2017</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>5 Februari 2015</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>25 Juni 2018</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>10 Maret 2015</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>1 April 2017</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>30 Oktober 2016</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>20 Mei 2019</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>1 Maret 2019</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>15 Februari 2018</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>2 Mei 2017</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">7</span>  Posisi anda saat pertama kali bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Quality Control</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Quality Control</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Quality Assurance</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Apoteker</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Asisten Apoteker</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Apoteker Penanggung Jawab (APJ)</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Tenaga Teknis Kefarmasian</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Apoteker Pendamping</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Regulator Officer</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Apoteker</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">8</span> Berapa gaji pertama anda?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 2.500.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 2.500.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.400.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 4.000.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.400.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.500.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 2.500.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 2.700.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 5.000.000</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.500.000</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">9</span> Darimana anda mendapatkan informasi lowongan pekerjaan?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 pt-0">
                                                            <div class="card mt-0 pt-0">
                                                                <div class="card-body">
                                                                    <div class="chart-container" style="overflow-y: hidden; overflow-x: overlay;">
                                                                        <canvas id="lineChart"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">10</span> Menurut anda dalam skala 1-5 (1=sangat tidak relevan dan 5=sangat relevan), bagaimana relevansi pekerjaan anda dengan bidang ilmu yang anda tempuh saat kuliah?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0">
                                                                <div class="card-body">
                                                                    <div class="chart-container" style="overflow-y: hidden; overflow-x: overlay;">
                                                                        <canvas id="barChart"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">11</span> Menurut anda, mata kuliah apa yang anda dapatkan dari bangku kuliah yang paling relevan dengan pekerjaan anda saat ini?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Farmakologi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Clinical Practice</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Mikrobiologi dan imunologi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Mikrobiologi dan imunologi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Teknologi farmasi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Farmakologi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Mikrobiologi dan imunologi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Teknologi farmasi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Drug Development</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Clinical Practice</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <h4><strong>Bagian untuk yang membuka usaha</strong></h4>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">12</span> Nama perusahaan/usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Kalbe Farma</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Sanbe Farma</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Dexa Medica</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Pharos Indonesia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Tempo Scan Pasific</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Kimia Farma</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Fahrenheit </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Sanofi Aventis </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Soho </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>PT. Novell Pharm </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">13</span> Alamat perusahaan/usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Biak No.27 Roxy Cideng, RT.2/RW.10, Ps. Manggis, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12970</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Taman Tanah Abang III No.23, RT.15/RW.4, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>RSIA Hermina Lantai 4, JL. Raya Jatinegara Barat, No. 126, Jatinegara, Balimester, RT.10/RW.1, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13310</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. H. R. Rasuna Said No.Blok B, RT.5/RW.2, Kuningan, Setia Budi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Kramat Sawah XIV Gg. H. Ayub No.347, RW.7, Paseban, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10440</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. M.H. Thamrin No.1, RT.8/RW.4, Gondangdia, Kec. Menteng, jakarta, Daerah Khusus Ibukota Jakarta 10110</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>RS. St. Carolus, Jl. Salemba Raya No.41, RT.3/RW.5, Paseban, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10440</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Sawah Lunto No.4, RT.3/RW.10, Ps. Manggis, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12970</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>RT.2/RW.10, Pasar Manggis, Setia Budi, South Jakarta City, Jakarta 12970</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Jl. Letjend Suprapto No.14, RT.10/RW.7, East Cempaka Putih, Cempaka Putih, Central Jakarta City, Jakarta 10510</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">14</span> Alamat web perusahaan/usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.kalbe.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.sanbe-farma.com/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.dexa-medica.com/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>http://www.pharos.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.temposcangroup.com/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.kimiafarma.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.fahrenheit.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>https://www.sanofi.co.id/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>http://www.sohoglobalhealth.com/</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>http://www.novellpharm.com/</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">15</span> Bidang usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Aneka industri</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri barang konsumsi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Aneka industri</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri dasar dan bahan kimia</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Industri barang konsumsi</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">16</span> Jumlah karyawan perusahaan/usaha yang anda bangun, termasuk pemilik perusahaan/usaha?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>5 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>13 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>2 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>10 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>6 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>30 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>20 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>12 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>3 orang</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>4 orang</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">17</span>  Berapa omzet anda per bulan dari usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 6.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 10.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 4.500.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 15.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 40.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 16.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 5.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 6.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 7.500.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">18</span> Berapa besar rata-rata pengeluaran anda per bulan?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 2.500.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 2.500.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.400.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 4.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.400.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.500.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 2.500.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 2.700.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 5.000.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Rp. 3.500.000 per bulan</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">19</span> Menurut anda dalam skala 1-5 (1=sangat tidak relevan dan 5=sangat relevan), bagaimana relevansi pekerjaan anda dengan bidang ilmu yang anda tempuh saat kuliah?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0">
                                                                <div class="card-body">
                                                                    <div class="chart-container" style="overflow-y: hidden; overflow-x: overlay;">
                                                                        <canvas id="barChart2"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <h4><strong>Bagian untuk yang belum bekerja</strong></h4>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">20</span> Kegiatan apa yang sedang anda lakukan saat ini?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 pt-0">
                                                            <div class="card mt-0 pt-0">
                                                                <div class="card-body">
                                                                    <div class="chart-container" style="overflow-y: hidden; overflow-x: overlay;">
                                                                        <canvas id="lineChart2"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <h4><strong>Akhir bagian</strong></h4>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">21</span> Menurut anda, apa yang harus dilakukan pihak fakultas agar anda bisa cepat mendapatkan pekerjaan yang sesuai?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Pihak fakultas harus menyediakan sebuah wadah yang bisa menampung semua alumni agar bisa saling berbagi informasi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Pihak fakultas harus membuat website khusus alumni dan info lowongan pekerjaan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Pihak fakultas harus membuatkan website forum untuk alumni sebagai tempat saling bertukar informasi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Pihak fakultas harus membuat website atau sistem informasi untuk alumni agar bisa mendapatkan informasi lowongan pekerjaan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Diharapkan pihak fakultas membuatkan website alumni agar kami para alumni bisa saling berbagi informasi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Pihak fakultas harus membuatkan portal khusus berbagi informasi lowongan pekerjaan untuk alumni</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Pihak fakultas harus membuatkan alumni sebuah forum khusus untuk saling bertukar informasi</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Saya berharap pihak fakultas bisa membuatkan kami website yang berisi forum dan informasi lowongan pekerjaan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Saya yakin jika pihak fakultas membuatkan kami forum diskusi dan website alumni kami bisa saling bertukar informasi lowongan pekerjaan</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat forum dan informasi lowongan pekerjaan adalah langkah yang harus diambil pihak fakultas</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">22</span>  Adakah saran anda yang lain untuk perbaikan fakultas?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 mb-4 pt-0" style="max-height: 70vh;">
                                                            <div class="card mt-0 pt-0" style="max-height: 100%;">
                                                                <div class="card-body soft-scrollbar" style="overflow-y: overlay; overflow-x: hidden; max-height: 60%;">
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Ahmad Suradji, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Junaidi Parnomo, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Intan Nuraini, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nanang Surahmah, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nina Sholiha, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Puji Astuti, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Astiti Purnama Sari, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Dharmono, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Nabil Gibran, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card bg-white-smoke">
                                                                        <div class="card-title pl-3 pt-2 pb-0 text-msm">
                                                                            <span class="text-color-blue-soft">Sinta Kumala, S.Farm</span>
                                                                        </div>
                                                                        <div class="card-body pl-3 pr-2 pb-0 pt-0">    
                                                                            <p>Membuat sistem informasi tracer serta website alumni yang berisi informasi lowongan pekerjaan dan forum diskusi adalah solusi yang harus diambil</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-questionnaire-icons" role="tabpanel" aria-labelledby="v-pills-questionnaire-tab-icons">
                                                    <h4><strong>Kuesioner Tracer Data Alumni Periode Januari-Juni 2020</strong></h4>
                                                    <p>Data ini hanya bisa diisi oleh alumni yang terdaftar dalam database kami. Jika anda belum memiliki akun yang terdaftar dalam sistem kami, mohon hubungi admin Sistem Tracer Data Fakultas Farmasi di +62 823 1146 3010 atau <a href="wa.me/6282311463010">klik disini</a> </p>
                                                    <p class="text-small text-danger">* Mohon diisi dengan data yang sebenar-benarnya, anda bertanggungjawab penuh terhadap informasi yang akan anda berikan pada kuesioner berikut.</p>
                                                    <div class="row">
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">1</span> Apa kegiatan anda saat ini?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                                        <span class="form-radio-sign">Bekerja</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                                        <span class="form-radio-sign">Membuka usaha</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                                                        <span class="form-radio-sign">Belum bekerja</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <h4><strong>Bagian untuk yang sudah bekerja</strong></h4>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">2</span> Nama perusahaan tempat anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">3</span> Alamat perusahaan tempat anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">4</span> Alamat web perusahaan tempat anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">5</span> Sektor perusahaan/industri tempat anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">6</span> Tanggal mulai anda bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" id="date01" name="" placeholder="Pilih tanggal disini" value="" data-language="in" data-position="top left" class="datepicker-here form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">7</span> Posisi anda saat pertama kali bekerja?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">8</span> Berapa gaji pertama anda?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">9</span> Darimana anda mendapatkan informasi lowongan pekerjaan?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios2" value="">
                                                                        <span class="form-radio-sign">Media massa (koran, televisi atau radio)</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios2" value="">
                                                                        <span class="form-radio-sign">Pengumuman di kampus</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios2" value="">
                                                                        <span class="form-radio-sign">Teman sesama alumni</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios2" value="">
                                                                        <span class="form-radio-sign">Kerabat/keluarga</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios2" value="">
                                                                        <span class="form-radio-sign">Lainnya</span>
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">10</span> Menurut anda dalam skala 1-5 (1=sangat tidak relevan dan 5=sangat relevan), bagaimana relevansi pekerjaan anda dengan bidang ilmu yang anda tempuh saat kuliah?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 pt-0">
                                                            <div class="row justify-content-center">
                                                                <div class="col-12 text-center">
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <span class="form-radio-sign">Sangat tidak relevan</span>
                                                                            <input class="form-radio-input" style="width: 20px;" type="radio" name="optionsRadios3" value="">
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <!-- <span class="form-radio-sign">Sangat tidak relevan</span> -->
                                                                            <input class="form-radio-input" style="width: 15px;" type="radio" name="optionsRadios3" value="">
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <!-- <span class="form-radio-sign">Sangat tidak relevan</span> -->
                                                                            <input class="form-radio-input" style="width: 10px;" type="radio" name="optionsRadios3" value="">
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <!-- <span class="form-radio-sign">Sangat tidak relevan</span> -->
                                                                            <input class="form-radio-input" style="width: 15px;" type="radio" name="optionsRadios3" value="">
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <input class="form-radio-input" style="width: 20px;" type="radio" name="optionsRadios3" value="">
                                                                            <span class="form-radio-sign">Sangat relevan</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">11</span> Menurut anda, mata kuliah apa yang anda dapatkan dari bangku kuliah yang paling relevan dengan pekerjaan anda saat ini?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <h4><strong>Bagian untuk yang membuka usaha</strong></h4>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">12</span> Nama perusahaan/usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">13</span> Alamat perusahaan/usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">14</span> Alamat web perusahaan/usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">15</span> Bidang usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">16</span> Jumlah karyawan perusahaan/usaha yang anda bangun, termasuk pemilik perusahaan/usaha?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">17</span> Berapa omzet anda per bulan dari usaha yang anda bangun?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">18</span> Berapa besar rata-rata pengeluaran anda per bulan?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">19</span> Menurut anda dalam skala 1-5 (1=sangat tidak relevan dan 5=sangat relevan), bagaimana relevansi pekerjaan anda dengan bidang ilmu yang anda tempuh saat kuliah?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 pt-0">
                                                            <div class="row justify-content-center">
                                                                <div class="col-12 text-center">
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <span class="form-radio-sign">Sangat tidak relevan</span>
                                                                            <input class="form-radio-input" style="width: 20px;" type="radio" name="optionsRadios4" value="">
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <!-- <span class="form-radio-sign">Sangat tidak relevan</span> -->
                                                                            <input class="form-radio-input" style="width: 15px;" type="radio" name="optionsRadios4" value="">
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <!-- <span class="form-radio-sign">Sangat tidak relevan</span> -->
                                                                            <input class="form-radio-input" style="width: 10px;" type="radio" name="optionsRadios4" value="">
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <!-- <span class="form-radio-sign">Sangat tidak relevan</span> -->
                                                                            <input class="form-radio-input" style="width: 15px;" type="radio" name="optionsRadios4" value="">
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <label class="form-radio-label">
                                                                            <input class="form-radio-input" style="width: 20px;" type="radio" name="optionsRadios4" value="">
                                                                            <span class="form-radio-sign">Sangat relevan</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <h4><strong>Bagian untuk yang belum bekerja</strong></h4>
                                                        </div>
                                                        <div class="col-12 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">20</span> Kegiatan apa yang sedang anda lakukan saat ini?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios5" value="">
                                                                        <span class="form-radio-sign">Mencari pekerjaan yang sesuai</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios5" value="">
                                                                        <span class="form-radio-sign">Melanjutkan/sedang mempersiapkan pendidikan tingkat lanjut</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios5" value="">
                                                                        <span class="form-radio-sign">Mengikuti suami (menjadi Ibu rumah tangga)</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios5" value="">
                                                                        <span class="form-radio-sign">Membantu orang tua</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-12 ml-4">
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="optionsRadios5" value="">
                                                                        <span class="form-radio-sign">Lainnya</span>
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <h4><strong>Akhir bagian</strong></h4>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">21</span> Menurut anda, apa yang harus dilakukan pihak fakultas agar anda bisa cepat mendapatkan pekerjaan yang sesuai?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-4 mb-0 pb-0">
                                                            <div class="card bg-active mb-2">
                                                                <div class="card-body pl-3 pr-2 pb-0 pt-3">    
                                                                    <p><span class="badge badge-danger mr-2">22</span> Adakah saran anda yang lain untuk perbaikan fakultas?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-0 ml-4 pt-0">
                                                            <div class="row">
                                                                <div class="col-11 ml-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Tuliskan disini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>