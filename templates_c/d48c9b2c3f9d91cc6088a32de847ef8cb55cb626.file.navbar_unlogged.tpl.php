<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 03:17:44
         compiled from "C:\wamp\www\frmk\templates\common\navbar_unlogged.tpl" */ ?>
<?php /*%%SmartyHeaderCode:946455763b3b3c12e8-63600499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd48c9b2c3f9d91cc6088a32de847ef8cb55cb626' => 
    array (
      0 => 'C:\\wamp\\www\\frmk\\templates\\common\\navbar_unlogged.tpl',
      1 => 1433812640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '946455763b3b3c12e8-63600499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55763b3b41f0d2_01877700',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55763b3b41f0d2_01877700')) {function content_55763b3b41f0d2_01877700($_smarty_tpl) {?><nav class="navbar navbar-default" id="myNavbar">
    <div class="container-fluid container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/homepage.php">
                <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo-branco.svg" alt="UpFAQ_logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="menuOptions">
                <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/homepage.php">Home</a></li>

                <li><a href="#">Tags</a></li>

                <li>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" id="search">

                            <button type="submit" class="btn btn-default" id="searchBtn"><i class="fa fa-search fa-lg"></i>
                            </button>
                        </div>
                    </form>
                </li>


                <li>
                    <a href="#" data-toggle="modal" data-target="#signInModal">Sign In</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<!-- SIGN IN MODAL -->
<div id="signInModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Sign In</a></li>
                        <li><a href="#tab2" data-toggle="tab">Register</a></li>
                        <li><a href="#tab3" data-toggle="tab">Forgot Password</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <h4 class="col-lg-10 col-lg-offset-1">Don't loose more time...SIGN IN!</h4>
                            <form id="signin_form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/api/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                                <!-- Email Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="email" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Email</label>
                                    <div class=" col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Email" name="email" type="email" id="email">
                                    </div>
                                </div>

                                <!-- Password Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="password" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Password</label>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Password" name="password" type="text" id="password">
                                    </div>
                                </div>

                                <!-- errors -->
                                <div class="errors"></div>
                                <div class="col-xs-12">
                                    <div class="col-xs-offset-3 col-xs-3">
                                        <div class = "form-group" style="border: none;">
                                            <div class = "col-xs-12 btnCont">
                                                <button type = "submit" class = "btn btn-default" id = "loginSubmitButton">Sign In</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="modal-footer">
                                            <button type="button" id="btn_cancel_lined" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <h4 class="col-lg-10 col-lg-offset-1">Do you need help? SIGN UP now!</h4>
                            <form id="signupForm" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/api/signup.php" method="POST" enctype="application/x-www-form-urlencoded">
                                <!-- Name Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="name" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Name</label>
                                    <div class=" col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Name" type="text" id="signupName">
                                    </div>
                                </div>

                                <!-- UserName Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="Username" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Username</label>
                                    <div class=" col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Username" type="text" id="signupUsername">
                                    </div>
                                </div>
                                
                                <!-- UserName Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="Username" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Username</label>
                                    <div class=" col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Username" name="username" type="text">
                                    </div>
                                </div>

                                <!-- Email Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="email" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Email</label>
                                    <div class=" col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Email" type="email" id="signupEmail">
                                    </div>
                                </div>

                                <!-- Password Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="password" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Password</label>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Password" type="text" id="signupPassword">
                                    </div>
                                </div>

                                <!-- Repeat Password Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="password2" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Password</label>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Repeat Password" type="text" id="signupPassword2">
                                    </div>
                                </div>


                                    <!-- Phone Number Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="Phone Number" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Phone Number</label>
                                    <div class=" col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Phone number" name="phone" type="tel" id="signupPhoneNumber">
                                    </div>
                                </div>

                                <!-- Date of Birth Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="Date of Birth" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Date of Birth</label>
                                    <div class=" col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="dd/mm/yyyy" name="date_birth" type="date" id="signupDateBirth">
                                    </div>
                                </div>

                                <div class = "form-group" style="border: none;">
                                    <div class="col-xs-12">
                                        <div class="col-xs-offset-3 col-xs-3">
                                            <div class = "col-xs-12 btnCont">
                                                <button type = "submit" class = "btn btn-default" id = "signupButton">Register</button>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="modal-footer">
                                                <button type="button" id="btn_cancel_lined" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="tab3">
                            <h4 class="col-lg-10 col-lg-offset-1">Enter your email to reset password</h4>
                            <form action="" method="POST" enctype="application/x-www-form-urlencoded">
                                <!-- Email Form Input -->
                                <div class="form-group col-lg-10 col-lg-offset-1">
                                    <label for="email" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Email</label>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <input class="form-control" placeholder="Email" name="email" type="email" id="email">
                                    </div>
                                </div>

                                <div class = "form-group" style="border: none;">
                                    <div class="col-xs-12">
                                        <div class="col-xs-offset-3 col-xs-3">
                                            <div class = "col-xs-12 btnCont">
                                                <button type = "submit" class = "btn btn-default" id = "submitBtn">Reset</button>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="modal-footer">
                                                <button type="button" id="btn_cancel_lined" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<?php }} ?>
