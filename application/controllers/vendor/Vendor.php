<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {


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
		$this->load->view('vendor/vendorinfo');
		$this->load->view('vendor/footer');
		
	}
	
	public function SubmitVendorInfo()
	{
		
		$this->load->view('vendor/header');
		$this->load->view('vendor/vendorinfo');
		$this->load->view('vendor/footer');
		
	}
}
