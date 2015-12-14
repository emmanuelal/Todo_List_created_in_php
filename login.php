<?php
require_once('includes/output.html.php');
add_header("Login");
?>

<div id = "content">

<div class="container">
<div class="row">

<div class="col-lg-6 col-md-7 col-sm-9" style="margin-left:22%;">

  <h4 style="border-bottom: 1px solid #c5c5c5;">
    <i class="glyphicon glyphicon-user">
    </i>
    Account Access
  </h4>
  <div style="padding: 20px;" id="form-olvidado">
  <form accept-charset="UTF-8" role="form" id="login-form" method="post" action="login_fns.php">
    <h4 class="">
      Signin!
    </h4>
      <fieldset>
        <div class="form-group input-group">
          <span class="input-group-addon">
            @
          </span>
          <input class="form-control" placeholder="Email" name="email" type="email"  autofocus="" required>
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
          <input class="form-control" placeholder="Password" name="password" type="password" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">
            Access
          </button>
          <p class="help-block">
            <a class="pull-right text-muted" href="forgot_password.php" id="olvidado"><small>Forgot your password?</small></a>
            <a class="pull-left text-muted" href="#" id="olvidado2" onclick="return getData('register_new.html.php','content');"><small>Signup!</small></a>

          </p>
        </div>
      </fieldset>
    </form>
  </div>

  
<div style="display: none;" id="form-olvidado2">
    <h4 class="">
      Welcome!
    </h4>
    <form accept-charset="UTF-8" role="form" id="login-recordar" method="post" action="register_new.php" >
      <fieldset>
        <span class="help-block">
          Signup page
          <br>
          Please sign up and start!
        </span>
        <div class="form-group input-group">
          <span class="input-group-addon">
            @
          </span>
          <input class="form-control" placeholder="Email" name="email" type="email" required="">
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
          <input class="form-control" placeholder="Password" name="password" type="password" required="">
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
          <input class="form-control" placeholder="Repeat Password" name="password2" type="password" required="">
        </div>

        <button type="submit" name= "Login" class="btn btn-primary btn-block" id="btn-olvidado">
          Continue
        </button>
        <p class="help-block">
          <a class="text-muted" href="#" id="acceso2"><small>Account Access</small></a>
        </p>
      </fieldset>
    </form>
  </div>
</div>
</div>
</div>
</div>
<?php 
    add_footer();
?>



