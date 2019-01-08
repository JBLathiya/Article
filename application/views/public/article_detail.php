<?php include_once('public_header.php'); ?>
<div class="container">
 <h1>
<?= $article->title ?>
</h1>

 <!-- <span class="pull-right"> -->
	  <h5> <?= date('d M y H:i:s' , strtotime($article->created_at)); ?> </h5>
<!-- </span> -->
<hr>
<p>
	<?= $article->body ?>
</p>
<?php if(! is_null($article->image_path)): ?>
<img src="<?= $article->image_path ?>"" alt="">
<br>
<br>

 
<?php endif; ?>

<?php include_once('public_footer.php'); ?>