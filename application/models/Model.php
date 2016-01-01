<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function select_events()
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function select_mentors()
    {
        $this->db->select('*');
        $this->db->from('mentors');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function select_blog()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function login(){
    $this->db->where('username',$this->input->post('username',TRUE));
                $this->db->where('password',($this->input->post('password',TRUE)));
                $countuser = $this->db->count_all_results('users');
                if($countuser > 0 ){
                        $rows=$this->db->get('users')->row_array();
                        return TRUE;
                }
                return FALSE;
    }
} 