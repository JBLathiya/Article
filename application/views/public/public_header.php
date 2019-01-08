<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>Articles List</title> 
    
     <?= link_tag('assets/css/bootstrap.min.css'); ?>
      
     
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Articles</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?= form_open('user/search',['class'=>'form-inline my-2 my-lg-0','role'=>'search']) ?>
    <!-- <form class="form-inline my-2 my-lg-0"> -->
      <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
   <?= form_close(); ?>
   <?= form_error('query',"<p class='navbar-text  text-warning'>",'</p>') ?>
    <ul class="navbar-brand navbar-dark bg-primary">
    	<li>
         <!-- <a href="http://localhost/CI/index.php/Login" style = "color:white; text-align:center;">Login</a></li>  -->
         <?= anchor('login','Login',['class'=>'btn btn-lg btn-primary pull-right']); ?>
         <?= anchor('login/signup','Sign Up',['class'=>'btn btn-lg btn-primary pull-right']); ?>
      </ul>
  </div>
</nav>