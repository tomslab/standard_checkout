<?php

// Get payment information

include('db.php');

$sql = "SELECT card_number, card_name
		FROM checkout WHERE cookie = '$session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $card_number = $row["card_number"];
        $card_name = $row["card_name"];
    }
}

$review_card_number = substr($card_number, -4);

echo '<p>' . $card_name . ' card ending in ' . $review_card_number . '</p>';

$conn->close();

?>