<?php

Class police_list extends Controller
{
	function index()
	{
		$data['page_title'] = "police_list";
		$this->view("minima/police_list",$data);
	}

}