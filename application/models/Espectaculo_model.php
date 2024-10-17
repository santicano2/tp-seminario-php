<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Espectaculo_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_espectaculos()
	{
		$query = $this->db->get('espectaculos');
		return $query->result();
	}

	public function get_espectaculo_by_id($id)
	{
		$query = $this->db->get_where('espectaculos', ['id' => $id]);
		return $query->row();
	}

	public function add_new_espectaculo($espectaculo_data)
	{
		$this->db->insert('espectaculos', $espectaculo_data);
	}

	public function update_espectaculo_by_id($id, $espectaculo_data)
	{
		$this->db->update('espectaculos', $espectaculo_data, ['id' => $id]);
	}

	public function delete_espectaculo_by_id($id)
	{
		$this->db->delete('espectaculos', ['id' => $id]);
	}
}
