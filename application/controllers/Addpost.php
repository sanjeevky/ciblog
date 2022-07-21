<?php
class Addpost extends CI_Controller
{
    public function __construct()
    {
            parent::__construct();
            $this->load->model('post_model');
            $this->load->helper('url_helper');
    }




    public function data_submit()
    {
        $data = array(
            'title'   => $this->input->post('title'),
            'content' => $this->input->post('content'),
            

        
        );
        $return = $this->post_model->insert_post($data);
        if ($return == true){
             echo $data['message'] = 'Add post successfully';
                }
                 else {
                     echo $data['message'] = 'configure database correctly';
                } 
            //Load view to show message
            //$this->load->view("addpost",$data);
                
    }
}

?>