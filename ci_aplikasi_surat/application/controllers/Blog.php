<?php 
    class Blog extends CI_Controller
    {
        public function index ()
        {
            echo"selamat datang ";
        }
        public function listdata()
        {
        $this->load->view('list_data');
        }
        public function detail()
        {
        $this->load->view('detail_blog');
        }
    }
    ?>