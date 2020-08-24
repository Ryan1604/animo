<?php
defined('BASEPATH') or exit('No direct script access allowed');
$data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
$this->load->view('dist/_partials/header', $data);
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pendaftar</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data Pendaftar</div>
            </div>
        </div>
        <a href="<?= base_url('admin/peserta/add') ?>" class="btn btn-primary btn-s"><i class="fa fa-plus"></i> Import Data</a><br><br>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="example" style="width:100%">
                                    <thead>
                                        <th>#</th>
                                        <th>No. Animo</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tinggi Badan</th>
                                        <th>Berat Badan</th>
                                        <th>Agama</th>
                                        <th>Suku</th>
                                        <th>Pendidikan</th>
                                        <th>Tahun Kelulusan</th>
                                        <th>Alamat</th>
                                        <th>Nama Orang tua</th>
                                        <th>Alamat Orang tua</th>
                                        <th>Nama Wali</th>
                                        <th>Prestasi</th>
                                        <th>Pekerjaan Orang tua</th>
                                        <th>Jurusan Dikum</th>
                                        <th>NIK KTP</th>
                                        <th>No. Telp</th>
                                        <th>No. Telp Orang tua</th>
                                        <th>Kodim Kabupaten/Kota</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($admin as $data) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data->nomor_animo ?></td>
                                                <td><?= $data->nama_lengkap ?></td>
                                                <td><?= $data->jenis_kelamin ?></td>
                                                <td><?= $data->tempat_lahir ?></td>
                                                <td><?= $data->tanggal_lahir ?></td>
                                                <td><?= $data->tinggi_badan ?></td>
                                                <td><?= $data->berat_badan ?></td>
                                                <td><?= $data->agama ?></td>
                                                <td><?= $data->suku ?></td>
                                                <td><?= $data->pendidikan ?></td>
                                                <td><?= $data->tahun_kelulusan ?></td>
                                                <td><?= $data->alamat ?></td>
                                                <td><?= $data->nama_ortu ?></td>
                                                <td><?= $data->alamat_ortu ?></td>
                                                <td><?= $data->nama_wali ?></td>
                                                <td><?= $data->prestasi ?></td>
                                                <td><?= $data->pekerjaan_ortu ?></td>
                                                <td><?= $data->jurusan_dikum ?></td>
                                                <td><?= $data->nik_ktp ?></td>
                                                <td><?= $data->nomor_hp ?></td>
                                                <td><?= $data->nomor_hp_ortu ?></td>
                                                <td><?= $data->kodim_kabupaten_kota ?></td>
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