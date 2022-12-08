<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataskck extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_datamaster');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("admin/Login"));
		}
 
	}
	public function index()
	{
		
		$this->load->view('masyarakat/view_header');
		$data['tb_skck']	= $this->M_datamaster->tampil_data('tb_skck');
		$this->load->view('masyarakat/view_skck',$data);
		$this->load->view('masyarakat/view_footer');

	}
	public function tambah(){
		$this->load->view('masyarakat/view_header');
		$this->load->view('masyarakat/view_tambah_skck');
		$this->load->view('masyarakat/view_footer');
	}
	public function aksi_tambah(){
		$nama				= $this->input->post('nama');
		$nik				= $this->input->post('nik');
		$t_lahir		  	= $this->input->post('t_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$j_kelamin			= $this->input->post('j_kelamin');
		$agama  			= $this->input->post('agama');
		$kewarganegaraan  	= $this->input->post('kewarganegaraan');
		$s_perkawinan  		= $this->input->post('s_perkawinan');
		$pekerjaan 			= $this->input->post('pekerjaan');
		$alamat  			= $this->input->post('alamat');
		$keperluan 			= $this->input->post('keperluan');
		$email 			= $this->input->post('email');
		

		

		$data           			= array(
			'nama' 					=> $nama,
			'nik' 					=> $nik,
			't_lahir'				=> $t_lahir,
			'tgl_lahir'				=> $tgl_lahir,
			'j_kelamin'				=> $j_kelamin,
			'agama'					=> $agama,
			'kewarganegaraan'		=> $kewarganegaraan,
			's_perkawinan'			=> $s_perkawinan,
			'pekerjaan'				=> $pekerjaan,
			'alamat'				=> $alamat,
			'keperluan'				=> $keperluan,
			'email'				=> $email
			

				
		);

		$this->M_datamaster->input_data($data,'tb_skck');
		redirect('masyarakat/Dataskck/');
	}
	public function edit($id_skck){
		$where = array(
			'id_skck' => $id_skck
		);
		$this->load->view('masyarakat/view_header');
		$data['tb_skck'] = $this->M_datamaster->edit_data($where,'tb_skck')->result();
		$this->load->view('masyarakat/view_edit_skck',$data);
		$this->load->view('masyarakat/view_footer');
	}
	public function update(){
		$id_skck			= $this->input->post('id_skck');
		$nama				= $this->input->post('nama');
		$nik				= $this->input->post('nik');
		$t_lahir		  	= $this->input->post('t_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$j_kelamin			= $this->input->post('j_kelamin');
		$agama  			= $this->input->post('agama');
		$kewarganegaraan  	= $this->input->post('kewarganegaraan');
		$s_perkawinan  		= $this->input->post('s_perkawinan');
		$pekerjaan 			= $this->input->post('pekerjaan');
		$alamat  			= $this->input->post('alamat');
		$keperluan 			= $this->input->post('keperluan');
		$email 			= $this->input->post('email');

		$data           = array(
			'id_skck' 			=> $id_skck,
				'nama' 					=> $nama,
			'nik' 					=> $nik,
			't_lahir'				=> $t_lahir,
			'tgl_lahir'				=> $tgl_lahir,
			'j_kelamin'				=> $j_kelamin,
			'agama'					=> $agama,
			'kewarganegaraan'		=> $kewarganegaraan,
			's_perkawinan'			=> $s_perkawinan,
			'pekerjaan'				=> $pekerjaan,
			'alamat'				=> $alamat,
			'keperluan'				=> $keperluan,
			'email'				=> $email
		);

		$where = array(
			'id_skck' => $id_skck
		);

		$this->M_datamaster->update_data($where,$data,'tb_skck');
		redirect('masyarakat/Dataskck/');
	}
	public function hapus($id_skck){
		$where = array(
			'id_skck' => $id_skck
		);

		$this->M_datamaster->hapus_data($where,'tb_skck');
		redirect('masyarakat/Dataskck/');
	}
	public function detail_skck()
	{
		$this->load->view('masyarakat/view_header');
		$data['tb_skck']	= $this->M_datamaster->tampil_data('tb_skck');
		$this->load->view('masyarakat/view_detail_skck',$data);
		$this->load->view('masyarakat/view_footer');

	}
	public function tambah_detail_skck(){
		$this->load->view('masyarakat/view_header');
		$this->load->view('masyarakat/view_tambah_detail_skck');
		$this->load->view('masyarakat/view_footer');
	}
	public function aksi_tambah_detail_skck(){
		$nama				= $this->input->post('nama');
		$nik				= $this->input->post('nik');
		$t_lahir		  	= $this->input->post('t_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$j_kelamin			= $this->input->post('j_kelamin');
		$agama  			= $this->input->post('agama');
		$kewarganegaraan  	= $this->input->post('kewarganegaraan');
		$s_perkawinan  		= $this->input->post('s_perkawinan');
		$pekerjaan 			= $this->input->post('pekerjaan');
		$alamat  			= $this->input->post('alamat');
		$keperluan 			= $this->input->post('keperluan');
		$email 			= $this->input->post('email');
		

		$data           = array(
			'nama' 					=> $nama,
			'nik' 					=> $nik,
			't_lahir'				=> $t_lahir,
			'tgl_lahir'				=> $tgl_lahir,
			'j_kelamin'				=> $j_kelamin,
			'agama'					=> $agama,
			'kewarganegaraan'		=> $kewarganegaraan,
			's_perkawinan'			=> $s_perkawinan,
			'pekerjaan'				=> $pekerjaan,
			'alamat'				=> $alamat,
			'keperluan'				=> $keperluan,
			'email'				=> $email
				
		);

		$this->M_datamaster->input_data($data,'tb_skck');
		redirect('masyarakat/Dataskck/detail_skck');
	}
	public function edit_detail_skck($id_skck){
		$where = array(
			'id_skck' => $id_skck
		);
		$this->load->view('masyarakat/view_header');
		$data['tb_skck'] = $this->M_datamaster->edit_data($where,'tb_skck')->result();
		$this->load->view('masyarakat/view_edit_detail_skck',$data);
		$this->load->view('masyarakat/view_footer');
	}
	public function update_detail_skck(){
		$id_skck			= $this->input->post('id_skck');
		$nama				= $this->input->post('nama');
		$nik				= $this->input->post('nik');
		$t_lahir		  	= $this->input->post('t_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$j_kelamin			= $this->input->post('j_kelamin');
		$agama  			= $this->input->post('agama');
		$kewarganegaraan  	= $this->input->post('kewarganegaraan');
		$s_perkawinan  		= $this->input->post('s_perkawinan');
		$pekerjaan 			= $this->input->post('pekerjaan');
		$alamat  			= $this->input->post('alamat');
		$keperluan 			= $this->input->post('keperluan');
		$email 			= $this->input->post('email');

		$data           = array(
			'id_skck'			=> $id_skck,
			'nama' 					=> $nama,
			'nik' 					=> $nik,
			't_lahir'				=> $t_lahir,
			'tgl_lahir'				=> $tgl_lahir,
			'j_kelamin'				=> $j_kelamin,
			'agama'					=> $agama,
			'kewarganegaraan'		=> $kewarganegaraan,
			's_perkawinan'			=> $s_perkawinan,
			'pekerjaan'				=> $pekerjaan,
			'alamat'				=> $alamat,
			'keperluan'				=> $keperluan,
			'email'				=> $email

			);

		$where = array(
			'id_skck' => $id_skck
		);

		$this->M_datamaster->update_data($where,$data,'tb_skck');
		redirect('masyarakat/Dataskck/detail_skck');
	}
	public function hapus_detail_skck($id_skck){
		$where = array(
			'id_skck' => $id_skck
		);

		$this->M_datamaster->hapus_data($where,'tb_skck');
		redirect('masyarakat/Dataskck/detail_skck');
	}

}

