<?php include_once('admin_header.php'); ?>
<div class="container">
	 <?php echo form_open_multipart('admin/store_article',['class'=>'form-horizontal']); ?>
	 <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
   <?php echo form_hidden('created_at', date('Y-m-d H:i:s')) ?> 
  <fieldset> 
  	
    <legend>Add Article</legend>
    

      <div class="row">
        <div class="col-lg-6">
   	 	    <div class="form-group">
      <label for="exampleInputArticleTitle">Article Title*</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','value'=>set_value('title')]); ?>
      </div>
    </div>
      </div>
      <div class="col-lg-6">
      <?php echo form_error('title'); ?>
      </div>
    </div>  
      <div class="row">
   	    <div class="col-lg-6">
          <div class="form-group">
      <label for="exampleInputArticleBody">Article Body*</label>
      <div class="col-lg-10">
      <?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article body','value'=>set_value('body')]); ?>
      </div>
    </div>
      </div>
      <div class="col-lg-6">
      <?php echo form_error('body'); ?>
      </div>
    </div>  

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
      <label for="exampleInputArticleTitle">Select Image</label>
      <div class="col-lg-10">
      <?php echo form_upload(['name'=>'userfile','class'=>'form-control','value'=>set_value('userfile')]); ?>
      </div>
    </div>
      </div>
      <div class="col-lg-6"></div>
      <?php if(isset($upload_error)) echo $upload_error ?>
      </div>
    </div>
    <div class="container">
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
        <?php echo form_reset(['name'=>'cancel','value'=>'Cancel','class'=>'btn btn-default']); 
        echo form_submit(['name'=>'submit','value'=>'submit','class'=>'btn btn-primary']); ?>
        </div>
      </div>
    </div>  
  </fieldset>
</div>        
<?php include_once('admin_footer.php'); ?>