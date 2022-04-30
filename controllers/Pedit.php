<?php

Class Pedit extends Controller 
{
	function index()
	{
		$data['page_title'] = "Pedit";
		$this->view("minima/Pedit",$data);
	}

}
