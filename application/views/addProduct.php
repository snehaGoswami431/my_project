<!DOCTYPE html>
<html>
<head>
 <title>Complete User Registration and Login System in Codeigniter</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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

 <div class="container">

  <br />
<p style="float: left;font-weight: bold;">Logged In User : <?=$this->session->userdata('name');?></p>
<p style="float: right;font-weight: bold;"><a href="<?=base_url('Login/logout')?>">Logout</a></p>
<br/>
  <h3 align="center">Add Product</h3>
  <br />
  <div class="panel panel-default" style="width:500px;margin: auto;">
  
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>Login/insert_product">
      <div class="form-group">
      <label>Enter Product Name</label>
      <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" />
      <span class="text-danger"><?php echo form_error('name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Product Price</label>
      <input type="number" name="price" class="form-control" value="<?php echo set_value('price'); ?>" />
      <span class="text-danger"><?php echo form_error('price'); ?></span>
     </div>
  
     <div class="form-group">
      <label>Enter Product Description</label>
      <input type="text" name="description" class="form-control" value="<?php echo set_value('description'); ?>" />
      <span class="text-danger"><?php echo form_error('description');?></span>
     </div>
     <div class="form-group" style="">
      
      <input type="hidden" name="add_by_user" class="form-control" value="<?php echo $this->session->userdata('name'); ?>">
     
     </div>

     <div class="form-group">
      <input type="submit" name="add" value="Add" class="btn btn-info" />
        
     </div>
<a href="<?php echo base_url('Login/dashboard'); ?>">Back</a>
    </form>
   </div>
  </div>
 </div>
</body>
<script type="text/javascript">
  $(".close").click(function(){
    $(".modal").hide();
  })
</script>
</html>