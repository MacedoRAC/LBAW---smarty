<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 12:24:01
         compiled from "/usr/users2/mieic2012/ei12098/public_html/frmk/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167725918255756d41cb9482-36704021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '700293ceca091991e95b6bad1b9a72639bfcadf5' => 
    array (
      0 => '/usr/users2/mieic2012/ei12098/public_html/frmk/templates/index.tpl',
      1 => 1433757026,
      2 => 'file',
    ),
    'd610913d179472d79a87158b9af7b1ac086e02cd' => 
    array (
      0 => '/usr/users2/mieic2012/ei12098/public_html/frmk/templates/common/header.tpl',
      1 => 1433757026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167725918255756d41cb9482-36704021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55756d420e45e6_80114232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55756d420e45e6_80114232')) {function content_55756d420e45e6_80114232($_smarty_tpl) {?><!DOCTYPE html>
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

        
	<div id="portoPhoto" class="col-lg-12">
		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/porto.jpg" alt="porto" class="col-lg-12">
	</div>

	<div class="container">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="top:-120px;">
			<div class="accordion" id="lastQuestions">
			  <div class="accordion-group">
			    <div class="accordion-heading col-lg-12">
			      <a class="accordion-toggle col-lg-1" data-toggle="collapse" data-parent="#lastQuestions" href="#collapseOne"><i class="glyphicon glyphicon-chevron-down"></i>
			      </a>
			      <p class="col-lg-10">Last created questions</p>
			    </div>
			    <div id="collapseOne" class="accordion-body collapse in">
			      <div class="accordion-inner col-lg-12">
			        <ul class="col-lg-12">
                        <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LAST_QUESTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
			        	<li class="col-lg-12">
			        		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/<?php echo $_smarty_tpl->tpl_vars['question']->value['avatarurl'];?>
" alt="" class="userPhoto col-lg-3">
			        		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/showQuestion.php"><p class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['question']->value['texto'];?>
?</p></a>
			        	</li>
                        <?php } ?>
			        </ul>
			      </div>
			    </div>
			  </div>
			</div>
			
			<div class="accordion" id="topQuestions">
			  <div class="accordion-group">
			    <div class="accordion-heading col-lg-12">
			      <a class="accordion-toggle col-lg-1" data-toggle="collapse" data-parent="#topQuestions" href="#collapseTwo">
			        <i class="glyphicon glyphicon-chevron-down"></i>
			      </a>
			      <p class="col-lg-10">Most voted questions</p>
			    </div>
			    <div id="collapseTwo" class="accordion-body collapse in">
			      <div class="accordion-inner col-lg-12">
			        <ul class="col-lg-12">
                        <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MOST_VOTED_QUESTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
			        	<li class="col-lg-12">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/<?php echo $_smarty_tpl->tpl_vars['question']->value['avatarurl'];?>
" alt="" class="userPhoto col-lg-3">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/showQuestion.php"><p class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['question']->value['texto'];?>
?</p></a>
			        	</li>
                        <?php } ?>
			        </ul>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="accordion col-lg-4 col-md-4 col-sm-12 col-xs-12" id="topUsers" style="top:-120px;">
		  <div class="accordion-group">
		    <div class="accordion-heading col-lg-12">
		      <a class="accordion-toggle col-lg-1" data-toggle="collapse" data-parent="#topUsers" href="#collapseThree">
		        <i class="glyphicon glyphicon-chevron-down"></i>
		      </a>
		      <p class="col-lg-10">Top users</p>
		    </div>
		    <div id="collapseThree" class="accordion-body collapse in">
		      <div class="accordion-inner col-lg-12">
		        <ul class="col-lg-12">
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MOST_VOTED_USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
		        	<li class="col-lg-12">
		        		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatarurl'];?>
" alt="" class="userPhoto col-lg-3">
		        		<div class="col-lg-4 totalPoints">
		        			<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['pontuacao'];?>
</h2>
		        			<p>points</p>
		        		</div>

		        		<div class="col-lg-5 thumbsUpDown">
		        			<p><i class="glyphicon glyphicon-thumbs-up"></i><?php echo $_smarty_tpl->tpl_vars['user']->value['tu_result'];?>
</p>
		        			<p><i class="glyphicon glyphicon-thumbs-down"></i><?php echo $_smarty_tpl->tpl_vars['user']->value['td_result'];?>
</p>
		        		</div>
		        	</li>
                    <?php } ?>
		        </ul>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

        <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LAST_QUESTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
            <h1><?php echo $_smarty_tpl->tpl_vars['question']->value['texto'];?>
</h1>
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/<?php echo $_smarty_tpl->tpl_vars['question']->value['avatarurl'];?>
" alt=""/>
        <?php } ?>


        <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
