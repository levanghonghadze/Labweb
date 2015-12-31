<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
		$this->load->view('admin/theme/header');
		$this->load->view('admin/main');
		$this->load->view('admin/theme/footer');
	}
	
	public function add_event()
	{
		$this->load->view('admin/theme/header');
		$this->load->view('admin/views/add_event');
		$this->load->view('admin/theme/footer');
	}
	
	public function add_mentor()
	{
		$this->load->view('admin/theme/header');
		$this->load->view('admin/views/add_mentor');
		$this->load->view('admin/theme/footer');
	}
	
	public function add_blog()
	{
		$this->load->view('admin/theme/header');
		$this->load->view('admin/views/add_blog');
		$this->load->view('admin/theme/footer');
	}
}
