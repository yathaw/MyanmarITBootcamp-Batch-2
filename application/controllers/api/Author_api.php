<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH . '/libraries/REST_Controller.php');

class Author_api extends REST_Controller  
{

	public function authors_get()
	{
        $result = $this->Author_mdl->list();

        if($result)
        {
            $this->response($result, 200); 
            exit;
        }

        else
        {
            $this->response("No record found", 404);
            exit;
        }
    }

    public function newauthor_post()
    {
        $result = $this->Author_mdl->save();

        if ($result) 
        {
            $data['status'] = 1;
            $data['message']='Success';
            $this->response($data);
        }

        else
        {
            $data['status'] = 0;
            $data['message']='Fail';
            $this->response($data);
        }
    }

    public function editauthor_put()
    {
        $result = $this->Author_mdl->update();

        if ($result) 
        {
            $data['status'] = 1;
            $data['message']='Success';
            $this->response($data);
        }

        else
        {
            $data['status'] = 0;
            $data['message']='Fail';
            $this->response($data);
        }
    }

    public function deleteauthor_delete()
    {
        $id = $this->input->post('id');
        $result = $this->Author_mdl->delete($id);

        if ($result) 
        {
            $data['status'] = 1;
            $data['message']='Success';
            $this->response($data);
        }

        else
        {
            $data['status'] = 0;
            $data['message']='Fail';
            $this->response($data);
        }
    }


}
