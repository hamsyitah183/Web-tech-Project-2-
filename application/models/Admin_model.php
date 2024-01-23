<?php

class Admin_model extends CI_Model {

    public function countUser() {
        $sql = "SELECT count(*) FROM `pengguna`;";
        $result = $this->db->query($sql);
        
        return $result->result();
    }

    public function listStudent() {
        $query = $this->db->query("SELECT * FROM pengguna;");
        
        return $query;
    }

    public function viewStudent($id) {
        $query = $this->db->query("SELECT * FROM pengguna WHERE id = $id;");
        
        return $query;
    }

    public function deleteUser($id) {
       
        $this->db->delete('pengguna', array('id' => $id));
       
        $data = $this->db->get('pengguna');
       
        //after delete the user, all the id of the user will be updated
        $i = 1;
        foreach($data->result_array() as $row) {
        
            $this->db->set('id', $i);
            $this->db->where('email', $row['email']);
            $this->db->update('pengguna');
            $i++;
        }

        return true;
    }

    public function listAlumni() {
        $query = $this->db->query("SELECT * FROM alumni;");
        
        return $query;
    }

    public function deleteAlumni($id) {
       
        $this->db->delete('alumni', array('id' => $id));
       
        $data = $this->db->get('alumni');
       
        //after delete the user, all the id of the user will be updated
        $i = 1;
        foreach($data->result_array() as $row) {
        
            $this->db->set('id', $i);
            $this->db->where('id', $row['id']);
            $this->db->update('alumni');
            $i++;
        }

        return true;
    }

    public function viewAlumni($id) {
        $query = $this->db->query("SELECT * FROM alumni WHERE id = $id;");
        
        return $query;
    }

    public function addFacility($data) {
        
        $id = $this->db->get('facility');
        $attr['id'] = $id->num_rows() + 1;

        $attr['picture'] = $data['picture'];
        $attr['title'] = $data['title'];
        $attr['description'] = $data['description'];

        $this->db->insert('facility', $attr);

    }

    public function showFacility() {
        
        $result = $this->db->get('facility');

        return $result;
    }

    public function deleteFacility($id) {
       
        $this->db->delete('facility', array('id' => $id));
       
        $data = $this->db->get('facility');
       
        //after delete the user, all the id of the user will be updated
        $i = 1;
        foreach($data->result_array() as $row) {
        
            $this->db->set('id', $i);
            $this->db->where('id', $row['id']);
            $this->db->update('facility');
            $i++;
        }

        return true;
    }

    public function editFacility($data) {
        
        

        $this->db->set('picture', $data['picture']);
        $this->db->set('title' , $data['title']);
        $this->db->set('description', $data['description']);
        $this->db->where('id', $data['id']);
        $this->db->update('facility');
        
        return true;
    }

  
    public function editStudent($data) {
        
        $sql = "UPDATE `pengguna` SET `name`= ? ,`email`= ? ,`phoneNo`= ? , 
        `add1`= ? ,`add2`= ? ,`add3`= ? ,`city`= ? ,`postalCode`= ? ,
        ,`state`= ? WHERE  `id` = ?";
        
    
        $this->db->query($sql, $data['name'], $data['email'], $data['phoneNo'], $data['add1'], $data['add2'], $data['add3'], $data['city'],
        $data['postalCode'], $data['state'], $data['id']);

        return true;
    }

    

    public function subscriberList() {
        
        $query = $this->db->get('newsletter');

        return $query;
    }

    public function viewSubscriber($id) {
        $query = $this->db->query("SELECT * FROM newsletter WHERE id = $id;");
        
        return $query;
    }

    public function deleteSubscriber($id) {
       
        $this->db->delete('newsletter', array('id' => $id));
       
        $data = $this->db->get('newsletter');
       
        //after delete the user, all the id of the user will be updated
        $i = 1;
        foreach($data->result_array() as $row) {
        
            $this->db->set('id', $i);
            $this->db->where('id', $row['id']);
            $this->db->update('newsletter');
            $i++;
        }

        return true;
    }

    public function subjectList() {
        
        $query = $this->db->get('course');

        return $query;
    }


    public function editUser($id)
    {
        $sql = $this->db->get_where('pengguna', ['id' => $id]);
        return $sql->row();
    }

    public function updateUser($data, $id)
    {
        $this->db->set('name' , $data['name']);
        $this->db->set('email' , $data['email']);
        $this->db->set('phoneNo' , $data['phoneNo']);
        $this->db->set('add1' , $data['add1']);
        $this->db->set('add2' , $data['add2']);
        $this->db->set('add3' , $data['add3']);
        $this->db->set('city' , $data['city']);
        $this->db->set('state' , $data['state']);
        $this->db->set('postalCode' , $data['postalCode']);
       


        $this->db->where('id', $id);
        $this->db->update('pengguna',$data);
        
    }

    public function viewFacility($id) {
        $query = $this->db->query("SELECT * FROM facility WHERE id = $id;");
        
        return $query;
    }

}