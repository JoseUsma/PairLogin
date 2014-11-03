<div class="container">
    <h1>Change your email adress</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form action="<?php echo URL; ?>login/edituseremail_action" method="post">
         <div class="col-md-6">
        <table class="table">
        <tbody>
            <tr>
                <th>Email address:</th>
                <td><?php echo Session::get('user_email'); ?></td>
			</tr>
			<tr>
                <th>New Email address:</th>
                <td><input type="text" name="user_email" required /></td>
			</tr>
			<tr>
                <td><input type="button" value="Cancel" class="btn btn-lg btn-default" onclick="window.location.href='<?php echo URL; ?>login/viewprofile'"/></td>
				<td><input class="btn btn-lg btn-primary" type="submit" value="Submit" /></td>
			</tr>
		</tbody>
		</table>
		</div>
    </form>
</div>
