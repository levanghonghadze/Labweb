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
    
    public function get_event()
    {
        $val1 = $this->input->POST('val1');
        $val2 = $this->input->POST('val2');
        $val3 = $this->input->POST('val3');
        $val4 = $this->input->POST('val4');
        $event_id = $this->input->POST('event_id');
        
        $this->db->set('val1', $val1);
        $this->db->set('val2', $val2);
        $this->db->set('val3', $val3);
        $this->db->set('val4', $val4);
        $this->db->set('event_id', $event_id);
        $this->db->insert('former');
    }
} 