<?php

Class AdminUp extends Controller 
{
	function index()
	{
		$data['page_title'] = "AdminUp";
		$this->view("minima/AdminUp",$data);
	}

}
