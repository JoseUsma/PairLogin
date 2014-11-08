  <div class="container">
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

	<div class="page-header">
        <h1>Pair, business cards at all times and anywhere.</h1>
    </div>
    
	<div class="jumbotron" style="float:left">
        <p class="lead">Get your <b>business cards</b> for <b>free</b> </p>
	
	<?php if (Session::get('user_logged_in') == false):?>
      <p class="lead"><a href="<?php echo URL; ?>login/index" class="btn btn-primary" role="button">Log in</a> or
	  <a href="<?php echo URL; ?>login/register" class="btn btn-success" role="button">Register</a> 
	  to our <b>Pair network</b>
	  </p>
	  <p>Don't miss this unique opportunity! <br>
	   Organization preserves the right of admission.	
	  </p>
	 <?php endif; ?>

     <?php if (Session::get('user_logged_in') == true):?>
	  <p class="lead">Welcome back to our <b>Pair network</b></p>
	  <p class="lead"><a href="<?php echo URL; ?>login/viewprofile" class="btn btn-primary btn-lg" role="button">View Account</a> </b>
	  </p>
     <?php endif; ?>
    </div>
	
	 <?php if (Session::get('user_logged_in') == true) { ?>
	<div class="jumbotron" style="float:right">
         <p class="lead">Profile:</b> </p>
		 <table class="table">
        <tbody>
            <tr>
                <th>Picture:</th>
                <td> <?php // if usage of gravatar is activated show gravatar image, else show local avatar ?>
				<div class="avatar img-thumbnail">
					<?php if (USE_GRAVATAR) { ?>
						<img src='<?php echo Session::get('user_gravatar_image_url'); ?>' />
				<?php } else { ?>
						<img src='<?php echo Session::get('user_avatar_file'); ?>' />
				<?php } ?>
				</div>
				<td><a href="<?php echo URL; ?>login/uploadavatar" class="btn btn-primary" role="button">Edit</a></td>
				</td>
			</tr>
			<tr>
                <th>Username:</th>
                <td><?php echo Session::get('user_name'); ?></td>
			    <td><a href="<?php echo URL; ?>login/editusername" class="btn btn-primary" role="button">Edit</a></td>
			</tr>
			<tr>
                <th>Password:</th>
                <td>*******</td>
			    <td><a href="<?php echo URL; ?>login/requestPasswordReset" class="btn btn-primary" role="button">Edit</a></td>
			</tr>
			<tr>
                <th>Email:</th>
                <td><?php echo Session::get('user_email'); ?></td>
				<td><a href="<?php echo URL; ?>login/edituseremail" class="btn btn-primary" role="button">Edit</a></td>
			</tr>
			<tr>
                <th>Type:</th>
                <td><?php echo $this->account_type ?></td>
				<td><a href="<?php echo URL; ?>login/changeaccounttype" class="btn btn-primary" role="button">Edit</a></td>
			</tr>
			<tr>
                <th>&nbsp;</th>
                <td>&nbsp;</td>
			 	<td><a href="<?php echo URL; ?>login/logout" class="btn btn-warning" role="button">Log out</a></td>
			</tr>
		 </tbody>		
		</table>
	</div>	
	<?php } else { ?>
    
	   <div class="jumbotron" style="float:right">
        <p class="lead">Register</p>
        <!-- register form -->
        <form method="post" action="<?php echo URL; ?>login/register_action" name="registerform"role="form" >
                 <div class="form-group">
					<label for="login_input_username">
                Username
                <span style="display: block; font-size: 11px; color: #999;">(only letters and numbers, 2 to 64 characters)</span>
            </label>
            <input id="login_input_username" class="form-control" style="width:20px" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
            <!-- the email input field uses a HTML5 email type check -->
			</div> 
            <div class="form-group">
				<label for="login_input_email">
                User's email                
            </label>
            <input id="login_input_email" class="form-control" style="width:20px" type="email" name="user_email" required />
            </div> 
            <div class="form-group">
			<label for="login_input_password_new">
                Password (min. 6 characters!)
            </label>
            <input id="login_input_password_new" class="form-control" style="width:20px" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
            </div> 
            <div class="form-group">
			<label for="login_input_password_repeat">Repeat password</label>
            <input id="login_input_password_repeat" class="form-control" style="width:20px" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <!-- to avoid weird with-slash-without-slash issues: simply always use the URL constant here -->
            </div> 
            <div class="form-group">
			<img id="captcha" src="<?php echo URL; ?>login/showCaptcha" />
            <span style="display: block; font-size: 11px; color: #999; margin-bottom: 10px">
                <!-- quick & dirty captcha reloader -->
                <a href="#" onclick="document.getElementById('captcha').src = '<?php echo URL; ?>login/showCaptcha?' + Math.random(); return false">[ Reload Captcha ]</a>
            </span>
            <label>
                Please enter these characters
            </label>
            <input class="form-control" style="width:20px" type="text" name="captcha" required />
            </div> 
            <div class="form-group">
			<input type="submit" class="btn btn-success btn-lg"  name="register" value="Register" />
 </div> 
        </form>
    </div>

    <?php if (FACEBOOK_LOGIN == true) { ?>
        <div class="register-facebook-box">
            <h1>or</h1>
            <a href="<?php echo $this->facebook_register_url; ?>" class="facebook-login-button">Register with Facebook</a>
        </div>
    <?php } ?>
	
		<div class="jumbotron" style="float:left">
        <p class="lead">Welcome back</p>
        <form action="<?php echo URL; ?>login/login" method="post" role="form" >
                 <div class="form-group">
					<label for="user_name">Username (or email)</label>
					<input class="form-control" style="width:20px" type="text" name="user_name" id="user_name" required />
				</div>
                <div class="form-group">
					<label for="user_password">Password</label>
					<input class="form-control" style="width:20px" type="password" name="user_password" id="user_password" required />
				</div>
                <input type="submit" class="btn btn-primary btn-lg" value="Log in"/>
        </form>
        <a href="<?php echo URL; ?>login/requestpasswordreset">Reset Password</a>
    </div>

    <?php if (FACEBOOK_LOGIN == true) { ?>
    <div class="login-facebook-box">
        <h1>or</h1>
        <a href="<?php echo $this->facebook_login_url; ?>" class="facebook-login-button">Log in with Facebook</a>
    </div>
    <?php } ?>
	
	 <?php } ?>
    
</div>
