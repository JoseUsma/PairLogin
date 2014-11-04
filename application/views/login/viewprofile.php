<div class="container">
    <h1>Profile</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="col-md-6">
        <table class="table">
        <tbody>
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
                <th>Picture:</th>
                <td> <?php // if usage of gravatar is activated show gravatar image, else show local avatar ?>
				<?php if (USE_GRAVATAR) { ?>
					<div class="avatar">
						<img src='<?php echo Session::get('user_gravatar_image_url'); ?>' />
					</div>
				<?php } else { ?>
					<div class="avatar">
						<img src='<?php echo Session::get('user_avatar_file'); ?>' />
					</div>
				<?php } ?>
				<td><a href="<?php echo URL; ?>login/uploadavatar" class="btn btn-primary" role="button">Edit</a></td>
				</td>
			</tr>
			<tr>
                <th>Type:</th>
                <td><?php echo (Session::get('user_account_type') == 1?'User':'Guess'); ?></td>
				<td><a href="<?php echo URL; ?>login/changeaccounttype" class="btn btn-primary" role="button">Edit</a></td>
			</tr>
			<tr>
                <th>&nbsp;</th>
            	<td><a href="<?php echo URL; ?>login/logout" class="btn btn-warning" role="button">Log out</a></td>
			    <td>&nbsp;</td>
			</tr>
		 </tbody>		
		</table>
	</div>	
</div>
