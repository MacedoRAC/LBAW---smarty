<nav class="navbar navbar-default" id="myNavbar">
  <div class="container-fluid container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{$BASE_URL}pages/homepage.php">
        <img src="{$BASE_URL}images/logo-branco.svg" alt="UpFAQ_logo">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" id="menuOptions">
        <li class=""><a href="{$BASE_URL}pages/homepage.php">Home</a></li>
        
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

                <div class = "form-group" style="border: none;">
                  <div class = "col-xs-12 btnCont">
                    <button type = "submit" class = "btn btn-default" id = "submitBtn">Sign In</button>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="tab2">
                <h4 class="col-lg-10 col-lg-offset-1">Do you need help? SIGN UP now!</h4>
                <!-- Name Form Input -->
                <div class="form-group col-lg-10 col-lg-offset-1">
                  <label for="name" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Name</label>
                  <div class=" col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <input class="form-control" placeholder="Name" name="text" type="text">
                  </div>
                </div>

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

                <!-- Repeat Password Form Input -->
                <div class="form-group col-lg-10 col-lg-offset-1">
                  <label for="password2" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Password</label>
                  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <input class="form-control" placeholder="Repeat Password" name="password2" type="text" id="password2">
                  </div>
                </div> 

                <div class = "form-group" style="border: none;">
                  <div class = "col-xs-12 btnCont">
                    <button type = "submit" class = "btn btn-default" id = "submitBtn">Register</button>
                  </div>
                </div> 
              </div>

              <div class="tab-pane fade" id="tab3">
                <h4 class="col-lg-10 col-lg-offset-1">Enter your email to reset password</h4>
                <!-- Email Form Input -->
                <div class="form-group col-lg-10 col-lg-offset-1">
                  <label for="email" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">Email</label>
                  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <input class="form-control" placeholder="Email" name="email" type="email" id="email">
                  </div>
                </div>

                <div class = "form-group" style="border: none;">
                  <div class = "col-xs-12 btnCont">
                    <button type = "submit" class = "btn btn-default" id = "submitBtn">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
