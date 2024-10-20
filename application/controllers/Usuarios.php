<?php defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{

		if ($this->session->userdata('role') != 'admin') {
			redirect('home');
		}

		$main_data = [
			'title' => 'Lista de usuarios',
			'innerViewPath' => 'usuarios/index',
			'usuarios' => $this->user_model->get_all_usuarios()
		];

		$this->load->view('layouts/main', $main_data);
	}
}
