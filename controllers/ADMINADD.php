<?php

Class ADMINADD extends Controller 
{
	function index()
	{
		$data['page_title'] = "ADMINADD";
		$this->view("minima/ADMINADD",$data);
	}

}
