<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datasertifikat extends CI_Controller {
 
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
		$data['tb_sertifikat']	= $this->M_datamaster->tampil_data('tb_sertifikat');
		$this->load->view('admin/view_sertifikat',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_sertifikat');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah(){
		$nm_pemilik		= $this->input->post('nm_pemilik');
		$desa_kelurahan	= $this->input->post('desa_kelurahan');
		
		

		

		$data           = array(
			'nm_pemilik' 		=> $nm_pemilik,
			'desa_kelurahan'		=> $desa_kelurahan
			
			
				
		);

		$this->M_datamaster->input_data($data,'tb_sertifikat');
		redirect('admin/Datasertifikat/');
	}
	public function edit($id_sertifikat){
		$where = array(
			'id_sertifikat' => $id_sertifikat
		);
		$this->load->view('admin/view_header');
		$data['tb_sertifikat'] = $this->M_datamaster->edit_data($where,'tb_sertifikat')->result();
		$this->load->view('admin/view_edit_sertifikat',$data);
		$this->load->view('admin/view_footer');
	}
	public function update(){
		$id_sertifikat			= $this->input->post('id_sertifikat');
		$nm_pemilik		= $this->input->post('nm_pemilik');
		$desa_kelurahan	= $this->input->post('desa_kelurahan');
		
		

		$data           = array(
			'id_sertifikat'			=> $id_sertifikat,
			'nm_pemilik' 		=> $nm_pemilik,
			'desa_kelurahan'		=> $desa_kelurahan
			
				);

		$where = array(
			'id_sertifikat' => $id_sertifikat
		);

		$this->M_datamaster->update_data($where,$data,'tb_sertifikat');
		redirect('admin/Datasertifikat/');
	}
	public function hapus($id_sertifikat){
		$where = array(
			'id_sertifikat' => $id_sertifikat
		);

		$this->M_datamaster->hapus_data($where,'tb_sertifikat');
		redirect('admin/Datasertifikat/');
	}
	public function detail_sertifikat()
	{
		$this->load->view('admin/view_header');
		$data['tb_sertifikat']	= $this->M_datamaster->tampil_data('tb_sertifikat');
		$this->load->view('admin/view_detail_sertifikat',$data);
		$this->load->view('admin/view_footer');

	}
	public function tambah_detail_sertifikat(){
		$this->load->view('admin/view_header');
		$this->load->view('admin/view_tambah_detail_sertifikat');
		$this->load->view('admin/view_footer');
	}
	public function aksi_tambah_detail_sertifikat(){
		$nm_pemilik		= $this->input->post('nm_pemilik');
		$desa_kelurahan	= $this->input->post('desa_kelurahan');
		
		

		

		$data           = array(
			'nm_pemilik' 		=> $nm_pemilik,
			'desa_kelurahan'		=> $desa_kelurahan
			
			
				
		);

		$this->M_datamaster->input_data($data,'tb_sertifikat');
		redirect('admin/Datasertifikat/detail_sertifikat');
	}
	public function edit_detail_sertifikat($id_sertifikat){
		$where = array(
			'id_sertifikat' => $id_sertifikat
		);
		$this->load->view('admin/view_header');
		$data['tb_sertifikat'] = $this->M_datamaster->edit_data($where,'tb_sertifikat')->result();
		$this->load->view('admin/view_edit_detail_sertifikat',$data);
		$this->load->view('admin/view_footer');
	}
	public function update_detail_sertifikat(){
		$id_sertifikat			= $this->input->post('id_sertifikat');
		$nm_pemilik		= $this->input->post('nm_pemilik');
		$desa_kelurahan	= $this->input->post('desa_kelurahan');
		
		

		$data           = array(
			'id_sertifikat'			=> $id_sertifikat,
			'nm_pemilik' 		=> $nm_pemilik,
			'desa_kelurahan'		=> $desa_kelurahan
			
				);

		$where = array(
			'id_sertifikat' => $id_sertifikat
		);

		$this->M_datamaster->update_data($where,$data,'tb_sertifikat');
		redirect('admin/Datasertifikat/detail_sertifikat');
	}
	public function hapus_detail_sertifikat($id_sertifikat){
		$where = array(
			'id_sertifikat' => $id_sertifikat
		);

		$this->M_datamaster->hapus_data($where,'tb_sertifikat');
		redirect('admin/Datasertifikat/detail_sertifikat');
	}
	

}

