            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="btnAlpha(this)">
                                    Pharmacy Tracer Data
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="btnAlpha(this)">
                                    Forum
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="btnAlpha(this)">
                                    Tentang
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2020, develope <i class="fa fa-heart heart text-danger"></i> by <a href="#">SilentProject</a>
                    </div>				
                </div>
            </footer>
        </div>
    
    </div>
	<!--   Core JS Files   -->
	<script src="<?=base_url('assets/admin-assets/')?>assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?=base_url('assets/admin-assets/')?>assets/js/core/popper.min.js"></script>
	<script src="<?=base_url('assets/admin-assets/')?>assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?=base_url('assets/admin-assets/')?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?=base_url('assets/admin-assets/')?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?=base_url('assets/admin-assets/')?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    
    <!-- theme plugins script -->
    <?php if(!empty($theme_script)) $this->load->view($theme_script); ?>

	<!-- Atlantis JS -->
	<script src="<?=base_url('assets/admin-assets/')?>assets/js/atlantis.min.js"></script>
    
    <!-- custom javascript -->
    <script>
        const BASE_URL  = '<?=base_url()?>'
    </script>

    <script src="<?=base_url('assets/admin-assets/')?>assets/js/back/global/global-setting.js"></script>
    <?php if(!empty($script)) $this->load->view($script); ?>

</body>
</html>