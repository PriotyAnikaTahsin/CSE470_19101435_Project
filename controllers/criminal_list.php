<?php

Class criminal_list extends Controller
{
	function index()
	{
		$data['page_title'] = "criminal_list";
		$this->view("minima/criminal_list",$data);
	}

}