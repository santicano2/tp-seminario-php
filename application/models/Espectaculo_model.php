<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Espectaculo_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_all_espectaculos() {
		$query = $this->db->get('espectaculos');
		return $query->result();
	}

	public function get_espectaculo_by_id($id) {
		$query = $this->db->get_where('espectaculos', ['id' => $id]);
		return $query->row();
	}
}