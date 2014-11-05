<div class="container">
    <h3>Upload Picture</h3>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form action="<?php echo URL; ?>login/uploadavatar_action" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
        <table class="table">
        <tbody>
            <tr>
                <th>Username:</th>
                <td><?php echo Session::get('user_name'); ?></td>
			</tr>
			<tr>
                <th>Picture:</th>
                <td><?php // if usage of gravatar is activated show gravatar image, else show local avatar ?>
				<?php if (USE_GRAVATAR) { ?>
					<div class="avatar">
						<img src='<?php echo Session::get('user_gravatar_image_url'); ?>' />
					</div>
				<?php } else { ?>
					<div class="avatar">
						<img src='<?php echo Session::get('user_avatar_file'); ?>' />
					</div>
				<?php } ?>
				</td>
			</tr>
			<tr>
                <th>New Picture:</th>
                <td><input type="file" name="avatar_file" required class="btn btn-primary" />
				<!-- max size 5 MB (as many people directly upload high res pictures from their digital cameras) -->
					</td>
			</tr>
			<tr>
                <td><input type="button" value="Cancel" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>login/viewprofile'"/></td>
				<td>
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
        <input class="btn btn-primary" name="submit" type="submit" value="Upload image" /></td>
			</tr>
		</tbody>
		</table>
		</div>
    </form>
</div>
