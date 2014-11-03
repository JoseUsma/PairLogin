<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pair</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/reset.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstyle.css" />
	<!-- Addition 14/11/01 Ini -->
		<link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo URL; ?>public/css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Addition 14/11/01 End -->
	
	<!-- in case you wonder: That's the cool-kids-protocol-free way to load jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/application.js"></script>
	<!-- Addition 14/11/01 Ini -->
		<script src="<?php echo URL; ?>public/js/ie-emulation-modes-warning.js"></script>
		<script src="<?php echo URL; ?>public/js/ie10-viewport-bug-workaround.js"></script>
	 <!-- Addition 14/11/01 End -->
</head>
<body>

    <div class="debug-helper-box">
        DEBUG HELPER: you are in the view: <?php echo $filename; ?>
    </div>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
	  		<div class="login_header">
		<!-- for not logged in users -->
			<?php if (Session::get('user_logged_in') == false):?>
			<div class="header_right_box">
				<ul id="menu">
				  <li <?php if ($this->checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
						<a href="<?php echo URL; ?>login/index">Login</a>
					</li>
					<li <?php if ($this->checkForActiveControllerAndAction($filename, "login/register")) { echo ' class="active" '; } ?> >
						<a href="<?php echo URL; ?>login/register">Register</a>
					</li>        
				</ul>
			</div>
			<?php endif; ?>
			<?php if (Session::get('user_logged_in') == true): ?>
				<div class="header_right_box">
					<div class="namebox">
						<?php echo Session::get('user_name'); ?>
					</div>
					<div class="avatar">
						<?php if (USE_GRAVATAR) { ?>
							<img src='<?php echo Session::get('user_gravatar_image_url'); ?>'
								 style='width:<?php echo AVATAR_SIZE; ?>px; height:<?php echo AVATAR_SIZE; ?>px;' />
						<?php } else { ?>
							<img src='<?php echo Session::get('user_avatar_file'); ?>'
								 style='width:<?php echo AVATAR_SIZE; ?>px; height:<?php echo AVATAR_SIZE; ?>px;' />
						<?php } ?>
					</div>
				</div>
			<?php endif; ?>
			</div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URL; ?>index/index">Pair</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li <?php if ($this->checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>index/index">Home</a>
            </li>
            <li <?php if ($this->checkForActiveController($filename, "help")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>help/index">Help</a>
            </li>
            <li <?php if ($this->checkForActiveController($filename, "overview")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>overview/index">Overview</a>
            </li>
            <li <?php if ($this->checkForActiveController($filename, "template")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>theme/index">Theme</a>
            </li>
            <?php if (Session::get('user_logged_in') == true):?>
            <li <?php if ($this->checkForActiveController($filename, "dashboard")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>dashboard/index">Dashboard</a>
            </li>
            <?php endif; ?>
            <?php if (Session::get('user_logged_in') == true):?>
            <li <?php if ($this->checkForActiveController($filename, "note")) { echo ' class="active" '; } ?> >
                <a href="<?php echo URL; ?>note/index">My Notes</a>
            </li>
            <?php endif; ?>

            <?php if (Session::get('user_logged_in') == true):?>
                <li  <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo URL; ?>login/showprofile" class="dropdown-toggle" data-toggle="dropdown">My Account</a>
                    <ul class="dropdown-menu" role="menu">
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/viewprofile">Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo URL; ?>login/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
			
          </ul>
     </div><!--/.nav-collapse -->
       

    <!-- Begin page content -->


		<div class="header">
			

			<div class="clear-both"></div>
		</div>
	  </div>
    </div>
