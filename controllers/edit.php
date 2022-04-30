<?php

Class edit extends Controller 
{
	function index()
	{
		$data['page_title'] = "edit";
		$this->view("minima/edit",$data);
	}

}
