<div class="container">
    <h3>Request a password reset</h3>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
	<label for="password_reset_input_username">
            Enter your email and you'll get a mail with instructions:
     </label>
        
    <!-- request password reset form box -->
    <form method="post" action="<?php echo URL; ?>login/requestpasswordreset_action" name="password_reset_form">
        <div class="col-md-6">
        <table class="table">
        <tbody>
            <tr>
                <th>Username:</th>
                <td><?php echo Session::get('user_name'); ?></td>
			</tr>
			 <tr>
                <th>Email:</th>
                <td><input id="password_reset_input_username" class="password_reset_input form-control"  type="text" name="user_email" required /></td>
			</tr>
			<tr>
                <td><input type="button" value="Cancel" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>login/viewprofile'"/></td>
				<td><input class="btn btn-primary" type="submit"  name="request_password_reset" value="Reset my password" />
				</td>
			</tr>
		</tbody>
		</table>
		</div>
		
    </form>
</div>
