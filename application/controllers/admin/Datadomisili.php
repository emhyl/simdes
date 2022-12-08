<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datadomisili extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_datamaster');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("admin/Login"));
		}
 
	}
	public function index()
	{
		
		$this->load->view('admin/view_header');
		$data['tb_domisili']	= $this->M_datamaster->tampil_data('tb_domisili');
		$this->load->view('admin/view_domisili',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_domisili');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah(){
		$nama		= $this->input->post('nama');
		$no_ktp		= $this->input->post('no_ktp');
		
		$t_lahir		  	= $this->input->post('t_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$j_kelamin			= $this->input->post('j_kelamin');
		$agama  			= $this->input->post('agama');
		$email  			= $this->input->post('email');
		
		
		

		$data           			= array(
			'nama' 		=> $nama,
			'no_ktp'		=> $no_ktp,
			
			't_lahir'				=> $t_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'j_kelamin'					=> $j_kelamin,
			'kewarganegaraan'				=> $kewarganegaraan,
			'agama'				=> $agama,
			'email'				=> $email
			
			

				
		);

		$this->M_datamaster->input_data($data,'tb_domisili');
		redirect('admin/Datadomisili/');
	}
	public function edit($id_domisili){
		$where = array(
			'id_domisili' => $id_domisili
		);
		$this->load->view('admin/view_header');
		$data['tb_domisili'] = $this->M_datamaster->edit_data($where,'tb_domisili')->result();
		$this->load->view('admin/view_edit_domisili',$data);
		$this->load->view('admin/view_footer');
	}
	public function update(){
		$id_domisili			= $this->input->post('id_domisili');
		$nama		= $this->input->post('nama');
		$no_ktp			= $this->input->post('no_ktp');
		$t_lahir		  	= $this->input->post('t_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$j_kelamin		= $this->input->post('j_kelamin');
		$kewarganegaraan  			= $this->input->post('kewarganegaraan');
		$agama  			= $this->input->post('agama');
		$email  			= $this->input->post('email');
		
		

		$data           = array(
			'id_domisili' 		=> $id_domisili,
			'nama' 			=> $nama,
			'no_ktp'					=> $no_ktp,
			't_lahir'				=> $t_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'j_kelamin'		=> $j_kelamin,
			'kewarganegaraan'				=> $kewarganegaraan,
			'agama'				=> $agama,
			'email'				=> $email
			
		);
			

		$where = array(
			'id_domisili' => $id_domisili
		);

		$this->M_datamaster->update_data($where,$data,'tb_domisili');
		redirect('admin/Datadomisili/');
	}
	public function hapus($id_domisili){
		$where = array(
			'id_domisili' => $id_domisili
		);

		$this->M_datamaster->hapus_data($where,'tb_domisili');
		redirect('admin/Datadomisili/');
	}
	public function detail_domisili()
	{
		$this->load->view('admin/view_header');
		$data['tb_domisili']	= $this->M_datamaster->tampil_data('tb_domisili');
		$this->load->view('admin/view_detail_domisili',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah_detail_domisili(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_detail_domisili');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah_detail_domisili(){
		$nama		= $this->input->post('nama');
		$no_ktp			= $this->input->post('no_ktp');
		$t_lahir		  	= $this->input->post('t_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$j_kelamin		= $this->input->post('j_kelamin');
		$kewarganegaraan  			= $this->input->post('kewarganegaraan');
		$agama  			= $this->input->post('agama');
		$email  			= $this->input->post('email');
		
		
		

		$data           = array(
			'nama' 		=> $nama,
			'no_ktp'					=> $no_ktp,
			't_lahir'				=> $t_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'j_kelamin'		=> $j_kelamin,
			'kewarganegaraan'				=> $kewarganegaraan,
			'agama'				=> $agama,
			'email'				=> $email
			
			
				
		);

		$this->M_datamaster->input_data($data,'tb_domisili');
		redirect('admin/Datadomisili/detail_domisili');
	}
	public function edit_detail_domisili($id_domisili){
		$where = array(
			'id_domisili' => $id_domisili
		);
		$this->load->view('admin/view_header');
		$data['tb_domisili'] = $this->M_datamaster->edit_data($where,'tb_domisili')->result();
		$this->load->view('admin/view_edit_detail_domisili',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_detail_domisili(){
		$id_domisili			= $this->input->post('id_domisili');
		$nama		= $this->input->post('nama');
		$no_ktp			= $this->input->post('no_ktp');
		$t_lahir		  	= $this->input->post('t_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$j_kelamin		= $this->input->post('j_kelamin');
		$kewarganegaraan  			= $this->input->post('kewarganegaraan');
		$agama  			= $this->input->post('agama');
		$email  			= $this->input->post('email');
		
		

		$data           = array(
			'id_domisili'			=> $id_domisili,
			'nama' 		=> $nama,
			'no_ktp'					=> $no_ktp,
			't_lahir'				=> $t_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'j_kelamin'		=> $j_kelamin,
			'kewarganegaraan'				=> $kewarganegaraan,
			'agama'				=> $agama,
			'email'				=> $email

			
			

			);

		$where = array(
			'id_domisili' => $id_domisili
		);

		$this->M_datamaster->update_data($where,$data,'tb_domisili');
		redirect('admin/Datadomisili/detail_domisili');
	}
	public function hapus_detail_domisili($id_domisili){
		$where = array(
			'id_domisili' => $id_domisili
		);

		$this->M_datamaster->hapus_data($where,'tb_domisili');
		redirect('admin/Datadomisili/detail_domisili');
	}

	public function report($id = ''){
		$data['data'] = $this->M_datamaster->edit_data(['id_domisili' => $id],'tb_domisili')->result();
		// $this->load->view('admin/report_PDF/domisili',$data);
			
		$this->load->library('pdf');
		$this->pdf->filename = 'laporan.pdf';
		$paper = array(
					'size' => 'A4',
					'orientation' => 'Portrait'
		);
		
		$this->pdf->load('admin/report_PDF/domisili',$data,$paper);
	}

}

