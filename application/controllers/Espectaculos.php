<?php defined('BASEPATH') or exit('No direct script access allowed');

class Espectaculos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('espectaculo_model');
	}

	public function index()
	{

		$main_data = [
			'title' => 'Lista de espectáculos',
			'innerViewPath' => 'espectaculos/index',
			'espectaculos' => $this->espectaculo_model->get_all_espectaculos()
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function show($id)
	{
		$espectaulo = $this->espectaculo_model->get_espectaculo_by_id($id);

		if ($espectaulo == null) {
			show_404();
		}

		$main_data = [
			'title' => $espectaulo->name,
			'innerViewPath' => 'espectaculos/show',
			'espectaculo' => $espectaulo
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function create()
	{
		$main_data = [
			'title' => 'Agregar espectáculo',
			'innerViewPath' => 'espectaculos/create',
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function store()
	{
		$espectaculo_data = [
			'name' => $this->input->post('name'),
			'tickets' => $this->input->post('tickets'),
			'price' => $this->input->post('price')
		];

		$this->espectaculo_model->add_new_espectaculo($espectaculo_data);
		redirect('espectaculos');
	}

	public function edit($id)
	{
		$espectaulo = $this->espectaculo_model->get_espectaculo_by_id($id);

		if ($espectaulo == null) {
			show_404();
		}

		$main_data = [
			'title' => 'Editar espectáculo #' . $id,
			'innerViewPath' => 'espectaculos/edit',
			'espectaculo' => $espectaulo
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function update($id)
	{
		$espectaculo_data = [
			'name' => $this->input->post('name'),
			'tickets' => $this->input->post('tickets'),
			'price' => $this->input->post('price')
		];

		$this->espectaculo_model->update_espectaculo_by_id($id, $espectaculo_data);
		redirect('espectaculos');
	}

	public function delete($id)
	{
		$this->espectaculo_model->delete_espectaculo_by_id($id);
		redirect('espectaculos');
	}

	public function comprar($id)
	{
		$espectaculo = $this->espectaculo_model->get_espectaculo_by_id($id);

		$cantidad = $this->input->post('tickets');

		if ($espectaculo->tickets >= $cantidad) {
			$nuevos_tickets = $espectaculo->tickets - $cantidad;

			$espectaculo_data = [
				'tickets' => $nuevos_tickets
			];

			$this->espectaculo_model->update_espectaculo_by_id($id, $espectaculo_data);

			$this->session->set_flashdata('success', 'Compra realizada exitosamente');
			redirect('espectaculos');
		} else {
			$this->session->set_flashdata('error', 'No hay suficientes tickets disponibles');
			redirect('espectaculos/show/' . $id);
		}
	}
}
