<?php 

class Main_model extends CI_Model
{
	
	function test_main()
	{
		echo "This is model function";
	}
	function insert_data($data)
	{
		$this->db->insert("employee_info", $data);
		
	}

	function fetch_data()
	{
		$query = $this->db->get("employee_info");
		return $query;
	}


}
 ?>