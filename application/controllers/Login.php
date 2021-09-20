<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->library('session');
 $this->load->library('form_validation');
  $this->load->model('login_reg_model');
 }

 function index()
 {
  $this->load->view('login');
 }

 function validation()
 {


  $this->form_validation->set_rules('user_name','Username','required');
  $this->form_validation->set_rules('user_password','Password','required');
  if($this->form_validation->run())
  {
  

$query=$this->db->where(["username"=>$this->input->post('user_name'),"password"=>$this->input->post('user_password')])->get('user_data');

 $data=$query->result_array();


$name=$data[0]['Name'];


if($query->num_rows()>0)
{
	$this->session->set_flashdata('data','Logged In');
	$this->session->set_userdata('name',$name);
	redirect('Login/dashboard');
}

}
$this->session->set_flashdata('data','Incorrect Username or Password');
	$this->load->view('login');


}
function dashboard()
{
    $data=$this->login_reg_model->listProduct_model($this->session->userdata('name'));
 
$this->load->view('dashboard',compact(['data']));
}
function addProduct()
{
 $session=$this->session->userdata('name');

$this->load->view('addProduct',$session);
}
function insert_product()
{
	 $this->form_validation->set_rules('name','Product Name','required');
  $this->form_validation->set_rules('price','Product Price','required');
  $this->form_validation->set_rules('description','Product Description','required');
  if($this->form_validation->run())
  {
  //  $new_pass=$this->encrypt->encode($this->input->post('password'));
     $data=array(
      "name"=>$this->input->post('name'),
      "price"=>$this->input->post('price'),
      "description"=>$this->input->post('description'),
      "add_by_user"=>$this->input->post('add_by_user'),
    );

$return=$this->login_reg_model->insert_product_data($data);

    if($return==1)
    {
      $session_data=$this->session->set_flashdata('data','Successfully inserted');
  

      redirect('Login/addProduct');
    }
    else
    {
      $session_data=$this->session->set_flashdata('data','Already exist');

     redirect('Login/addProduct');

    }
  }
  else
  {
      $this->load->view('addProduct');
  }
}
function deleteProduct()
{
  $id=$this->input->post('id');
  $this->login_reg_model->deleteProduct($id);
  redirect('Login/dashboard');
}
function editProduct()
{

  $id=$this->input->post('id');

  $data['value']=$this->login_reg_model->editProduct($id);
$this->load->view('editProductview',$data);
}
function update_product()
{
   $this->load->library('form_validation');
   $this->form_validation->set_rules('name','Product Name','required');
  $this->form_validation->set_rules('price','Product Price','required');
  $this->form_validation->set_rules('description','Product Description','required');
 $id=$this->input->post('id');
  if($this->form_validation->run())
  {
    $data=array(

"name"=>$this->input->post('name'),

"price"=>$this->input->post('price'),
"description"=>$this->input->post('description')
    );

 $return=$this->login_reg_model->update_product_model($data,$id);


   if($return==1)
    {
      $session_data=$this->session->set_flashdata('data','Data updated');
  
 $this->load->view('editProductview');
    }
    else 
    {
      $session_data=$this->session->set_flashdata('data','Already exist');

    $this->load->view('editProductview');

    }
  }
   else
  {

      $this->load->view('editProductview');
  }

}
function logout()
{
  $this->session->unset_userdata('name');
 redirect('Login');
}
// function listProduct()
// {
//   $return=$this->login_reg_model->listProduct_model();
//   print_r($return);
//   die();
//   $this->load->view('addProduct');
// }
}

?>
