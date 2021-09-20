<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <!--  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"> -->
</head>
<body style="background-color: #e6e6ff;">
 <?php if($this->session->flashdata('data')){?>
  <div class="modal" tabindex="-1" role="dialog" style="display: block;margin: auto;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <!--   <h5 class="modal-title">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?=$this->session->flashdata('data');?></p>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-primary">OK</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>
<?php }?>

 <div class="container-fluid" >
<p style="float: left;font-weight: bold;">Logged In User : <?=$this->session->userdata('name');?></p>
<p style="float: right;font-weight: bold;"><a href="<?=base_url('Login/logout')?>">Logout</a></p>
    <div class="panel panel-default" style="width:1000px;margin:100px auto;">

  <table id="table_id" class="table table-striped table-bordered table-hover table-responsive-lg" cellspacing="0" cellpadding="0"  style="padding:10px" width="100%">
 <button style="position: relative;
    left: 890px;margin:2px;" class="btn btn-success" ><a href="<?=base_url();?>Login/addProduct" style="color: white;text-decoration: none;">Add Product</a></button>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Add By User</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
         
        </tr>
    </thead>
    <tbody>
      <?php 
$i=1;

      foreach($data as $value){?>
        <tr>
            <td><?=$i?></td>
            <td><?=$value->name?></td>
            <td><?=$value->description?></td>
            <td><?=$value->price?></td>
            <td><?=$value->add_by_user?></td>
            <td><?=$value->created_at?></td>
            <td><?=$value->updated_at?></td>
        <td >
          <form action="<?=base_url('Login/deleteProduct/');?>" method="post"><input type="hidden" value="<?=$value->ID?>" name="id"><button type="submit" class="btn btn-warning">Delete</button></form>
            <form action="<?=base_url('Login/editProduct/');?>" method="post"><input type="hidden" value="<?=$value->ID?>" name="id"><button type="submit" class="btn btn-primary">Edit</button></form>
          </td>
           
         
        </tr>
       <?php $i++; }?>
    
    </tbody>
</table>

 </div>
</div>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>

  <script>
  $(function(){
    $("#table_id").dataTable();
  });
   $(".close").click(function(){
    $(".modal").hide();
  });
  
  </script>
</body>
</html>