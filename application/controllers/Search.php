<?php

class Search extends CI_Controller {

    public function index()
    {
        // $data['data'] = "";
        // $this->load->view('template/header');
        // $this->load->view('template/navbar');
        // $this->load->view('search', $data);
        $this-> load ->library('form_validation');
        $this->load->model('Search_model');
        $this->load->library('session');
        $this->load->library('pagination');

        $config['base_url'] = base_url().'/search';
        
        
            
        $this->form_validation->set_rules('search', 'search', 'trim|required');
        
        if($this->form_validation->run() == FALSE){
            $data['data'] = 0;
            $data['title'] = 'Search';
			$this->load->view('template/courses_header', $data);
            $this->load->view('template/navbar');
            $this->load->view('search', $data);
            
		}

        else {
            $input = $this->input->post('search');

            $data['data'] = $this->Search_model->search($input);
            
            $data['data2'] = $this->Search_model->search2($input);
       
           
            $data['title'] = 'Search';
			$this->load->view('template/courses_header', $data);
            $this->load->view('template/navbar');
            $this->load->view('search', $data);
        }
    }
}