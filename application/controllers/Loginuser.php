<?php
class Loginuser extends CI_Controller
{
    public function __construct()
    {
            parent::__construct();
            //$this->load->model('post_model');
            $this->load->helper('url_helper');
        
            
        //$this->load->library('upload',$config);
    }




    public function signup_submit()
    {   
        
 
        //$this->load->library('upload',$config);
        $this->load->library('form_validation');
        $this->form_validation->set_message('is_unique','Email address already exist, please try another.');  
        $this->form_validation->set_rules('user_name','User Name','required|alpha|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('password','Password','required|min_length[5]|matches[passconf]');
        $this->form_validation->set_rules('passconf','Confirm Password','required');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
        
        if($this->form_validation->run())
        {
            $ori_filename = $_FILES['profile_pic']['name'];
            $new_name = time()."".str_replace('','-',$ori_filename);
            $config=[
                'upload_path' => './upload/',
                'allowed_types' => 'gif|jpg|jpeg|png',
                'file_name' => $new_name,
            ];
            $this->load->library('upload',$config);
            if ( ! $this->upload->do_upload('profile_pic'))
            {
                $upload_error = $this->upload->display_errors();
                
                //$imageError = array('imageError' => $this->upload->display_errors());
                $this->load->view('templates/header');
                $this->load->view('login_logout/signup',compact('upload_error'));
                $this->load->view('templates/sidebar');
                $this->load->view('templates/footer');
                }
                else
                {
                    $img=$this->upload->data('file_name');
            
            $this->load->model('post_model');
            $formArray = array();
            $formArray['user_name'] = $this->input->post('user_name');
            $formArray['password'] = md5( $this->input->post('password'));
            $formArray['email'] = $this->input->post('email');
            $formArray['profile_pic'] =  $img;
            $this->post_model->insert_signup($formArray);

            $this->session->set_flashdata('msg','Your account has been created successfully');
            redirect(base_url().'post/sign_up');
                    
                }  
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('login_logout/signup');   
            $this->load->view('templates/sidebar');
            $this->load->view('templates/footer');
        }

        
                
    }

    public function signin_submit()
    {
        $this->load->library('form_validation');
          
        $this->form_validation->set_rules('user_name','User Name','required|alpha|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if($this->form_validation->run())
        {
            $this->load->model('post_model');
            $formArray = array();
            $formArray['user_name'] = $this->input->post('user_name');
            $formArray['password'] = md5( $this->input->post('password'));
            $formArray['email'] = $this->input->post('email');
            if($this->post_model->login_valid($formArray))
            {
                $session_data = array(
                    'user_name' => $user_name
                );
                $this->session->set_userdata($session_data);
                $this->session->set_flashdata('msg','Login Succesfully');
            redirect(base_url().'post/sign_in');
                
            }
            else{
                $this->session->set_flashdata('msg','Invalid username,password or email');
            redirect(base_url().'post/sign_in');
                
            }
        }
                
    }

    function enter()
    {
        if($this->session->userdata('user_name')!= '')
        {
            echo '<h2> Welcome - '.$this->session->userdata('user_name').'</h2>';
            echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';

        }
        else
        {
            redirct(base_url() .'post/sign_in');

        }
    }

    function logout()
    {
        $this->session->unset_userdata('user_name');
        redirect(base_url(). 'post/sign_in');
    }

}

?>