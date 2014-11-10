<div class="container">
    <h3>Notes</h3>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

	<div class="col-md-8">    
	<form method="post" role="form" action="<?php echo URL;?>note/create">
        <div class="form-group">
			<label class="sr-only" for="note_text">New note</label>
			<input type="text" class="form-control" name="note_text" id="note_text"  placeholder="Enter note"/>
        </div>
        <div class="form-group">
			<input type="submit" value='Create note' class="btn btn-success" />
		</div>	
    </form>

    <h3 style="margin-top: 20px;">List of your notes</h3>
	<?php $this->render('note/page', true) ?>
	</div>
</div>
