<?php 
class Pages extends CI_Controller
{
	public function view($page = 'welcome')
	{
		$data = [
			'title' => ucwords($page), 
		];

		$this->load->view('templates/header');
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer');
	}
}
