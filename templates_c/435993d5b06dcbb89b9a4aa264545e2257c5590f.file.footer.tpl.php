<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 03:02:51
         compiled from "C:\wamp\www\frmk\templates\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3220955763b3b510b53-39317691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '435993d5b06dcbb89b9a4aa264545e2257c5590f' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\common\\footer.tpl',
      1 => 1433809590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3220955763b3b510b53-39317691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55763b3b59e1a3_31769433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55763b3b59e1a3_31769433')) {function content_55763b3b59e1a3_31769433($_smarty_tpl) {?><div id="myFooter">
	<div class="container">
		<div class = "col-lg-6 col-md-6 col-sm-6 col-xs-12" id = "form">
			<h3 class = "introdutoryText">Help Us Helping YOU</h3>

			
			<!-- Name Form Input -->
			<div class="form-group">
				<div class="col-sm-12">
					<input class="form-control" placeholder="Name" name="name" type="text" id="name">
				</div>

				<div class="col-sm-12">
				</div>
			</div>

			<!-- Email Form Input -->
			<div class="form-group">
				<div class="col-sm-12">
					<input class="form-control" placeholder="Email" name="email" type="email" id="email">
				</div>

				<div class="col-sm-12">
				</div>
			</div>

			<!-- Subject Form Input -->
			<div class="form-group">
				<div class="col-sm-12">
					<textarea class="form-control" rows="4" placeholder="Message" name="message" cols="50"></textarea>
				</div>

				<div class="col-sm-12">
				</div>
			</div>

			<div class = "form-group">
				<div class = "col-sm-12">
					<button type = "submit" class = "btn btn-default pull-right" id = "submitBtn">Send</button>
				</div>
			</div>

		</div>
	</div>
</div>
	</div>
</body>
<footer>

	
    
	<!-- JQuery -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery-2.1.3.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/bootstrap.min.js"></script>
	<!-- SCRIPT -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/script.js"></script> 
	
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/slick.min.js"></script>
    
</footer>
</html><?php }} ?>
