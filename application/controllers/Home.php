<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('auth/login_form');
		}

		$main_data = [
			'title' => 'Inicio',
			'innerViewPath' => 'home',
		];

		$this->load->view('layouts/main', $main_data);
	}
}
