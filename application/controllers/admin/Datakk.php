<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakk extends CI_Controller {
 
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
		$data['tb_kk']	= $this->M_datamaster->tampil_data('tb_kk');
		$this->load->view('admin/view_kk',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_kk');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah(){
		$nm_kkeluarga		= $this->input->post('nm_kkeluarga');
		$alamat  		= $this->input->post('alamat');
		$rt_rw		= $this->input->post('rt_rw');
		$desa_kelurahan		= $this->input->post('desa_kelurahan');
		$kecematan  			= $this->input->post('kecematan');
		$kabupaten 			= $this->input->post('kabupaten');
		$provinsi 		= $this->input->post('provinsi');
		$a_keluarga			= $this->input->post('a_keluarga');
		$status_keluarga		  	= $this->input->post('status_keluarga');
		$email  			= $this->input->post('email');
		// $s_hubungan 			= $this->input->post('s_hubungan');
		// $kewarganegaraan  			= $this->input->post('kewarganegaraan');
		// $nm_ortu  			= $this->input->post('nm_ortu');

		

		$data           			= array(
			'nm_kkeluarga' 		=> $nm_kkeluarga,
			'alamat'				=> $alamat,
			'rt_rw'					=> $rt_rw,
			'desa_kelurahan'		=> $desa_kelurahan,
			'kecematan'				=> $kecematan,
			'kabupaten'				=> $kabupaten,
			'provinsi'			=> $provinsi,
			'a_keluarga'					=> $a_keluarga,
			'status_keluarga'				=> $status_keluarga,
			 'email'					=> $email
			// 's_hubungan'					=> $s_hubungan,
			// 'kewarganegaraan'				=> $kewarganegaraan,
			// 'nm_ortu'				=> $nm_ortu

				
		);

		$this->M_datamaster->input_data($data,'tb_kk');
		redirect('admin/Datakk/');
	}
	public function edit($id_kk){
		$where = array(
			'id_kk' => $id_kk
		);
		$this->load->view('admin/view_header');
		$data['tb_kk'] = $this->M_datamaster->edit_data($where,'tb_kk')->result();
		$this->load->view('admin/view_edit_kk',$data);
		$this->load->view('admin/view_footer');
	}
	public function update(){
		$id_kk			= $this->input->post('id_kk');
			$nm_kkeluarga		= $this->input->post('nm_kkeluarga');
		$alamat  		= $this->input->post('alamat');
		$rt_rw		= $this->input->post('rt_rw');
		$desa_kelurahan		= $this->input->post('desa_kelurahan');
		$kecematan  			= $this->input->post('kecematan');
		$kabupaten 			= $this->input->post('kabupaten');
		$provinsi 		= $this->input->post('provinsi');
		$a_keluarga			= $this->input->post('a_keluarga');
		$status_keluarga		  	= $this->input->post('status_keluarga');
		$email  			= $this->input->post('email');
		// $s_hubungan 			= $this->input->post('s_hubungan');
		// $kewarganegaraan  			= $this->input->post('kewarganegaraan');
		// $nm_ortu  			= $this->input->post('nm_ortu');

		$data           = array(
			'id_kk' 		=> $id_kk,
			'nm_kkeluarga' 		=> $nm_kkeluarga,
			'alamat'				=> $alamat,
			'rt_rw'		=> $rt_rw,
			'desa_kelurahan'		=> $desa_kelurahan,
			'kecematan'				=> $kecematan,
			'kabupaten'				=> $kabupaten,
			'provinsi'			=> $provinsi,
			'a_keluarga'					=> $a_keluarga,
			'status_keluarga'				=> $status_keluarga,
			'email'				=> $email

			
		);

		$where = array(
			'id_kk' => $id_kk
		);

		$this->M_datamaster->update_data($where,$data,'tb_kk');
		redirect('admin/Datakk/');
	}
	public function hapus($id_kk){
		$where = array(
			'id_kk' => $id_kk
		);

		$this->M_datamaster->hapus_data($where,'tb_kk');
		redirect('admin/Datakk/');
	}
	public function detail()
	{
		$this->load->view('admin/view_header');
		$data['tb_kk']	= $this->M_datamaster->tampil_data('tb_kk');
		$this->load->view('admin/view_detail',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah_detail(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_detail');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah_detail(){
		$nm_kkeluarga		= $this->input->post('nm_kkeluarga');
		$alamat  		= $this->input->post('alamat');
		$rt_rw		= $this->input->post('rt_rw');
		$desa_kelurahan		= $this->input->post('desa_kelurahan');
		$kecematan  			= $this->input->post('kecematan');
		$kabupaten 			= $this->input->post('kabupaten');
		$provinsi 		= $this->input->post('provinsi');
		$a_keluarga			= $this->input->post('a_keluarga');
		$status_keluarga		  	= $this->input->post('status_keluarga');
		$email		  	= $this->input->post('email');
		

		$data           = array(
			'nm_kkeluarga' 		=> $nm_kkeluarga,
			'alamat'				=> $alamat,
			'rt_rw'		=> $rt_rw,
			'desa_kelurahan'		=> $desa_kelurahan,
			'kecematan'				=> $kecematan,
			'kabupaten'				=> $kabupaten,
			'provinsi'			=> $provinsi,
			'a_keluarga'					=> $a_keluarga,
			'status_keluarga'				=> $status_keluarga,
			'email'					=> $email
			// 's_hubungan'					=> $s_hubungan,
			// 'kewarganegaraan'				=> $kewarganegaraan,
			// 'nm_ortu'				=> $nm_ortu
				
		);

		$this->M_datamaster->input_data($data,'tb_kk');
		redirect('admin/Datakk/detail');
	}
	public function edit_detail($id_kk){
		$where = array(
			'id_kk' => $id_kk
		);
		$this->load->view('admin/view_header');
		$data['tb_kk'] = $this->M_datamaster->edit_data($where,'tb_kk')->result();
		$this->load->view('admin/view_edit_detail',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_detail(){
		$id_kk			= $this->input->post('id_kk');
			$nm_kkeluarga		= $this->input->post('nm_kkeluarga');
		$alamat  		= $this->input->post('alamat');
		$rt_rw		= $this->input->post('rt_rw');
		$desa_kelurahan		= $this->input->post('desa_kelurahan');
		$kecematan  			= $this->input->post('kecematan');
		$kabupaten 			= $this->input->post('kabupaten');
		$provinsi 		= $this->input->post('provinsi');
		$a_keluarga			= $this->input->post('a_keluarga');
		$status_keluarga		  	= $this->input->post('status_keluarga');
		$email  			= $this->input->post('email');
		// $s_hubungan 			= $this->input->post('s_hubungan');
		// $kewarganegaraan  			= $this->input->post('kewarganegaraan');
		// $nm_ortu  			= $this->input->post('nm_ortu');

		$data           = array(
			'id_kk'				=> $id_kk,
			'nm_kkeluarga' 		=> $nm_kkeluarga,
			'alamat'				=> $alamat,
			'rt_rw'		=> $rt_rw,
			'desa_kelurahan'		=> $desa_kelurahan,
			'kecematan'				=> $kecematan,
			'kabupaten'				=> $kabupaten,
			'provinsi'			=> $provinsi,
			'a_keluarga'					=> $a_keluarga,
			'status_keluarga'				=> $status_keluarga,
			'email'		=> $email
			// 's_hubungan'				=> $s_hubungan,
			// 'kewarganegaraan'	=> $kewarganegaraan,
			// 'nm_ortu'			=> $nm_ortu

			);

		$where = array(
			'id_kk' => $id_kk
		);

		$this->M_datamaster->update_data($where,$data,'tb_kk');
		redirect('admin/Datakk/detail');
	}
	public function hapus_detail($id_kk){
		$where = array(
			'id_kk' => $id_kk
		);

		$this->M_datamaster->hapus_data($where,'tb_kk');
		redirect('admin/Datakk/detail');
	}

	public function report($id = ''){
		$data['data'] = $this->M_datamaster->edit_data(['id_kk' => $id],'tb_kk')->result();
		$this->load->view('admin/report_PDF/ktp',$data);
	
		$this->load->library('pdf');
		$this->pdf->filename = 'laporan.pdf';
		$paper = array(
					'size' => 'A4',
					'orientation' => 'Landscape'
		);
		
		$this->pdf->load('admin/report_PDF/ktp',$data,$paper);
	}

}

