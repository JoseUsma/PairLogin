<div class="container">
    <h3>Cards</h3>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

	<div class="col-md-8">    
	<a href="<?php echo URL; ?>card/make" class="btn btn-success" role="button">New Card</a>
	<h3 style="margin-top: 20px;">List of your cards</h3>
	<?php $this->render('card/page', true) ?>
	</div>
</div>
