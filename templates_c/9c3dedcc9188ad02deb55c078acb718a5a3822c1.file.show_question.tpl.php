<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 08:50:11
         compiled from "C:\wamp\www\frmk\templates\show_question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123965576514868e008-76029261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c3dedcc9188ad02deb55c078acb718a5a3822c1' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\show_question.tpl',
      1 => 1433832606,
      2 => 'file',
    ),
    '5c7f65b78f0df505b0369bb4a526b6ddd11f4138' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\common\\header.tpl',
      1 => 1433817309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123965576514868e008-76029261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55765148a1c987_09328187',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55765148a1c987_09328187')) {function content_55765148a1c987_09328187($_smarty_tpl) {?><!DOCTYPE html>
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
css/showQuestion.css" rel="stylesheet">


    
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

        
<div id="questAnsCont" class="container">
	<input type="hidden" id="questionID" value="<?php echo $_smarty_tpl->tpl_vars['QUESTION']->value->getQuestionID();?>
">
	<input type="hidden" id="thumbsURL" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/api/thumbs.php">
	<input type="hidden" id="userID" value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
">
	<div class="col-lg-8">
		<!-- QUESTION -->
		<div id="questHolder" class="col-lg-12">
			<div class="header col-lg-12">
				<div class="photoAndName col-lg-2">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.png" class="col-lg-12">
					<h5 class="username col-lg-12"><?php echo $_smarty_tpl->tpl_vars['QUESTION']->value->getCreatorName();?>
</h5>
				</div>
				<div class="col-lg-10">
					<p class="creationDate col-lg-12 text-muted"><?php echo $_smarty_tpl->tpl_vars['QUESTION']->value->getDate();?>
</p>

					<h3 class="question col-lg-12"><?php echo $_smarty_tpl->tpl_vars['QUESTION']->value->getText();?>
</h3>
					<ul class="tags col-lg-12">
						<li>Porto</li>
						<li>FEUP</li>
					</ul>
					<?php if ($_smarty_tpl->tpl_vars['USER_ID']->value!=$_smarty_tpl->tpl_vars['QUESTION']->value->getCreatorID) {?>
					<ul class="icons col-lg-12 not_owner">
					    <li><a class="follow_js">Follow</a></li>
						<li><a data-toggle="modal" data-target="#AnswerModal">Answer</a></li>
						<li class="pos_vot"><?php echo $_smarty_tpl->tpl_vars['QUESTION']->value->getTu();?>
&nbsp;<a id="questionTu"><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
						<li class="neg_vot"><?php echo $_smarty_tpl->tpl_vars['QUESTION']->value->getTd();?>
&nbsp;<a id="questionTd"><i class="glyphicon glyphicon-thumbs-down"></i></a></li>
					</ul>
					<?php } else { ?>
					<ul class="icons col-lg-12 owner">
					    <li><a data-toggle="modal" data-target="#AnswerModal">Answer</a></li>
					    <li class="block_question"><a>Block</a></li>
					</ul>
					<?php }?>
				</div>
			</div>
		</div>

        <div id="AnswerModal" class="modal fade modal_bg" role="dialog">
            <div class="modal-dialog modal-xs">
                <form class="" action="POST" id="answer_form">
                    <div class="col-sm-12">
                        <textarea name="answer" class="col-sm-12" cols="80" rows="16" form="answer_form" placeholder="Write here your answer ..."></textarea>
                        <button type="submit" class="col-lg-3 col-sm-3 modal_btn"> Answer </button>
                    </div>
                </form>
            </div>
        </div>

		<!-- ANSWER -->
		<div class="ansHolder col-lg-offset-2 col-lg-10">
			<?php  $_smarty_tpl->tpl_vars['ans'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ans']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['QUESTION']->value->getAnswers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ans']->key => $_smarty_tpl->tpl_vars['ans']->value) {
$_smarty_tpl->tpl_vars['ans']->_loop = true;
?>
				<div class="header col-lg-12">
					<div class="photoAndName col-lg-2">
						<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.png" class="col-lg-12">
						<h5 class="username col-lg-12"><?php echo $_smarty_tpl->tpl_vars['ans']->value->getCreatorName();?>
</h5>
					</div>
					<div class="col-lg-10">
						<p class="creationDate col-lg-12 text-muted"><?php echo $_smarty_tpl->tpl_vars['ans']->value->getDate();?>
</p>

						<p class="answer col-lg-12"><?php echo $_smarty_tpl->tpl_vars['ans']->value->getText();?>
</p>
						<ul class="icons col-lg-12">
							<li><a data-toggle="modal" data-target="#CommentModal">Comment</a></li>
							<li value="<?php echo $_smarty_tpl->tpl_vars['ans']->value->getID();?>
" class="pos_vot"><?php echo $_smarty_tpl->tpl_vars['ans']->value->getTu();?>
&nbsp;<a class="thumbsUpAnswer"><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
							<li value="<?php echo $_smarty_tpl->tpl_vars['ans']->value->getID();?>
" class="neg_vot"><?php echo $_smarty_tpl->tpl_vars['ans']->value->getTd();?>
&nbsp;<a class="thumbsDownAnswer"><i class="glyphicon glyphicon-thumbs-down"></i></a></li>
						</ul>
					</div>
				</div>

				<!-- Comment -->
				<div class="comHolder col-lg-offset-3 col-lg-9">
					<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ans']->value->getComments(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
						<div class="header col-lg-12">
							<div class="photoAndName col-lg-2">
								<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.png" class="col-lg-12">
								<h5 class="username col-lg-12"><?php echo $_smarty_tpl->tpl_vars['comment']->value->getCreatorName();?>
</h5>
							</div>
							<div class="col-lg-10">
								<p class="creationDate col-lg-12 text-muted"><?php echo $_smarty_tpl->tpl_vars['comment']->value->getDate();?>
</p>

								<p class="comment col-lg-12"><?php echo $_smarty_tpl->tpl_vars['comment']->value->getText();?>
</p>
								<ul class="icons col-lg-12">
									<!--<li class="pos_vot"><?php echo $_smarty_tpl->tpl_vars['comment']->value->getTu();?>
&nbsp;<a><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
									<li class="neg_vot"><?php echo $_smarty_tpl->tpl_vars['comment']->value->getTd();?>
&nbsp;<a><i class="glyphicon glyphicon-thumbs-down"></i></a></li>-->
								</ul>
							</div>
						</div>
					<?php } ?>	
				</div>
			<?php } ?>	
		</div>

        <div id="CommentModal" class="modal fade modal_bg" role="dialog">
            <div class="modal-dialog modal-xs">
                <form class="" action="POST" id="comment_form">
                    <div class="col-sm-12">
                        <textarea name="comment" class="col-sm-12" cols="80" rows="16" form="comment_form" placeholder="Write here your comment ..."></textarea>
                        <button type="submit" class="col-lg-3 col-sm-3 modal_btn"> Comment </button>
                    </div>
                </form>
            </div>
        </div>

		
	</div>

	<div class="col-lg-offset-1 col-lg-3" id="sideBarHighlights">
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
			        	<?php  $_smarty_tpl->tpl_vars['quest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MOST_VOTED_QUESTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quest']->key => $_smarty_tpl->tpl_vars['quest']->value) {
$_smarty_tpl->tpl_vars['quest']->_loop = true;
?>
			        	<li class="col-lg-12">
			        		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<p class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['quest']->value['texto'];?>
</p>
			        	</li>
			        	<?php } ?>
			        </ul>
			      </div>
			    </div>
			  </div>
		</div>

		<div class="accordion" id="topUsers">
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
images/assets/default.png" alt="" class="userPhoto col-lg-3">
		        		<div class="col-lg-4 totalPoints">
		        			<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['pontuacao'];?>
</h2>
		        			<p>points</p>
		        		</div>

		        		<div class="col-lg-5 thumbsUpDown">
		        			<p><i class="glyphicon glyphicon-thumbs-up"></i><?php echo $_smarty_tpl->tpl_vars['user']->value['positivos'];?>
</p>
		        			<p><i class="glyphicon glyphicon-thumbs-down"></i><?php echo $_smarty_tpl->tpl_vars['user']->value['negativos'];?>
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

</div>



        <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
