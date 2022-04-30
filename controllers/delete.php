<?php

Class delete extends Controller 
{
	function index()
	{
		$data['page_title'] = "delete";
		$this->view("minima/delete",$data);
	}

}
