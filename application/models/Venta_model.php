<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Venta_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_ventas()
	{
		return $this->db->get('ventas')->result();
	}

	public function add_venta($venta_data)
	{
		return $this->db->insert('ventas', $venta_data);
	}

	public function get_ultimas_compras($email)
	{
		$this->db->where('nombre_comprador', $email);
		$this->db->order_by('id', 'DESC');
		$this->db->limit(3);
		return $this->db->get('ventas')->result();
	}
}
