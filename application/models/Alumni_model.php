<?php

class Alumni_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	function updateAlumni($data){
        $sql = "SELECT * FROM `alumni`;";
        $result = $this->db->query($sql);
        $id = $result-> num_rows();
           

        $value['id'] = $id + 1;
		$value['name']=trim($data['name']);
		$value['phoneNo']=trim($data['phoneNo']);
		$value['email']=trim($data['email']);
		$value['program']=trim($data['program']);
		$value['department']=trim($data['department']);
		$value['yrGrad']=trim($data['yrGrad']);

		$this->db->insert('alumni', $value);
		return true;
	}

    function checkEmail($data) {
        $sql = "SELECT COUNT(*) FROM `alumni` WHERE `email` = \"$data\" ";
        $result = $this->db->query($sql);
        
        if($result->num_rows()== 0)return false;
        else return true;
    }
}


?>