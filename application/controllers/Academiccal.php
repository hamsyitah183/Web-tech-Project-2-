<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Academiccal extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Academic_model');
	}

	function index(){

		$value['value']=$this->Academic_model->get_calendar();
		$this->load->view('academic', $value);
		// $this->load->view('template/header');
		// $this->load->view('template/navbar');
		// $this->load->view('template/footer');
	}
	}


?>