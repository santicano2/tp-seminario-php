<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ventas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('venta_model');
	}

	public function index()
	{
		$main_data = [
			'title' => 'Lista de ventas',
			'innerViewPath' => 'ventas/index',
			'ventas' => $this->venta_model->get_all_ventas()
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function registrar_venta($nombre_comprador, $pelicula, $cantidad_tickets, $precio_total, $fecha)
	{
		$venta_data = [
			'nombre_comprador' => $nombre_comprador,
			'pelicula' => $pelicula,
			'cantidad_tickets' => $cantidad_tickets,
			'precio_total' => $precio_total,
			'fecha_show' => $fecha
		];

		$this->venta_model->add_venta($venta_data);
	}
}
