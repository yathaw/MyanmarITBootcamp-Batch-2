<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_ctrl extends CI_Controller 
{

	public function index()
	{
		$data['total_author'] = $this->Author_mdl->count();

		$data['total_book'] = $this->Book_mdl->count();

		// var_dump($data);die;

		$data['navbar']="Dashboard";
		$data['innerdata'] ="dashboard/index";

		$this->load->view('include/backend_template',$data);
	}
}
