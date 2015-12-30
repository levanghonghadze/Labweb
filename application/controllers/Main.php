<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('theme/headers');
		$this->load->view('main');
		$this->load->view('theme/footer');
	}
    
    public function page($page_url)
    {
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('page_url', $page_url);
        $pages = $this->db->get()->row_array();

        $data['pages'] = $pages;
        $this->load->view('theme/headers', $data);
        $this->load->view('pages');
        $this->load->view('theme/footer');
    }
    
    public function team()
    {
        $this->load->view('theme/headers');
        $this->load->view('team');
        $this->load->view('theme/footer');
    }
}
