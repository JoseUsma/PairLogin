<div class="container">
    <h3>Profile Details</h3>
    
	<!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <?php if ($this->user) { ?>
       <div class="col-md-6">
        <table class="table table-striped">
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
                echo '<td><a class="btn btn-primary" role="button" href="'.URL.'message/sendmessage/'.$this->user->user_id.'">Send a Message</a>
				<a class="btn btn-default" role="button" href="'.URL.'members/index">Back</a>  </td>';
				echo "</tr>";
            ?>
            </table>
			</tbody>
			</div>
    <?php } ?>
	<br>
	 <p></p>
</div>
