<?php include_once('public_header.php'); ?>

 
  	<div class="container">
  	<?php echo form_open('Login/admin_login',['class'=>'form-horizontal']); ?>
 <fieldset>   
  	
    <legend>Admin login</legend>
    <?php if($sign_upfailed = $this->session->flashdata('sign_upfailed')):
        $error = $this->session->flashdata('login_failed');
     ?>
<div class="row">
  <div class="col-lg-6">
    <div class="alert alert-dismissible alert-warning">
        <?= $sign_upfailed ?>
    </div>
  </div>
</div>
 <?php endif;?> 

     <div class="row">
   	 <div class="col-lg-6">
   	 	
      <div class="form-group">
      <label for="exampleInputEmail1">User name</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]); ?>
    </div>
</div>
</div>
<div class="col-lg-6"></div>
<?php echo form_error('username'); ?>
</div>
   <div class="row">
   	 <div class="col-lg-6">
      <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <div class="col-lg-10">
      <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password','value'=>set_value('password')]); ?>
    </div>
</div>
</div>
<div class="col-lg-6"></div>
<?php echo form_error('password'); ?>
</div>
    <?php echo form_reset(['name'=>'Cancel','value'=>'Cancel','class'=>'btn btn-default']); ?>
    <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
</fieldset>    
<?php include_once('public_footer.php'); ?>
   