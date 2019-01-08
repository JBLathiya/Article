<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>Admin panel</title> 
    
     <?= link_tag('assets/css/bootstrap.min.css'); ?>
   
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
    <ul class="navbar navbar-nav navbar-right">
    	<li>
       <!-- <a href="http://localhost/Ci/index.php/login/logout" style ="color:white; text-align:center;" >Logout</a>-->
        <?= anchor('login/logout','Logout',['class'=>'btn btn-lg btn-primary pull-right']); ?>
      </li>

    </ul>
  </div>
  </div>
</nav>