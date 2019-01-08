<?php include_once('public_header.php'); ?>

 
 <div class="container">
  
  	<?php echo form_open('Login/signup',['class'=>'form-horizontal']); ?>
 <fieldset>   
    <legend>Sign Up</legend>
    <?php if($sign_upfailed = $this->session->flashdata('sign_upfailed')): ?>
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
      <?php echo form_input(['name'=>'uname','class'=>'form-control','placeholder'=>'Username','value'=>set_value('uname')]); ?>
    </div>
</div>
</div>
<div class="col-lg-6"></div>
<?php echo form_error('uname'); ?>
</div>
   <div class="row">
   	 <div class="col-lg-6">
      <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <div class="col-lg-10">
      <?php echo form_password(['name'=>'pword','class'=>'form-control','placeholder'=>'Password','value'=>set_value('pword')]); ?>
    </div>
</div>
</div>
<div class="col-lg-6"></div>
<?php echo form_error('pword'); ?>
</div>
<div class="row">
     <div class="col-lg-6">
      <div class="form-group">
      <label for="exampleInputPassword1">Retype Password</label>
      <div class="col-lg-10">
      <?php echo form_password(['name'=>'rpword','class'=>'form-control','placeholder'=>'Retype Password','value'=>set_value('rpword')]); ?>
    </div>
</div>
</div>
<div class="col-lg-6"></div>
<?php echo form_error('rpword'); ?>
</div>

<div class="row">
     <div class="col-lg-6">
      
      <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'fname','class'=>'form-control','placeholder'=>'Firstname','value'=>set_value('fname')]); ?>
    </div>
</div>
</div>
<div class="col-lg-6"></div>
<?php echo form_error('fname'); ?>
</div>
<div class="row">
     <div class="col-lg-6">
      
      <div class="form-group">
      <label for="exampleInputEmail1">Last Name</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'lname','class'=>'form-control','placeholder'=>'Lastname','value'=>set_value('lname')]); ?>
    </div>
</div>
</div>
<div class="col-lg-6"></div>
<?php echo form_error('lname'); ?>
</div>
    <?php echo form_reset(['name'=>'Cancel','value'=>'Cancel','class'=>'btn btn-default']); ?>
    <?php echo form_submit(['name'=>'submit','value'=>'submit','class'=>'btn btn-primary']); ?>
</fieldset>    
<?php include_once('public_footer.php'); ?>
   