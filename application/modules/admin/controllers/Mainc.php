<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainc extends MX_Controller
{	
		private $categories;

		public function __construct()
        {
        	$this->config->load('masterconfig');
        	$this->categories = $this->config->item('categories');
                
        }
		public function index($view)
		{
			$sourcelist = $this->getsourcesbyview($view);
			$domainlist = $this->getdomainsbyview($view);
			$data['sourcelist'] =$sourcelist;
			$data['domainlist'] =$domainlist;
			$data['categories'] =$this->categories;
			$data['view'] = $view;
			$this->load->view('Header');
			$this->load->view('Mainview', $data);
			$this->load->view('Footer');

		}

		public function bydomain($view)
		{
			$domainlist = $this->getdomainsbyview($view);
			$sourcelist = $this->getsourcesbyview($view);
			$topheadlines = null;
			$this->load->model('coremodel'); 
			$domain = $this->input->post('domain');
			$topheadlines = $this->coremodel->bydomain($domain);
			$data['topheadlines'] = $topheadlines;
			$data['domainlist'] = $domainlist;
			$data['sourcelist'] = $sourcelist;
			$data['categories'] =$this->categories;
			$data['view'] = $view;
			$this->load->view('Header');
			$this->load->view('Mainview', $data);
			$this->load->view('Footer');

		}

		public function bysource($view)
		{	
			$sourcelist = $this->getsourcesbyview($view);
			$domainlist = $this->getdomainsbyview($view);
			$topheadlines = null;
			$this->load->model('coremodel');
			$source = $this->input->post('source');
			$topheadlines = $this->coremodel->bysource($source);
			$data['topheadlines'] = $topheadlines;
			$data['sourcelist'] = $sourcelist;
			$data['domainlist'] = $domainlist;
			$data['categories'] =$this->categories;
			$data['view'] = $view;
			$this->load->view('Header');
			$this->load->view('Mainview', $data);
			$this->load->view('Footer');

		}

		public function everything($view)
		{
			$topheadlines = null;

			$sourcelist = $this->getsourcesbyview($view);
			$domainlist = $this->getdomainsbyview($view);
			$data['sourcelist'] = $sourcelist;
			$data['domainlist'] = $domainlist;
			$data['categories'] =$this->categories;
			$data['view'] = $view;
			$this->load->model('coremodel');
			$searchstring = $this->input->post('search');
			$topheadlines = $this->coremodel->everything($searchstring);
			$data['topheadlines'] = $topheadlines;
			$this->load->view('Header');
			$this->load->view('Mainview', $data);
			$this->load->view('Footer');

		}

		public function getdomainsbyview($view)
		{	
			$this->config->load('masterconfig');
			switch ($view) {
				case 'world':
					$domains = $this->config->item('world_domains');
					break;
				case 'india':
					$domains = $this->config->item('india_domains');
					break;
				case 'tvmovies':
					$domains = $this->config->item('tvmovies_domains');
					break;

				case 'lifestyle':
					$domains = $this->config->item('lifestyle_domains');
					break;

				case 'technology':
					$domains = $this->config->item('technology_domains');
					break;
				}

				return $domains;
		}

		public function getsourcesbyview($view)
		{	
			$this->config->load('masterconfig');
			switch ($view) {
				case 'world':
					$sources = $this->config->item('world_sources');
					break;
				case 'india':
					$sources = $this->config->item('india_sources');
					break;
				case 'tvmovies':
					$sources = $this->config->item('tvmovies_sources');
					break;
				case 'lifestyle':
					$sources = $this->config->item('lifestyle_sources');
					break;
				case 'technology':
					$sources = $this->config->item('technology_sources');
					break;
				}
			 return $sources;
		}

		public function insert()
		{

			$this->load->model('entities');
			$result = $this->entities->insert();

			if($result) echo "success";
			else echo "fail";

			

		}

}