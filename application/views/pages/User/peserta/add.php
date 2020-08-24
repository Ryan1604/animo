<?php
defined('BASEPATH') or exit('No direct script access allowed');
$data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
$this->load->view('dist/_partials/header', $data);
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Import Data</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <form method="post" class="needs-validation" action="<?php echo site_url('admin/peserta/import') ?>" novalidate="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Data Peserta</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="file">File <sup class="text-danger">*</sup></label>
                                            <input type="file" class="form-control-file" name="file" id="file" required accept=".xls, .xlsx">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                                Import Data
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('dist/_partials/footer'); ?>