<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Model {

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

    public function remove_mentors($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mentors');
    }

    public function edit_mentors($id)
    {
        $this->db->select('*');
        $this->db->from('mentors');
        $this->db->where('id', $id);
    }

    public function check_event($image)
    {

        if ($this->form_validation->run() === FALSE) {
            $data['forms'] = $this->model->select_forms();
            $data['labs'] = $this->model->select_labs();
            $this->load->view('admin/views/add_event', $data);
        }else{
            $event_name = $this->input->POST('event_name');
            $event_start_date = $this->input->POST('event_start_date');
            $event_end_date = $this->input->POST('event_end_date');
            $event_location = $this->input->POST('event_location');
            $event_overview = $this->input->POST('event_overview');
            $forms = $this->input->POST('forms');
            $labs = $this->input->POST('labs');
            $agenda = $this->input->POST('agenda');

            $this->db->set('form_id', $forms);
            $this->db->set('lab_id', $labs);
            $this->db->set('agenda', $agenda);
            $this->db->set('event_name', $event_name);
            $this->db->set('event_start_date', $event_start_date);
            $this->db->set('event_end_date', $event_end_date);
            $this->db->set('location', $event_location);
            $this->db->set('overview', $event_overview);
            $this->db->set('photo', $image);
            $this->db->insert('events');


            $data['events'] = $this->model->select_events();
            $data['message'] = '<div class="updated"><i class="fa fa-check"></i> მენტორი წარმატებით დაემატა.</div>';
            $this->load->view('admin/events', $data);
            $this->load->view('admin/theme/footer');

        }
    }

    public function check_mentor($image)
    {

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/views/add_mentors');
        }else{
            $mentor_name = $this->input->POST('mentor_name');
            $mentor_info = $this->input->POST('mentor_info');

            $this->db->set('mentor_name', $mentor_name);
            $this->db->set('info', $mentor_info);
            $this->db->set('photo', $image);
            $this->db->insert('mentors');
        }
        if ($this->form_validation->run()) {
            $this->load->model('model');
            $data['mentors'] = $this->model->select_mentors();
            $data['message'] = '<div class="updated"><i class="fa fa-check"></i> მენტორი წარმატებით დაემატა.</div>';

            $this->load->view('admin/mentors', $data);
            $this->load->view('admin/theme/footer');
        }
    }

    public function update_mentor($image)
    {
        
    }

    public function remove_events($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('events');
    }

    public function remove_forms($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('forms');
    }


} 