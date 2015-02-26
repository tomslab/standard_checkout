<?php 
include('db/updateEmail.php');
include('head.php'); 
?>

<form action="payment.php" method="post">

	<label>Delivery Method</label>
	<div class="form-group">
		<select class="form-control input-lg" name="delivery_choice">
			<option>Free Click and Collect</option>
			<option>Free Delivery (4-5 business days)</option>
			<option selected>First Class Delivery (up to 2 business days)</option>
			<option>Named Day Delivery</option>
			<option>International Delivery</option>
		</select>
	</div>

	<hr />

	<!-- <div class="radio">
		<label>
			<input type="radio" name="optionsRadios" id="clickCollect" value="clickCollect">
			Free Click and Collect
		</label>
	</div>
	<hr>
	<div class="radio">
		<label>
			<input type="radio" name="optionsRadios" id="free" value="free">
			Free Delivery (4-5 business days)
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="optionsRadios" id="firstClass" value="firstClass" checked>
			First Class Delivery (up to 2 business days)
		</label>
	</div>
	<div class="radio disabled">
		<label>
			<input type="radio" name="optionsRadios" id="oneDay" value="oneDay">
			One-Day Delivery (<?php 
			$datetime = new DateTime('today');
			$oneDay = $datetime->format('l');
			if( $oneDay === 'Sunday' ) {
				$datetime->modify('+1 day');
				$oneDay = $datetime->format('l');
			}
			echo $oneDay;
			?>)
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="optionsRadios" id="international" value="international" disabled>
			International Delivery
		</label>
	</div> -->

	<!-- Address Line 1 -->
	<div class="form-group">
		<label class="control-label" for="addressLine1">Address Line 1 *</label>
		<span id="addressLine1-error" class="help-block" style="display: none;"></span>
		<input
		type="text" 
		id="addressLine1"
		name="line1"
		class="form-control input-lg"
		placeholder="742 Evergreen Terrace"
		onkeyup="fieldCheck(this.id)"
		onfocusout="fieldCheckOut(this.id)"
		required>
		<i id="addressLine1Status"></i>
	</div>
	
	<!-- Address Line 2 -->
	<div class="form-group">
		<label class="control-label" for="addressLine2">Address Line 2</label>
		<span id="addressLine2-error" class="help-block" style="display: none;"></span>
		<input
		type="text" 
		id="addressLine2"
		name="line2"
		class="form-control input-lg"
		placeholder=""
		onkeyup="fieldCheck(this.id)"
		onfocusout="fieldCheckOut(this.id)">
		<i id="addressLine2Status"></i>
	</div>

	<!-- Town -->
	<div class="form-group">
		<label class="control-label" for="town">Town *</label>
		<span id="town-error" class="help-block" style="display: none;"></span>
		<input
		type="text" 
		id="town"
		name="town"
		class="form-control input-lg"
		placeholder="Springfield"
		onkeyup="fieldCheck(this.id)"
		onfocusout="fieldCheckOut(this.id)"
		required>
		<i id="townStatus"></i>
	</div>

	<!-- County -->
	<div class="form-group">
		<label class="control-label" for="county">County *</label>
		<span id="county-error" class="help-block" style="display: none;"></span>
		<input
		type="text" 
		id="county"
		name="county"
		class="form-control input-lg"
		placeholder="Hertfordshire"
		onkeyup="fieldCheck(this.id)"
		onfocusout="fieldCheckOut(this.id)"
		required>
		<i id="countyStatus"></i>
	</div>

	<!-- Postcode -->
	<div class="form-group">
		<label class="control-label" for="postcode">Postcode *</label>
		<span id="postcode-error" class="help-block" style="display: none;"></span>
		<input
		type="text" 
		id="postcode"
		name="postcode"
		class="form-control input-lg"
		placeholder="LE11 3TU"
		onkeyup="fieldCheck(this.id)"
		onfocusout="fieldCheckOut(this.id)"
		required>
		<i id="postcodeStatus"></i>
	</div>

	<!-- Phone Number -->
	<div class="form-group">
		<label class="control-label" for="phoneNumber">Phone Number *</label>
		<span id="phoneNumber-error" class="help-block" style="display: none;"></span>
		<input
		type="tel" 
		id="phoneNumber"
		name="phone"
		class="form-control input-lg"
		placeholder="07796427270"
		onkeyup="fieldCheck(this.id)"
		onfocusout="fieldCheckOut(this.id)"
		required>
		<i id="phoneNumberStatus"></i>
	</div>

	<fieldset id="continue">
		<button type="submit" class="btn btn-success btn-block btn-lg">Submit</button>
	</fieldset>
</form>

<?php include('foot.php'); ?>