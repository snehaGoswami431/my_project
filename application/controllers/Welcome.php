<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->library('session');
 $this->load->library('form_validation');
  $this->load->model('login_reg_model');
 }

 function index()
 {
  $this->load->view('register');
 }

 function validation()
 {

  $this->form_validation->set_rules('user_name','Username','required');
  $this->form_validation->set_rules('user_password','Password','required');
  if($this->form_validation->run())
  {
  //  $new_pass=$this->encrypt->encode($this->input->post('password'));
     $data=array(
      "username"=>$this->input->post('user_name'),
      "password"=>$this->input->post('user_password')
    );

$return=$this->login_reg_model->insert_data($data);

    if($return==1)
    {
      $session_data=$this->session->set_flashdata('data','Successfully registered');

      redirect('register');
    }
    else
    {
      $session_data=$this->session->set_flashdata('data','User Already exist');

     redirect('register');

    }
  }
  else
  {
    $this->load->view('register');
  }
 }

}

?>