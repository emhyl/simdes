<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataakta extends CI_Controller {
 
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
		$data['tb_akta']	= $this->M_datamaster->tampil_data('tb_akta');
		$this->load->view('masyarakat/view_akta',$data);
		$this->load->view('masyarakat/view_footer');

	}
	public function tambah(){
		$this->load->view('masyarakat/view_header');
		$this->load->view('masyarakat/view_tambah_akta');
		$this->load->view('masyarakat/view_footer');
	}
	public function aksi_tambah(){
		$nama			= $this->input->post('nama');
		$j_kelamin		= $this->input->post('j_kelamin');
		$t_lahir		= $this->input->post('t_lahir');
		$hari			= $this->input->post('hari');
		$waktu			= $this->input->post('waktu');
		$j_kelahiran	= $this->input->post('j_kelahiran');
		$berat			= $this->input->post('berat');
		$anak_ke		= $this->input->post('anak_ke');
		$nik		  	= $this->input->post('nik');
		$nama_ibu		  	= $this->input->post('nama_ibu');
		$tgl_ibu		  	= $this->input->post('tgl_ibu');
		$pekerjaan_ibu		  	= $this->input->post('pekerjaan_ibu');
		$alamat_ibu		  	= $this->input->post('alamat_ibu');
		$nama_ayah		  	= $this->input->post('nama_ayah');
		$nik_ayah		  	= $this->input->post('nik_ayah');
		$tgl_ayah		  	= $this->input->post('tgl_ayah');
		$pekerjaan_ayah		  	= $this->input->post('pekerjaan_ayah');
		$alamat_ayah		  	= $this->input->post('alamat_ayah');
		$pelapor		  	= $this->input->post('pelapor');
		$nik_pelapor		  	= $this->input->post('nik_pelapor');
		$umur_pelapor		  	= $this->input->post('umur_pelapor');
		$pekerjaan_pelapor		  	= $this->input->post('pekerjaan_pelapor');
		$alamat_pelapor		  	= $this->input->post('alamat_pelapor');
		$saksi_1		  	= $this->input->post('saksi_1');
		$nik_saksi1		  	= $this->input->post('nik_saksi1');
		$umur_saksi1		  	= $this->input->post('umur_saksi1');
		$pekerjaan_saksi1		  	= $this->input->post('pekerjaan_saksi1');
		$alamat_saksi1		  	= $this->input->post('alamat_saksi1');
		$saksi_2		  	= $this->input->post('saksi_2');
		$nik_saksi2		  	= $this->input->post('nik_saksi2');
		$umur_saksi2		  	= $this->input->post('umur_saksi2');
		$pekerjaan_saksi2		  	= $this->input->post('pekerjaan_saksi2');
		$alamat_saksi2		  	= $this->input->post('alamat_saksi2');
		$email		  	= $this->input->post('email');
		
		

		

		$data           = array(
			'nama' 		=> $nama,
			'j_kelamin'		=> $j_kelamin,
			't_lahir'				=> $t_lahir,
			'hari'				=> $hari,
			'waktu'				=> $waktu,
			'j_kelahiran'				=> $j_kelahiran,
			'berat'				=> $berat,
			'anak_ke'				=> $anak_ke,
			'nik'				=> $nik,
			'nama_ibu'				=> $nama_ibu,
			'tgl_ibu'				=> $tgl_ibu,
			'pekerjaan_ibu'				=> $pekerjaan_ibu,
			'alamat_ibu'				=> $alamat_ibu,
			'nama_ayah'				=> $nama_ayah,
			'nik_ayah'				=> $nik_ayah,
			'tgl_ayah'				=> $tgl_ayah,
			'pekerjaan_ayah'				=> $pekerjaan_ayah,
			'alamat_ayah'				=> $alamat_ayah,
			'pelapor'				=> $pelapor,
			'nik_pelapor'				=> $nik_pelapor,
			'umur_pelapor'				=> $umur_pelapor,
			'pekerjaan_pelapor'				=> $pekerjaan_pelapor,
			'alamat_pelapor'				=> $alamat_pelapor,
			'saksi_1'				=> $saksi_1,
			'nik_saksi1'				=> $nik_saksi1,
			'umur_saksi1'				=> $umur_saksi1,
			'pekerjaan_saksi1'				=> $pekerjaan_saksi1,
			'alamat_saksi1'				=> $alamat_saksi1,
			'saksi_2'				=> $saksi_2,
			'nik_saksi2'				=> $nik_saksi2,
			'umur_saksi2'				=> $umur_saksi2,
			'pekerjaan_saksi2'				=> $pekerjaan_saksi2,
			'alamat_saksi2'				=> $alamat_saksi2,
			'email'				=> $email,

			
				
		);

		$this->M_datamaster->input_data($data,'tb_akta');
		redirect('masyarakat/Dataakta/');
	}
	public function edit($id_akta){
		$where = array(
			'id_akta' => $id_akta
		);
		$this->load->view('masyarakat/view_header');
		$data['tb_akta'] = $this->M_datamaster->edit_data($where,'tb_akta')->result();
		$this->load->view('masyarakat/view_edit_akta',$data);
		$this->load->view('masyarakat/view_footer');
	}
	public function update(){
		$id_akta			= $this->input->post('id_akta');
		$nama		= $this->input->post('nama');
		$j_kelamin		= $this->input->post('j_kelamin');
		$t_lahir		= $this->input->post('t_lahir');
		$hari			= $this->input->post('hari');
		$waktu			= $this->input->post('waktu');
		$j_kelahiran	= $this->input->post('j_kelahiran');
		$berat			= $this->input->post('berat');
		$anak_ke		= $this->input->post('anak_ke');
		$nik		  	= $this->input->post('nik');
		$nama_ibu		  	= $this->input->post('nama_ibu');
		$tgl_ibu		  	= $this->input->post('tgl_ibu');
		$pekerjaan_ibu		  	= $this->input->post('pekerjaan_ibu');
		$alamat_ibu		  	= $this->input->post('alamat_ibu');
		$nama_ayah		  	= $this->input->post('nama_ayah');
		$nik_ayah		  	= $this->input->post('nik_ayah');
		$tgl_ayah		  	= $this->input->post('tgl_ayah');
		$pekerjaan_ayah		  	= $this->input->post('pekerjaan_ayah');
		$alamat_ayah		  	= $this->input->post('alamat_ayah');
		$pelapor		  	= $this->input->post('pelapor');
		$nik_pelapor		  	= $this->input->post('nik_pelapor');
		$umur_pelapor		  	= $this->input->post('umur_pelapor');
		$pekerjaan_pelapor		  	= $this->input->post('pekerjaan_pelapor');
		$alamat_pelapor		  	= $this->input->post('alamat_pelapor');
		$saksi_1		  	= $this->input->post('saksi_1');
		$nik_saksi1		  	= $this->input->post('nik_saksi1');
		$umur_saksi1		  	= $this->input->post('umur_saksi1');
		$pekerjaan_saksi1		  	= $this->input->post('pekerjaan_saksi1');
		$alamat_saksi1		  	= $this->input->post('alamat_saksi1');
		$saksi_2		  	= $this->input->post('saksi_2');
		$nik_saksi_		  	= $this->input->post('nik_saksi2');
		$umur_saksi2		  	= $this->input->post('umur_saksi2');
		$pekerjaan_saksi2		  	= $this->input->post('pekerjaan_saksi2');
		$alamat_saksi2		  	= $this->input->post('alamat_saksi2');
		$email		  	= $this->input->post('email');

		$data           = array(
			'id_akta'			=> $id_akta,
			'nama' 		=> $nama,
			'j_kelamin'		=> $j_kelamin,
			't_lahir'				=> $t_lahir,
			'hari'				=> $hari,
			'waktu'				=> $waktu,
			'j_kelahiran'				=> $j_kelahiran,
			'berat'				=> $berat,
			'anak_ke'				=> $anak_ke,
			'nik'				=> $nik,
			'nama_ibu'				=> $nama_ibu,
			'tgl_ibu'				=> $tgl_ibu,
			'pekerjaan_ibu'				=> $pekerjaan_ibu,
			'alamat_ibu'				=> $alamat_ibu,
			'nama_ayah'				=> $ayah_ayah,
			'nik_ayah'				=> $nik_ayah,
			'tgl_ayah'				=> $tgl_ayah,
			'pekerjaan_ayah'				=> $pekerjaan_ayah,
			'alamat_ayah'				=> $alamat_ayah,
			'pelapor'				=> $pelapor,
			'nik_pelapor'				=> $nik_pelapor,
			'umur_pelapor'				=> $umur_pelapor,
			'pekerjaan_pelapor'				=> $pekerjaan_pelapor,
			'alamat_pelapor'				=> $alamat_pelapor,
			'saksi_1'				=> $saksi_1,
			'nik_saksi1'				=> $nik_saksi1,
			'umur_saksi1'				=> $umur_saksi1,
			'pekerjaan_saksi1'				=> $pekerjaan_saksi1,
			'alamat_saksi1'				=> $alamat_saksi1,
			'saksi_2'				=> $saksi_2,
			'nik_saksi2'				=> $nik_saksi2,
			'umur_saksi2'				=> $umur_saksi2,
			'pekerjaan_saksi2'				=> $pekerjaan_saksi2,
			'alamat_saksi2'				=> $alamat_saksi2,
			'email'				=> $email,
				);

		$where = array(
			'id_akta' => $id_akta
		);

		$this->M_datamaster->update_data($where,$data,'tb_akta');
		redirect('masyarakat/Dataakta/');
	}
	public function hapus($id_akta){
		$where = array(
			'id_akta' => $id_akta
		);

		$this->M_datamaster->hapus_data($where,'tb_akta');
		redirect('masyarakat/Dataakta/');
	}
	public function detail_akta()
	{
		$this->load->view('masyarakat/view_header');
		$data['tb_akta']	= $this->M_datamaster->tampil_data('tb_akta');
		$this->load->view('masyarakat/view_detail_akta',$data);
		$this->load->view('masyarakat/view_footer');

	}
	public function tambah_detail_akta(){
		$this->load->view('masyarakat/view_header');
		$this->load->view('masyarakat/view_tambah_detail_akta');
		$this->load->view('masyarakat/view_footer');
	}
	public function aksi_tambah_detail_akta(){
		$nama		= $this->input->post('nama');
		$tgl_lahir	= $this->input->post('tgl_lahir');
		$anak_ke		  	= $this->input->post('anak_ke');
		

		

		$data           = array(
			'nama' 		=> $nama,
			'j_kelamin'		=> $j_kelamin,
			't_lahir'				=> $t_lahir,
			'hari'				=> $hari,
			'waktu'				=> $waktu,
			'j_kelahiran'				=> $j_kelahiran,
			'berat'				=> $berat,
			'anak_ke'				=> $anak_ke,
			'nik'				=> $nik,
			'nama_ibu'				=> $nama_ibu,
			'tgl_ibu'				=> $tgl_ibu,
			'pekerjaan_ibu'				=> $pekerjaan_ibu,
			'alamat_ibu'				=> $alamat_ibu,
			'nama_ayah'				=> $ayah_ayah,
			'nik_ayah'				=> $nik_ayah,
			'tgl_ayah'				=> $tgl_ayah,
			'pekerjaan_ayah'				=> $pekerjaan_ayah,
			'alamat_ayah'				=> $alamat_ayah,
			'pelapor'				=> $pelapor,
			'nik_pelapor'				=> $nik_pelapor,
			'umur_pelapor'				=> $umur_pelapor,
			'pekerjaan_pelapor'				=> $pekerjaan_pelapor,
			'alamat_pelapor'				=> $alamat_pelapor,
			'saksi_1'				=> $saksi_1,
			'nik_saksi1'				=> $nik_saksi1,
			'umur_saksi1'				=> $umur_saksi1,
			'pekerjaan_saksi1'				=> $pekerjaan_saksi1,
			'alamat_saksi1'				=> $alamat_saksi1,
			'saksi_2'				=> $saksi_2,
			'nik_saksi2'				=> $nik_saksi2,
			'umur_saksi2'				=> $umur_saksi2,
			'pekerjaan_saksi2'				=> $pekerjaan_saksi2,
			'alamat_saksi2'				=> $alamat_saksi2,
			'email'				=> $email,
			
				
		);

		$this->M_datamaster->input_data($data,'tb_akta');
		redirect('masyarakat/Dataakta/detail_akta');
	}
	public function edit_detail_akta($id_akta){
		$where = array(
			'id_akta' => $id_akta
		);
		$this->load->view('masyarakat/view_header');
		$data['tb_akta'] = $this->M_datamaster->edit_data($where,'tb_akta')->result();
		$this->load->view('masyarakat/view_edit_detail_akta',$data);
		$this->load->view('masyarakat/view_footer');
	}
	public function update_detail_akta(){
		$id_akta			= $this->input->post('id_akta');
		$nama		= $this->input->post('nama');
		$j_kelamin		= $this->input->post('j_kelamin');
		$t_lahir		= $this->input->post('t_lahir');
		$hari			= $this->input->post('hari');
		$waktu			= $this->input->post('waktu');
		$j_kelahiran	= $this->input->post('j_kelahiran');
		$berat			= $this->input->post('berat');
		$anak_ke		= $this->input->post('anak_ke');
		$nik		  	= $this->input->post('nik');
		$nama_ibu		  	= $this->input->post('nama_ibu');
		$tgl_ibu		  	= $this->input->post('tgl_ibu');
		$pekerjaan_ibu		  	= $this->input->post('pekerjaan_ibu');
		$alamat_ibu		  	= $this->input->post('alamat_ibu');
		$nama_ayah		  	= $this->input->post('nama_ayah');
		$nik_ayah		  	= $this->input->post('nik_ayah');
		$tgl_ayah		  	= $this->input->post('tgl_ayah');
		$pekerjaan_ayah		  	= $this->input->post('pekerjaan_ayah');
		$alamat_ayah		  	= $this->input->post('alamat_ayah');
		$pelapor		  	= $this->input->post('pelapor');
		$nik_pelapor		  	= $this->input->post('nik_pelapor');
		$umur_pelapor		  	= $this->input->post('umur_pelapor');
		$pekerjaan_pelapor		  	= $this->input->post('pekerjaan_pelapor');
		$alamat_pelapor		  	= $this->input->post('alamat_pelapor');
		$saksi_1		  	= $this->input->post('saksi_1');
		$nik_saksi1		  	= $this->input->post('nik_saksi1');
		$umur_saksi1		  	= $this->input->post('umur_saksi1');
		$pekerjaan_saksi1		  	= $this->input->post('pekerjaan_saksi1');
		$alamat_saksi1		  	= $this->input->post('alamat_saksi1');
		$saksi_2		  	= $this->input->post('saksi_2');
		$nik_saksi2		  	= $this->input->post('nik_saksi2');
		$umur_saksi2		  	= $this->input->post('umur_saksi2');
		$pekerjaan_saksi2		  	= $this->input->post('pekerjaan_saksi2');
		$alamat_saksi2		  	= $this->input->post('alamat_saksi2');
		$email		  	= $this->input->post('email');
		

		$data           = array(
			'id_akta'			=> $id_akta,
			'nama' 		=> $nama,
			'j_kelamin'		=> $j_kelamin,
			't_lahir'				=> $t_lahir,
			'hari'				=> $hari,
			'waktu'				=> $waktu,
			'j_kelahiran'				=> $j_kelahiran,
			'berat'				=> $berat,
			'anak_ke'				=> $anak_ke,
			'nik'				=> $nik,
			'nama_ibu'				=> $nama_ibu,
			'tgl_ibu'				=> $tgl_ibu,
			'pekerjaan_ibu'				=> $pekerjaan_ibu,
			'alamat_ibu'				=> $alamat_ibu,
			'nama_ayah'				=> $ayah_ayah,
			'nik_ayah'				=> $nik_ayah,
			'tgl_ayah'				=> $tgl_ayah,
			'pekerjaan_ayah'				=> $pekerjaan_ayah,
			'alamat_ayah'				=> $alamat_ayah,
			'pelapor'				=> $pelapor,
			'nik_pelapor'				=> $nik_pelapor,
			'umur_pelapor'				=> $umur_pelapor,
			'pekerjaan_pelapor'				=> $pekerjaan_pelapor,
			'alamat_pelapor'				=> $alamat_pelapor,
			'saksi_1'				=> $saksi_1,
			'nik_saksi1'				=> $nik_saksi1,
			'umur_saksi1'				=> $umur_saksi1,
			'pekerjaan_saksi1'				=> $pekerjaan_saksi1,
			'alamat_saksi1'				=> $alamat_saksi1,
			'saksi_2'				=> $saksi_2,
			'nik_saksi2'				=> $nik_saksi2,
			'umur_saksi2'				=> $umur_saksi2,
			'pekerjaan_saksi2'				=> $pekerjaan_saksi2,
			'alamat_saksi2'				=> $alamat_saksi2,
			'email'				=> $email,
				);

		$where = array(
			'id_akta' => $id_akta
		);

		$this->M_datamaster->update_data($where,$data,'tb_akta');
		redirect('masyarakat/Dataakta/detail_akta');
	}
	public function hapus_detail_akta($id_akta){
		$where = array(
			'id_akta' => $id_akta
		);

		$this->M_datamaster->hapus_data($where,'tb_akta');
		redirect('masyarakat/Dataakta/detail_akta');
	}
	

}

