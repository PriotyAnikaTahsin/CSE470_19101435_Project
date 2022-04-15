<?php

Class CriminalsList extends Controller
{
	function index()
	{
		$data['page_title'] = "CriminalsList";
		$this->view("minima/CriminalsList",$data);
	}

}