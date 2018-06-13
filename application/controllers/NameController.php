<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, XKMS,delayi");

class NameController extends CI_Controller {
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
		$this->load->model('Rest_Model');
		$query = $this->Rest_Model->get_data();

		echo json_encode($query);
	}
	public function post_data(){
		$this->load->helper('form');
		$this->load->library('form_validation'); //Including validation library
		
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('age','Age','required');
	

		if($this->form_validation->run()){
			$this->load->model('Rest_Model');
			$data = Array(
				'name' =>$this->input->post('name'),
				'age' =>$this->input->post('age')
			);

			$this->Rest_Model->post_data($data);
			//header("location:javascript://history.go(-1)");
			$message = "ok";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else{
			header("location:javascript://history.go(-1)");
		}
		//https://www.youtube.com/watch?v=XY_NjpStgHg
	}
}



// $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

// //Validating Name Field
// $this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

// //Validating Email Field
// $this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

// //Validating Mobile no. Field
// $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

// //Validating Address Field
// $this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

// if ($this->form_validation->run() == FALSE) {
// $this->load->view('insert_view');
// } else {
// //Setting values for tabel columns
// $data = array(
// 'Student_Name' => $this->input->post('dname'),
// 'Student_Email' => $this->input->post('demail'),
// 'Student_Mobile' => $this->input->post('dmobile'),
// 'Student_Address' => $this->input->post('daddress')
// );
// //Transfering data to Model
// $this->insert_model->form_insert($data);
// $data['message'] = 'Data Inserted Successfully';
// //Loading View
// $this->load->view('insert_view', $data);
// }
// }

// }
