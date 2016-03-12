<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function select_events()
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function select_mentors()
    {
        $this->db->select('*');
        $this->db->from('mentors');
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function select_blog()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function select_labs()
    {
        $this->db->select('*');
        $this->db->from('labs');
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function select_forms()
    {
        $this->db->select('forms.*');
        $this->db->from('forms');
        $this->db->order_by("forms.id", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function mentor_events($id){
         $this->db->select('events.*,mentors.*,event_mentors.*');
         $this->db->join('events', 'events.id = event_mentors.event_id');
         $this->db->join('mentors', 'mentors.id = event_mentors.mentor_id');
         $this->db->where('event_mentors.event_id', $id);
         $query = $this->db->get('event_mentors');
         return $query->result_array();
    }

    public function news_events($id){
         $this->db->select('events.*, blog.*');
         $this->db->join('events', 'events.id = blog.event_id');
         $this->db->where('blog.event_id', $id);
         $query = $this->db->get('blog');
         return $query->result_array();
    }

    public function view_page($page_url)
    {  
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('page_url', $page_url);
        $pages = $this->db->get()->row_array();
        return $pages;
    }
    
    public function view_news($id)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('blog.id', $id);
        $news = $this->db->get()->row_array();
        return $news;
    }

    public function view_event($id)
    { 
        $this->db->select('events.*, forms.*, labs.*');
        $this->db->from('events');
        $this->db->where('events.id', $id);
        $this->db->join('forms', 'forms.id = events.form_id');
        $this->db->join('labs', 'labs.id = events.lab_id');
        $event = $this->db->get()->row_array();
        return $event;
    }
} 