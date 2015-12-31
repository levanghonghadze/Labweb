<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		$this->load->view('theme/header');
		$this->load->view('pages/main');
		$this->load->view('theme/footer');
	}
	
	public function about()
	{
		$this->load->view('theme/header');
		$this->load->view('pages/about');
		$this->load->view('theme/footer');
	}
	
	public function page($page_url)
	{
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('page_url', $page_url);
        $pages = $this->db->get()->row_array();
        $data['page'] = $pages;

		$this->load->view('theme/header');
		$this->load->view('page', $data);
		$this->load->view('theme/footer');
	}
	
	public function blog()
	{
		$this->load->model('model');
		$data['blogs'] = $this->model->select_blog();

		$this->load->view('theme/header');
		$this->load->view('pages/blog', $data);
		$this->load->view('theme/footer');
	}
	
	public function events()
	{
		$this->load->model('model');
		$data['events'] = $this->model->select_events();

		$this->load->view('theme/header');
		$this->load->view('pages/events', $data);
		$this->load->view('theme/footer');
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
		$this->load->view('theme/footer');
	}
	
	public function mentors()
	{
		$this->load->model('model');
		$data['mentors'] = $this->model->select_mentors();

		$this->load->view('theme/header');
		$this->load->view('pages/mentors', $data);
		$this->load->view('theme/footer');
	}
}
