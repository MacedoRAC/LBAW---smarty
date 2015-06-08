<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {block name="cssFiles"}
    <!-- Bootstrap CSS -->
    <link href="{$BASE_URL}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$BASE_URL}css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- FONT AWSOME -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Other CSS files -->
    <link href="{$BASE_URL}css/navbar.css" rel="stylesheet">
    {/block}

    
    <link rel = "shortcut icon" href = "{$BASE_URL}images/favicon.png') }}">
    <title>UpFAQ</title>
  </head>
  <body>
    <div class="row">
        {include file='common/navbar_admin.tpl'}
    </div>
    
    <div id="admin" class="container">
       <div class="col-sm-12 col-xs-12 admin_block  admin_users_block">
           <div class="field col-xs-12 col-sm-5">
              <img class="col-sm-3" src="" alt="">
              <p class="col-sm-9">Nome user</p>
              <div class="btns col-sm-offset-2 col-sm-9">
                  <a class="col-sm-offset-2 col-sm-5"> Send to BlackList </a>
                  <a class="col-sm-5"> Delete user </a>
              </div>
               
           </div>
       </div>
       
       <div class="col-sm-12 col-xs-12 admin_block admin_question_block">
           <div class="field col-xs-12 col-sm-5">
              <p class="col-sm-12">questions</p>
              <div class="btns col-sm-12">
                  <a class="col-sm-3"> Delete </a>
                  <a class="col-sm-3"> Block </a>
                  <a class="col-sm-3"> Edit </a>
              </div>
               
           </div>
       </div>
       
       <div class="col-sm-12 col-xs-12 admin_block admin_answer_block">
           <div class="field col-xs-12 col-sm-5">
              <p class="col-sm-9">resposta bla bla bla blabla bla bla bla</p>
              <div class="btns col-sm-9">
                  <a class="col-sm-offset-2 col-sm-3"> Delete </a>
               </div>
           </div>
       </div>
       
       <div class="col-sm-12 col-xs-12 admin_block  admin_comment_block">
           <div class="field col-xs-12 col-sm-5">
              <p class="col-sm-9">comment bla bla bla blabla bla bla bla</p>
              <div class="btns col-sm-9">
                  <a class="col-sm-offset-2 col-sm-3"> Delete </a>
               
               </div>
           </div>
        </div>     
        
    </div>
    </body>
<footer>
    <!-- JQuery -->
	<script src="{$BASE_URL}javascript/jquery-2.1.3.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="{$BASE_URL}javascript/bootstrap.min.js"></script>
	<!-- SCRIPT -->
	<script src="{$BASE_URL}javascript/script.js"></script>
</footer>
</html>
