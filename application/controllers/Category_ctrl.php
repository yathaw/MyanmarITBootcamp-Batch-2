<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_ctrl extends CI_Controller 
{
	public function index()
	{
		$data['categorylist'] = $this->Category_mdl->list();

		$data['navbar']="Category List";
		$data['innerdata'] ="category/read";

		$this->load->view('include/backend_template',$data);
	}

	public function create()
	{
		$data['navbar']="Category Form";
		$data['innerdata'] ="category/create";

		$this->load->view('include/backend_template',$data);		
	}

	public function store()
	{
		// Validation for category Name
		$this->form_validation->set_rules('name','Category Name','trim|required|xss_clean|is_unique[category.category_name]|min_length[2]');

		$this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');

		if ($this->form_validation->run() == FALSE) 
		{
			$data['navbar']="Category Form";
			$data['innerdata'] ="category/create";

			$this->load->view('include/backend_template',$data);	
		}

		else
		{
			$result = $this->Category_mdl->save();

			if ($result) 
			{
				$this->session->set_flashdata('success', "New category is added in your data.");
				redirect('category');
			}
		}
	}

	public function edit()
	{
		$id = $this->uri->segment(3);

		$data['categorylist'] = $this->Category_mdl->edit($id);

		$data['navbar']="Category Edit";
		$data['innerdata'] ="category/edit";

		$this->load->view('include/backend_template',$data);		
	}

	public function update()
	{
		$result = $this->Category_mdl->update();

		if ($result) 
		{
			$this->session->set_flashdata('success', "Existing category is updated in your data.");

			redirect('category');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$result = $this->Category_mdl->delete($id);

		if ($result) 
		{
			$this->session->set_flashdata('success', "Existing category is deleted in your data.");

				redirect('category');
		}
	}
}
