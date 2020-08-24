<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<?php if ($this->session->userdata('logged_in') == TRUE) { ?>
			<div class="sidebar-brand">
				<a href="<?php echo base_url(); ?>">
					<font color="blue">ADMIN</font>
				</a>
			</div>
		<?php } else { ?>
			<div class="sidebar-brand">
				<a href="#">
					<font color="blue">User</font>
				</a>
			</div>
		<?php } ?>
		<?php if ($this->session->userdata('role') === '1') { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">
					<font color="black">Dashboard </font>
				</li>
				<li class="<?= $this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>">
					<a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
						<i class="fas fa-fire"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li class="menu-header">
					<font color="black">Data Master</font>
				</li>
				<li class="<?= $this->uri->segment(2) == 'peserta' ? 'active' : ''; ?>">
					<a class="nav-link" href="<?= base_url('admin/peserta') ?>">
						<i class="fas fa-user"></i>
						<span>Data Pendaftar</span>
					</a>
				</li>
				<li class="dropdown <?= $this->uri->segment(2) == 'nilai' ? 'active' : ''; ?>">
					<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i> <span>Data Nilai</span></a>
					<ul class="dropdown-menu">
						<li><a class="nav-link" href="<?= base_url('admin/nilai/skhun') ?>">Nilai SKHUN</a></li>
						<li><a class="nav-link" href="<?= base_url('admin/nilai/raport') ?>">Nilai Raport</a></li>
					</ul>
				</li>
				<li class="menu-header">
					<font color="black"></font>Setting
				</li>
				<li class="<?= $this->uri->segment(2) == 'logout' ? 'active' : ''; ?>">
					<a class="nav-link" href="<?= base_url('auth/logout') ?>">
						<i class="fas fa-sign-out-alt"></i>
						<span>
							<font color="black">Logout</font>
						</span>
					</a>
				</li>
			</ul>
		<?php } else { ?>
			<ul class="sidebar-menu">
				<li class="menu-header">
					<font color="black">Dashboard </font>
				</li>
				<li class="<?= $this->uri->segment(2) == 'peserta' ? 'active' : ''; ?>">
					<a class="nav-link" href="<?= base_url('user/dashboard') ?>">
						<i class="fas fa-fire"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="<?= $this->uri->segment(2) == 'nilai' ? 'active' : ''; ?>">
					<a class="nav-link" href="<?= base_url('user/nilai') ?>">
						<i class="fas fa-fire"></i>
						<span>Form Nilai Akhir</span>
					</a>
				</li>
			</ul>
		<?php } ?>
	</aside>
</div>