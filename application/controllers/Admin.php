<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->lang->load('ge', 'georgian');
        $this->load->model('model');
        $this->load->model('Administrator');
		$data['forms'] = $this->model->select_forms();
		$data['labs'] = $this->model->select_labs();
		$data['mentors'] = $this->model->select_mentors();
		$data['events'] = $this->model->select_events();
		$data['forms'] = $this->model->select_forms();
		$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="errors">', '</div>');
		$this->load->view('admin/theme/header', $data);
    }
	
	public function index()
	{
		$this->load->view('admin/main');
		$this->load->view('admin/theme/footer');
	}
	
	public function home()
	{
		$this->load->view('admin/home');
	}
	
	public function add_event()
	{
		$this->load->view('admin/views/add_event');
		$this->load->view('admin/theme/footer');
	}

	public function check_event()
	{
        $this->form_validation->set_rules('event_name', 'lang:valid_event_name', 'required');
        $this->form_validation->set_rules('event_start_date', 'lang:valid_start_date', 'required');
        $this->form_validation->set_rules('event_end_date', 'lang:valid_end_date', 'required');
        $this->form_validation->set_rules('event_location', 'lang:valid_event_location', 'required');
        $this->form_validation->set_rules('event_overview', 'lang:valid_overview', 'required');
        $this->form_validation->set_rules('forms', 'lang:valid_forms', 'required');
        $this->form_validation->set_rules('labs', 'lang:valid_labs', 'required');
        $this->form_validation->set_rules('agenda', 'lang:valid_agenda', 'required');

		if ( $_SERVER['REQUEST_METHOD'] != 'POST' && !empty($_POST) ){
			redirect('/main/index');
		}
			$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 9000;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
			$this->load->library('upload', $config);
			$image = '';

			 if ( ! $this->upload->do_upload('photo'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $image = $data['upload_data']['file_name'];
                }
		
		$this->Administrator->check_event($image);

	}
	
	public function events()
	{
		$this->load->view('admin/events');
		$this->load->view('admin/theme/footer');
	}
	
	public function add_news()
	{
		$this->load->view('admin/views/add_news');
		$this->load->view('admin/theme/footer');
	}

	public function login()
	{
        $this->form_validation->set_rules('username', 'lang:valid_email', 'required');
        $this->form_validation->set_rules('password', 'lang:valid_password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('');
		}else{
		    $result=$this->Administrator->login(); 

			$data = array(
				'username' => $this->input->post('username'),
				'ip_address' => $_SERVER['REMOTE_ADDR'],
				'is_logged_in' => 1
			);

			$this->session->set_userdata($data);

		    if($result){
		    redirect('/admin/add_event');
		    }else{
		    redirect(base_url('/error'));
	    	}
		}
    }

    public function logout()
    {
    	$this->session->sess_destroy();
    	redirect('admin');
    }
	
	public function add_forms()
	{
		$this->load->view('admin/views/add_forms');
		$this->load->view('admin/theme/footer');
	}
	
	public function forms()
	{
		$this->load->view('admin/forms');
		$this->load->view('admin/theme/footer');
	}
	
	public function mentors()
	{
		$this->load->view('admin/mentors');
		$this->load->view('admin/theme/footer');
	}
	
	public function add_mentors()
	{
		$this->load->view('admin/views/add_mentors');
		$this->load->view('admin/theme/footer');
	}
	
	public function remove_mentors($id = NULL)
	{
		$check_id = $this->db->select('id')->from('mentors')->where('id',$id)->get();

		if ($check_id->num_rows() > 0 ){
			$this->Administrator->remove_mentors($id);
        	$data['message'] = $this->lang->line('mentor_deleted');
    	} else {	
    		$data['message'] = $this->lang->line('page_not_found');
    	}
    		$this->load->view('errors/message', $data);
        	$this->load->view('admin/theme/footer');
	}
	
	public function edit_mentors($id = NULL)
	{
		$check_id = $this->db->select('id')->from('mentors')->where('id',$id)->get();

		if ($check_id->num_rows() > 0 ){
		$this->Administrator->edit_mentors($id);
        $mentor = $this->db->get()->row_array();
        $data['mentors'] = $mentor;

		$this->load->view('admin/views/edit_mentors', $data);
		}else {
	        $data['message'] = $this->lang->line('page_not_found');
			$this->load->view('errors/message', $data);
			$this->load->view('admin/theme/footer');
		}
	}

	public function check_mentors()
	{
        $this->form_validation->set_rules('mentor_name', 'lang:valid_mentor_name', 'required');
        $this->form_validation->set_rules('mentor_info', 'lang:valid_mentor_info', 'required');

			$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 9000;
	        $config['remove_spaces'] = TRUE;


			$this->load->library('upload', $config);
			$image = '';

			 if ( ! $this->upload->do_upload('photo'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $image = $data['upload_data']['file_name'];
                }
		
		$this->Administrator->check_mentor($image);
	}

	public function update_mentors($id = NULL)
	{
		$check_id = $this->db->select('id')->from('mentors')->where('id',$id)->get();

		if ($check_id->num_rows() > 0 ) {

        	$this->form_validation->set_rules('mentor_name', 'lang:valid_mentor_name', 'required');
        	$this->form_validation->set_rules('mentor_info', 'lang:valid_mentor_info', 'required');
 
            if ($this->form_validation->run() === FALSE) {
				$this->Administrator->edit_mentors($id);
        		$mentor = $this->db->get()->row_array();
        		$data['mentors'] = $mentor;
                $this->load->view('admin/views/edit_mentors', $data);
            }   
     else{
        	$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 9000;
			$this->load->library('upload', $config);
			$image = '';

			 if ( ! $this->upload->do_upload('photo'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $image = $data['upload_data']['file_name'];
                }

				$this->Administrator->update_mentor($id, $image);

				$data['message'] = $this->lang->line('information_updated');
				$this->load->view('errors/message', $data);

		}

		} else {
			$data['message'] = $this->lang->line('page_not_found');
			$this->load->view('errors/message', $data);
		}
	}

	public function insert_form()
	{
        $form = $this->input->POST('form');

        $this->db->set('form', $form);
        $this->db->insert('forms');
	}

	public function edit_events($id = NULL)
	{
		$check_id = $this->db->select('id')->from('events')->where('id',$id)->get();

		if ($check_id->num_rows() > 0 ) {
		$this->load->view('admin/views/edit_events');
		} else {
			$data['message'] = $this->lang->line('page_not_found');
			$this->load->view('errors/message', $data);
		}
		$this->load->view('admin/theme/footer');
	}

	public function remove_events($id = NULL)
	{
		$check_id = $this->db->select('id')->from('events')->where('id',$id)->get();

		if ($check_id->num_rows() > 0 ) {
			$this->Administrator->remove_events($id);
        	$data['message'] = $this->lang->line('event_removed');
        	$this->load->view('errors/message', $data);
		} else {
			$data['message'] = $this->lang->line('page_not_found');
			$this->load->view('errors/message', $data);
    	}

        $this->load->view('admin/theme/footer');
	}

	public function remove_forms($id)
	{
		$this->Administrator->remove_forms($id);
        $data['message'] = $this->lang->line('form_removed');

        $this->load->view('errors/message', $data);
        $this->load->view('admin/theme/footer');
	}
}
 