<?php 
class Newsletter extends CI_Controller 
{
  public function __construct()
  {
  //call CodeIgniter's default Constructor/
  parent::__construct();
  
  //load database libray manually/
  $this->load->database();
  
  //load Model/
  $this->load->model('Newsletter_model');
  }
        //Insert/
  public function savedata()
  {
    //load registration view form/
    
  
    /*Check submit button */
    if($this->input->post('save'))
    {
      
      $data['Name']=$this->input->post('Name');
      $data['Email']=$this->input->post('Email');
      $data['Gender']=$this->input->post('Gender');
      $response=$this->Newsletter_model->saverecords($data);
      if($response==true){
             redirect('Welcome');
      }
      else{
          echo "Insert error !";
      }
    }
  }
  
}
?>