<?php

Class Padd extends Controller 
{
	function index()
	{
		$data['page_title'] = "Padd";
		$this->view("minima/Padd",$data);
	}

}
