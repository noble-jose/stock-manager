<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
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
        $this->load->view('dashboard/dashboard');
        $this->load->view('layouts/footer');
    }
  }

	public function register()
	{
		$this->load->view('auth/register');
	}

  public function uregister()
  {
    $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        
    $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');
    
    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('auth/register');
    }
    else
    {
      $firstName  = $this->security->xss_clean($this->input->post('firstname'));
      $lastName   = $this->security->xss_clean($this->input->post('lastname'));
      $email    = $this->security->xss_clean($this->input->post('email'));
      $password   = md5($this->security->xss_clean($this->input->post('password')));
      $insertData = array(
        'firstname'=>$firstName,
        'lastname'=>$lastName,
        'email'=>$email,
        'password'=>$password
      );
      $checkDuplicate = $this->user_model->checkDuplicate($email);
      
      if($checkDuplicate == 0)
      {
        $insertUser = $this->user_model->insertUser($insertData);
      
        if($insertUser)
        {
          $this->load->view('auth/login');
        }
        else
        {
          $data['errorMsg'] = 'Unable to save user. Please try again';
          $this->load->view('auth/register');
        }
      }
      else
      {   
          $data['errorMsg'] = 'User email alreary exists';
          $this->load->view('auth/register');
      }
    }
  }

// user login
public function usignin(){
$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
$this->form_validation->set_rules('password', 'Password', 'required|trim');

  if($this->form_validation->run() == true)
  {
    $user_email = $this->security->xss_clean($this->input->post('email'));
    $user_paswd   = md5($this->security->xss_clean($this->input->post('password')));
    // print_r($password);
    // exit();
    $user = $this->user_model->user_login($user_email,$user_paswd);

    if($user != false){
      //set session data
      $sessdata = array(
        'id' => $user->id,
        'email' => $user->email,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($sessdata);
      $this->load->view('layouts/header');
      $this->load->view('Dashboard/dashboard');
      $this->load->view('layouts/footer');
    }
    else
    {
      $this->session->set_flashdata('msg','Invalid Email or Password');
      $this->load->view('auth/login');
    }
  }
  else
  {
    //validation error
    echo "validation error occured";
  }
}

function logout(){
      $this->session->sess_destroy();
      redirect('login');
  	}
}