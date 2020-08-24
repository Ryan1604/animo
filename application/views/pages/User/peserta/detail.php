<?php
defined('BASEPATH') or exit('No direct script access allowed');
$data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
$this->load->view('dist/_partials/header', $data);
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Peserta</h1>
        </div>
        <div class="section-body">
            <?php foreach ($result as $data) : ?>
                <form method="post" class="needs-validation" action="<?php echo site_url('user/peserta/update') ?>" novalidate="">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <input type="hidden" name="id" value="<?= $data->id ?>">
                                    <div class="form-group">
                                        <label for="no">Nomor Animo <sup class="text-danger">*</sup></label>
                                        <input id="no" type="text" class="form-control" name="no" tabindex="1" value="<?= $data->nomor_animo ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan nomor animo terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap <sup class="text-danger">*</sup></label>
                                        <input id="nama" type="text" class="form-control" name="nama" tabindex="1" value="<?= $data->nama_lengkap ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan nama lengkap terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin <sup class="text-danger">*</sup></label>
                                        <input id="jk" type="text" class="form-control" name="jk" tabindex="1" value="<?= $data->jenis_kelamin ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan jenis kelamin terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir <sup class="text-danger">*</sup></label>
                                        <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" tabindex="1" value="<?= $data->tempat_lahir ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan tempat lahir terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl">Tanggal Lahir <sup class="text-danger">*</sup></label>
                                        <input id="tgl" type="text" class="form-control" name="tgl" tabindex="1" value="<?= $data->tanggal_lahir ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan tanggal lahir terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tb">Tinggi Badan <sup class="text-danger">*</sup></label>
                                        <input id="tb" type="text" class="form-control" name="tb" tabindex="1" value="<?= $data->tinggi_badan ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan tinggi badan terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bb">Berat Badan <sup class="text-danger">*</sup></label>
                                        <input id="bb" type="text" class="form-control" name="bb" tabindex="1" value="<?= $data->berat_badan ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan berat badan terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama <sup class="text-danger">*</sup></label>
                                        <input id="agama" type="text" class="form-control" name="agama" tabindex="1" value="<?= $data->agama ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan agama terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="suku">Suku <sup class="text-danger">*</sup></label>
                                        <input id="suku" type="text" class="form-control" name="suku" tabindex="1" value="<?= $data->suku ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan suku terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan <sup class="text-danger">*</sup></label>
                                        <input id="pendidikan" type="text" class="form-control" name="pendidikan" tabindex="1" value="<?= $data->pendidikan ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan pendidikan terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun">Tahun Kelulusan <sup class="text-danger">*</sup></label>
                                        <input id="tahun" type="text" class="form-control" name="tahun" tabindex="1" value="<?= $data->tahun_kelulusan ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan tahun kelulusan terlebih dahulu
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="alamat">Alamat <sup class="text-danger">*</sup></label>
                                        <input id="alamat" type="text" class="form-control" name="alamat" tabindex="1" value="<?= $data->alamat ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan alamat terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ortu">Nama Orang Tua <sup class="text-danger">*</sup></label>
                                        <input id="nama_ortu" type="text" class="form-control" name="nama_ortu" tabindex="1" value="<?= $data->nama_ortu ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan nama orang tua terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_ortu">Alamat Orang Tua <sup class="text-danger">*</sup></label>
                                        <input id="alamat_ortu" type="text" class="form-control" name="alamat_ortu" tabindex="1" value="<?= $data->alamat_ortu ?>" required>
                                        <div class="invalid-feedback">
                                            Masukkan alamat orang tua terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_wali">Nama Wali <sup class="text-danger">*</sup></label>
                                        <input id="nama_wali" type="text" class="form-control" name="nama_wali" tabindex="1" value="<?= $data->nama_wali ?>">
                                        <div class="invalid-feedback">
                                            Masukkan nama wali terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="prestasi">Prestasi <sup class="text-danger">*</sup></label>
                                        <input id="prestasi" type="text" class="form-control" name="prestasi" tabindex="1" value="<?= $data->prestasi ?>">
                                        <div class="invalid-feedback">
                                            Masukkan prestasi terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan_ortu">Pekerjaan Orang Tua <sup class="text-danger">*</sup></label>
                                        <input id="pekerjaan_ortu" type="text" class="form-control" name="pekerjaan_ortu" tabindex="1" value="<?= $data->pekerjaan_ortu ?>">
                                        <div class="invalid-feedback">
                                            Masukkan pekerjaan orang tua terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan_dikum">Jurusan Dikum <sup class="text-danger">*</sup></label>
                                        <input id="jurusan_dikum" type="text" class="form-control" name="jurusan_dikum" tabindex="1" value="<?= $data->jurusan_dikum ?>">
                                        <div class="invalid-feedback">
                                            Masukkan jurusan dikum terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK KTP <sup class="text-danger">*</sup></label>
                                        <input id="nik" type="text" class="form-control" name="nik" tabindex="1" value="<?= $data->nik_ktp ?>">
                                        <div class="invalid-feedback">
                                            Masukkan NIK KTP terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_hp">No. Telp <sup class="text-danger">*</sup></label>
                                        <input id="nomor_hp" type="text" class="form-control" name="nomor_hp" tabindex="1" value="<?= $data->nomor_hp ?>">
                                        <div class="invalid-feedback">
                                            Masukkan no telepon terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_hp_ortu">No. Telp Orang Tua <sup class="text-danger">*</sup></label>
                                        <input id="nomor_hp_ortu" type="text" class="form-control" name="nomor_hp_ortu" tabindex="1" value="<?= $data->nomor_hp_ortu ?>">
                                        <div class="invalid-feedback">
                                            Masukkan no telepon orang tua terlebih dahulu
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Kodim/Kabupaten/Kota <sup class="text-danger">*</sup></label>
                                        <select class="form-control select2" id="kodim_kabupaten_kota" name="kodim_kabupaten_kota">
                                            <option value="" selected disabled>-- Pilih Kodim/Kabupaten/Kota --</option>
                                            <option value="0801 PACITAN">0801 PACITAN</option>
                                            <option value="0802 PONOROGO">0802 PONOROGO</option>
                                            <option value="0803 MADIUN">0803 MADIUN</option>
                                            <option value="0804 MAGETAN">0804 MAGETAN</option>
                                            <option value="0805 NGAWI">0805 NGAWI</option>
                                            <option value="0806 TRENGGALEK">0806 TRENGGALEK</option>
                                            <option value="0807 TULUNG AGUNG">0807 TULUNG AGUNG</option>
                                            <option value="0808 BLITAR">0808 BLITAR</option>
                                            <option value="0809 NGANJUK">0809 NGANJUK</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Update Data
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
            <?php foreach ($result as $data) : ?>
                <a href="<?php echo base_url('admin/peserta/print/') . $data->nomor_animo ?>" target="_blank" class="btn btn-danger btn-lg"><i class="fa fa-print"></i> Cetak Data</a>
            <?php endforeach; ?>
        </div>
</div>
</section>
</div>

<?php $this->load->view('dist/_partials/footer'); ?>