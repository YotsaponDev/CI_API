<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Name extends CI_Controller {

	public function index()
	{
	//	$this->load->view('welcome_message');
	$this->load->database();
	$query = $this->db->get('name');

	foreach ($query->result() as $row)
	{
			echo $row->name;
			echo $row->age;
	}

		// foreach ($query->result_array() as $row)
		// {
		// 		echo $row['name'];
		// 		echo $row['age'];
		// }
	}
}
