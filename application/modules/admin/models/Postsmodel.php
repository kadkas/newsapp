<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postsmodel extends CI_Model
{


	public function getallposts()
	{

		$query = $this->db->get('posts');

		$posts = $query->result();

		return $posts;


	}

	public function getpostbyid($id)
	{
		$query = $this->db->get_where('posts', array('id' => $id));
		$post = $query->row();

		return $post;


	}

	public function edit()
	{

		$id = $this->input->post('post_id');
		$category = $this->input->post('category');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$status = $this->input->post('status');


		$data = array(
        'title' => $title,
        'description' => $description,
        'status' => $status,
        'category' => $category
		);

	

		$this->db->where('id', $id);
		$result = $this->db->update('posts', $data);

		return $result;
	}

}