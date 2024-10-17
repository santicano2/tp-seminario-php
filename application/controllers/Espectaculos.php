<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Espectaculos extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('espectaculo_model');
	}

	public function index() {

		$mainData = [
			'title' => 'Lista de espectáculos',
			'innerViewPath' => 'espectaculos/index',
			'espectaculos' => $this->espectaculo_model->get_all_espectaculos()
		];

		$this->load->view('layouts/main', $mainData);
	}

	public function show($id) {
		$espectaulo = $this->espectaculo_model->get_espectaculo_by_id($id);

		if ($espectaulo == null) {
			show_404();
		}

		$mainData = [
			'title' => 'Espectáculo #' . $id,
			'innerViewPath' => 'espectaculos/show',
			'espectaculo' => $espectaulo
		];

		$this->load->view('layouts/main', $mainData);
	}

	public function create() {
		echo "Ruta espectaculos/create";
	}

	public function store() {

	}

	public function edit($id) {
		echo "Ruta espectaculos/edit/$id";
	}

	public function update($id, $newData) {

	}

	public function delete($id) {

	}
}