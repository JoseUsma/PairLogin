<div class="container theme-showcase" role="main">
    <h1>Change your username</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form action="<?php echo URL; ?>login/editusername_action" method="post">
        <div class="col-md-6">
        <table class="table">
        <tbody>
            <tr>
                <th>Username:</th>
                <td><?php echo Session::get('user_name'); ?></td>
			</tr>
			<tr>
                <th>New Username:</th>
                <td><input type="text" name="user_name" required /></td>
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
