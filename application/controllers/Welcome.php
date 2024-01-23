<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_model');
		
	}

	public function index()
	{
		
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}

	public function software()
	{
		$data['title'] = 'Software Engineering';
		$this->load->view('template/courses_header',$data);
		$this->load->view('template/navbar');
		$this->load->view('home/software');
		$this->load->view('template/footer');
	}

	public function network()
	{
		$data['title'] = 'Network Engineering';
		$this->load->view('template/courses_header',$data);
		$this->load->view('template/navbar');
		$this->load->view('home/network');
		$this->load->view('template/footer');
	}

	public function data()
	{
		$data['title'] = 'Data Science';
		$this->load->view('template/courses_header',$data);
		$this->load->view('template/navbar');
		$this->load->view('home/data');
		$this->load->view('template/footer');
	}

	public function business()
	{
		$data['title'] = 'Business Computing';
		$this->load->view('template/courses_header',$data);
		$this->load->view('template/navbar');
		$this->load->view('home/business');
		$this->load->view('template/footer');
	}

	public function multimedia()
	{
		$data['title'] = 'Multimedia Technology';
		$this->load->view('template/courses_header',$data);
		$this->load->view('template/navbar');
		$this->load->view('home/multimedia');
		$this->load->view('template/footer');
	}

	public function academic()
	{
		$data['title'] = 'Academic Calendar';
		$this->load->view('template/courses_header', $data);
		$this->load->view('template/navbar');
		$this->load->view('home/academic');
		$this->load->view('template/footer');
	}

	public function about()
	{
		$data['title'] = 'About Us';
		$this->load->view('template/courses_header', $data);
		$this->load->view('template/navbar');
		$this->load->view('home/about');
		$this->load->view('template/footer');
	}


	public function facility()
	{
		$data['title'] = 'Facilities';
		$data['data'] = $this->Admin_model->showFacility();
		$this->load->view('template/courses_header', $data);
		$this->load->view('template/navbar');
		$this->load->view('home/facility',$data);
		$this->load->view('template/footer');
	}

	public function newsLetter()
	{
		$data['title'] = 'News Letter';
		$this->load->view('template/courses_header',$data);
		$this->load->view('template/navbar');
		$this->load->view('home/newsLetter');
		$this->load->view('template/footer');
	}
}
