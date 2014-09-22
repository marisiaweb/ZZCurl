<?php namespace Utility;

class Post
{
	private $url, $data;
	
	public function __construct($url) 
	{
		$this->url = $url;
	}
	
	public function setData(Data $data)
	{
		$this->data = $data->getData();
	}
	
	public function send()
	{
		$response = \GuzzleHttp\post($this->url, ['body' => $this->data]);
		return $response;
	}
	
}
