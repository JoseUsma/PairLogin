<div class="container">
    <h3>Change your email adress</h3>

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
                <td><input type="text" class="form-control" name="user_email" required /></td>
			</tr>
			<tr>
                <td><input type="button" value="Cancel" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>login/viewprofile'"/></td>
				<td><input class="btn btn-primary" type="submit" value="Submit" /></td>
			</tr>
		</tbody>
		</table>
		</div>
    </form>
</div>
