  <div class="container">
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

	<div class="page-header">
        <h1>Pair, business cards at all times and anywhere.</h1>
    </div>
    
	<div class="jumbotron">
        <p class="lead">Get your <b>business cards</b> for <b>free</b></p>
	
	<?php if (Session::get('user_logged_in') == false):?>
      <p class="lead"><a href="<?php echo URL; ?>login/register" class="btn btn-primary btn-lg" role="button">Sign in</a> to our <b>Pair network</b>
	  </p>
	  <p>Don't miss this unique opportunity! <br>
	   Organization preserves the right of admission.	
	  </p>
	 <?php endif; ?>

     <?php if (Session::get('user_logged_in') == true):?>
	  <p class="lead">Welcome back to our <b>Pair network</b></p>
	  <p class="lead"><a href="<?php echo URL; ?>login/showprofile" class="btn btn-primary btn-lg" role="button">View Account</a> </b>
	  </p>
     <?php endif; ?>
    </div>
</div>
