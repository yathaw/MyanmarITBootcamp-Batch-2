<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author_ctrl extends CI_Controller 
{

	function __construct()
	{
		parent:: __construct();
		
		if($this->session->userdata('logged_in'))
		{
		    $session_data = $this->session->userdata('logged_in');

		    $sessionid = $session_data['id'];
		    $sessionemail =$session_data['email'];

		    $this->router->fetch_class();
		}

		else
		{
		    redirect('login');
		}
	}

	public function index()
	{
		$data['authorlist'] = $this->Author_mdl->list();

		$data['navbar']="Author List";
		$data['innerdata'] ="author/read";

		$this->load->view('include/backend_template',$data);
	}

	public function create()
	{
		$data['navbar']="Author Form";
		$data['innerdata'] ="author/create";

		$this->load->view('include/backend_template',$data);		
	}

	public function store()
	{
		// Validation for Author Name
		$this->form_validation->set_rules('name','Author Name','trim|required|xss_clean|is_unique[author.author_name]|min_length[2]');
		
		// Validation for Birth Place
		$this->form_validation->set_rules('place','Author Birth Place','required|trim|xss_clean');

		// Validation for Biography
		$this->form_validation->set_rules('bio','Author Biography','required|trim|xss_clean');

		$this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');

		if ($this->form_validation->run() == FALSE) 
		{
			$data['navbar']="Author Form";
			$data['innerdata'] ="author/create";

			$this->load->view('include/backend_template',$data);	
		}

		else
		{
			$result = $this->Author_mdl->save();

			if ($result) 
			{
				$this->session->set_flashdata('success', "New Author is added in your data.");
				redirect('author');
			}
		}
	}

	public function edit()
	{
		$id = $this->uri->segment(3);

		$data['authorlist'] = $this->Author_mdl->edit($id);

		$currentURL = current_url();
		$detail_baseURL = base_url()."author/detail/".$id;
		$edit_baseURL = base_url()."author/edit/".$id;

		if ($currentURL == $detail_baseURL) 
		{
			$data['navbar']="Author Detail";
			$data['innerdata'] ="author/detail";

			$this->load->view('include/backend_template',$data);
		}

		else
		{
			$data['navbar']="Author Edit";
			$data['innerdata'] ="author/edit";

			$this->load->view('include/backend_template',$data);
		}		

		
	}

	public function update()
	{
		$result = $this->Author_mdl->update();

		if ($result) 
		{
			$this->session->set_flashdata('success', "Existing Author is updated in your data.");

			redirect('author');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$result = $this->Author_mdl->delete($id);

		if ($result) 
		{
			$this->session->set_flashdata('success', "Existing Author is deleted in your data.");

				redirect('author');
		}
	}
}
