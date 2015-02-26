<?php

// Get delivery information

include('db.php');

$sql = "SELECT delivery_choice,
			   chosen_day,
			   address_line1,
			   address_line2,
			   address_town,
			   address_county,
			   address_postcode
		FROM checkout WHERE cookie = '$session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $delivery_choice = $row["delivery_choice"];
        $delivery_day = $row["chosen_day"];
        $line1 = $row["address_line1"];
        $line2 = $row["address_line2"];
        $town = $row["address_town"];
        $county = $row["address_county"];
        $postcode = $row["address_postcode"];
    }
}

echo '<div class="row"><div class="col-xs-6">';
echo '<strong>' . $delivery_choice . '</strong> (&#163;5.95)';
echo '</div><div class="col-xs-6">';
echo '<address>';
echo '<strong>' .  $line1 . '</strong><br />';
if( $line2!='' ) {
	echo $line2 . '<br />';
}
echo $town . '<br />' . $county . '<br />' . $postcode;
echo '</address></div></div>';

$conn->close();

?>