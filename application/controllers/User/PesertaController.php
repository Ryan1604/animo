<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PesertaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('excel');
    }

    public function index()
    {
        $data = array(
            'title' => "Data Peserta"
        );
        $data['admin']             = $this->db->query("SELECT * FROM pendaftar")->result();
        $this->load->view('pages/Admin/peserta/index.php', $data);
    }

    public function find()
    {
        $data = array(
            'title' => "Data Peserta"
        );

        $nomor_animo    = $this->input->post('no');

        $data['result']         = $this->db->query("SELECT * FROM pendaftar WHERE nomor_animo = $nomor_animo")->result();
        $this->load->view('pages/User/peserta/detail.php', $data);
    }

    public function import()
    {
        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $nomor_animo    = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $nama_lengkap   = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $jenis_kelamin  = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $tempat_lahir   = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $tanggal_lahir  = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $tinggi_badan   = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $berat_badan    = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $agama          = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $suku           = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $pendidikan     = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $tahun_kelulusan = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $alamat         = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $nama_ortu      = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                    $alamat_ortu    = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $nama_wali      = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                    $prestasi       = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
                    $pekerjaan_ortu = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $jurusan_dikum  = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $nik_ktp        = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
                    $nomor_hp       = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
                    $nomor_hp_ortu  = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
                    $kodim_kabupaten_kota  = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
                    $data[] = array(
                        'nomor_animo'       => $nomor_animo,
                        'nama_lengkap'      => $nama_lengkap,
                        'jenis_kelamin'     => $jenis_kelamin,
                        'tempat_lahir'      => $tempat_lahir,
                        'tanggal_lahir'     => $tanggal_lahir,
                        'tinggi_badan'      => $tinggi_badan,
                        'berat_badan'       => $berat_badan,
                        'agama'             => $agama,
                        'suku'              => $suku,
                        'pendidikan'        => $pendidikan,
                        'tahun_kelulusan'   => $tahun_kelulusan,
                        'alamat'            => $alamat,
                        'nama_ortu'         => $nama_ortu,
                        'alamat_ortu'       => $alamat_ortu,
                        'nama_wali'         => $nama_wali,
                        'prestasi'          => $prestasi,
                        'pekerjaan_ortu'    => $pekerjaan_ortu,
                        'jurusan_dikum'     => $jurusan_dikum,
                        'nik_ktp'           => $nik_ktp,
                        'nomor_hp'          => $nomor_hp,
                        'nomor_hp_ortu'     => $nomor_hp_ortu,
                        'kodim_kabupaten_kota'     => $kodim_kabupaten_kota
                    );
                }
            }
            $this->M_Excel->insert($data);

            redirect('admin/peserta');
        }
    }

    public function update()
    {
        $id             = $this->input->post('id');
        $nomor_animo    = $this->input->post('no');
        $nama_lengkap   = $this->input->post('nama');
        $jenis_kelamin  = $this->input->post('jk');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tgl');
        $tinggi_badan   = $this->input->post('tb');
        $berat_badan    = $this->input->post('bb');
        $agama          = $this->input->post('agama');
        $suku           = $this->input->post('suku');
        $pendidikan     = $this->input->post('pendidikan');
        $tahun_kelulusan = $this->input->post('tahun');
        $alamat         = $this->input->post('alamat');
        $nama_ortu      = $this->input->post('nama_ortu');
        $alamat_ortu    = $this->input->post('alamat_ortu');
        $nama_wali      = $this->input->post('nama_wali');
        $prestasi       = $this->input->post('prestasi');
        $pekerjaan_ortu = $this->input->post('pekerjaan_ortu');
        $jurusan_dikum  = $this->input->post('jurusan_dikum');
        $nik_ktp        = $this->input->post('nik');
        $nomor_hp       = $this->input->post('nomor_hp');
        $nomor_hp_ortu  = $this->input->post('nomor_hp_ortu');
        $kodim_kabupaten_kota   = $this->input->post('kodim_kabupaten_kota');

        $data = array(
            'nomor_animo'       => $nomor_animo,
            'nama_lengkap'      => $nama_lengkap,
            'jenis_kelamin'     => $jenis_kelamin,
            'tempat_lahir'      => $tempat_lahir,
            'tanggal_lahir'     => $tanggal_lahir,
            'tinggi_badan'      => $tinggi_badan,
            'berat_badan'       => $berat_badan,
            'agama'             => $agama,
            'suku'              => $suku,
            'pendidikan'        => $pendidikan,
            'tahun_kelulusan'   => $tahun_kelulusan,
            'alamat'            => $alamat,
            'nama_ortu'         => $nama_ortu,
            'alamat_ortu'       => $alamat_ortu,
            'nama_wali'         => $nama_wali,
            'prestasi'          => $prestasi,
            'pekerjaan_ortu'    => $pekerjaan_ortu,
            'jurusan_dikum'     => $jurusan_dikum,
            'nik_ktp'           => $nik_ktp,
            'nomor_hp'          => $nomor_hp,
            'nomor_hp_ortu'     => $nomor_hp_ortu,
            'kodim_kabupaten_kota'     => $kodim_kabupaten_kota
        );

        $where = array('id' => $id);
        $this->db->update('pendaftar', $data, $where);

        $data = array(
            'title' => "Data Peserta"
        );
        $data['result']         = $this->db->query("SELECT * FROM pendaftar WHERE nomor_animo = $nomor_animo")->result();
        $this->load->view('pages/User/peserta/detail.php', $data);
    }

    public function print($nomor_animo)
    {
        $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetTitle('Cetak Data');
        $pdf->setPrintFooter(false);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetHeaderData(0, 0, PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetFont('times', '', 10);
        $pdf->AddPage();
        $pdf->setCellPaddings(1, 1, 1, 1);
        $pdf->setCellMargins(1, 1, 1, 1);
        $pdf->SetFillColor(255, 255, 127);
        $pdf->WriteHTMLCell(0, 0, '', '', '', 0, 1, 0, true, 'C', true);
        $pendaftar                 = $this->db->query("SELECT * FROM pendaftar WHERE nomor_animo=$nomor_animo")->result();
        $html = '';
        $pdf->writeHTML($html, true, false, true, false, '');
        $table = '<table stripped>';
        $table = '<table>';

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Nomor Animo</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', '', $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 44.9, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nomor_animo . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 44.9, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Nama Lengkap</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 53, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 53, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nama_lengkap . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 53, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Jenis Kelamin</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 61, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 61, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->jenis_kelamin . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 61, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Tempat Lahir</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 69, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 69, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->tempat_lahir . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 69, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Tanggal Lahir</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 77, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 77, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->tanggal_lahir . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 77, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Tinggi Badan</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 85, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 85, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->tinggi_badan . ' cm</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 85, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Berat Badan</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 93, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 93, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->berat_badan . ' kg</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 93, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Agama</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 100, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 100, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->agama . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 100, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Suku</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 108, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 108, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->suku . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 108, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Pendidikan</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 116, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 116, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->pendidikan . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 116, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Tahun Kelulusan</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 124, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 124, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->tahun_kelulusan . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 124, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Alamat</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 132, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 132, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->alamat . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 132, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Nama Orang tua</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 140, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 140, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nama_ortu . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 140, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Alamat Orang tua</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 148, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 148, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->alamat_ortu . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 148, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Nama Wali</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 156, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 156, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nama_wali . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 156, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Prestasi</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 164, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 164, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->prestasi . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 164, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Pekerjaan Orang Tua</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 172, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 172, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->pekerjaan_ortu . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 172, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Jurusan Dikum</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 180, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 180, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->jurusan_dikum . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 180, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">NIK KTP</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 188, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 188, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nik_ktp . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 188, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">No. Hp</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 196, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 196, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nomor_hp . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 196, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">No. Hp Orang Tua</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 204, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 204, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nomor_hp_ortu . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 204, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Kodim/Kabupaten/Kota</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', '', 212, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 50, 212, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->kodim_kabupaten_kota . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 55, 212, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Madiun, </th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(40, '', 140, 245, $tablekiri, 0, 0, 0, true, 'R', true);

        $table = '<table stripped>';
        $table = '<table>';
        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">' . date('d M Y') . '</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(50, '', 155, 245, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($pendaftar as $row) {
            $table = '<table stripped>';
            $table = '<table>';
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nama_lengkap . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(140, '', 145, 265, $tablekiri, 0, 0, 0, true, 'R', true);

        $pdf->WriteHTMLCell(0, 0, 125, '', $table, 0, 1, 0, true, 'R', true);

        $pdf->lastPage();
        // ob_clean();
        $pdf->Output('Animo-' . $nomor_animo . '.pdf', 'I');
    }
}
