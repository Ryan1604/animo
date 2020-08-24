<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="<?php echo base_url(); ?>">
				<font color="blue">ADMIN</font>
			</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="<?php echo base_url(); ?>">SIRP</a>
		</div>
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
		<?php
		} ?>
	</aside>
</div>