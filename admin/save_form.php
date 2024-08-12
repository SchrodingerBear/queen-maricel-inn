<?php
require_once 'connect.php';
if (isset($_POST['add_form'])) {
	$bill = $_POST['bill'];
	$room_no = $_POST['room_no'];
	$query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `status` = 'Check In'") or die(mysqli_error($conn));
	$row = $query->num_rows;
	$time = date("H:i:s", strtotime("+8 HOURS"));
	if ($row > 0) {
		echo "<script>alert('Room not available')</script>";
	} else {
		$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error($conn)); // Pass $conn as an argument
		$fetch2 = $query2->fetch_array();
		$conn->query("UPDATE `transaction` SET `room_no` = '$room_no', `bill` = '$bill', `status` = 'Confirmed', `checkin_time` = '$time' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error($conn)); // Pass $conn as an argument
		header("Location: send_email_confirm.php?transaction_id=" . $_GET['transaction_id'] . "&gmail=" . $_GET['gmail'] . "&price=" . $_GET['bill'] . "&name=" . $_GET['firstname']);
	}
}
?>