<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
	}

	public function register_form()
	{
		$main_data = [
			'title' => 'Registrar usuario',
			'innerViewPath' => 'auth/register_form',
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function register()
	{
		$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
		$this->form_validation->set_rules('name', 'NOMBRE', 'required|min_length[4]|max_length[32]');
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
			'name' => $this->input->post('name'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role' => 'customer',
		];

		$this->user_model->add_new_user($user_data);

		$this->session->set_flashdata('success', 'Se ha registrado exitosamente');
		redirect('auth/register_form');
	}

	public function login_form()
	{
		$main_data = [
			'title' => 'Iniciar sesión',
			'innerViewPath' => 'auth/login_form',
		];

		$this->load->view('layouts/main', $main_data);
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
		$this->form_validation->set_rules('password', 'CONTRASEÑA', 'required|min_length[4]|max_length[32]');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('min_length', 'El campo %s debe tener al menos %s caracteres');
		$this->form_validation->set_message('max_length', 'El campo %s debe tener menos de %s caracteres');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('errors', $this->form_validation->error_array());
			redirect('auth/login_form');
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->user_model->get_user_by_email($email);

		if ($user && password_verify($password, $user->password)) {
			$this->session->set_userdata('logged_in', $user->id);
			$this->session->set_userdata('email', $user->email);
			$this->session->set_userdata('name', $user->name);
			redirect('espectaculos');
		} else {
			$this->session->set_flashdata('errors', ['Credenciales incorrectas']);
			redirect('auth/login_form');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('email');
		redirect('auth/login_form');
	}
}
