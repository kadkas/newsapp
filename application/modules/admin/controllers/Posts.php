<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends MX_Controller
{	
	private $categories;

	public function __construct()
        {
        	$this->config->load('masterconfig');
        	$this->categories = $this->config->item('categories');
                
        }

    public function index()
    {
    	$this->load->model('postsmodel');
    	$posts= $this->postsmodel->getallposts();
    	$data['posts'] = $posts;
        $data['categories'] = $this->categories;
    	$this->load->view('Header');	
    	$this->load->view('Posts', $data);	
    	$this->load->view('Footer');	
    }

    public function getpostbyid($id)

    {
        $this->load->model('postsmodel');
        $post= $this->postsmodel->getpostbyid($id);

        $post = json_encode($post,JSON_PRETTY_PRINT);
      
        echo($post);
        

        }
 
         public function edit()

        {   
            

            $this->load->model('postsmodel');
            $post= $this->postsmodel->edit();

            redirect('index.php/admin/posts/index');

            }

         public function deletepost($id)

            {  
        
            

            $this->db->where('id', $id);
            $this->db->delete('posts');

            redirect('index.php/admin/posts/index');

            }

    }
