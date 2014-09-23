<?php namespace Utility;

class Data
{
	private $data; 
	
	public function __construct(array $data) 
	{
		$this->data = $data;
		
	}
	
	public function validateData(){
		$resp = array();
		
		$requesedData = array(
		'Browser'		=> "Browser is missing",
		'providerID'	=> "Provider Id is missing",
		'omg_referer' =>  "Referral is missing",
		//'weight'		=> "Weight is missing",
		'source'		=> "Source missing",
		'firstname'		=> "First Name is missing",
		'lastname'		=> "Last Name is missing",
		'phone1'		=> "Phone 1 is missing",
		'email'			=> "Email is missing",
		'ozip'			=> "Origin zip is missing",
		'ostate'		=> "Origin state is missing",
		'ocity'			=> "Origin city is missing",
		'dzip'			=> "Destination zip is missing",
		'dstate'		=> "Destination state is missing",
		'dcity'			=> "Destination city is missing",
		// 'movesize'		=> "Move size is missing",
		'movedte' 		=> "Move date is missing"
		);
	
		foreach($this->data as $key => $val){		
			if(empty($val))
			$resp[] = $key."  Error: ".$requesedData[$key];
		}
		if(empty($resp))
			return 1;		
		return $resp;
	}
	public function getData()
	{
		return $this->data;
	}
}
