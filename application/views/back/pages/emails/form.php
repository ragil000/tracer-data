			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Kirim Email</h4>
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
								<a href="#">Kuesioner Dan Email</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Kirim Email</a>
                            </li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Formulir Pengiriman Email <span class="text-danger">(tahap uji coba)</span></div>
								</div>
								<div class="card-body">
									<form class="form" action="<?=base_url('admin/email/send')?>" method="POST">
										<div class="row justify-content-center">
											<div class="col-lg-4">
												<div class="form-group">
													<!-- <label for="successInput">Success Input</label> -->
													<div id="sandbox-container" class="span5">
														<input type="email" name="email" placeholder="Email anda" value="" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<button type="button" class="btn btn-success" onclick="btnConfirm(this)" data-message="Anda akan mengirim email ke alamat ini!" data-type="btnCreate" data-ajax="exist" data-url="<?=base_url('admin/email/send')?>" data-refress="true">Kirim</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>