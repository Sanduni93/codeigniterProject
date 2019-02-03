<?php
class Profile_model extends CI_model
{
	
	public function fetch_data()
	{
		$query = $this->db->get("users");
		//return all from users
		return $query;

	}
}
?>