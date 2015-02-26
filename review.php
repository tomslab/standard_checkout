<?php
include('db/updatePayment.php');
include('head.php');
?>

	<div id="merchandise">

		<h2>Basket</h2>
		<hr>

		<div class="row">
			<div class="col-xs-4">
				<img class="img-responsive" src="images/sonos_play1_black.jpg" />
			</div>
			<div class="col-xs-8">
				<p><strong>Sonos Play:1</strong></p>
				<p>Black - Wireless Hi-Fi</p>
				<h4>£169.00</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4">
				<img class="img-responsive" src="images/nike_revolution_2.jpg" />
			</div>
			<div class="col-xs-8">
				<p><strong>Nike Revolution 2</strong></p>
				<p>Men's Running Shoe - 10.5</p>
				<h4>£49.00</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4" style="text-align: center;">
				<i class="fa fa-dropbox fa-5x"></i>
			</div>
			<div class="col-xs-8">
				<p><strong>Next Day Delivery</strong></p>
				<p>Estimated: Frdiay (22nd)</p>
				<h4>£5.90</h4>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-xs-7">
				<h3>Total <small>(including VAT)</small></h3>
			</div>
			<div class="col-xs-5">
				<h3 class="pull-right">£223.90</h3>
			</div>
		</div>

		<hr>

		<h2>Delivery</h2>
		<hr>

		<!-- <address>
			<strong>20 Arthur Street</strong><br>
			Loughborough<br>
			Leicestershire<br>
			LE11 3AY
		</address> -->

		<?php include('db/getDelivery.php'); ?>

		<hr>

		<h2><i class="fa fa-lock"></i> Payment</h2>
		<hr>

		<?php include('db/getPayment.php'); ?>
		<p>Billing address is the same as delivery address</p>

		<hr>


	</div>

	<form>

		<fieldset id="continue">
			<button type="submit" class="btn btn-success btn-block btn-lg">Confirm Purchase</button>
		</fieldset>
	</form>

<?php include('foot.php'); ?>