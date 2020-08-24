<?php
defined('BASEPATH') or exit('No direct script access allowed');
$data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
$this->load->view('dist/_partials/header', $data);
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Nilai SKHUN Lulusan TH. 2016-2019</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" class="needs-validation" action="<?php echo site_url('user/nilai/store') ?>" novalidate="">
                                <input id="id" type="hidden" class="form-control" name="id" tabindex="1" value="<?= $id ?>">
                                <div class="form-group">
                                    <label for="indo">Bahasa Indonesia <sup class="text-danger">*</sup></label>
                                    <input id="indo" type="number" class="form-control" name="indo" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="mtk">Matematika <sup class="text-danger">*</sup></label>
                                    <input id="mtk" type="number" class="form-control" name="mtk" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="inggris">Bahasa Inggris <sup class="text-danger">*</sup></label>
                                    <input id="inggris" type="number" class="form-control" name="inggris" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="keahlian">Kopetensi Keahlian <sup class="text-danger">*</sup></label>
                                    <input id="keahlian" type="number" class="form-control" name="keahlian" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="fisika">Fisika <sup class="text-danger">*</sup></label>
                                    <input id="fisika" type="number" class="form-control" name="fisika" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="kimia">Kimia <sup class="text-danger">*</sup></label>
                                    <input id="kimia" type="number" class="form-control" name="kimia" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="biologi">Biologi <sup class="text-danger">*</sup></label>
                                    <input id="biologi" type="number" class="form-control" name="biologi" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="ekonomi">Ekonomi <sup class="text-danger">*</sup></label>
                                    <input id="ekonomi" type="number" class="form-control" name="ekonomi" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="geo">Geografi <sup class="text-danger">*</sup></label>
                                    <input id="geo" type="number" class="form-control" name="geo" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="sosiologi">Sosiologi <sup class="text-danger">*</sup></label>
                                    <input id="sosiologi" type="number" class="form-control" name="sosiologi" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label for="bahasa_asing">Bahasa Asing <sup class="text-danger">*</sup></label>
                                    <input id="bahasa_asing" type="number" class="form-control" name="bahasa_asing" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Add Data
                                    </button>
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