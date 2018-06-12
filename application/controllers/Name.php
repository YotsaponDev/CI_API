<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, XKMS,delayi");

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
