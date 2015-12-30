<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
    {
        $this->load->view('admin/theme/header');
        $this->load->view('admin/admin');
        $this->load->view('admin/theme/footer');
    }

    public function pages()
    {
        $this->load->view('admin/theme/header');
        
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $news = array();
            foreach ($query->result_array() as $row) {
                $news[] = $row;
            }
            
            $data['pages'] = $news;
            $this->load->view('admin/pages', $data);
        } else {
            echo 'pages not fount';
        }

        $this->load->view('admin/theme/footer');
    }

    public function blogs()
    {
        $this->load->view('admin/theme/header');
        
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $blog = array();
            foreach ($query->result_array() as $row) {
                $blog[] = $row;
            }
            
            $data['blogs'] = $blog;
            $this->load->view('admin/blogs', $data);
        } else {
            echo '<div class="admin_info"><div class="red">BLOGS NOT FOUND <a href="../admin/add_blogs">ADD NEW BLOG</a> !</div></div>';
        }

        $this->load->view('admin/theme/footer');
    }

    public function add_blogs()
    {
        $this->load->view('admin/theme/header');
        $this->load->view('admin/add_blogs');
        $this->load->view('admin/theme/footer');
    }

    public function add_pages()
    {
        $this->load->view('admin/theme/header');
        $this->load->view('admin/add_pages');
        $this->load->view('admin/theme/footer');
    }

    public function insert_page()
    {
        $this->load->model('Model');
        $data['Model'] = $this->Model->insert_page();
        $this->load->view('admin/theme/header');
        echo '<div class="admin_info"><div class="green">PAGE CREATED!</div></div>';
        $this->load->view('admin/theme/footer');
    }

    public function insert_blog()
    {
        $this->load->model('Model');
        $data['Model'] = $this->Model->insert_blog();
        $this->load->view('admin/theme/header');
        echo '<div class="admin_info"><div class="green">BLOG ADDED!</div></div>';
        $this->load->view('admin/theme/footer');
    }

    public function edit_blog($id)
    {
        
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id', $id);
        $news = $this->db->get()->row_array();
        
        $data['edit_blog'] = $news;

        $this->load->view('admin/theme/header', $data);
        $this->load->view('admin/edit_blogs');
        $this->load->view('admin/theme/footer');
    }

    public function update_blog($id)
    {
        $title = $this->input->POST('title');
        $stext = $this->input->POST('stext');
        $ftext = $this->input->POST('ftext');
        
        $this->db->set('title', $title);
        $this->db->set('stext', $stext);
        $this->db->set('ftext', $ftext);
        $this->db->where('id', $id);
        $this->db->update('news');

        $this->load->view('admin/theme/header');
        echo '<div class="admin_info"><div class="green">BLOG UPDATED!</div></div>';
        $this->load->view('admin/theme/footer');
    }

    public function remove_blog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news'); 

        $this->load->view('admin/theme/header');
        echo '<div class="admin_info"><div class="green">THIS BLOG REMOVED!</div></div>';
        $this->load->view('admin/theme/footer');
    }
    
}
