<?php

Class add extends Controller 
{
	function index()
	{
		$data['page_title'] = "add";
		$this->view("minima/add",$data);
	}

}
