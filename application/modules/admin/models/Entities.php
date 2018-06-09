<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entities extends CI_Model
{

	public function insert()
	{
		$title = $this->input->post("title");
		$imgurl = $this->input->post("imgurl");
		$description = $this->input->post("description");
		$url = $this->input->post("url");
		$category = $this->input->post("category");
		$source = $this->input->post("source");

		$this->db->set('imgurl', $imgurl);
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->set('modified_at', 'NOW()', FALSE);
		$this->db->set('title', $title);
		$this->db->set('status', 'draft');
		$this->db->set('description', $description);
		$this->db->set('url', $url);
		$this->db->set('category', $category);
		$this->db->set('source', $source);
		
		$result = $this->db->insert('posts');

		if($result) return TRUE; else return FALSE;

	}


}