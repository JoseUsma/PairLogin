<div class="container">
    <h1>Your profile</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div>
        Your username: <?php echo Session::get('user_name'); ?>
    </div>
    <div>
        Your email: <?php echo Session::get('user_email'); ?>
    </div>
    <div>
        Your avatar image:
        <?php // if usage of gravatar is activated show gravatar image, else show local avatar ?>
        <?php if (USE_GRAVATAR) { ?>
            Your gravatar pic (on gravatar.com): 
			<div class="avatar">
				<img src='<?php echo Session::get('user_gravatar_image_url'); ?>' />
			</div>
        <?php } else { ?>
            Your avatar pic (saved on local server): 
			<div class="avatar">
				<img src='<?php echo Session::get('user_avatar_file'); ?>' />
			</div>
        <?php } ?>
    </div>
    <div>
        Your account type is: <?php echo Session::get('user_account_type'); ?>
    </div>
</div>
