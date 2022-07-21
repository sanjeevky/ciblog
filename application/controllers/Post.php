<?php
    class Post extends CI_Controller{
        
        public function __construct()
        {
                parent::__construct();
                $this->load->model('post_model');
                $this->load->helper('url_helper');
        }

        public function index(){


        $data['title'] = ucfirst("All Posts");
        $data['posts'] = $this->post_model->get_all_post();

        $this->load->view('templates/header', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');

    }
    public function view($post_id = NULL)
        {
            $data['post'] = $this->post_model->get_all_post($post_id);

            // var_dump($data); die();
            if (empty($data['post']))
            {
                    show_404();
            }

            $data['title'] = $data['post']['title'];

            $this->load->view('templates/header', $data);
            $this->load->view('blog/view', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/footer');
        }
    public function addpost()
        {
            $this->load->view('templates/header');
            $this->load->view('blog/addpost');
            $this->load->view('templates/footer');
        }
        public function sign_up()
        {
            $data['title'] = "Registratiion";
            $this->load->view('templates/header');
            $this->load->view('login_logout/signup',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/footer');
        }
        public function sign_in()
        {
            $this->load->view('templates/header');
            $this->load->view('login_logout/signin');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/footer');
        }




}