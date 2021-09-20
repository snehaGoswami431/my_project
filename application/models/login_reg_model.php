<?php
class login_reg_model extends CI_Model
{

function insert_data($data)
{

	$username=$data["username"];
	$password=$data["password"];
	$name=$data["name"];
	$query=$this->db->where(["username"=>$username,"password"=>$password])->get('user_data');
	

	if($query->num_rows()==0)
	{
		$return=$this->db->insert('user_data',$data);
		return true;
	}

}
function insert_product_data($data)
{

	$name=$data["name"];
	$price=$data["price"];
	$description=$data["description"];
	$add_by_user=$data["add_by_user"];
	$query=$this->db->where(["name"=>$name,"price"=>$price])->get('product');
	

	if($query->num_rows()==0)
	{
		$return=$this->db->insert('product',$data);
		return true;
	}

}
function listProduct_model($name)
{

$query=$this->db->where(["add_by_user"=>$name])->order_by('id','desc')->get('product');


$result=$query->result();

return $result;
}
function editProduct($id)
{
	$query=$this->db->where(["id"=>$id])->get('product');


$result=$query->result_array();


return $result;
}

function update_product_model($data,$id)
{

	$name=$data["name"];
	$price=$data["price"];
	$description=$data["description"];
			$query=$this->db->where(["name"=>$name,"price"=>$price,"description"=>$description])->get('product');
if($query->num_rows()==0)
{$return =$this->db->where(["id"=>$id])->update('product',$data);
	return $return;
	}



	
}
function deleteProduct($id)
{
$return=$this->db->delete('product',["id"=>$id]);

return $result;
}
}
?>