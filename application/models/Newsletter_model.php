<?php
class Newsletter_model extends CI_Model 
{
  
  function saverecords($data)
  {
      $sql = "SELECT * FROM `newsletter`;";
      $result = $this->db->query($sql);
      $id = $result-> num_rows();
        

      $data['id'] = $id + 1;
        $this->db->insert('newsLetter',$data);
        return true;
  }
  
}