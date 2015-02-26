<?php 
include('db/cookie.php');
include('head.php');
?>

	<form action="delivery.php" method="post">

		<div class="form-group">
			<label class="control-label" for="email">Email address *</label>
			<span id="email-error" class="help-block" style="display: none;"></span>
			<input
			type="email" 
			id="email"
			name="email"
			class="form-control input-lg"
			placeholder="hello@example.com"
			onkeyup="fieldCheck(this.id)"
			onfocusout="fieldCheckOut(this.id)"
			required>
			<i id="emailStatus"></i>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control input-lg" id="password" placeholder="Password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success btn-block btn-lg">Submit</button>
		</div>
	</form>

<?php include('foot.php'); ?>