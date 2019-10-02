<?php 
class Users extends CI_Controller
{
	public function signup()
	{
		$data = [
			'title' => 'Sign Up',
		];

		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[6]', ['min_length'=>'Name must have at least 6 characters.']);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', ['is_unique'=>'Email address already exists.']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('picture', 'Profile Picture', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/signup', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('users/signup', $data);
			$this->load->view('templates/footer');
		}
	}

	public function signin()
	{
		$data = [
			'title' => 'Sign In',
		];

		$this->load->view('templates/header');
		$this->load->view('users/signin', $data);
		$this->load->view('templates/footer');
	}
}
