<div class="container">
    <h3>Members</h3>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
        <div class="col-md-6">
        <table class="table">
			<tbody>
		<?php
		if (isset($this->users)){
			foreach ($this->users as $user) {

				if ($user->user_active == 0) {
					echo '<tr class="inactive">';
				} else {
					echo '<tr class="active">';
				}

				echo '<td>'.$user->user_id.'</td>';
				echo '<td class="avatar">';

				if (isset($user->user_avatar_link)) {
					echo '<img src="'.$user->user_avatar_link.'" />';
				}

				echo '</td>';
				echo '<td>'.$user->user_name.'</td>';
				echo '<td>'.($user->user_active==1?'Active':'Disabled').'</td>';
				echo '<td><a class="btn btn-primary" role="button" href="'.URL.'members/showuserprofile/'.$user->user_id.'">Details</a></td>';
				echo "</tr>";
			}
		}
        ?>
		</tbody>
        </table>
		</div>
</div>
