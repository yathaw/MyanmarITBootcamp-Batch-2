<?php
class Book_mdl extends CI_Model
{
	public function count()
	{
		$num_rows = $this->db->count_all("book");
		return $num_rows;
	}

	public function list()
	{
		$this->db->select('*');
		$this->db->from('book');
		$this->db->join('author','book_authorid = author_id','INNER');
		$this->db->join('category','book_categoryid = category_id','INNER');
		$this->db->order_by('book_title','ASC');
		$sql = $this->db->get('');

		return $sql->result();
	}

	public function save()
	{
		$title 			= $this->input->post('title');
		$image 			= $this->Book_mdl->upload_img('photo');
		$price 			= $this->input->post('price');
		$description 	= $this->input->post('description');
		$authorid 		= $this->input->post('authorid');
		$categoryid 	= $this->input->post('categoryid');	

		$bookdata = array( 
			'book_title'		=> $title,
			'book_cover' 		=> $image['data'],			
			'book_price'		=> $price,
			'book_description'	=> $description,
			'book_authorid'		=> $authorid,
			'book_categoryid'	=> $categoryid,		
		);
		// var_dump($bookdata);die();
		$result=$this->db->insert('book',$bookdata);	

		return $result;		
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('book');
		$this->db->join('author','book_authorid = author_id','INNER');
		$this->db->join('category','book_categoryid = category_id','INNER');
		$this->db->where('book_id',$id);

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
			$image = $this->Book_mdl->upload_img('newphoto');
		}
			$id = $this->input->post('id');
			$title 			= $this->input->post('title');
			$image 			= $this->Book_mdl->upload_img('photo');
			$price 			= $this->input->post('price');
			$description 	= $this->input->post('description');
			$authorid 		= $this->input->post('authorid');
			$categoryid 	= $this->input->post('categoryid');		

			$bookdata = array( 
				'book_title'		=> $title,
				'book_cover' 		=> $image['data'],			
				'book_price'		=> $price,
				'book_description'	=> $description,
				'book_authorid'		=> $authorid,
				'book_categoryid'	=> $categoryid,		
			);
			// var_dump($bookdata);die();	
			$this->db->where("book_id",$id);
			$result = $this->db->update("book",$bookdata);

			return $result;
		
	}

	public function delete($id)
	{
		$query = "DELETE FROM book WHERE book_id=".$id;
		return $this->db->query($query);
	}



	public function upload_img($image)
	{
		$file = $_FILES[$image]['name'];
		$filepath = 'image/book/'.$file;
		$config['upload_path']='image/book/';
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

	public function newarrival()
	{
		$this->db->select('*');
		$this->db->from('book');
		$this->db->join('author','book_authorid = author_id','INNER');
		$this->db->join('category','book_categoryid = category_id','INNER');
		$this->db->order_by('created_at','DESC');
		$this->db->limit(3);
		$sql = $this->db->get('');

		return $sql->result();
	}

	public function all($limit, $start)
	{
		$this->db->select('*');
		$this->db->from('book');
		$this->db->join('author','book_authorid = author_id','INNER');
		$this->db->join('category','book_categoryid = category_id','INNER');
		$this->db->limit($limit,$start);
		$this->db->order_by('book_title','ASC');
        $sql = $this->db->get('');

        $result = $sql->result();

        if($sql->num_rows() > 0)
		{
			foreach ($result as $row) 
			{
                $data[] = $row;
            }
         
            return $data;
		}
		else
		{
			return false;
		}
	}
}
