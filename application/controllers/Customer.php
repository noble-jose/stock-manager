<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('logged_in') !== TRUE){
          $this->load->view('auth/login');
        }
        else {
            $this->load->model('customer_model');
            $customerData = $this->customer_model->getcustomer_data();
            $this->load->view('layouts/header');
            $this->load->view('Customer/new_customer', ['getcustomer_data'=>$customerData]);
            $this->load->view('layouts/footer');
        }
    }

    public function customer_details()
    {
        $this->load->view('layouts/header');
        $this->load->view('Customer/customer_details');
        $this->load->view('layouts/footer');
    }

    public function creaditDebit()
    {
        $this->load->view('layouts/header');
        $this->load->view('Customer/credit_and_debit');
        $this->load->view('layouts/footer');
    }

    public function new_customer()
    {
        $this->form_validation->set_rules('customer_name', 'user_name', 'required');
        $this->form_validation->set_rules('phone_number', 'phone_number', 'required');
        $this->form_validation->set_rules('vehicle_number', 'vehicle_number', 'required');
        if ($this->form_validation->run()) {
            $this->load->model('customer_model');
            $data = $this->input->post();
            unset($data['submit']);
            if($this->customer_model->new_customer($data)){
                echo "success";
            }
            else
            {
                 echo 'Error';
            }
        }
    }

    public function delete_customer()
    {
        $this->load->model('customer_model');
        $this->customer_model->deleteCustomer_details($_POST['id']);
        echo "data deleted";
    }

    public function get_customerData()
    {
        $this->load->model('customer_model');
        $data = $this->customer_model->get_customerData($_POST['id']);
        foreach($data as $row)  
           {  
                $output['customer_name'] = $row->customer_name;    
                $output['phone_number'] = $row->phone_number;    
                $output['vehicle_number'] = $row->vehicle_number;    
           }  
        echo json_encode($output);
    }

    public function update_customerData(){
        $this->load->model('customer_model');
        $data = $this->customer_model->update_customerData($id,)
    }
} 