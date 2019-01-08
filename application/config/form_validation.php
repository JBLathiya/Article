<?php

$config= [
	'admin_login' =>[ 
	        [
	        'field'=> 'username',
            'label'=> 'User Name',
            'rules' => 'required|alpha|trim',
            
           ],
           [
           	'field'=> 'password',
           	'label' =>'Password',
           	'rules' => 'required',
           ] 
           ],
'add_article_rule'  =>[ 
	        [
	        'field'=> 'title',
            'label'=> 'Article Title',
            'rules' => 'required',
            
           ],
           [
           	'field'=> 'body',
           	'label' =>'Article Body',
           	'rules' => 'required',
           ],
           [  
            'field'=> 'userfile',
            'label' =>'Select image',
            'rules' => 'not required',
           ]  

          	],
'signup' => [ 
          [
          'field'=> 'uname',
            'label'=> 'User Name',
            'rules' => 'required|alpha|trim',
            
           ],
           [
            'field'=> 'pword',
            'label' =>' Password',
            'rules' => 'required',
           ],
           [
            'field'=> 'rpword',
            'label' =>'Retype Password',
            'rules' => 'required',
           ],
            
           [
          'field'=> 'fname',
            'label'=> 'First Name',
            'rules' => 'required|alpha',
            
           ],
            [
          'field'=> 'lname',
            'label'=> 'Last Name',
            'rules' => 'required|alpha',
            
           ]
         ],


];
        