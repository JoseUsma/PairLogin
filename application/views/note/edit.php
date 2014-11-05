<div class="container">
    <div class="col-md-8">
	
	<h3>Edit note</h3>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <?php if ($this->note) { ?>
        <form method="post" role="form" action="<?php echo URL; ?>note/editSave/<?php echo $this->note->note_id; ?>">
             <div class="form-group">
				 <label  class="sr-only" for="note_text">Change text of note: </label>
				<!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
				<input type="text" class="form-control" name="note_text" id="note_text" value="<?php echo htmlentities($this->note->note_text); ?>" />
			</div>
            	<input type="button" value="Cancel" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>note'"/>	
				<input type="submit" value="Edit note"  class="btn btn-primary" />			
        </form>
    <?php } else { ?>
        <p>This note does not exist.</p>
    	<input type="button" value="Back" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>note'"/>	
    <?php } ?>
	</div>
</div>
