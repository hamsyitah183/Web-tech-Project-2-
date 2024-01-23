<?php

use LDAP\Result;

class Auth_model extends CI_Model 
{
    public function user_match($email)
    {
       
        $this->db->where('email', $email);
        $query = $this->db->get('pengguna');
        return $query;
    }
   
    public function get_details($email) 
    {
       $result = $this->db->get_where('pengguna',['email' => $email])->row_array();
       
        return $result;
       
    }

    public function changeDetail($data)
    {
        $this->db->set('name', $data['name']);
        $this->db->set('add1', $data['add1']);
        $this->db->set('add2', $data['add2']);
        $this->db->set('add3', $data['add3']);
        $this->db->set('city', $data['city']);
        $this->db->set('state', $data['state']);
        $this->db->set('phoneNo', $data['phoneNo']);
        $this->db->set('DOB', $data['DOB']);
        $this->db->set('gender', $data['gender']);
        
        $this->db->where('email', $data['email']);
        $this->db->update('pengguna',$data);
    }

    public function register($data)
    {
            $sql = "SELECT * FROM `pengguna`;";
            $result = $this->db->query($sql);
            $id = $result-> num_rows();
           

            $value['id'] = $id + 1;
        
            $value['name'] = $data['name'];
            $value['email'] = $data['email'];
            $value['phoneNo'] = $data['phoneNo'];
            $value['add1'] = $data['add1'];
            $value['add2'] = $data['add2'];
            $value['add3'] = $data['add3']; 
            $value['city'] = $data['city']; 
            $value['state'] = $data['state'] ;
            $value['postalCode'] = $data['postalCode'] ;
            $value['DOB'] = $data['DOB'];
            $value['gender'] = $data['gender'];
            $value['password'] = $data['password']; 
            $value['passwordConfirm'] = $data['passwordConfirm'];
            $value['accountCreated'] = date('d-m-y h:i:s');

            $this->db->insert('pengguna',$value);
            return true;
       
    }

    public function detail_match($data)
    {
        $sql = "SELECT COUNT(*) FROM `pengguna` WHERE email = \"?\";";
        $result = $this->db->query($sql, $data['email']);
        if($result == 0)return true;
        else return false;
    }

    public function checkUser($email)
    {
        $sql = "SELECT `usr_access_level` FROM `pengguna` WHERE `email` = \"$email\";";
        $result = $this->db->query($sql);
        return $result;
    }
    
    public function adminLogin($name)
    {
        $this->db->where('adminName', $name);
        $query = $this->db->get('admin');
        return $query;
    }

}