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
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Nilai Raport Lulusan TH. 2020</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" class="needs-validation" action="<?php echo site_url('user/nilai/raport/store') ?>" novalidate="">
                                <input id="id" type="hidden" class="form-control" name="id" tabindex="1" value="<?= $id ?>">
                                <h5 class="text-center mb-4">Kelas X</h5>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <h6>Semester I</h6>
                                        <div class="form-group">
                                            <label for="indo_p1">Bahasa Indonesia (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_p1" type="number" class="form-control" name="indo_p1" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group" style="margin-top: 27px;">
                                            <label for="indo_k1">Bahasa Indonesia (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_k1" type="number" class="form-control" name="indo_k1" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <h6>Semester II</h6>
                                        <div class="form-group">
                                            <label for="indo_p2">Bahasa Indonesia (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_p2" type="number" class="form-control" name="indo_p2" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group" style="margin-top: 27px;">
                                            <label for="indo_k2">Bahasa Indonesia (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_k2" type="number" class="form-control" name="indo_k2" tabindex="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_p1">Matematika (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_p1" type="number" class="form-control" name="mtk_p1" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_k1">Matematika (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_k1" type="number" class="form-control" name="mtk_k1" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_p2">Matematika (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_p2" type="number" class="form-control" name="mtk_p2" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_k2">Matematika (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_k2" type="number" class="form-control" name="mtk_k2" tabindex="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_p1">Bahasa Inggris (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_p1" type="number" class="form-control" name="inggris_p1" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_k1">Bahasa Inggris (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_k1" type="number" class="form-control" name="inggris_k1" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_p2">Bahasa Inggris (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_p2" type="number" class="form-control" name="inggris_p2" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_k2">Bahasa Inggris (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_k2" type="number" class="form-control" name="inggris_k2" tabindex="1">
                                        </div>
                                    </div>
                                </div>

                                <h5 class="text-center mb-4 mt-5">Kelas XI</h5>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <h6>Semester I</h6>
                                        <div class="form-group">
                                            <label for="indo_p3">Bahasa Indonesia (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_p3" type="number" class="form-control" name="indo_p3" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group" style="margin-top: 27px;">
                                            <label for="indo_k3">Bahasa Indonesia (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_k3" type="number" class="form-control" name="indo_k3" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <h6>Semester II</h6>
                                        <div class="form-group">
                                            <label for="indo_p4">Bahasa Indonesia (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_p4" type="number" class="form-control" name="indo_p4" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group" style="margin-top: 27px;">
                                            <label for="indo_k4">Bahasa Indonesia (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_k4" type="number" class="form-control" name="indo_k4" tabindex="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_p3">Matematika (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_p3" type="number" class="form-control" name="mtk_p3" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_k3">Matematika (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_k3" type="number" class="form-control" name="mtk_k3" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_p4">Matematika (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_p4" type="number" class="form-control" name="mtk_p4" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_k4">Matematika (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_k4" type="number" class="form-control" name="mtk_k4" tabindex="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_p3">Bahasa Inggris (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_p3" type="number" class="form-control" name="inggris_p3" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_k3">Bahasa Inggris (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_k3" type="number" class="form-control" name="inggris_k3" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_p4">Bahasa Inggris (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_p4" type="number" class="form-control" name="inggris_p4" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_k4">Bahasa Inggris (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_k4" type="number" class="form-control" name="inggris_k4" tabindex="1">
                                        </div>
                                    </div>
                                </div>

                                <h5 class="text-center mb-4">Kelas XII</h5>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <h6>Semester I</h6>
                                        <div class="form-group">
                                            <label for="indo_p5">Bahasa Indonesia (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_p5" type="number" class="form-control" name="indo_p5" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group" style="margin-top: 27px;">
                                            <label for="indo_k5">Bahasa Indonesia (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_k5" type="number" class="form-control" name="indo_k5" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <h6>Semester II</h6>
                                        <div class="form-group">
                                            <label for="indo_p6">Bahasa Indonesia (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_p6" type="number" class="form-control" name="indo_p6" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group" style="margin-top: 27px;">
                                            <label for="indo_k6">Bahasa Indonesia (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="indo_k6" type="number" class="form-control" name="indo_k6" tabindex="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_p5">Matematika (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_p5" type="number" class="form-control" name="mtk_p5" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_k5">Matematika (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_k5" type="number" class="form-control" name="mtk_k5" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_p6">Matematika (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_p6" type="number" class="form-control" name="mtk_p6" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="mtk_k6">Matematika (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="mtk_k6" type="number" class="form-control" name="mtk_k6" tabindex="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_p5">Bahasa Inggris (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_p5" type="number" class="form-control" name="inggris_p5" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_k5">Bahasa Inggris (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_k5" type="number" class="form-control" name="inggris_k5" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_p6">Bahasa Inggris (Pengetahuan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_p6" type="number" class="form-control" name="inggris_p6" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="inggris_k6">Bahasa Inggris (Keterampilan) <sup class="text-danger">*</sup></label>
                                            <input id="inggris_k6" type="number" class="form-control" name="inggris_k6" tabindex="1">
                                        </div>
                                    </div>
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