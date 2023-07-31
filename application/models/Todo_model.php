<?php 


class Todo_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		
		
	}
	
	public $table="task";

	public function get_all()
	{
		return $this->db->get($this->table)->result();
	}

	public function insert($data=array())
	{
		return $this->db->insert($this->table,$data);
	}
	

	

}
