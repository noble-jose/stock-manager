<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function _construct()
	{
	    parent::__construct();
	    $this->load->helper("url");
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
