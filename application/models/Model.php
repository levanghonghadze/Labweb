<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function select_events()
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $event = array();
            foreach ($query->result_array() as $row) {
                $event[] = $row;
            }
            
            $data['events'] = $event;
            $this->load->view('theme/header', $data);
        }
    }

    public function select_mentors()
    {
        $this->db->select('*');
        $this->db->from('mentors');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $mentor = array();
            foreach ($query->result_array() as $row) {
                $mentor[] = $row;
            }
            
            $data['mentors'] = $mentor;
            $this->load->view('theme/header', $data);
        }
    }
}