<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 04:36:10
         compiled from "C:\wamp\www\frmk\templates\show_perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110375576511a139749-90852806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d9d026e42f7685b72c8793f7bae9cfefabcf5f1' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\show_perfil.tpl',
      1 => 1433812012,
      2 => 'file',
    ),
    '5c7f65b78f0df505b0369bb4a526b6ddd11f4138' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\common\\header.tpl',
      1 => 1433817309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110375576511a139749-90852806',
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
  'unifunc' => 'content_5576511a76f5b3_77670194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5576511a76f5b3_77670194')) {function content_5576511a76f5b3_77670194($_smarty_tpl) {?><!DOCTYPE html>
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
css/showProfile.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/slick.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/slick-theme.css" rel="stylesheet">


    
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

        
<div id="profile_information">
	<div class="container">
		<div class="col-lg-3 avatar">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/ppic.jpg" alt="profile avatar">
		</div>
		<div class="col-lg-9 info">
			<div class="col-lg-7">
				<h2 class="col-xs-10 name">Pedro Lemos Faria</h2>
				
				<div class="col-lg-12 contactCont">
                    <span class="col-lg-2 glyphicon glyphicon-user social col-lg-2"></span>
					<p class="social_text col-lg-8">NICKNAME</p>
					
				</div>
				<div class="col-lg-12 contactCont">
					<span class="col-lg-2 social glyphicon glyphicon-envelope"></span>
					<p class="social_text col-lg-8">example&#64gmail.com</p>
					
				</div>
				<div class="col-xs-12 contactCont">
					<span class="col-xs-2 social glyphicon glyphicon-phone"></span>
					<p class="social_text col-xs-8">+351 910000000</p>
					
				</div>
				<div class="col-xs-12 contactCont">
					<span class="col-xs-2 social glyphicon glyphicon-calendar"></span>
					<p class="social_text col-xs-8">1994-10-02</p>
					
				</div>
			</div>

			<div class="col-lg-5 rating">
				<div class="month">
					<h4>Rate this month</h4>
					<p class="profile_votes2">
						<i class="glyphicon glyphicon-thumbs-up"></i>
						20
						<i class="voting2 glyphicon glyphicon-thumbs-down"></i>
						5
					</p>
				</div>
				<div class="overall">
					<h4>Overall rate</h4>
					<p class="profile_votes2">
						<i class="glyphicon glyphicon-thumbs-up"></i>
						63
						<i class="voting2 glyphicon glyphicon-thumbs-down"></i>
						8
					</p>
				</div>
			</div>
		</div>

		<div class="bio col-lg-12">
			<h3>About Me</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nesciunt commodi dolorem incidunt, necessitatibus, porro accusantium officia illum minima repellat nam tenetur molestias numquam, pariatur possimus. Nemo repellat fuga optio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint excepturi assumenda quibusdam repellendus, esse labore voluptates praesentium culpa fugit dolorum, sunt in atque modi aliquam accusantium consectetur voluptas qui molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia culpa quibusdam rem, sit tenetur, consequatur. Numquam dolorem quo itaque dignissimos, iure dolor, alias omnis, explicabo id unde aliquam. Explicabo, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ab fugit id dolor, mollitia reiciendis doloremque optio quod eius? Aut vel placeat ipsam accusantium consequuntur, quasi temporibus! Dignissimos, quasi, quibusdam.</p>
		</div>
	</div>

	<div class="achievements">
		<div class="container">
			<img class="col-lg-offset-3 col-lg-6 image_banner" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/banner_achievents.png" alt="Achivements">

			<div class="carousel col-lg-offset-3 col-lg-6">
			    <div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/achiev1.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question!</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
			    <div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/achiev2.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/achiev1.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/achiev2.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/achiev1.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/achiev2.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/achiev1.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/achiev2.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
			</div>

		</div>
	</div>
</div>




        <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
