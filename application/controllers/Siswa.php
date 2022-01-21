<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function index()
	{
		$this->load->model('Siswa_model', 'msiswa');
		$data['students'] = $this->msiswa->get();
		$this->load->view('siswa/index', $data);
	}

	public function create()
	{
		$this->load->model('Siswa_model', 'msiswa');
		
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('no_telp', 'No.Telpon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('siswa/create');
		} else {
			$post = $this->msiswa->store();
			if ($post) {
				return redirect('siswa');
			} else {
				return redirect('siswa/create');
			}
		}
	}
}
