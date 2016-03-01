<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model');
		$data['events'] = $this->model->select_events();
		$data['mentors'] = $this->model->select_mentors();
		$data['blogs'] = $this->model->select_blog();
		$this->load->view('theme/header', $data);
    }
	
	public function index()
	{
		$this->db->limit('6');
		$data['mentors'] = $this->model->select_mentors();
		$this->db->limit('3');
		$data['events'] = $this->model->select_events();
		$this->load->view('pages/main', $data);
		$this->load->view('theme/footer');
	}
	
	public function page($page_url)
	{
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('page_url', $page_url);
        $pages = $this->db->get()->row_array();
        $data['page'] = $pages;

		$this->load->view('page', $data);
		$this->load->view('theme/footer');
	}
	
	public function blog()
	{

		$this->load->view('pages/blog');
		$this->load->view('theme/footer');
	}
	
	public function show_blog($id)
	{
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('blog.id', $id);
        $blog = $this->db->get()->row_array();
        $data['show_blog'] = $blog;

		$this->load->view('show_blog', $data);
		$this->load->view('theme/footer');
	}
	
	public function events()
	{
		$this->load->view('pages/events');
		$this->load->view('theme/footer');
	}
	
	public function show_event($id)
	{
        $this->db->select('events.*, forms.*, labs.*');
        $this->db->from('events');
        $this->db->where('events.id', $id);
        $this->db->join('forms', 'forms.id = events.form_id');
        $this->db->join('labs', 'labs.id = events.lab_id');
        $event = $this->db->get()->row_array();
        $data['show_events'] = $event;
		$data['se_mentors'] = $this->model->mentor_events($id);
		$data['se_news'] = $this->model->news_events($id);

		$this->load->view('show_event', $data);
		$this->load->view('theme/footer');
	}
	
	public function mentors()
	{

		$this->load->view('pages/mentors');
		$this->load->view('theme/footer');
	}

	public function get_event()
	{
		var_dump($_POST);
	}
}

// var_dump($_POST);
// die();
// $result = array();
// foreach ( $_POST[] as $v){
// 	foreach ($_POST[$v] as $k => $val){
// 		$result[$k][] = $val;
// 	}
// }
// json_decode($result);
// $_POST['text']