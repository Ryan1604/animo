<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('excel');
        if ($this->session->userdata('logged_in' !== TRUE)) {
            redirect('/');
        }
    }

    public function skhun()
    {
        if ($this->session->userdata('role') === '1') {
            $data = array(
                'title' => "Data Nilai SKHUN"
            );
            $data['admin']             = $this->db->query("SELECT * FROM skhun INNER JOIN pendaftar ON skhun.id_pendaftar = pendaftar.id")->result();
            $this->load->view('pages/Admin/nilai/skhun.php', $data);
        } else {
            redirect('/');
        }
    }

    public function raport()
    {
        if ($this->session->userdata('role') === '1') {
            $data = array(
                'title' => "Data Nilai Raport"
            );
            $data['admin']             = $this->db->query("SELECT *, raport.id as id_raport FROM raport INNER JOIN pendaftar ON raport.id_pendaftar = pendaftar.id")->result();
            $this->load->view('pages/Admin/nilai/raport.php', $data);
        } else {
            redirect('/');
        }
    }

    public function download($id)
    {
        $pdf = new Pdf2(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetTitle('Cetak Data');
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
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
        $raport                 = $this->db->query("SELECT * FROM raport INNER JOIN pendaftar ON raport.id_pendaftar = pendaftar.id WHERE raport.id=$id")->result();
        $html = '';
        $pdf->writeHTML($html, true, false, true, false, '');
        $table = '<table stripped>';
        $table = '<table>';

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">PANITIA DAERAH PENERIMAAN</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(70, '', '', 20, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">CABA PK TNI AD TA. 2020</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(70, '', '', 25, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left"><strong>BLANKO PENGISIAN NILAI RAPORT CABA PK TNI AD TA. 2020</strong></th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(150, '', 50, 42, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left"><strong>UNTUK LULUSAN SMA/MA/SMK TP. 2020</strong></th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(150, '', 67, 47, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">NAMA</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(30, '', 35, 60, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">NOMOR DAFTAR</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(50, '', 35, 67, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 67, 60, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">:</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(10, '', 67, 67, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Madiun, </th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(50, '', 150, 187, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">2020</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(50, '', 180, 187, $tablekiri, 0, 0, 0, true, 'R', true);

        $tablekiri = '<table style="padding-top: -22px;">';
        $tablekiri .= '<tr>
        	<th align="left">Calon</th>
        	</tr>';
        $tablekiri .= '</table>';
        $pdf->writeHTMLCell(50, '', 165, 194, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($raport as $row) {
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nama_lengkap . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(100, '', 150, 230, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($raport as $row) {
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nama_lengkap . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(100, '', 72, 60, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($raport as $row) {
            $tablekiri = '<table style="padding-top: -22px;">';
            $tablekiri .= '<tr>
        	<th align="left">' . $row->nomor_animo . '</th>
        	</tr>';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(100, '', 72, 67, $tablekiri, 0, 0, 0, true, 'R', true);

        foreach ($raport as $row) {
            $j1    = $row->indo_p1 + $row->mtk_p1 + $row->inggris_p1;
            $r1 = $j1 / 3;

            $j2    = $row->indo_k1 + $row->mtk_k1 + $row->inggris_k1;
            $r2 = $j2 / 3;

            $j3    = $row->indo_p2 + $row->mtk_p2 + $row->inggris_p2;
            $r3 = $j3 / 3;

            $j4    = $row->indo_k2 + $row->mtk_k2 + $row->inggris_k2;
            $r4 = $j4 / 3;

            $rp1    = ($r1 + $r2 + $r3 + $r4) / 4;

            $j5    = $row->indo_p3 + $row->mtk_p3 + $row->inggris_p3;
            $r5 = $j5 / 3;

            $j6    = $row->indo_k3 + $row->mtk_k3 + $row->inggris_k3;
            $r6 = $j6 / 3;

            $j7    = $row->indo_p4 + $row->mtk_p4 + $row->inggris_p4;
            $r7 = $j7 / 3;

            $j8    = $row->indo_k4 + $row->mtk_k4 + $row->inggris_k4;
            $r8 = $j8 / 3;

            $rp2    = ($r5 + $r6 + $r7 + $r8) / 4;

            $j9        = $row->indo_p5 + $row->mtk_p5 + $row->inggris_p5;
            $r9         = $j9 / 3;

            $j10    = $row->indo_k5 + $row->mtk_k5 + $row->inggris_k5;
            $r10     = $j10 / 3;

            $j11    = $row->indo_p6 + $row->mtk_p6 + $row->inggris_p6;
            $r11     = $j11 / 3;

            $j12    = $row->indo_k6 + $row->mtk_k6 + $row->inggris_k6;
            $r12     = $j12 / 3;

            $rp3    = ($r9 + $r10 + $r11 + $r12) / 4;

            $rata    = ($rp1 + $rp2 + $rp3) / 3;
            $tablekiri = '<table border="1" align="center">';
            $tablekiri .= '
            <tr>
        	    <th rowspan="3">NO</th>
        	    <th rowspan="3">MATA PELAJARAN</th>
        	    <th colspan="4">KELAS X</th>
        	    <th colspan="4">KELAS XI</th>
        	    <th colspan="4">KELAS XII</th>
            </tr>
            <tr>
        	    <td colspan="2">SMT I</td>
                <td colspan="2">SMT II</td>
                <td colspan="2">SMT I</td>
                <td colspan="2">SMT II</td>
                <td colspan="2">SMT I</td>
        	    <td colspan="2">SMT II</td>
            </tr>
            <tr>
        	    <td>P</td>
                <td>K</td>
                <td>P</td>
                <td>K</td>
                <td>P</td>
                <td>K</td>
                <td>P</td>
                <td>K</td>
                <td>P</td>
                <td>K</td>
                <td>P</td>
                <td>K</td>
            </tr>
            <tr>
        	    <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
        	    <td>1</td>
                <td>Bahasa Indonesia</td>
                <td>' . $row->indo_p1 . '</td>
                <td>' . $row->indo_k1 . '</td>
                <td>' . $row->indo_p2 . '</td>
                <td>' . $row->indo_k2 . '</td>
                <td>' . $row->indo_p3 . '</td>
                <td>' . $row->indo_k3 . '</td>
                <td>' . $row->indo_p4 . '</td>
                <td>' . $row->indo_k4 . '</td>
                <td>' . $row->indo_p5 . '</td>
                <td>' . $row->indo_k5 . '</td>
                <td>' . $row->indo_p6 . '</td>
                <td>' . $row->indo_k6 . '</td>
            </tr>
            <tr>
        	    <td>1</td>
                <td>Matematika</td>
                <td>' . $row->mtk_p1 . '</td>
                <td>' . $row->mtk_k1 . '</td>
                <td>' . $row->mtk_p2 . '</td>
                <td>' . $row->mtk_k2 . '</td>
                <td>' . $row->mtk_p3 . '</td>
                <td>' . $row->mtk_k3 . '</td>
                <td>' . $row->mtk_p4 . '</td>
                <td>' . $row->mtk_k4 . '</td>
                <td>' . $row->mtk_p5 . '</td>
                <td>' . $row->mtk_k5 . '</td>
                <td>' . $row->mtk_p6 . '</td>
                <td>' . $row->mtk_k6 . '</td>
            </tr>
            <tr>
        	    <td>1</td>
                <td>Bahasa Inggris</td>
                <td>' . $row->inggris_p1 . '</td>
                <td>' . $row->inggris_k1 . '</td>
                <td>' . $row->inggris_p2 . '</td>
                <td>' . $row->inggris_k2 . '</td>
                <td>' . $row->inggris_p3 . '</td>
                <td>' . $row->inggris_k3 . '</td>
                <td>' . $row->inggris_p4 . '</td>
                <td>' . $row->inggris_k4 . '</td>
                <td>' . $row->inggris_p5 . '</td>
                <td>' . $row->inggris_k5 . '</td>
                <td>' . $row->inggris_p6 . '</td>
                <td>' . $row->inggris_k6 . '</td>
            </tr>
            <tr>
                <td colspan="2">JUMLAH</td>
                <td>' . $j1 . '</td>
                <td>' . $j2 . '</td>
                <td>' . $j3 . '</td>
                <td>' . $j4 . '</td>
                <td>' . $j5 . '</td>
                <td>' . $j6 . '</td>
                <td>' . $j7 . '</td>
                <td>' . $j8 . '</td>
                <td>' . $j9 . '</td>
                <td>' . $j10 . '</td>
                <td>' . $j11 . '</td>
                <td>' . $j12 . '</td>
            </tr>
            <tr>
                <td colspan="2">RATA2 PERSEMESTER</td>
                <td>' . round($r1, 2) . '</td>
                <td>' . round($r2, 2) . '</td>
                <td>' . round($r3, 2) . '</td>
                <td>' . round($r4, 2) . '</td>
                <td>' . round($r5, 2) . '</td>
                <td>' . round($r6, 2) . '</td>
                <td>' . round($r7, 2) . '</td>
                <td>' . round($r8, 2) . '</td>
                <td>' . round($r9, 2) . '</td>
                <td>' . round($r10, 2) . '</td>
                <td>' . round($r11, 2) . '</td>
                <td>' . round($r12, 2) . '</td>
            </tr>
            <tr>
                <td colspan="2">RATA2 PERKELAS</td>
                <td colspan="4">' . round($rp1, 2) . '</td>
                <td colspan="4">' . round($rp2, 2) . '</td>
                <td colspan="4">' . round($rp3, 2) . '</td>
            </tr>
            <tr>
            <td colspan="2">RATA-RATA</td>
            <td colspan="12">' . round($rata, 2) . '</td>
        </tr>
            ';
            $tablekiri .= '</table>';
        }
        $pdf->writeHTMLCell(190, '', 10, 80, $tablekiri, 0, 0, 0, true, 'R', true);



        $pdf->WriteHTMLCell(0, 0, 125, '', $table, 0, 1, 0, true, 'R', true);

        $pdf->lastPage();
        // ob_clean();
        $pdf->Output('Animo.pdf', 'I');
    }
}
