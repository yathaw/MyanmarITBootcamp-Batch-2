<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_ctrl extends CI_Controller 
{
	public function index()
	{
		$data['authorlist'] = $this->Author_mdl->list();
		$data['categorylist'] = $this->Category_mdl->list();
		$data['newarrival'] = $this->Book_mdl->newarrival();

		// Initialize empty array.
		$config = array();

		// Set base_url for every links
		$config["base_url"] = base_url()."Home_ctrl/index";
		// $config['route'] = 

		// Set total rows in the result set you are creating pagination for.
        $total_row = $this->Book_mdl->count();        
        $config["total_rows"] = $total_row;

        // Number of items you intend to show per page.
        $config["per_page"] = 3;

        // Use pagination number for anchor URL.
        $config['use_page_numbers'] = TRUE;

        //Set that how many number of pages you want to view.
        $config['num_links'] = $total_row;

        //-------------------------------------------------------

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"> <ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = false;
        $config['last_link'] = false;

        $config['first_tag_open'] = '<li class="page-item"> <span class="page-link"> ';        
        $config['first_tag_close'] = '</span> </li>';

        $config['prev_tag_open'] = '<li class="page-item"> <span class="page-link">';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_close'] = '</span></li>';
        
        $config['next_tag_open'] = '<li class="page-item"> <span class="page-link">';
        $config['next_link'] = 'Next';
        $config['next_tag_close'] = '</span></li>';

        $config['last_tag_open'] = '<li class="page-item"> <span class="page-link">';
        $config['last_tag_close'] = '</span></li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <span class="page-link"> ';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span> </span></li>';

        $config['num_tag_open'] = '<li class="page-item"> <span class="page-link"> ';
        $config['num_tag_close'] = '</span> </li>';

        // new


        $this->pagination->initialize($config);

        if($this->uri->segment(3))
        {
        	$page = ($this->uri->segment(3)) ;
        }
        else
        {
            $page = 1;
        }

        $data["booklist"] = $this->Book_mdl->all($config["per_page"], $page);

        $data['pagination'] = $this->pagination->create_links();


		$data['innerdata'] ="home/index";
		$this->load->view('include/frontend_template',$data);
	}

	public function detail()
	{
		$id = $this->uri->segment(4);
		$data['booklist'] = $this->Book_mdl->edit($id);

		// var_dump($data);die();

		$data['authorlist'] = $this->Author_mdl->list();
		$data['categorylist'] = $this->Category_mdl->list();
		$data['innerdata'] ="home/detail";

		$this->load->view('include/frontend_template',$data);
	}
}
