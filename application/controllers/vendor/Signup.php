<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {


	function __construct() {
		parent::__construct();
		
		//$this->load->database();
	}
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		/*$this->load->view('home');*/
		$this->load->view('vendor/header');
		$this->load->view('vendor/signup');
		$this->load->view('vendor/footer');
		
	}
	public function SubmitSignUp()
	{
		if(isset($_POST['FirstName'])){
			$FirstName = $_POST['FirstName'];
			$this->session->set_userdata('FirstName',$FirstName);
		}
		if(isset($_POST['LastName'])){
			$LastName = $_POST['LastName'];
			$this->session->set_userdata('LastName',$FirstName);
		}
		//Including validation library
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		//Validating Fields
		$this->form_validation->set_rules('FirstName', 'First Name', 'required');
		$this->form_validation->set_rules('LastName', 'Last Name', 'required');
		
		if($this->form_validation->run()==TRUE)
		{   
			//$this->load->view('birth_fresh_confirm',$data);        
			echo "Success";
		} 
		else
		{
			$data['error'] = 'Resolve the errors shown below';
			/*$this->load->view('home');*/
			$this->load->view('vendor/header');
			$this->load->view('vendor/signup');
			$this->load->view('vendor/footer');
		}
		
		
	}
}
