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
<!-- <?php //echo validation_errors(); ?> -->

  <h3 align="center">Login Yourself</h3>
  <br />
  <div class="panel panel-default" style="width:500px;margin: auto;">
   <div class="panel-heading">Login</div>
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>login/validation">
     <div class="form-group">
      <label>Enter Your Username</label>
      <input type="email" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
  
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password');?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Login" class="btn btn-info" />
        <a href="<?=base_url('register');?>">Not yet register? click to register</a>
     </div>

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