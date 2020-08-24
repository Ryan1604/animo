<?php
defined('BASEPATH') or exit('No direct script access allowed');
$data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
$this->load->view('dist/_partials/header', $data);
?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card" style="margin-top: 100px;">
						<div class="card-body">
							<form method="post" class="needs-validation" action="<?php echo site_url('admin/peserta/find') ?>" novalidate="">
								<div class="row">
									<div class="col-12 col-md-3 col-lg-3">
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label for="no">No Animo <sup class="text-danger">*</sup></label>
											<input type="text" class="form-control" name="no" id="no" required>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="form-group" style="margin-top: 30px;">
											<button type="submit" class="btn btn-primary" tabindex="4">
												<i class="fa fa-search"></i>
												Cari
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('dist/_partials/footer'); ?>