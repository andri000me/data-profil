<?php
$akun = $this->session->userdata("akun");

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
	<div class="container">

		<a href="<?php echo site_url('../'); ?>" class="navbar-brand">
			<img src="<?php echo base_url(LOGO); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<!-- <span class="brand-text font-weigonclick="modalDefault('Ubah Sandi', 'ubahSandi')"ht-light"><?php echo SITE_NAME; ?></span> -->
		</a>

		<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse order-3" id="navbarCollapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?php echo site_url('../'); ?>" class="nav-link">Beranda</a>
				</li>
				<?php if ($akun == "super") : ?>
					<li class="nav-item dropdown">
						<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pengaturan</a>
						<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
							<li>
								<a tabindex="-1" href="<?php echo site_url('../pengaturan/data'); ?>" class="dropdown-item">Data</a>
							</li>
							<li>
								<a tabindex="-1" href="<?php echo site_url('../pengaturan/aktifitas'); ?>" class="dropdown-item">Aktifitas</a>
							</li>
						</ul>
					</li>
				<?php endif; ?>
				<!-- <li class="nav-item dropdown">
					<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Menu</a>
					<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
						<li class="dropdown-submenu dropdown-hover">
							<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Sub Menu</a>
							<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">

								<li class="dropdown-submenu dropdown-hover">
									<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Sub Sub Menu</a>
									<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
										<li>
											<a tabindex="-1" href="<?php echo site_url('../'); ?>" class="dropdown-item">Sub Sub Sub Menu</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li> -->
			</ul>
		</div>

		<!-- Right navbar links -->
		<ul class="order-1 order-md-3 navbar-nav ml-auto navbar-no-expand">
			<li class="nav-item">
				<a href="#" class="nav-link" onclick="return false;">
					Hallo, <?php echo $this->session->userdata("akun"); ?>
				</a>
			</li>
			<!-- <li class="nav-item">
				<a href="java" onclick="modalDefault('Ubah Sandi', 'ubahSandi'); return false;" class="nav-link" title="Ubah Sandi">
					<i class="fa fa-unlock"></i>
				</a>
			</li> -->
			<li class="nav-item">
				<a href="<?php echo site_url('../logout') ?>" class="nav-link" title="Keluar">
					<i class="fa fa-sign-out-alt"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>
<!-- /.navbar -->