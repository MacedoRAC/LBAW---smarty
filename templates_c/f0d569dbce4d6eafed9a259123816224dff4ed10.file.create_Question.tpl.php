<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 04:28:38
         compiled from "C:\wamp\www\frmk\templates\create_Question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2865655764f5678f9b8-08166127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d569dbce4d6eafed9a259123816224dff4ed10' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\create_Question.tpl',
      1 => 1433811991,
      2 => 'file',
    ),
    '5c7f65b78f0df505b0369bb4a526b6ddd11f4138' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\common\\header.tpl',
      1 => 1433816514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2865655764f5678f9b8-08166127',
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
  'unifunc' => 'content_55764f569f7c31_23338018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55764f569f7c31_23338018')) {function content_55764f569f7c31_23338018($_smarty_tpl) {?><!DOCTYPE html>
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
css/createQuestion.css" rel="stylesheet">


    
    <link rel = "shortcut icon" href = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/favicon.png') }}">
    <title>UpFAQ</title>
  </head>
  <body>
    <div class="row">
        <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
        <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ('common/navbar_logged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ('common/navbar_unlogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        
    <<?php ?>?php include_once($BASE_DIR . 'database/answers.php'); $c = extractAnswersFromQuestion(1); ?<?php ?>>
	<div class="container">
	    <div class="title">
	        <h1> Create a new Question !</h1>
	    </div>
        
        <div class="opt_btn">
            <button class="btn-active opt_btn2 open_answer" type="button" id="openAnswerButton">
                Open Answer
            </button>
            <button class="opt_btn2 multi_choice" type="button" id="multipleChoiceButton">
                Multiple Choice
            </button>
        </div>
        
        
        <!-- QUESTION INFORMATION -->
        <form id="createQuestionForm" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/api/createQuestion.php" method="POST" enctype="application/x-www-form-urlencoded">
            <input id="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" />
            <div class="form-group">
                    <div class="col-sm-12">
                        <input class="form-control" placeholder="Question" name="question" type="text" id="createQuestionText">
                    </div>

                    <div class="col-sm-12">
                    </div>
                </div>
                
                 <div class="multi-field-wrapper tags_panel">
                    <div class="multi-fields">
                        <ul class="multi-field-tag col-sm-3">
                            <li><input class="col-sm-12 form-control" type="text" placeholder="TAG" name="tags[]" class="tag" id="tags"></li>
                        </ul>
                     </div>
                     <div class="add_btns col-sm-2">
                         <button type="button" class="opt_btn3 add-field-tag col-sm-6">Add field</button>
                         <button type="button" class="opt_btn3 remove-field-tag col-sm-6"> Remove </button>
                     </div>
                </div>
                
                <div class="hidden multi-field-wraper choices_panel">
                   <div class="multi-fields">
                       <ul class="multi-field-choice col-sm-5">
                            <li>
                                <input class="col-sm-12 form-control" type="text" placeholder="Choices" name="choices[]" id="choices">
                            </li>
                        </ul>
                    </div>
                    <div class="add_btns col-sm-2">
                        <button type="button" class="opt_btn3 add-field-choice col-sm-8">Add field</button>
                        <button type="button" class="opt_btn3 remove-field-choice col-sm-8"> Remove </button>
                    </div>
                </div>                

                <div class = "form-group">
                    <div class = "col-sm-12 ask_pad">
                        <button type = "submit" class = "ask_btn" id="createQuestionButton">Ask</button>
                    </div>
                </div>
			</form>
	</div>
</div>




        <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
