<?php
class Category_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->order_by('category_name','ASC');
		$sql = $this->db->get('');

		return $sql->result();
	}

	public function save()
	{
		$name = $this->input->post('name');	

		$categorydata = array( 
			'category_name'		=> $name,
		);

		$result=$this->db->insert('category',$categorydata);	

		return $result;		
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id',$id);

		$sql = $this->db->get('');

		return $sql->row_array();
	}

	public function update()
	{		
		$id = $this->input->post('id');
		$name = $this->input->post('name');
			

		$categorydata = array( 
			'category_name'		=> $name
		);

		$this->db->where("category_id",$id);
		$result = $this->db->update("category",$categorydata);

		return $result;
		
	}

	public function delete($id)
	{
		$query = "DELETE FROM category WHERE category_id=".$id;
		return $this->db->query($query);
	}

}
