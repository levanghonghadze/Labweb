<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function insert_page(){

		$page_title = $this->input->POST('page_title');
		$page_url = $this->input->POST('page_url');
		$page_text = $this->input->POST('page_text');
		$image = $this->input->POST('image');

		$this->db->set('page_title', $page_title);
		$this->db->set('page_url', $page_url);
		$this->db->set('page_text', $page_text);
		$this->db->insert('pages');
	}

	public function insert_blog(){

		$title = $this->input->POST('title');
		$stext = $this->input->POST('stext');
		$ftext = $this->input->POST('ftext');

		$this->db->set('title', $title);
		$this->db->set('stext', $stext);
		$this->db->set('ftext', $ftext);
		$this->db->insert('news');
	}

}