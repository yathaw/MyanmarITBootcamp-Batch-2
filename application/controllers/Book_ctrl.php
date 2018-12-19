<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_ctrl extends CI_Controller 
{
	public function index()
	{
		$data['booklist'] = $this->Book_mdl->list();

		$data['navbar']="Book List";
		$data['innerdata'] ="book/read";

		$this->load->view('include/backend_template',$data);
	}

	public function create()
	{
		$data['authorlist'] = $this->Author_mdl->list();
		$data['categorylist'] = $this->Category_mdl->list();
		
		$data['navbar']="Book Form";
		$data['innerdata'] ="book/create";

		$this->load->view('include/backend_template',$data);		
	}

	public function store()
	{
		$this->load->library('user_agent');

		// Validation for Book Title
		$this->form_validation->set_rules('title','Book Title','trim|required|xss_clean|is_unique[book.book_title]|min_length[2]');
		
		// Validation for Author Name
		$this->form_validation->set_rules('authorid','Author Name','required|trim|xss_clean');

		// Validation for Category
		$this->form_validation->set_rules('categoryid','Category','required|trim|xss_clean');

		// Validation for Price
		$this->form_validation->set_rules('price','Price','required|trim|xss_clean|min_length[4]');

		$this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');

		if ($this->form_validation->run() == FALSE) 
		{

			$data['authorlist'] = $this->Author_mdl->list();
			$data['categorylist'] = $this->Category_mdl->list();

			$data['navbar']="Book Form";
			$data['innerdata'] ="book/create";

			$this->load->view('include/backend_template',$data);	
		}

		else
		{
			$result = $this->Book_mdl->save();

			if ($result) 
			{
				$this->session->set_flashdata('success', "New book is added in your data.");
				redirect('book');
			}
		}
	}

	public function edit()
	{
		$id = $this->uri->segment(3);

		$data['booklist'] = $this->Book_mdl->edit($id);

		$currentURL = current_url();
		$detail_baseURL = base_url()."book/detail/".$id;
		$edit_baseURL = base_url()."book/edit/".$id;

		if ($currentURL == $detail_baseURL) 
		{
			$data['navbar']="Book Detail";
			$data['innerdata'] ="book/detail";

			$this->load->view('include/backend_template',$data);
		}

		else
		{
			$data['authorlist'] = $this->Author_mdl->list();
			$data['categorylist'] = $this->Category_mdl->list();

			$data['navbar']="Book Edit";
			$data['innerdata'] ="book/edit";

			$this->load->view('include/backend_template',$data);
		}		

		
	}

	public function update()
	{
		$result = $this->Book_mdl->update();

		if ($result) 
		{
			$this->session->set_flashdata('success', "Existing book is updated in your data.");

			redirect('book');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$result = $this->Book_mdl->delete($id);

		if ($result) 
		{
			$this->session->set_flashdata('success', "Existing book is deleted in your data.");

				redirect('book');
		}
	}
}
