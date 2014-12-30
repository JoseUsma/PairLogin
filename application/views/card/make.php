<div class="container">
    <h3>New card:</h3>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

	<div class="col-md-8">    
	<form class="form-horizontal" method="post" role="form" action="<?php echo URL;?>card/create">
        <div class="form-group">
			<label for="card_name" class="col-sm-2 control-label">Card Name:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_name" id="card_name"  placeholder="New card"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_job_position" class="col-sm-2 control-label">Job Position:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_job_position" id="card_job_position"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_address1" class="col-sm-2 control-label">Address:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_address1" id="card_address1"  placeholder="Address 1"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_address1" class="col-sm-2 control-label">Address 2:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_address2" id="card_address1"  placeholder="Address 2"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_phone" class="col-sm-2 control-label">Phone:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_phone" id="card_phone"  placeholder="Phone"/>
			</div>	
        </div>
        <div class="form-group">
			<label for="card_fax" class="col-sm-2 control-label">Fax:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="card_fax" id="card_fax"  placeholder="Fax"/>
			</div>	
        </div>
        <div class="form-group">
			<input type="button" value="Cancel" class="btn btn-default" onclick="window.location.href='<?php echo URL; ?>card/index'"/>
			<input type="submit" value='Create card' class="btn btn-success" />
		</div>	
    </form>
	</div>
</div>
