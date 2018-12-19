<?php
class Author_mdl extends CI_Model
{
	public function count()
	{
		$this->db->select('*');
		$this->db->from('author');
		$num_rows = $this->db->count_all_results();

		return $num_rows;
	}

	public function list()
	{
		$this->db->select('*');
		$this->db->from('author');
		$this->db->order_by('author_name','ASC');
		$sql = $this->db->get('');

		return $sql->result();
	}

	public function save()
	{
		$name = $this->input->post('name');
		$image = $this->Author_mdl->upload_img('photo');
		$gender = $this->input->post('gender');
		$place = $this->input->post('place');
		$bio = $this->input->post('bio');	

		$authordata = array( 
			'author_name'		=> $name,
			'author_profile' 	=> $image['data'],			
			'author_gender'		=> $gender,
			'author_place'		=> $place,
			'author_bio'		=> $bio
		);
		// var_dump($authordata);die();
		$result=$this->db->insert('author',$authordata);	

		return $result;		
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('author');
		$this->db->where('author_id',$id);

		$sql = $this->db->get('');

		return $sql->row_array();
	}

	public function update()
	{		
		if ($_FILES['newphoto']['name'] == NULL) 
		{
			$image['data'] = $this->input->post('oldphoto');
			$image['state'] = 1;
		}

		else
		{
			$image = $this->Author_mdl->upload_img('newphoto');
		}
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			
			$gender = $this->input->post('gender');
			$place = $this->input->post('place');
			$bio = $this->input->post('bio');

			$authordata = array( 
				'author_name'		=> $name,
				'author_profile' 	=> $image['data'],			
				'author_gender'		=> $gender,
				'author_place'		=> $place,
				'author_bio'		=> $bio
			);
			// var_dump($authordata);die();	
			$this->db->where("author_id",$id);
			$result = $this->db->update("author",$authordata);

			return $result;
		
	}

	public function delete($id)
	{
		$query = "DELETE FROM author WHERE author_id=".$id;
		return $this->db->query($query);
	}



	public function upload_img($image)
	{
		$file = $_FILES[$image]['name'];
		$filepath = 'image/author/'.$file;
		$config['upload_path']='image/author/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';

		$this->load->library('upload',$config);

		if ($this->upload->do_upload($image)) 
		{
			$userfile = array(
				'state' => 1,
				'data' => $filepath
				);
		}
		else
		{
			$userfile = array(
				'state' => 0,
				'data' => $this->upload->display_errors()
				);
		}
		return $userfile;
	}
}
