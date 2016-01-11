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

    public function login(){
    $this->db->where('username',$this->input->post('username',TRUE));
                $this->db->where('password', sha1($this->input->post('password',TRUE)));
                $countuser = $this->db->count_all_results('users');
                if($countuser > 0 ){
                        $rows=$this->db->get('users')->row_array();
                        return TRUE;
                }
                return FALSE;
    }

    public function remove($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mentors');
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('mentors');
        $this->db->where('id', $id);
    }

    public function check_event($image)
    {

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/views/add_event');
        }else{
            $event_name = $this->input->POST('event_name');
            $event_start_date = $this->input->POST('event_start_date');
            $event_end_date = $this->input->POST('event_end_date');
            $event_location = $this->input->POST('event_location');
            $event_overview = $this->input->POST('event_overview');

            $this->db->set('name', $event_name);
            $this->db->set('event_start_date', $event_start_date);
            $this->db->set('event_end_date', $event_end_date);
            $this->db->set('location', $event_location);
            $this->db->set('overview', $event_overview);
            $this->db->set('photo', $image);
            $this->db->insert('events');
        }
    }

    public function check_mentor($image)
    {

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/views/add_mentors');
        }else{
            $mentor_name = $this->input->POST('mentor_name');
            $mentor_info = $this->input->POST('mentor_info');

            $this->db->set('mentors_name', $mentor_name);
            $this->db->set('info', $mentor_info);
            $this->db->set('photo', $image);
            $this->db->insert('mentors');
        }
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