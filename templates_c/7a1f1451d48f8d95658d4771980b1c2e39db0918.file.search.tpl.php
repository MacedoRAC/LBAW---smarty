<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 09:42:42
         compiled from "C:\wamp\www\frmk\templates\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1906455768e3a4cf5c8-98372171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a1f1451d48f8d95658d4771980b1c2e39db0918' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\search.tpl',
      1 => 1433835760,
      2 => 'file',
    ),
    '5c7f65b78f0df505b0369bb4a526b6ddd11f4138' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\common\\header.tpl',
      1 => 1433817309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1906455768e3a4cf5c8-98372171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55768e3a76d538_00297754',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55768e3a76d538_00297754')) {function content_55768e3a76d538_00297754($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Bootstrap CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- FONT AWSOME -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Other CSS files -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/navbar.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/footer.css" rel="stylesheet">
    
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/searchPage.css" rel="stylesheet">


    
    <link rel = "shortcut icon" href = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/favicon.png') }}">
    <title>UpFAQ</title>
  </head>
  <body>
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ('common/navbar_logged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ('common/navbar_unlogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        
<div id="searchPage" class="container">
	<!-- FILTERS -->
            <div class="col-sm-2 filters">
                <div class="col-sm-12">
                    <h3> Filters </h3>
                </div>
                <div class="col-sm-12">
                    <button class="col-sm-12 optn search_questions"> Questions </button>
                    <!--<button class="col-sm-12 optn search_tags"> TAGs </button>
                    <button class="col-sm-12 optn search_users"> Users </button>-->
                    <button class="col-sm-12 optn search_answers"> Answers </button>
                    <button class="col-sm-12 optn search_comments"> Comments </button>
                </div>
                <div class="col-sm-12">
                    <h3> Order Results </h3>
                </div>
                <div class="col-sm-12">
                    <button class="col-sm-12 optn2"> Most Recent </button>
                    <button class="col-sm-12 optn2"> Better ratio </button>
                </div>
            </div>
            
            <!-- RESULTS -->
            <div class="col-sm-10 results">
               <div class="col-sm-12 search_questions_results">
                   <h1 class="col-sm-12"> QUESTIONS </h1>
                   <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SEARCH_QUESTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
                   <div class="col-sm-3">
                       <a class="col-sm-12" href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
showQuestion.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['idpost'];?>
"><?php echo $_smarty_tpl->tpl_vars['question']->value['texto'];?>
</a>
                       <span class="col-sm-offset-2 col-sm-4"> 20&nbsp; <a><i class="glyphicon glyphicon-thumbs-up"></i></a></span>
                       <span class="col-sm-4"> 3&nbsp; <a><i class="glyphicon glyphicon-thumbs-down"></i></a></span>
                   </div>
                   <?php } ?>
               </div>
               
               <!--<div class="col-sm-12 search_tags_results">
                   <h1 class="col-sm-12"> TAGS </h1>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
               </div>-->
               
               <!--<div class="col-sm-12 search_users_results">
                   <h1 class="col-sm-12"> USERS </h1>
                   <div class="col-sm-3">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.png" class="col-sm-4" alt="user_img">
                       <h2> Utilizador </h2>
                   </div>
                   <div class="col-sm-3">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.png" class="col-sm-4" alt="user_img">
                       <h2> Utilizador </h2>
                   </div>
                   <div class="col-sm-3">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.png" class="col-sm-4" alt="user_img">
                       <h2> Utilizador </h2>
                   </div>
                   <div class="col-sm-3">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.png" class="col-sm-4" alt="user_img">
                       <h2> Utilizador com um NOme ENORME</h2>
                   </div>
               </div>-->
               
               <div class="col-sm-12 search_answers_results">
                   <h1 class="col-sm-12"> ANSWERS </h1>
                   <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SEARCH_ANSWERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
                   <div class="col-sm-3">
                       <p><?php echo $_smarty_tpl->tpl_vars['answer']->value['texto'];?>
</p>
                   </div>
                   <?php } ?>
               </div>
               
               <div class="col-sm-12 search_comments_results">
                   <h1 class="col-sm-12"> COMMENTS </h1>
                   <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SEARCH_COMMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                   <div class="col-sm-3">
                       <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['texto'];?>
</p>
                   </div>
                   <?php } ?>
               </div>
            </div>
</div>



        <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
