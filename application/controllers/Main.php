<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		$this->load->view('theme/header');
		$this->load->view('pages/main');
	}
	
	public function about()
	{
		$this->load->view('theme/header');
		$this->load->view('pages/about');
	}
	
	public function blog()
	{
		$this->load->view('theme/header');
		$this->load->view('pages/blog');
	}
	
	public function events()
	{
		$this->load->model('model');
		$this->model->select_events();

		$this->load->view('pages/events');
	}
	
	public function show_event($id)
	{
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('id', $id);
        $event = $this->db->get()->row_array();
        
        $data['events'] = $event;

		$this->load->view('theme/header');
		$this->load->view('show_event', $data);
	}
	
	public function mentors()
	{
		$this->load->model('model');
		$this->model->select_mentors();

		$this->load->view('pages/mentors');
	}
}
