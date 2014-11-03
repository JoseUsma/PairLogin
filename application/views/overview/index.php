<div class="container">
    <h1>Overview</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <p>
        This controller/action/view shows a list of all users in the system.</p>
	<p>	
        You could use the underlaying code to build things that use profile information
        of one or multiple/all users.
    </p>
<br>
    <p>
        <div class="col-md-6">
        <table class="table">
        <thead>
              <tr>
                <th>&nbsp;</th>
                <th>Avatar</th>
                <th>Username</th>
                <th>Status</th>
                <th>Options</th>
              </tr>
            </thead>
			<tbody>
		<?php

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
            echo '<td><a href="'.URL.'overview/showuserprofile/'.$user->user_id.'">Profile details...</a></td>';
            echo "</tr>";
        }

        ?>
		</tbody>
        </table>
		</div>
    </p>
</div>
