<?php

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        
        if($this->session->userdata('status') == 'user' || $this->session->userdata('logged_in') == false){
            
            redirect('Welcome');
        }
    }
    public function index() {

       if($this->session->userdata('status') == 'admin') {
            $data['title'] = 'Admin site';
            $this->load->view('auth/template/authHeader',$data);
            $this->load->view('admin/admin');
       }
    }

    public function studentList() {
        
        $data['s'] = $this->Admin_model->listStudent();

        $data['title'] = 'Student List';
        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('admin/studentList',$data);
        $this->load->view('auth/template/authFooter');
    }

    public function deleteUser() {

        $id = $this->uri->segment(3);
        if($this->Admin_model->deleteUser($id))
            redirect('admin');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->output->delete_cache();
        redirect('Welcome');
    }


    public function alumniList()
    {
        $data['s'] = $this->Admin_model->listAlumni();
        $data['title'] = 'Alumni List';

        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('admin/alumniList',$data);
        $this->load->view('auth/template/authFooter');

    }

    public function deleteAlumni() {

        $id = $this->uri->segment(3);
        if($this->Admin_model->deleteAlumni($id))
            redirect('admin');
    }

    public function addFacility() {
        $this->form_validation->set_rules('picture','Picture','required');
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('description','Description','required');
        
        if($this->form_validation->run() == false){
            $data['title'] = 'Add Facility';
            $this->load->view('auth/template/authHeader',$data);
            $this->load->view('admin/addFacility');

           
        }
        else {
            
            
            $data['picture'] = $this->input->post('picture');
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');

            $this->Admin_model->addFacility($data);
            redirect('admin');
        }

         

            
    }
    

  

    public function facilityList()
    {
        $data['s'] = $this->Admin_model->showFacility();
        $data['title'] = 'Facility list';

        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('admin/facilityList',$data);
        $this->load->view('auth/template/authFooter');
    }

    public function deleteFacility() {

        $id = $this->uri->segment(3);
        if($this->Admin_model->deleteFacility($id))
            redirect('admin');
    }

    


    public function viewStudent($id) {
        $data['s'] = $this->Admin_model->viewStudent($id);
        $data['title'] = 'Student';

        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('admin/viewStudent', $data);
        $this->load->view('auth/template/authFooter');
    }
    
    public function editStudent($id) {

        $datas['s'] = $this->Admin_model->editUser($id);
        $data['title'] = 'Edit student';
        $this->load->view('auth/template/authHeader');
        $this->load->view('admin/editStudent', $datas);
        $this->load->view('auth/template/authFooter');

       
    }

    public function updateUser($id) {
      
        
        
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

        if($this->form_validation->run() == false){
            echo 'error';
        }

        else {
            $data['id'] = $this->input->post('id');
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['phoneNo'] = $this->input->post('phoneNo');
            $data['add1'] = $this->input->post('add1');
            $data['add2'] = $this->input->post('add2');
            $data['add3'] = $this->input->post('add3');
            $data['city'] = $this->input->post('city');
            $data['state'] = $this->input->post('state');
            $data['postalCode'] = $this->input->post('postalCode');

            $this->Admin_model->updateUser($data, $id);
            $this->viewStudent($id);
        }
    }

    public function viewAlumni($id) {
        $data['s'] = $this->Admin_model->viewAlumni($id);
        $data['title'] = 'Alumni';
        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('admin/viewAlumni', $data);
        $this->load->view('auth/template/authFooter');
    }

    public function subscriberList() {
        $data['s'] = $this->Admin_model->subscriberList();
        $data['title'] = 'Newsletter Subscriber ';
        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('admin/subscriberList',$data);
        $this->load->view('auth/template/authFooter');
    }

    public function viewSubscriber($id) {
        $data['s'] = $this->Admin_model->viewSubscriber($id);
        $data['title'] = 'Subscriber';
        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('admin/viewSubscriber', $data);
        $this->load->view('auth/template/authFooter');
    }

    public function deleteSubscriber() {

        $id = $this->uri->segment(3);
        if($this->Admin_model->deleteSubscriber($id))
            redirect('admin');
    }

    public function subjectList() {
        $data['s'] = $this->Admin_model->subjectList();
        $data['title'] = 'List subject and Course';
        $this->load->view('auth/template/authHeader',$data);
        $this->load->view('admin/subjectList',$data);
        $this->load->view('auth/template/authFooter');
    }

    public function viewFacility($id) {
        $data['s'] = $this->Admin_model->viewFacility($id);
        $data['title'] = 'Facility';
        $this->load->view('auth/template/authHeader');
        $this->load->view('admin/viewFacility', $data);
        $this->load->view('auth/template/authFooter');
    }
}