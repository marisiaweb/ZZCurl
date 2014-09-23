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
		    $ch = curl_init($this->url);
		    curl_setopt($ch, CURLOPT_HEADER, 0);
		    curl_setopt($ch, CURLOPT_NOBODY, 0);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
			curl_setopt($ch, CURLOPT_MAXCONNECTS, true);	
			$sResp = curl_exec($ch);
	
		if($sResp['http_code'] == 200)
			return true;
		return false;
	}
	
}
