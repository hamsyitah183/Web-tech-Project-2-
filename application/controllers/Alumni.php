<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller{

	function __construct(){

		parent::__construct();

		$this->load->model('Alumni_model', '', TRUE);
        $this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');

		if($this->session->userdata('logged_in') == true)
			redirect('Welcome');
	}

	function index(){
		//alumni FKI
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('alumni/alumni');
		$this->load->view('template/footer');
	}

	function register(){
		
			
		$this-> load ->library('form_validation');
		$data ['content'] = "formAlumni";

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phoneNo', 'Phone No', 'trim|required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('program', 'Program', 'trim|required');
		$this->form_validation->set_rules('department', 'Department', 'trim|required');
		$this->form_validation->set_rules('yrGrad', 'Year of Graduation', 'trim|required');

		$this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');

		if($this->form_validation->run() == FALSE){
			//$this->session->set_flashdata('status', '<div class="alert alert-danger text-center" style="width:100%">Error! Please enter the correct information!</div>');
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->load->view('alumni/register', $data);
			$this->load->view('template/footer');
		}

		else{
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['phoneNo'] = $this->input->post('phoneNo');
			$data['program'] = $this->input->post('program');
			$data['department'] = $this->input->post('department');
			$data['yrGrad'] = $this->input->post('yrGrad');

			$this->load->model('Alumni_model', '', TRUE);
			$result = $this-> Alumni_model-> updateAlumni($data);

			if($result){
				redirect('Welcome');
				
				$data['status'] = 'alumni';

				$this->session->set_userdata('userdata', $data);
			}

			else{
				$this->session->set_flashdata('fail', '<div class="alert" style="width:450px">Error! Please try again.</div>');
				$this->load->view('template/header');
				$this->load->view('template/navbar');
				$this->load->view('alumni/register');
				$this->load->view('template/footer');
			}
		}
	}

	// function email_match($email)
	// {
	// 	$result = $this->Alumni_model->checkEmail($email);

	// 	if($result) {
	// 		$this->form_validation->set_message('email_match', 'Email exist in the system');
    //         return false;
	// 	}

	// 	else return true;
	// }
}
?>