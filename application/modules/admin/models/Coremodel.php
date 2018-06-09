<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coremodel extends CI_Model
{
	private $apikey ="c1ebf456552d4804883b23b5d41f551d";

	public function bysource($source)
	{
		$url ="https://newsapi.org/v2/top-headlines?sources=".$source."&apiKey=".$this->apikey;
		$jsonresponse = json_decode(file_get_contents($url));
		$articles = $jsonresponse->articles;
		return $articles;
	}	

	public function everything($querystring)
	{	 
		$url ="https://newsapi.org/v2/everything?q=".urlencode($querystring)."&apiKey=".$this->apikey;
		echo $url;
		$jsonresponse = json_decode(file_get_contents($url));
		$articles = $jsonresponse->articles;
		return $articles;
	}


	public function bydomain($domain)
	{
		$url ="https://newsapi.org/v2/everything?domains=".$domain."&apiKey=".$this->apikey;
		$jsonresponse = json_decode(file_get_contents($url));
		$articles = $jsonresponse->articles;
		return $articles;
	}	

}
