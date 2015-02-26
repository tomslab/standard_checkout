<?php include('head.php'); ?>

<div class="container">

	<h1>Custom validation testing</h1>

	<form action="delivery.php">

		<div class="radio">
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
		</div>

		<fieldset id="continue">
			<button type="submit" class="btn btn-success btn-block btn-lg">Submit</button>
		</fieldset>
	</form>

</div>

<?php include('foot.php'); ?>