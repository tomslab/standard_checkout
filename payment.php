<?php 
include('db/updateDelivery.php');
include('head.php');
?>

	<form action="review.php" method="post"> 

		<!-- Card Number -->
		<div class="form-group">
			<label class="control-label" for="cardNumber">Card Number *</label>
			<span id="cardNumber-error" class="help-block" style="display: none;"></span>
			<!-- <div class="input-group"> -->
				<!-- <span class="input-group-addon"><i class="fa fa-credit-card fa-3"></i><img id="cardType" src="images/icons/american-express-straight-32px.png"></span> -->
				<input
				type="tel" 
				id="cardNumber"
				name="cardNumber"
				class="form-control input-lg"
				placeholder="1111 2222 3333 4444"
				onkeyup="cardSpacer(this.id)"
				onfocusout="fieldCheckOut(this.id)"
				max="12"
				style="background:url('images/cards.png'); background-position: 0px -274px; background-size:100%; padding-left: 70px"
				required>
				<i id="cardNumberStatus"></i>
			<!-- </div> -->
		</div>
		
		<!-- Name on Card -->
		<div class="form-group">
			<label class="control-label" for="cardName">Name on Card *</label>
			<span id="cardName-error" class="help-block" style="display: none;"></span>
			<input
			type="text" 
			id="cardName"
			name="cardName"
			class="form-control input-lg"
			placeholder="MR J Smith"
			onkeyup="fieldCheck(this.id)"
			onfocusout="fieldCheckOut(this.id)"
			required>
			<i id="cardNameStatus"></i>
		</div>

		<div class="row">
			<div class="col-xs-6">
				<!-- Expiry Date -->
				<div class="form-group">
					<label class="control-label" for="expiry">Expiry Date *</label>
					<span id="expiry-error" class="help-block" style="display: none;"></span>
					<input
					type="month" 
					id="expiry"
					name="expiry"
					class="form-control input-lg"
					value=""
					onkeyup="fieldCheck(this.id)"
					onfocusout="fieldCheckOut(this.id)"
					required>
					<i id="expiryStatus"></i>
				</div>
			</div>

			<div class="col-xs-6">
				<!-- CVV -->
				<div class="form-group">
					<label class="control-label" for="cvv">CVV *</label>
					<span id="cvv-error" class="help-block" style="display: none;"></span>
					<input
					type="tel" 
					id="cvv"
					name="cvv"
					class="form-control input-lg"
					placeholder="123"
					onkeyup="fieldCheck(this.id)"
					onfocusout="fieldCheckOut(this.id)"
					required>
					<i id="cvvStatus"></i>
				</div>
			</div>
		</div>

		<fieldset id="continue">
			<button type="submit" class="btn btn-success btn-block btn-lg">Submit</button>
		</fieldset>
	</form>

 <?php include('foot.php'); ?>