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
			'title' => 'Lista de películas',
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
		if ($this->session->userdata('role') != 'admin') {
			show_error('No estas autorizado para realizar esta accion');
		}

		$main_data = [
			'title' => 'Agregar película',
			'innerViewPath' => 'espectaculos/create',
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function store()
	{
		if ($this->session->userdata('role') != 'admin') {
			show_error('No estas autorizado para realizar esta accion');
		}

		$this->form_validation->set_rules('name', 'NOMBRE', 'required');
		$this->form_validation->set_rules('tickets', 'TICKETS', 'required|integer|greater_than_equal_to[10]|less_than_equal_to[80]');
		$this->form_validation->set_rules('price', 'PRECIO', 'required|integer|greater_than_equal_to[6000]|less_than_equal_to[10000]');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('integer', 'El campo %s debe ser un numero entero');
		$this->form_validation->set_message('greater_than_equal_to', 'El campo %s debe ser mayor o igual a %s');
		$this->form_validation->set_message('less_than_equal_to', 'El campo %s debe ser menor o igual a %s');

		$txtimage = 'no_image.png';

		if (empty($_FILES['txtimage']['name'])) {
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('errors', $this->form_validation->error_array());
				redirect('espectaculos/create');
			}

			$espectaculo_data = [
				'name' => $this->input->post('name'),
				'tickets' => $this->input->post('tickets'),
				'price' => $this->input->post('price'),
				'duracion' => $this->input->post('duracion'),
				'descripcion' => $this->input->post('descripcion'),
				'image' => $txtimage
			];


			$this->espectaculo_model->add_new_espectaculo($espectaculo_data);
			redirect('espectaculos');
		} else {
			$config = [
				'upload_path' => './assets/img/uploads/',
				'allowed_types' => 'gif|jpg|png',
			];

			$this->upload->initialize($config);

			if ($this->upload->do_upload('txtimage')) {
				$photo = $this->upload->data('file_name');

				if ($this->form_validation->run() == false) {
					$this->session->set_flashdata('errors', $this->form_validation->error_array());
					redirect('espectaculos/create');
				}

				$espectaculo_data = [
					'name' => $this->input->post('name'),
					'tickets' => $this->input->post('tickets'),
					'price' => $this->input->post('price'),
					'duracion' => $this->input->post('duracion'),
					'descripcion' => $this->input->post('descripcion'),
					'image' => $photo
				];

				$this->espectaculo_model->add_new_espectaculo($espectaculo_data);
				redirect('espectaculos');
			} else {
				echo $this->upload->display_errors();
			}
		}
	}

	public function edit($id)
	{
		if ($this->session->userdata('role') != 'admin') {
			show_error('No estas autorizado para realizar esta accion');
		}

		$espectaulo = $this->espectaculo_model->get_espectaculo_by_id($id);

		if ($espectaulo == null) {
			show_404();
		}

		$main_data = [
			'title' => 'Editar película #' . $id,
			'innerViewPath' => 'espectaculos/edit',
			'espectaculo' => $espectaulo
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function update($id)
	{
		if ($this->session->userdata('role') != 'admin') {
			show_error('No estás autorizado para realizar esta acción');
		}

		$this->form_validation->set_rules('name', 'NOMBRE', 'required');
		$this->form_validation->set_rules('tickets', 'TICKETS', 'required|integer|greater_than_equal_to[1]|less_than_equal_to[80]');
		$this->form_validation->set_rules('price', 'PRECIO', 'required|integer|greater_than_equal_to[6000]|less_than_equal_to[10000]');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('integer', 'El campo %s debe ser un número entero');
		$this->form_validation->set_message('greater_than_equal_to', 'El campo %s debe ser mayor o igual a %s');
		$this->form_validation->set_message('less_than_equal_to', 'El campo %s debe ser menor o igual a %s');

		$espectaculo = $this->espectaculo_model->get_espectaculo_by_id($id);
		$txtimage = $espectaculo->image ?? 'no_image.png';  // Imagen actual o predeterminada

		if (!empty($_FILES['txtimage']['name'])) {
			$config = [
				'upload_path' => './assets/img/uploads/',
				'allowed_types' => 'gif|jpg|png',
			];

			$this->upload->initialize($config);

			if ($this->upload->do_upload('txtimage')) {
				$txtimage = $this->upload->data('file_name');  // Nueva imagen subida
			} else {
				echo $this->upload->display_errors();
				return;
			}
		}

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('errors', $this->form_validation->error_array());
			redirect('espectaculos/edit/' . $id);
		}

		$espectaculo_data = [
			'name' => $this->input->post('name'),
			'tickets' => $this->input->post('tickets'),
			'price' => $this->input->post('price'),
			'duracion' => $this->input->post('duracion'),
			'descripcion' => $this->input->post('descripcion'),
			'image' => $txtimage
		];


		$this->espectaculo_model->update_espectaculo_by_id($id, $espectaculo_data);
		redirect('espectaculos');
	}

	public function delete($id)
	{
		if ($this->session->userdata('role') != 'admin') {
			show_error('No estas autorizado para realizar esta accion');
		}

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

			$this->session->set_flashdata('success', 'Compra realizada exitosamente, redirigiendo ...');

			// Registrar venta
			$nombre_comprador = $this->session->userdata('email');
			$pelicula = $espectaculo->name;
			$cantidad = $this->input->post('tickets');
			$precio_total = $cantidad * $espectaculo->price;
			$fecha = $this->input->post('fecha');
			$asiento = $this->input->post('asiento');
			$pago = $this->input->post('pago');

			$this->load->model('venta_model');
			$venta_data = [
				'nombre_comprador' => $nombre_comprador,
				'pelicula' => $pelicula,
				'cantidad_tickets' => $cantidad,
				'precio_total' => $precio_total,
				'fecha_show' => $fecha,
				'asiento' => $asiento,
				'pago' => $pago
			];

			$this->venta_model->add_venta($venta_data);

			redirect('espectaculos/show/' . $id);
		} else {
			$this->session->set_flashdata('error', 'No hay suficientes tickets disponibles');
			redirect('espectaculos/show/' . $id);
		}
	}

	public function confirmacion()
	{
		$main_data = [
			'title' => 'Confirmación de compra',
			'innerViewPath' => 'espectaculos/confirmacion',
			'compraData' => $this->espectaculo_model->obtener_ultima_compra($this->session->userdata('email'))
		];

		$this->load->view('layouts/main', $main_data);
	}
}
