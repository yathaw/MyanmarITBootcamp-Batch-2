<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_ctrl extends CI_Controller 
{
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		$this->form_validation->set_rules('email','Email','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean');
		
		if ($this->form_validation->run() ==FALSE) 
		{
			$this->load->view('auth/login');
		}
		else
		{
			$result = $this->Auth_mdl->login();

			// var_dump($result);

			if ($result) 
			{
				foreach ($result as $row) 
				{
					$sess_data = array(
                        'id' 	=> $row['id'],
                        'email' => $row['email']
                    );
				}
				
				$this->session->set_userdata('logged_in', $sess_data);
                
                redirect('dashboard');
			}

			else
			{
				$data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('auth/login', $data);
			}	
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		
		$this->load->view('auth/login');
	}


}
