<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dailyreading extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->library('form_validation');
  }

function index(){
	if($this->session->userdata('logged_in') !== TRUE){
      $this->load->view('auth/login');
    }
    else {
        $this->load->view('layouts/header');
        $this->load->view('Sales/dailyReading');
        $this->load->view('layouts/footer');
    }
}
}