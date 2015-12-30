<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller
{
    public function index()
    {
        $this->load->view('theme/headers');
        
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $news = array();
            foreach ($query->result_array() as $row) {
                $news[] = $row;
            }
            
            $data['blogs'] = $news;
            $this->load->view('blog', $data);
        } else {
            echo 'news not fount';
        }
        
        
        $this->load->view('theme/footer');
    }
    public function show($id)
    {
        $this->load->view('theme/headers');
        
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id', $id);
        $news = $this->db->get()->row_array();
        
        $data['view_blog'] = $news;
        $this->load->view('view_blog', $data);
        
        $this->load->view('theme/footer');
    }
    
}
