<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Name extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');

	// foreach ($query->result() as $row)
	// {
	// 		echo $row->name;
	// 		echo $row->age;
	// }
	}
	public function get_data()
	{
		$this->load->model('Rest');
		$query = $this->Rest->get_data();

		echo json_encode($query);
	}
}
