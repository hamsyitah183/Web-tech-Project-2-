<?php

class Academic_model extends CI_Model{

	function __construct(){
		parent::__construct();
		
	}

	function get_calendar(){
		$query=$this->db->get('academic');
		return $query;
	}
}

?>