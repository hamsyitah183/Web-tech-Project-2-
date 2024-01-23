<?php 

class Search_model extends CI_Model {

    public function search($data) {

        $this->db->select('*');
        $this->db->like('courseCode',$data);
        $this->db->or_like('courseName', $data);
        $this->db->or_like('subjectCode', $data);
        $this->db->or_like('subjectName', $data);
        $result = $this->db->get('course') -> result_array();


        
        return $result ;
    }

    public function search2($data) {
       
        $this->db->select('*');
        $this->db->like('lecturerID',$data);
        $this->db->or_like('lecturerName', $data);
        $this->db->or_like('title', $data);
        $this->db->or_like('subjectName', $data);
        $this->db->or_like('subjectCode', $data);
     
        $result = $this->db->get('lecturer') -> result_array();


        
        return $result ;
    }

   
}