<?php 

$cookie_name = 'standard_checkout_cookie';
$session = $_COOKIE[$cookie_name];

$cardNumber = $_POST["cardNumber"];
$cardName = $_POST["cardName"];
$expiry = $_POST["expiry"];
$cvv = $_POST["cvv"];

if( $cardNumber != '' ) {

	include('db.php');
	$sql = "UPDATE checkout SET
	card_number = '$cardNumber',
	card_name = '$cardName',
	card_expiry = '$expiry',
	card_csc = '$cvv'
	WHERE cookie = '$session'";
	
	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully <br>";
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

} else {
	//echo 'email was null';
}

?>