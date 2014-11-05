<div class="container">
    <h3>Change account type</h3>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="col-md-6">
        <table class="table">
        <tbody>
            <tr>
                <th>Username:</th>
                <td><?php echo Session::get('user_name'); ?></td>
			</tr>
			<tr>
                <th>Account Type:</th>
                <td><?php echo $this->account_type ?></td>
			    <td>
			</td>
			</tr>
			<tr>
                <td><input type="button" value="Cancel" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>login/viewprofile'"/></td>
			    <td><?php if (Session::get('user_account_type') == 1) { ?>
					<form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
						<label></label>
						<input class="btn btn-primary" type="submit" name="user_account_upgrade" value="Upgrade my account" />
					</form>
					<?php } elseif (Session::get('user_account_type') == 2) { ?>
					<form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
						<label></label>
						<input class="btn btn-info" type="submit" name="user_account_downgrade" value="Downgrade my account" />
					</form>
					<?php } ?>
				</td>
			</tr>
		</tbody>
		</table>
		</div>
</div>
