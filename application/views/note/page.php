     <?php $this->renderPageHeader(); ?>
	<table class="table">
    <?php
       $counter = ($this->page-1) * PAGE_ITEMS + 1;
	   if ($this->page_content) {
            foreach($this->page_content as $key => $value) {
                echo '<tr>';
                echo '<td width="30px">'. $counter++ .'</td>';
                echo '<td width="30px"><a href="'. URL . 'note/edit/' . $value->note_id.'" class="btn btn-primary">Edit</a></td>';
                echo '<td width="30px"><a href="'. URL . 'note/delete/' . $value->note_id.'" class="btn btn-danger">Delete</a></td>';
                echo '<td>' . htmlentities($value->note_text) . '</td>';
                echo '</tr>';
            }
        } else {
            echo 'No notes yet. Create some !';
        }
    ?>
    </table>
	<?php $this->renderPageFooter(); ?>


