<div class="container">
	<h3>Edit card:</h3>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

	<div class="col-md-8">    
	<?php if ($this->card) { ?>
    <form class="form-horizontal" method="post" role="form" action="<?php echo URL;?>card/editSave/<?php echo $this->card->card_id; ?>">
        <div class="form-group">
			<label for="card_name" class="col-sm-2 control-label">Card Name:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_name" id="card_name"  placeholder="New card"  value="<?php echo htmlentities($this->card->card_name); ?>"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="job_position" class="col-sm-2 control-label">Job Position:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="job_position" id="job_position"  placeholder="Job" value="<?php echo htmlentities($this->card->card_job_position); ?>"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_address1" class="col-sm-2 control-label">Address:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_address1" id="card_address1"  placeholder="-"  value="<?php echo htmlentities($this->card->card_address1); ?>"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_address1" class="col-sm-2 control-label">Address 2:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_address2" id="card_address1"  placeholder="-" value="<?php echo htmlentities($this->card->card_address2); ?>"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_phone" class="col-sm-2 control-label">Phone:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_phone" id="card_phone"  placeholder="-" value="<?php echo htmlentities($this->card->card_phone); ?>"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_fax" class="col-sm-2 control-label">Fax:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_fax" id="card_fax"  placeholder="-" value="<?php echo htmlentities($this->card->card_fax); ?>"/>
			</div>	
        </div>
        <div class="form-group">
			<input type="button" value="Cancel" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>card'"/>
			<input type="submit" value='Save card' class="btn btn-success" />
		</div>	
    </form>
	 <?php } else { ?>
        <p>This card does not exist.</p>
    	<input type="button" value="Back" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>card'"/>	
    <?php } ?>
	</div>
</div>
