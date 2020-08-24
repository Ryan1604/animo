<?php
defined('BASEPATH') or exit('No direct script access allowed');
$data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
$this->load->view('dist/_partials/header', $data);
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Nilai Raport</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data Nilai Raport</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="skhun" style="width:100%">
                                    <thead>
                                        <th>#</th>
                                        <th>No. Animo</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nilai Rata-rata</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($admin as $data) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data->nomor_animo ?></td>
                                                <td><?= $data->nama_lengkap ?></td>
                                                <td><?= round($data->rata_rata, 2) ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/nilai/download/') . $data->id_raport ?>" class="btn btn-danger" title="Print PDF"><i class="fa fa-print"></i> </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('dist/_partials/footer'); ?>