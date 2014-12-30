     <?php $this->renderPageHeader(); ?>
	<table class="table">
	<tr>
		<th>&nbsp;</th>
		<th colspan="2">Options</th>
		<th>Name</th>
		<th>Job</th>
		<th colspan="2">Address</th>
		<th>Phone</th>
		<th>Fax</th>
	</tr>
    <?php
       $counter = ($this->page-1) * PAGE_ITEMS + 1;
	   if ($this->page_content) {
            foreach($this->page_content as $key => $value) {
                echo '<tr>';
                echo '<td width="30px">'. $counter++ .'</td>';
                echo '<td width="30px"><a href="'. URL . 'card/edit/' . $value->card_id.'" class="btn btn-primary">Edit</a></td>';
                echo '<td width="30px"><a href="'. URL . 'card/delete/' . $value->card_id.'" class="btn btn-danger">Delete</a></td>';
                echo '<td>' . htmlentities($value->card_name) . '</td>';
                echo '<td>' . htmlentities($value->card_job_position) . '</td>';
                echo '<td>' . htmlentities($value->card_address1) . '</td>';
                echo '<td>' . htmlentities($value->card_address2) . '</td>';
                echo '<td>' . htmlentities($value->card_phone) . '</td>';
                echo '<td>' . htmlentities($value->card_fax) . '</td>';
                echo '</tr>';
            }
        } else {
            echo 'No cards yet. Create some !';
        }
    ?>
    </table>
	<?php $this->renderPageFooter(); ?>


