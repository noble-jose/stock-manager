<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	
public function __construct()
{
    parent::__construct();
    $this->load->model('user_model');
    $this->load->library('form_validation');
    $this->load->helper('url');
}

public function index()
{
    if($this->session->userdata('logged_in') !== TRUE){
      $this->load->view('auth/login');
    }
    else {
        $this->load->view('layouts/header');
        $this->load->view('Employee/new_employee');
        $this->load->view('layouts/footer');
    }
}

public function daily_attendance()
{
    $this->load->view('layouts/header');
    $this->load->view('Employee/dailyAttendance');
    $this->load->view('layouts/footer');
}

public function salary()
{
    $this->load->view('layouts/header');
    $this->load->view('Employee/salary');
    $this->load->view('layouts/footer');
}

}