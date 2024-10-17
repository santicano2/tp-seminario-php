<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Espectaculos extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('espectaculo_model');
	}

	public function index() {

		$innerViewData = [
			'espectaculos' => null //$this->espectaculo_model->get_all_espectaculos()
		];

		$mainData = [
			'title' => 'Lista de espectáculos',
			'innerViewPath' => 'espectaculos/index',
			'innerViewData' => $innerViewData
		];

		$this->load->view('layouts/main', $mainData);
	}

	public function show($id) {
		echo "Ruta espectaculos/show/$id";
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
