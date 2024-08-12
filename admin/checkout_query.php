<?php
require_once 'connect.php';

$time = date("H:i:s", strtotime("+8 HOURS"));
$transaction_id = $_REQUEST['transaction_id'];

$updateTransactionQuery = "UPDATE `transaction` SET `checkout_time` = '$time', `status` = 'Check Out' WHERE `transaction_id` = '$transaction_id'";
$result = $conn->query($updateTransactionQuery);

if ($result) {
	$getRoomIdQuery = "SELECT `room_id` FROM `transaction` WHERE `transaction_id` = '$transaction_id'";
	$roomResult = $conn->query($getRoomIdQuery);

	if ($roomResult && $roomResult->num_rows > 0) {
		$row = $roomResult->fetch_assoc();
		$room_id = $row['room_id'];

		$updateRoomQuery = "UPDATE `room` SET `available` = `available` + 1 WHERE `room_id` = '$room_id'";
		$conn->query($updateRoomQuery);
	} else {
		// Handle the case where no room_id is found for the transaction
	}
} else {
	// Handle the case where the transaction update query fails
}

// Redirect to "checkout.php"
header("location:checkout.php");
?>