<?php
require_once 'connect.php';
if (isset($_GET['transaction_id'])) {
	$transaction_id = $_GET['transaction_id'];

	$query = $conn->query("SELECT room_id FROM `transaction` WHERE `transaction_id` = $transaction_id");
	$fetch = $query->fetch_assoc();
	$room_id_to_discard = $fetch['room_id'];
	$update_query = $conn->query("UPDATE `room` SET `available` = `available` + 1 WHERE `room_id` = '$room_id_to_discard'");
	$delete_query = $conn->query("DELETE FROM `transaction` WHERE `transaction_id` = $transaction_id");

	if ($update_query && $delete_query) {
		header("Location: reserve.php"); // Redirect back to the reservation page.
		exit();
	} else {
		echo "Error: Unable to update room availability and delete the transaction record.";
	}
}
?>