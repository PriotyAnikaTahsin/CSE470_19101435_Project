<?php

Class PoliceList extends Controller
{
	function index()
	{
		$data['page_title'] = "PoliceList";
		$this->view("minima/PoliceList",$data);
	}

}