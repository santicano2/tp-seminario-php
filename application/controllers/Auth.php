<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function register_form()
	{
		$main_data = [
			'title' => 'Lista de espectáculos',
			'innerViewPath' => 'auth/register_form',
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function register()
	{
		$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
		$this->form_validation->set_rules('password', 'CONTRASEÑA', 'required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('confirm-password', 'CONFIRMAR CONTRASEÑA', 'required|matches[password]');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('min_length', 'El campo %s debe tener al menos %s caracteres');
		$this->form_validation->set_message('max_length', 'El campo %s debe tener menos de %s caracteres');
		$this->form_validation->set_message('matches', 'Las contraseñas no coinciden');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('errors', $this->form_validation->error_array());
			redirect('auth/register_form');
		}

		$user_data = [
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role' => 'customer',
		];

		$this->user_model->add_new_user($user_data);

		$this->session->set_flashdata('success', 'Se ha registrado exitosamente');
		redirect('auth/register_form');
	}
}
