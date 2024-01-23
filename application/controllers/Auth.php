<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
        $this->load->library('session');
       
        if($this->session->userdata('logged_in') == true)
        redirect('Welcome');
        
    }
    public function index() {
        

        $data['title'] = 'Welcome to FKI sites';
        $this->load->view('auth/template/authHeader', $data);
        $this->load->view('auth/template/authWelcome');
        $this->load->view('auth/template/authFooter');
    }

    public function login() {
       
        $data['form_title'] = 'User\'s Login' ;
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password','Password', 'required');

        $data['title'] = 'Login sites';
        

        if($this->form_validation->run() == false) {
        
            $this->load->view('auth/template/authHeader');
            $this->load->view('auth/login');
            $this->load->view('auth/template/authFooter');
        }
        else 
        {
            $this->userLogin();
        }
    }

    public function userLogin() {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $query = $this->Auth_model->user_match($email);
        if($query->num_rows() == 1) {
            foreach($query->result() as $row) {
                $pass =sha1($password);
                if($pass == $row->password)
                {
                    $data = array (
                        'name' => $row->name,
                        'email' =>$row->email,
                        'phoneNo' => $row->phoneNo,
                        'add1' => $row->add1,
                        'add2' => $row->add2,
                        'add3' => $row->add3,
                        'city' => $row->city,
                        'state' => $row-> state,
                        'postalCode' => $row-> postalCode,
                        'password' => $row -> password,
                        'logged_in' => true,
                        'status' => 'user'
                    );

                    $this->session->set_userdata($data);
                    redirect('Welcome');
                }
                else if ($pass != $row->password)
                {
                    
                    $this->session->set_flashdata('fail', '<div class = "alert alert-danger" role = "alert"> Login Fail Please check your password or email </div>');
                    $this->load->view('auth/login');
                    $this->load->view('auth/template/authFooter');
                }
                
               
            }
        }
        else {
            $this->session->set_flashdata('fail', '<div class = "alert alert-danger" role = "alert"> Login Fail Please check your password or email </div>');
            $this->load->view('auth/template/authHeader');
            $this->load->view('auth/login');
            $this->load->view('auth/template/authFooter');
        }

       

        // if($data['email'] == ($this->Auth_model->user_match($data['email']))['email'] ){
        //     $data['logged_in'] = true;
        //     $data['status'] = 'user';
        //     $this->session->set_userdata($data);
        //     redirect('welcome');
        // }
        // else 
        //     $this->login();
    }

    public function register()
    {
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('phoneNo','Phone Number','trim|required|numeric|integer');
        $this->form_validation->set_rules('add1','Address Line 1','trim|required');
        $this->form_validation->set_rules('add2','Address Line 2','trim|required');
        $this->form_validation->set_rules('add3','Address Line 3','trim');
        $this->form_validation->set_rules('city','City','trim|required');
        $this->form_validation->set_rules('state','State','trim|required');
        $this->form_validation->set_rules('postalCode','Postal Code','trim|required|integer');
        $this->form_validation->set_rules('DOB','Date of birth','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('password','Password','min_length[5]|required');
        $this->form_validation->set_rules('passwordConfirm','Password confirmation','required|matches[password]');

       
        

        if($this->form_validation->run() == FALSE) {
            $data['title'] = 'Registration site';
            $this->load->view('auth/template/authHeader', $data);
            $this->load->view('auth/register');
            $this->load->view('auth/template/authFooter');
        }

        else {
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['phoneNo'] = $this->input->post('phoneNo');
            $data['add1'] = $this->input->post('add1');
            $data['add2'] = $this->input->post('add2');
            $data['add3'] = $this->input->post('add3');
            $data['city'] = $this->input->post('city');
            $data['state'] = $this->input->post('state');
            $data['postalCode'] = $this->input->post('postalCode');
            $data['DOB'] = $this->input->post('DOB');
            $data['gender'] = $this->input->post('gender');
            $data['password'] = sha1($this->input->post('password'));
            $data['passwordConfirm'] = sha1($this->input->post('passwordConfirm'));
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role = "alert">', '</div>');
            
            $this->load->model('Auth_model');

            $email = $this->Auth_model->user_match($data['email']);
            $email = $email->num_rows();

            if($email > 0) {

                $this->session->set_flashdata('email',  '<div class = "alert alert-danger" role = "alert"> Email exist in the system </div>');
                $value['title'] = 'Registration site';
                $this->load->view('auth/template/authHeader', $value);
                $this->load->view('auth/register');
                $this->load->view('auth/template/authFooter');
               
                

            }
            else{
                if($this->Auth_model->register($data)) 
                {
                    $this->session->set_userdata('userdata',$data);
                }
                $this->session->set_flashdata('success',  '<div class = "alert alert-success" role = "alert"> Registration Success </div>');
                redirect('auth/login');
               
            }
            
        }
        
    }

    public function adminLogin()
    {
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('password','Password','required');

        $name = $this->input->post('name');
        $password = $this->input->post('password');

        $query = $this->Auth_model->adminLogin($name);
        if($query->num_rows() == 1) {
            foreach($query->result() as $row) {
            
                if($password == $row->adminPass)
                {
                    $data = array (
                        'name' => $row->adminName,
                        'password' => $row -> adminPass,
                        'logged_in' => true,
                        'status' => 'admin'
                    );

                    $this->session->set_userdata($data);
                    redirect('Welcome');
                }
                else if ($password != $row->adminPass)
                {
                    
                    $this->session->set_flashdata('fail', '<div class = "alert alert-danger" role = "alert"> Login Fail Please check your password or email </div>');
                    $this->load->view('auth/login');
                    $this->load->view('auth/template/authFooter');
                }
                
               
            }
        }
        else 
        $this->login();
    }
    
    public function logout()
    {
        
    
        $this->session->sess_destroy();
        $this->output->delete_cache();
        redirect('welcome');
    }
}