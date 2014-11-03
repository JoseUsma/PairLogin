<div class="container">
    <h1>Public user profile</h1>
    <p>This controller/action/view shows all public information about a certain user.</p>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <?php if ($this->user) { ?>
        <p>
            <div class="col-md-6">
        <table class="table table-striped">
        <thead>
              <tr>
                <th>&nbsp;</th>
                <th>Picture</th>
                <th>Username</th>
                <th>Status</th>
                <th>Options</th>
              </tr>
            </thead>
			<tbody>
            <?php

                if ($this->user->user_active == 0) {
                    echo '<tr class="inactive">';
                } else {
                    echo '<tr class="active">';
                }

                echo '<td>'.$this->user->user_id.'</td>';
                echo '<td class="avatar"><img src="'.$this->user->user_avatar_link.'" /></td>';
                echo '<td>'.$this->user->user_name.'</td>';
                echo '<td>'.($this->user->user_active==1?'Active':'Disabled').'</td>';
                echo '<td><a href="'.URL.'message/sendmessage/'.$this->user->user_id.'">Send Message</a></td>';
				echo "</tr>";
            ?>
            </table>
			</tbody>
			</div>
        </p>
    <?php } ?>
	 <p><a href="<?php echo URL; ?>overview/index">Back</a>  </p>
</div>
