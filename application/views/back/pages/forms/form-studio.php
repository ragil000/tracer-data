            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
						<h4 class="page-title">Kuesioner Studio</h4>
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
								<a href="#">Kuesioner Studio</a>
							</li>
						</ul>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="collapse text-center" id="search-nav">
                                <!-- <form class="navbar-center navbar-form nav-search mr-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-search pr-1">
                                                <i class="fa fa-search search-icon"></i>
                                            </button>
                                        </div>
                                        <input type="text" placeholder="Search ..." class="form-control" onchange="btnAlpha(this)">
                                    </div>
                                </form> -->
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
                                            <time class="date" datetime="7-12"><span class="text-small">Master Kuesioner</span> </time>
                                            <div class="list-card list-1 card m-0 p-2 shadow bg-active" id="list-1">
                                                <span class="text">Master Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="setForm('master', 1)"> "Tracer Alumni Fakultas Farmasi"</a></span>
                                            </div>
                                        </li>
                                        
                                        <li class="feed-item feed-item-default list-history"></li>
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
                                            <time class="date" datetime="7-12"><span class="text-small">Master Kuesioner</span> </time>
                                            <div class="list-card list-1 card m-0 p-2 shadow bg-active" id="1">
                                                <span class="text">Master Kuesioner Tracer Alumni<a href="#" class="text-light disable-link" onclick="setForm('master', 1)"> "Tracer Alumni Fakultas Farmasi"</a></span>
                                            </div>
                                        </li>
                                        
                                        <li class="feed-item feed-item-default list-history"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 pb-5" id="form-view">
                            <div class="card">
                                <div class="card-header header-form">
                                    <!-- <h4 class="card-title">Hasil Kuesioner (12 Juli 2020 <span class="text-medium">13:33 WITA</span>)</h4> -->
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tab-content" id="v-pills-with-icon-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-questionnaire-icons" role="tabpanel" aria-labelledby="v-pills-questionnaire-tab-icons">
                                                    <div class="row mb-4">
                                                        <div class="col-12 text-right" id="btn-create-form">
                                                            
                                                        </div>
                                                    </div>
                                                    <form action="post">
                                                        <div id="form-header"></div>
                                                        <div class="row" id="set-form">
                                                            
                                                        </div>
                                                    </form>
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

            <script>
                let master_form = JSON.parse(<?=json_encode($master_form->form)?>)
                let history_form = <?=json_encode($history_form)?>
            </script>