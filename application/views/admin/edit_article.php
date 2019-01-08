<?php include_once('admin_header.php'); ?>
<div class="container">
	<?php echo form_open("admin/update_article/{$article->id}",['class'=>'form-horizontal']); ?>
	
 <fieldset>   
  	
    <legend>Edit Article</legend> 
    

     <div class="row">
   	 <div class="col-lg-6">
   	 	
      <div class="form-group">
      <label for="exampleInputArticleTitle">Article Title</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','value'=>set_value('title',
      $article->title)]); ?>
    </div>
</div>
</div>
<div class="col-lg-6"></div>
<?php echo form_error('title'); ?>
</div>
   <div class="row">
   	 <div class="col-lg-6">
      <div class="form-group">
      <label for="exampleInputArticleBody">Article Body</label>
      <div class="col-lg-10">

      <?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article body','value'=>set_value('body',
      $article->body)]); ?>

    </div>
</div>
</div>

<div class="col-lg-6"></div>
<?php echo form_error('body'); ?>
</div>

    <?php echo form_reset(['name'=>'cancel','value'=>'Cancel','class'=>'btn btn-default']); ?>
    <?php echo form_submit(['name'=>'submit','value'=>'submit','class'=>'btn btn-primary']); ?>
  
</fieldset> 
</form>  
	</div>
<?php include_once('admin_footer.php'); ?>