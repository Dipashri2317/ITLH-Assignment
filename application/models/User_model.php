<?php
/**
* User Model
*/
class User_model extends CI_Model	
{
	
	public function store_user($data)
	{
		// Insert data in users table.
		// INSERT INTO 'users' ('email', 'pass') VALUES ($data['email'], $data['pass']);
		$insert = $this->db->insert('user', $data);
		return $insert;
	}
public function show_all()
	{
		$query = $this->db->select('*')->from('user')->get();
		return $query->result();
		
	}
