<div class="container">
    <div class="col-md-8">
	
	<h3>Delete card</h3>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <?php if ($this->card) { ?>
        <form method="post" role="form" action="<?php echo URL; ?>card/deleteSave/<?php echo $this->card->card_id; ?>">
            <div class="form-group">
				 <label  class="sr-only" for="card_address1">Card: </label>
				<!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
				<input type="text" class="form-control" name="card_address1" id="card_address1" disabled value="<?php echo htmlentities($this->card->card_address1); ?>" />
			</div>
			 <div class="form-group">
				<input type="button" value="Cancel" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>card'"/>			
				<input type="submit" value="Delete card"  class="btn btn-danger" />
			</div>
        </form>
    <?php } else { ?>
        <p>This card does not exist.</p>
		<input type="button" value="Back" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>card'"/>	
    <?php } ?>
	</div>
</div>
