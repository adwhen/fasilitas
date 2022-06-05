<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = array(
			'data' => $this->db->get('tb_fasilitas')->result_array()
		);
		$this->load->view('map', $data);
	}
	public function form()
	{
		$this->load->view('form');
	}
	public function form_proses()
	{
		$this->load->library('upload');

		$config['upload_path'] = 'assets/img';
		$config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']     = '';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';

		$this->load->library('upload', $config);


		$this->upload->initialize($config);

		if (!$this->upload->do_upload('file')) {
			echo $data['error'] = $this->upload->display_errors();
		} else {
			$uploaded_data = $this->upload->data();
			echo "suceess";
		}
		$data = array(
			'name_facility' => $this->input->post('name_fasilitas'),
			'locate' => $this->input->post('lokasi'),
			'note' => $this->input->post('ket'),
			'lat' => $this->input->post('lat'),
			'lng' => $this->input->post('lng'),
			'file' => $this->upload->data('file_name')
		);
		$this->db->insert('tb_fasilitas', $data);
		redirect('welcome/form');
	}
}
