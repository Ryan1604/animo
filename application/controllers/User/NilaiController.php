<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('pages/User/nilai/index.php', $data);
	}

	public function find()
	{

		$nomor_animo    = $this->input->post('no');

		$result         = $this->db->query("SELECT * FROM pendaftar WHERE nomor_animo = $nomor_animo");

		if ($result->num_rows() > 0) {
			$data	= $result->row_array();
			// Ambil data dari Database 
			$tahun				= $data['tahun_kelulusan'];
		}
		$data['title'] 	= "Nilai Akhir";

		if ($tahun < 2020) {
			$this->load->view('pages/User/nilai/lama.php', $data);
		} else {
			$this->load->view('pages/User/nilai/baru.php', $data);
		}
	}

	public function store()
	{
		$id             = $this->input->post('id');
		$indo    		= $this->input->post('indo');
		$mtk   			= $this->input->post('mtk');
		$inggris  		= $this->input->post('inggris');
		$keahlian   	= $this->input->post('keahlian');
		$fisika  		= $this->input->post('fisika');
		$kimia 		 	= $this->input->post('kimia');
		$biologi  		= $this->input->post('biologi');
		$ekonomi        = $this->input->post('ekonomi');
		$geo            = $this->input->post('geo');
		$sosiologi	    = $this->input->post('sosiologi');
		$bahasa_asing 	= $this->input->post('bahasa_asing');

		$rata			= ($indo + $mtk + $inggris + $keahlian + $fisika + $kimia + $biologi + $ekonomi + $geo + $sosiologi + $bahasa_asing) / 11;

		var_dump($rata);

		$data = array(
			'id_pendaftar'      => $id,
			'indo'      		=> $indo,
			'mtk'     			=> $mtk,
			'inggris'      		=> $inggris,
			'keahlian'     		=> $keahlian,
			'fisika'      		=> $fisika,
			'kimia'       		=> $kimia,
			'biologi'           => $biologi,
			'ekonomi'           => $ekonomi,
			'geo'        		=> $geo,
			'sosiologi'   		=> $sosiologi,
			'bahasa_asing'      => $bahasa_asing,
			'rata_rata'         => $rata
		);

		$this->db->insert('skhun', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
		redirect('user/nilai');
	}

	public function create()
	{
		$id             = $this->input->post('id');
		$indo_p1    	= $this->input->post('indo_p1');
		$indo_k1    	= $this->input->post('indo_k1');
		$indo_p2    	= $this->input->post('indo_p2');
		$indo_k2    	= $this->input->post('indo_k2');

		$mtk_p1    		= $this->input->post('mtk_p1');
		$mtk_k1    		= $this->input->post('mtk_k1');
		$mtk_p2    		= $this->input->post('mtk_p2');
		$mtk_k2    		= $this->input->post('mtk_k2');

		$inggris_p1    	= $this->input->post('inggris_p1');
		$inggris_k1    	= $this->input->post('inggris_k1');
		$inggris_p2    	= $this->input->post('inggris_p2');
		$inggris_k2    	= $this->input->post('inggris_k2');

		$indo_p3    	= $this->input->post('indo_p3');
		$indo_k3    	= $this->input->post('indo_k3');
		$indo_p4    	= $this->input->post('indo_p4');
		$indo_k4    	= $this->input->post('indo_k4');

		$mtk_p3    		= $this->input->post('mtk_p3');
		$mtk_k3    		= $this->input->post('mtk_k3');
		$mtk_p4    		= $this->input->post('mtk_p4');
		$mtk_k4    		= $this->input->post('mtk_k4');

		$inggris_p3    	= $this->input->post('inggris_p3');
		$inggris_k3    	= $this->input->post('inggris_k3');
		$inggris_p4    	= $this->input->post('inggris_p4');
		$inggris_k4    	= $this->input->post('inggris_k4');

		$indo_p5    	= $this->input->post('indo_p5');
		$indo_k5    	= $this->input->post('indo_k5');
		$indo_p6    	= $this->input->post('indo_p6');
		$indo_k6    	= $this->input->post('indo_k6');

		$mtk_p5    		= $this->input->post('mtk_p5');
		$mtk_k5    		= $this->input->post('mtk_k5');
		$mtk_p6    		= $this->input->post('mtk_p6');
		$mtk_k6    		= $this->input->post('mtk_k6');

		$inggris_p5    	= $this->input->post('inggris_p5');
		$inggris_k5    	= $this->input->post('inggris_k5');
		$inggris_p6    	= $this->input->post('inggris_p6');
		$inggris_k6    	= $this->input->post('inggris_k6');


		$j1	= $indo_p1 + $mtk_p1 + $inggris_p1;
		$r1 = $j1 / 3;

		$j2	= $indo_k1 + $mtk_k1 + $inggris_k1;
		$r2 = $j2 / 3;

		$j3	= $indo_p2 + $mtk_p2 + $inggris_p2;
		$r3 = $j3 / 3;

		$j4	= $indo_k2 + $mtk_k2 + $inggris_k2;
		$r4 = $j4 / 3;

		$rp1	= ($r1 + $r2 + $r3 + $r4) / 4;

		$j5	= $indo_p3 + $mtk_p3 + $inggris_p3;
		$r5 = $j5 / 3;

		$j6	= $indo_k3 + $mtk_k3 + $inggris_k3;
		$r6 = $j6 / 3;

		$j7	= $indo_p4 + $mtk_p4 + $inggris_p4;
		$r7 = $j7 / 3;

		$j8	= $indo_k4 + $mtk_k4 + $inggris_k4;
		$r8 = $j8 / 3;

		$rp2	= ($r5 + $r6 + $r7 + $r8) / 4;

		$j9		= $indo_p5 + $mtk_p5 + $inggris_p5;
		$r9	 	= $j9 / 3;

		$j10	= $indo_k5 + $mtk_k5 + $inggris_k5;
		$r10 	= $j10 / 3;

		$j11	= $indo_p6 + $mtk_p6 + $inggris_p6;
		$r11 	= $j11 / 3;

		$j12	= $indo_k6 + $mtk_k6 + $inggris_k6;
		$r12 	= $j12 / 3;

		$rp3	= ($r9 + $r10 + $r11 + $r12) / 4;

		$rata	= ($rp1 + $rp2 + $rp3) / 3;

		$data = array(
			'id_pendaftar'      => $id,
			'indo_p1'      		=> $indo_p1,
			'indo_k1'     		=> $indo_k1,
			'mtk_p1'      		=> $mtk_p1,
			'mtk_k1'     		=> $mtk_k1,
			'inggris_p1'      	=> $inggris_p1,
			'inggris_k1'      	=> $inggris_k1,
			'indo_p2'      		=> $indo_p2,
			'indo_k2'     		=> $indo_k2,
			'mtk_p2'      		=> $mtk_p2,
			'mtk_k2'     		=> $mtk_k2,
			'inggris_p2'      	=> $inggris_p2,
			'inggris_k2'      	=> $inggris_k2,
			'indo_p3'      		=> $indo_p3,
			'indo_k3'     		=> $indo_k3,
			'mtk_p3'      		=> $mtk_p3,
			'mtk_k3'     		=> $mtk_k3,
			'inggris_p3'      	=> $inggris_p3,
			'inggris_k3'      	=> $inggris_k3,
			'indo_p4'      		=> $indo_p4,
			'indo_k4'     		=> $indo_k4,
			'mtk_p4'      		=> $mtk_p4,
			'mtk_k4'     		=> $mtk_k4,
			'inggris_p4'      	=> $inggris_p4,
			'inggris_k4'      	=> $inggris_k4,
			'indo_p5'      		=> $indo_p5,
			'indo_k5'     		=> $indo_k5,
			'mtk_p5'      		=> $mtk_p5,
			'mtk_k5'     		=> $mtk_k5,
			'inggris_p5'      	=> $inggris_p5,
			'inggris_k5'      	=> $inggris_k5,
			'indo_p6'      		=> $indo_p6,
			'indo_k6'     		=> $indo_k6,
			'mtk_p6'      		=> $mtk_p6,
			'mtk_k6'     		=> $mtk_k6,
			'inggris_p6'      	=> $inggris_p6,
			'inggris_k6'      	=> $inggris_k6,
			'rata_rata'         => $rata
		);

		$this->db->insert('raport', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>');
		redirect('user/nilai');
	}
}
