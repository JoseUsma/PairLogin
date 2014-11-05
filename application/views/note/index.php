<div class="container">
    <div class="col-md-8">    
	<h3>Notes</h3>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

	<form method="post" role="form" action="<?php echo URL;?>note/create">
        <div class="form-group">
			<label class="sr-only" for="note_text">New note</label>
			<input type="text" class="form-control" name="note_text" id="note_text"  placeholder="Enter note"/>
        </div>
        <div class="form-group">
			<input type="submit" value='Create note' class="btn btn-success" />
		</div>	
    </form>

    <h3 style="margin-top: 50px;">List of your notes</h3>
	
	<table class="table">
    <?php
        if ($this->notes) {
            foreach($this->notes as $key => $value) {
                echo '<tr>';
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
	</div>
</div>
