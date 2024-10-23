<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('espectaculo_model');
	}

	public function index()
	{
		/*
		if (!$this->session->userdata('logged_in')) {
			redirect('auth/login_form');
		}
		*/

		$main_data = [
			'title' => 'Sobre nosotros',
			'innerViewPath' => 'info',
			'espectaculos' => $this->espectaculo_model->get_all_espectaculos()
		];

		$this->load->view('layouts/main', $main_data);
	}
}
