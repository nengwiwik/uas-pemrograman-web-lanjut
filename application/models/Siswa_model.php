<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	protected $table = "siswa";

	public function get()
	{
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function store()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'tmpt_lahir' => $this->input->post('tmpt_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat'),
		];

		return $this->db->insert($this->table, $data);
	}
}
