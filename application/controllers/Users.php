<?php 

class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('Auth_model');

        $result = $this->Auth_model->checkUser($this->session->userdata('email'));

        if($this->session->userdata('logged_in') == false || $this->session->userdata('status') == 'admin')
            redirect('Welcome');
        
    }

    public function index()
    {
        $data['title'] = 'User';
        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('users/userSetting');
        $this->load->view('users/footer');
    }

    public function user()
    {
        redirect('users');
    }

    public function myProfile()
    {
        $data['title'] = 'My profile';
        $data['profile'] = $this->Auth_model->get_details($this->session->userdata('email'));
        
        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('users/myProfile', $data);
        $this->load->view('users/footer');

        $values = array (
            'name', 'email', 'phoneNo', 'add1', 'add2', 'add3', 'city', 'state', 'postalCode', 'DOB', 'gender'
        );

       foreach($values as $v) {
            $attr = array (
                $v => $data['profile'][$v],
             );
       }

        $this->session->set_userdata($attr);
    }

    public function changeDetail()
    {
        
        $data['profile'] = $this->Auth_model->get_details($this->session->userdata('email'));
       
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('phoneNo','Phone number','trim|required|numeric|integer');
        $this->form_validation->set_rules('add1','Address Line 1','trim|required');
        $this->form_validation->set_rules('add2','Address Line 2','trim|required');
        $this->form_validation->set_rules('add3','Address Line 3','trim');
        $this->form_validation->set_rules('city','City','trim|required');
        $this->form_validation->set_rules('state','State','trim|required');
        $this->form_validation->set_rules('postalCode','Postal Code','trim|required|integer');
        $this->form_validation->set_rules('DOB','Date of birth','required');
        $this->form_validation->set_rules('gender','Gender','required');

        if($this->form_validation->run() == false) {
                
            $this->load->view('auth/template/authHeader');
            $this->load->view('users/changeProfile', $data);

        }
        else {
            $attr['name'] = $this->input->post('name');
            $attr['email'] = $this->input->post('email');
            $attr['phoneNo'] = $this->input->post('phoneNo');
            $attr['add1'] = $this->input->post('add1');
            $attr['add2'] = $this->input->post('add2');
            $attr['add3'] = $this->input->post('add3');
            $attr['city'] = $this->input->post('city');
            $attr['state'] = $this->input->post('state');
            $attr['postalCode'] = $this->input->post('postalCode');
            $attr['DOB'] = $this->input->post('DOB');
            $attr['gender'] = $this->input->post('gender');

            $this->Auth_model->changeDetail($attr, $attr['email']);
            $this->session->set_flashdata('message', '<div class = "alert alert-success" role = "alert"> Change Success </div>');
            $this->index();
        }
       
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('Welcome');
    }

   
}