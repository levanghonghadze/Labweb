<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Model');
		$this->load->library('form_validation');
		$this->load->view('admin/theme/header');
    }
	
	public function index()
	{
		$this->load->view('admin/main');
		$this->load->view('admin/theme/footer');
	}
	
	public function add_event()
	{

		$this->load->view('admin/views/add_event');
		$this->load->view('admin/theme/footer');
	}

	public function check_event()
	{
		$this->form_validation->set_error_delimiters('<div class="errors">', '</div>');
		$this->form_validation->set_rules('event_name', 'ივენთის სახელის', 'required');
		$this->form_validation->set_rules('event_start_date', 'დაწყების თარიღის', 'required');
		$this->form_validation->set_rules('event_end_date', 'დასრულების თარიღის', 'required');
		$this->form_validation->set_rules('event_location', 'ლოკაციის', 'required');
		$this->form_validation->set_rules('event_overview', 'ივენთის შესახებ', 'required');


		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/views/add_event');
		}else{
			echo 'event created';
		}
	}
	
	public function add_mentor()
	{
		$this->load->view('admin/views/add_mentor');
		$this->load->view('admin/theme/footer');
	}
	
	public function add_blog()
	{
		$this->load->view('admin/views/add_blog');
		$this->load->view('admin/theme/footer');
	}

	public function login()
	{
	    $result=$this->Model->login();    
	    if($result){
	    redirect('/admin/add_event');
	    }else{
	    redirect(base_url('/login'));
	    }
    }
}
 