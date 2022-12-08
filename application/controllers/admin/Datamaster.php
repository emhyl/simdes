<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamaster extends CI_Controller {
 
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
		$data['tb_penduduk']	= $this->M_datamaster->tampil_data('tb_penduduk');
		$this->load->view('admin/view_penduduk',$data);
		$this->load->view('admin/view_footer');
	}
	public function tambah(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_penduduk');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah(){
		$nik		= $this->input->post('nik');
		$no_kk	= $this->input->post('no_kk');
		$nm_penduduk		  	= $this->input->post('nm_penduduk');
		$t_lahir	  	= $this->input->post('t_lahir');
		$j_kelamin				= $this->input->post('j_kelamin');
		$tgl_lahir  	= $this->input->post('tgl_lahir');
		$alamat  	= $this->input->post('alamat');
		$alamat_ktp  	= $this->input->post('alamat_ktp');
		$desa_kelurahan  	= $this->input->post('desa_kelurahan');
		$kec  	= $this->input->post('kec');
		$kab  	= $this->input->post('kab');
		$provinsi  	= $this->input->post('provinsi');
		$negara  	= $this->input->post('negara');
		$rt  	= $this->input->post('rt');
		$rw  	= $this->input->post('rw');
		$agama  	= $this->input->post('agama');
		$pendidikan_terakhir  	= $this->input->post('pendidikan_terakhir');
		$pekerjaan  	= $this->input->post('pekerjaan');
		$status_perkawinan  	= $this->input->post('status_perkawinan');
		$status_penduduk  	= $this->input->post('status_penduduk');
		

		$data           = array(
			'nik' 									=> $nik,
			'no_kk'									=> $no_kk,
			'nm_penduduk'							=>$nm_penduduk,
			't_lahir'								=> $t_lahir,
			'j_kelamin'								=> $j_kelamin,
			'tgl_lahir'								=> $tgl_lahir,
			'alamat'								=> $alamat,
			'alamat_ktp'							=> $alamat_ktp,
			'desa_kelurahan'						=> $desa_kelurahan,
			'kec'									=> $kec,
			'kab'									=> $kab,
			'provinsi'								=> $provinsi,
			'negara'								=> $negara,
			'rt'									=> $rt,
			'rw'									=> $rw,
			'agama'									=> $agama,
			'pendidikan_terakhir'					=> $pendidikan_terakhir,
			'pekerjaan'								=> $pekerjaan,
			'status_perkawinan'						=> $status_perkawinan,
			'status_penduduk'						=> $status_penduduk
				
		);

		$this->M_datamaster->input_data($data,'tb_penduduk');
		redirect('admin/Datamaster');
	}
	public function edit($id_penduduk){
		$where = array(
			'id_penduduk' => $id_penduduk
		);
		$this->load->view('admin/view_header');
		$data['tb_penduduk'] = $this->M_datamaster->edit_data($where,'tb_penduduk')->result();
		$this->load->view('admin/view_edit_penduduk',$data);
		$this->load->view('admin/view_footer');
	}
	public function update(){
		$id_penduduk			= $this->input->post('id_penduduk');
		$nik		= $this->input->post('nik');
		$no_kk	= $this->input->post('no_kk');
		$nm_penduduk		  	= $this->input->post('nm_penduduk');
		$t_lahir	  	= $this->input->post('t_lahir');
		$j_kelamin				= $this->input->post('j_kelamin');
		$tgl_lahir  	= $this->input->post('tgl_lahir');
		$alamat  	= $this->input->post('alamat');
		$alamat_ktp  	= $this->input->post('alamat_ktp');
		$desa_kelurahan  	= $this->input->post('desa_kelurahan');
		$kec  	= $this->input->post('kec');
		$kab  	= $this->input->post('kab');
		$provinsi  	= $this->input->post('provinsi');
		$negara  	= $this->input->post('negara');
		$rt  	= $this->input->post('rt');
		$rw  	= $this->input->post('rw');
		$agama  	= $this->input->post('agama');
		$pendidikan_terakhir  	= $this->input->post('pendidikan_terakhir');
		$pekerjaan  	= $this->input->post('pekerjaan');
		$status_perkawinan  	= $this->input->post('status_perkawinan');
		$status_penduduk  	= $this->input->post('status_penduduk');

		$data           = array(
			'id_penduduk'			=> $id_penduduk,
			'nik' 									=> $nik,
			'no_kk'									=> $no_kk,
			'nm_penduduk'							=>$nm_penduduk,
			't_lahir'								=> $t_lahir,
			'j_kelamin'								=> $j_kelamin,
			'tgl_lahir'								=> $tgl_lahir,
			'alamat'								=> $alamat,
			'alamat_ktp'							=> $alamat_ktp,
			'desa_kelurahan'						=> $desa_kelurahan,
			'kec'									=> $kec,
			'kab'									=> $kab,
			'provinsi'								=> $provinsi,
			'negara'								=> $negara,
			'rt'									=> $rt,
			'rw'									=> $rw,
			'agama'									=> $agama,
			'pendidikan_terakhir'					=> $pendidikan_terakhir,
			'pekerjaan'								=> $pekerjaan,
			'status_perkawinan'						=> $status_perkawinan,
			'status_penduduk'						=> $status_penduduk	);

		$where = array(
			'id_penduduk' => $id_penduduk
		);

		$this->M_datamaster->update_data($where,$data,'tb_penduduk');
		redirect('admin/Datamaster');
		
	}
	public function hapus($id_penduduk){
		$where = array(
			'id_penduduk' => $id_penduduk
		);

		$this->M_datamaster->hapus_data($where,'tb_penduduk');
		redirect('admin/Datamaster');
	}

	public function kk()
	{
		$this->load->view('admin/view_header');
		$data['tb_kk']	= $this->M_datamaster->tampil_data('tb_kk');
		$this->load->view('admin/view_kk',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah_kk(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_kk');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah_kk(){
		$nik_kkeluarga		= $this->input->post('nik_kkeluarga');
		$no_kk	= $this->input->post('no_kk');
		$alamat_kk		  	= $this->input->post('alamat_kk');
		$desa_kelurahan				= $this->input->post('desa_kelurahan');
		$kec_kk  	= $this->input->post('kec_kk');
		$kab_kk  	= $this->input->post('kab_kk');
		$provinsi_kk  	= $this->input->post('provinsi_kk');
		$negara_kk  	= $this->input->post('negara_kk');
		$rt_kk  	= $this->input->post('rt_kk');
		$rw_kk  	= $this->input->post('rw_kk');
		$kpos_kk  	= $this->input->post('kpos_kk');

		

		$data           = array(
			'nik_kkeluarga' 		=> $nik_kkeluarga,
			'no_kk'		=> $no_kk,
			'alamat_kk'				=> $alamat_kk,
			'desa_kelurahan'				=> $desa_kelurahan,
			'kec_kk'				=> $kec_kk,
			'kab_kk'				=> $kab_kk,
			'provinsi_kk'				=> $provinsi_kk,
			'negara_kk'				=> $negara_kk,
			'rt_kk'				=> $rt_kk,
			'rw_kk'				=> $rw_kk,
			'kpos_kk'				=> $kpos_kk
				
		);

		$this->M_datamaster->input_data($data,'tb_kk');
		redirect('admin/Datamaster/kk');
	}
	public function edit_kk($id_kk){
		$where = array(
			'id_kk' => $id_kk
		);
		$this->load->view('admin/view_header');
		$data['tb_kk'] = $this->M_datamaster->edit_data($where,'tb_kk')->result();
		$this->load->view('admin/view_edit_kk',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_kk(){
		$id_kk			= $this->input->post('id_kk');
		$nik_kkeluarga		= $this->input->post('nik_kkeluarga');
		$no_kk	= $this->input->post('no_kk');
		$alamat_kk		  	= $this->input->post('alamat_kk');
		$desa_kelurahan				= $this->input->post('desa_kelurahan');
		$kec_kk  	= $this->input->post('kec_kk');
		$kab_kk  	= $this->input->post('kab_kk');
		$provinsi_kk  	= $this->input->post('provinsi_kk');
		$negara_kk  	= $this->input->post('negara_kk');
		$rt_kk  	= $this->input->post('rt_kk');
		$rw_kk  	= $this->input->post('rw_kk');
		$kpos_kk  	= $this->input->post('kpos_kk');

		$data           = array(
			'id_kk'			=> $id_kk,
			'nik_kkeluarga' 		=> $nik_kkeluarga,
			'no_kk'		=> $no_kk,
			'alamat_kk'				=> $alamat_kk,
			'desa_kelurahan'				=> $desa_kelurahan,
			'kec_kk'				=> $kec_kk,
			'kab_kk'				=> $kab_kk,
			'provinsi_kk'				=> $provinsi_kk,
			'negara_kk'				=> $negara_kk,
			'rt_kk'				=> $rt_kk,
			'rw_kk'				=> $rw_kk,
			'kpos_kk'				=> $kpos_kk	);

		$where = array(
			'id_kk' => $id_kk
		);

		$this->M_datamaster->update_data($where,$data,'tb_kk');
		redirect('admin/Datamaster/kk');
	}
	public function hapus_kk($id_kk){
		$where = array(
			'id_kk' => $id_kk
		);

		$this->M_datamaster->hapus_data($where,'tb_kk');
		redirect('admin/Datamaster/kk');
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
		$nik_kkeluarga		= $this->input->post('nik_kkeluarga');
		$no_kk	= $this->input->post('no_kk');
		$alamat_kk		  	= $this->input->post('alamat_kk');
		$desa_kelurahan				= $this->input->post('desa_kelurahan');
		$kec_kk  	= $this->input->post('kec_kk');
		$kab_kk  	= $this->input->post('kab_kk');
		$provinsi_kk  	= $this->input->post('provinsi_kk');
		$negara_kk  	= $this->input->post('negara_kk');
		$rt_kk  	= $this->input->post('rt_kk');
		$rw_kk  	= $this->input->post('rw_kk');
		$kpos_kk  	= $this->input->post('kpos_kk');

		

		$data           = array(
			'nik_kkeluarga' 		=> $nik_kkeluarga,
			'no_kk'		=> $no_kk,
			'alamat_kk'				=> $alamat_kk,
			'desa_kelurahan'				=> $desa_kelurahan,
			'kec_kk'				=> $kec_kk,
			'kab_kk'				=> $kab_kk,
			'provinsi_kk'				=> $provinsi_kk,
			'negara_kk'				=> $negara_kk,
			'rt_kk'				=> $rt_kk,
			'rw_kk'				=> $rw_kk,
			'kpos_kk'				=> $kpos_kk
				
		);

		$this->M_datamaster->input_data($data,'tb_kk');
		redirect('admin/Datamaster/detail');
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
		$nik_kkeluarga		= $this->input->post('nik_kkeluarga');
		$no_kk	= $this->input->post('no_kk');
		$alamat_kk		  	= $this->input->post('alamat_kk');
		$desa_kelurahan				= $this->input->post('desa_kelurahan');
		$kec_kk  	= $this->input->post('kec_kk');
		$kab_kk  	= $this->input->post('kab_kk');
		$provinsi_kk  	= $this->input->post('provinsi_kk');
		$negara_kk  	= $this->input->post('negara_kk');
		$rt_kk  	= $this->input->post('rt_kk');
		$rw_kk  	= $this->input->post('rw_kk');
		$kpos_kk  	= $this->input->post('kpos_kk');

		$data           = array(
			'id_kk'			=> $id_kk,
			'nik_kkeluarga' 		=> $nik_kkeluarga,
			'no_kk'		=> $no_kk,
			'alamat_kk'				=> $alamat_kk,
			'desa_kelurahan'				=> $desa_kelurahan,
			'kec_kk'				=> $kec_kk,
			'kab_kk'				=> $kab_kk,
			'provinsi_kk'				=> $provinsi_kk,
			'negara_kk'				=> $negara_kk,
			'rt_kk'				=> $rt_kk,
			'rw_kk'				=> $rw_kk,
			'kpos_kk'				=> $kpos_kk	);

		$where = array(
			'id_kk' => $id_kk
		);

		$this->M_datamaster->update_data($where,$data,'tb_kk');
		redirect('admin/Datamaster/detail');
	}
	public function hapus_detail($id_kk){
		$where = array(
			'id_kk' => $id_kk
		);

		$this->M_datamaster->hapus_data($where,'tb_kk');
		redirect('admin/Datamaster/detail');
	}
	public function detail1()
	{
		$this->load->view('admin/view_header');
		$data['tb_penduduk']	= $this->M_datamaster->tampil_data('tb_penduduk');
		$this->load->view('admin/view_detail1',$data);
		$this->load->view('admin/view_footer');
	}
	public function tambah_detail1(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_detail1');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah_detal1(){
		$nik		= $this->input->post('nik');
		$no_kk	= $this->input->post('no_kk');
		$nm_penduduk		  	= $this->input->post('nm_penduduk');
		$t_lahir	  	= $this->input->post('t_lahir');
		$j_kelamin				= $this->input->post('j_kelamin');
		$tgl_lahir  	= $this->input->post('tgl_lahir');
		$alamat  	= $this->input->post('alamat');
		$alamat_ktp  	= $this->input->post('alamat_ktp');
		$desa_kelurahan  	= $this->input->post('desa_kelurahan');
		$kec  	= $this->input->post('kec');
		$kab  	= $this->input->post('kab');
		$provinsi  	= $this->input->post('provinsi');
		$negara  	= $this->input->post('negara');
		$rt  	= $this->input->post('rt');
		$rw  	= $this->input->post('rw');
		$agama  	= $this->input->post('agama');
		$pendidikan_terakhir  	= $this->input->post('pendidikan_terakhir');
		$pekerjaan  	= $this->input->post('pekerjaan');
		$status_perkawinan  	= $this->input->post('status_perkawinan');
		$status_penduduk  	= $this->input->post('status_penduduk');
		

		$data           = array(
			'nik' 									=> $nik,
			'no_kk'									=> $no_kk,
			'nm_penduduk'							=>$nm_penduduk,
			't_lahir'								=> $t_lahir,
			'j_kelamin'								=> $j_kelamin,
			'tgl_lahir'								=> $tgl_lahir,
			'alamat'								=> $alamat,
			'alamat_ktp'							=> $alamat_ktp,
			'desa_kelurahan'						=> $desa_kelurahan,
			'kec'									=> $kec,
			'kab'									=> $kab,
			'provinsi'								=> $provinsi,
			'negara'								=> $negara,
			'rt'									=> $rt,
			'rw'									=> $rw,
			'agama'									=> $agama,
			'pendidikan_terakhir'					=> $pendidikan_terakhir,
			'pekerjaan'								=> $pekerjaan,
			'status_perkawinan'						=> $status_perkawinan,
			'status_penduduk'						=> $status_penduduk
				
		);

		$this->M_datamaster->input_data($data,'tb_penduduk');
		redirect('admin/Datamaster/detail1');
	}
	public function edit_detail1($id_penduduk){
		$where = array(
			'id_penduduk' => $id_penduduk
		);
		$this->load->view('admin/view_header');
		$data['tb_penduduk'] = $this->M_datamaster->edit_data($where,'tb_penduduk')->result();
		$this->load->view('admin/view_edit_detail1',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_detail1(){
		$id_penduduk			= $this->input->post('id_penduduk');
		$nik		= $this->input->post('nik');
		$no_kk	= $this->input->post('no_kk');
		$nm_penduduk		  	= $this->input->post('nm_penduduk');
		$t_lahir	  	= $this->input->post('t_lahir');
		$j_kelamin				= $this->input->post('j_kelamin');
		$tgl_lahir  	= $this->input->post('tgl_lahir');
		$alamat  	= $this->input->post('alamat');
		$alamat_ktp  	= $this->input->post('alamat_ktp');
		$desa_kelurahan  	= $this->input->post('desa_kelurahan');
		$kec  	= $this->input->post('kec');
		$kab  	= $this->input->post('kab');
		$provinsi  	= $this->input->post('provinsi');
		$negara  	= $this->input->post('negara');
		$rt  	= $this->input->post('rt');
		$rw  	= $this->input->post('rw');
		$agama  	= $this->input->post('agama');
		$pendidikan_terakhir  	= $this->input->post('pendidikan_terakhir');
		$pekerjaan  	= $this->input->post('pekerjaan');
		$status_perkawinan  	= $this->input->post('status_perkawinan');
		$status_penduduk  	= $this->input->post('status_penduduk');

		$data           = array(
			'id_penduduk'			=> $id_penduduk,
			'nik' 									=> $nik,
			'no_kk'									=> $no_kk,
			'nm_penduduk'							=>$nm_penduduk,
			't_lahir'								=> $t_lahir,
			'j_kelamin'								=> $j_kelamin,
			'tgl_lahir'								=> $tgl_lahir,
			'alamat'								=> $alamat,
			'alamat_ktp'							=> $alamat_ktp,
			'desa_kelurahan'						=> $desa_kelurahan,
			'kec'									=> $kec,
			'kab'									=> $kab,
			'provinsi'								=> $provinsi,
			'negara'								=> $negara,
			'rt'									=> $rt,
			'rw'									=> $rw,
			'agama'									=> $agama,
			'pendidikan_terakhir'					=> $pendidikan_terakhir,
			'pekerjaan'								=> $pekerjaan,
			'status_perkawinan'						=> $status_perkawinan,
			'status_penduduk'						=> $status_penduduk	);

		$where = array(
			'id_penduduk' => $id_penduduk
		);

		$this->M_datamaster->update_data($where,$data,'tb_penduduk');
		redirect('admin/Datamaster/detail1');
		
	}
	public function hapus_detail1($id_penduduk){
		$where = array(
			'id_penduduk' => $id_penduduk
		);

		$this->M_datamaster->hapus_data($where,'tb_penduduk');
		redirect('admin/Datamaster/detail1');
	}
	public function supliyer(){
		$this->load->view('admin/view_header');
		$data['tb_supliyer']	= $this->M_datamaster->tampil_data('tb_supliyer');
		$this->load->view('admin/view_supliyer',$data);
		$this->load->view('admin/view_footer');
	}
	
	public function tambah_supliyer(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_supliyer');
		$this->load->view('admin/view_footer');
	}

	public function aksi_tambah_supliyer(){
		$nama_supliyer		= $this->input->post('nama_supliyer');
		$tgl_lahir_supliyer  	= $this->input->post('tgl_lahir_supliyer');
		$j_kelamin				= $this->input->post('j_kelamin');
		date_default_timezone_get('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data           = array(
			'nama_supliyer'			=> $nama_supliyer,
			'tgl_lahir_supliyer'		=> $tgl_lahir_supliyer,
			'j_kelamin'					=> $j_kelamin,
			'date_created	'		=> $date_created	
		);

		$this->M_datamaster->input_data($data,'tb_supliyer');
		redirect('admin/Datamaster/supliyer');
	}
	public function edit_supliyer($id_supliyer){
		$where = array(
			'id_supliyer' => $id_supliyer
		);
		$this->load->view('admin/view_header');
		$data['tb_supliyer'] = $this->M_datamaster->edit_data($where,'tb_supliyer')->result();
		$this->load->view('admin/view_edit_supliyer',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_supliyer(){
		$id_supliyer		= $this->input->post('id_supliyer');
		$nama_supliyer		= $this->input->post('nama_supliyer');
		$tgl_lahir_supliyer  	= $this->input->post('tgl_lahir_supliyer');
		$j_kelamin				= $this->input->post('j_kelamin');
		date_default_timezone_get('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data           = array(
			'id_supliyer'			=> $id_supliyer,
			'nama_supliyer'			=> $nama_supliyer,
			'tgl_lahir_supliyer'		=> $tgl_lahir_supliyer,
			'j_kelamin'					=> $j_kelamin,
			'date_created	'		=> $date_created	);

		$where = array(
			'id_supliyer' => $id_supliyer
		);

		$this->M_datamaster->update_data($where,$data,'tb_supliyer');
		redirect('admin/Datamaster/supliyer');

	}

	public function hapus_supliyer($id_supliyer){
		$where = array(
			'id_supliyer' => $id_supliyer
		);

		$this->M_datamaster->hapus_data($where,'tb_supliyer');
		redirect('admin/Datamaster/supliyer');

	}

	public function departement(){
		$this->load->view('admin/view_header');
		$data['tb_departemen'] = $this->M_datamaster->tampil_data('tb_departemen');
		$this->load->view('admin/view_departement',$data);
		$this->load->view('admin/view_footer');
	}

	public function tambah_departement(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_departement');
		$this->load->view('admin/view_footer');
	}

	public function aksi_tambah_departement(){
		$nama_depa		= $this->input->post('nama_depa');
		$tgl_lahir_depa	= $this->input->post('tgl_lahir_depa');

		$data = array(
			'nama_depa'		=> $nama_depa,
			'tgl_lahir_depa'	=> $tgl_lahir_depa

		);

		$this->M_datamaster->input_data($data,'tb_departemen');
		redirect('admin/Datamaster/departement');
	}
	public function edit_departement($id_depa){
		$where = array(
			'id_depa' => $id_depa
		);
		$this->load->view('admin/view_header');
		$data['tb_departemen'] = $this->M_datamaster->edit_data($where,'tb_departemen')->result();
		$this->load->view('admin/view_edit_departement',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_depa(){
		$id_depa		= $this->input->post('id_depa');
		$nama_depa	     	= $this->input->post('nama_depa');
		$tgl_lahir_depa     	= $this->input->post('tgl_lahir_depa');

		$data = array(
			'id_depa'  => $id_depa,
			'nama_depa'	      => $nama_depa,
			'tgl_lahir_depa'     => $tgl_lahir_depa

		);
		$where = array(
			'id_depa' => $id_depa
		);

		$this->M_datamaster->update_data($where,$data,'tb_departemen');
		redirect('admin/Datamaster/departement');

	}

	public function hapus_departemen($id_depa){
		$where = array(
			'id_depa' => $id_depa
		);

		$this->M_datamaster->hapus_data($where,'tb_departemen');
		redirect('admin/Datamaster/departement');

	}
	public function gedung(){
		$this->load->view('admin/view_header');
		$data['tb_gedung'] = $this->M_datamaster->tampil_data('tb_gedung');
		$this->load->view('admin/view_gedung',$data);
		$this->load->view('admin/view_footer');
	}

	public function tambah_gedung(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_gedung');
		$this->load->view('admin/view_footer');
	}

	public function aksi_tambah_gedung(){
		$nama_gedung	= $this->input->post('nama_gedung');
		$tgl_lahir_gedung	= $this->input->post('tgl_lahir_gedung');
		$lantai			= $this->input->post('lantai');

		$data = array(
			'nama_gedung'		=> $nama_gedung,
			'tgl_lahir_gedung'	    => $tgl_lahir_gedung,
			'lantai'			=> $lantai

		);

		$this->M_datamaster->input_data($data,'tb_gedung');
		redirect('admin/Datamaster/gedung');
	}
	public function edit_gedung($id_gedung){
		$where = array(
			'id_gedung' => $id_gedung
		);
		$this->load->view('admin/view_header');
		$data['tb_gedung'] = $this->M_datamaster->edit_data($where,'tb_gedung')->result();
		$this->load->view('admin/view_edit_gedung',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_gedung(){
		$id_gedung		= $this->input->post('id_gedung');
		$nama_gedung	= $this->input->post('nama_gedung');
		$tgl_lahir_gedung	= $this->input->post('tgl_lahir_gedung');
		$lantai			= $this->input->post('lantai');

		$data = array(
			'id_gedung' 		=> $id_gedung,
			'nama_gedung'		=> $nama_gedung,
			'tgl_lahir_gedung'	    => $tgl_lahir_gedung,
			'lantai'			=> $lantai

		);

		$where = array(
			'id_gedung' => $id_gedung
		);

		$this->M_datamaster->update_data($where,$data,'tb_gedung');
		redirect('admin/Datamaster/gedung');

	}

	public function hapus_gedung($id_gedung){
		$where = array(
			'id_gedung' => $id_gedung
		);

		$this->M_datamaster->hapus_data($where,'tb_gedung');
		redirect('admin/Datamaster/gedung');
	}

	public function ruang_inap(){
		$this->load->view('admin/view_header');
		$data['tb_inap'] = $this->M_datamaster->tampil_data('tb_inap');
		$this->load->view('admin/view_inap',$data);
		$this->load->view('admin/view_footer');
	}

	public function tambah_inap(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_inap');
		$this->load->view('admin/view_footer');
	}

	public function aksi_tambah_inap(){
		$nama_kamar  	= $this->input->post('nama_kamar');
		$kode_kamar		= $this->input->post('kode_kamar');

		$data = array(
			'nama_kamar'		=> $nama_kamar,
			'kode_kamar'	    => $kode_kamar

		);

		$this->M_datamaster->input_data($data,'tb_inap');
		redirect('admin/Datamaster/ruang_inap');
	}
	public function edit_inap($id_inap){
		$where = array(
			'id_inap' => $id_inap
		);
		$this->load->view('admin/view_header');
		$data['tb_inap'] = $this->M_datamaster->edit_data($where,'tb_inap')->result();
		$this->load->view('admin/view_edit_inap',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_inap(){
		$id_inap		= $this->input->post('id_inap');
		$nama_kamar	    = $this->input->post('nama_kamar');
		$kode_kamar	    = $this->input->post('kode_kamar');

		$data = array(
			'id_inap' 		    => $id_inap,
			'nama_kamar'		=> $nama_kamar,
			'kode_kamar'	    => $kode_kamar
		);

		$where = array(
			'id_inap' => $id_inap
		);

		$this->M_datamaster->update_data($where,$data,'tb_inap');
		redirect('admin/Datamaster/ruang_inap');

	}

	public function hapus_inap($id_inap){
		$where = array(
			'id_inap' => $id_inap
		);

		$this->M_datamaster->hapus_data($where,'tb_inap');
		redirect('admin/Datamaster/ruang_inap');

	}

}

