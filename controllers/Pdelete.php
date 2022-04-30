<?php

Class Pdelete extends Controller 
{
	function index()
	{
		$data['page_title'] = "Pdelete";
		$this->view("minima/Pdelete",$data);
	}

}
