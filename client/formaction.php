<?php
require_once '../admin/connect.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contactno = $_POST['contactno'];
$gmail = $_POST['gmail'];
$dateInput = $_POST['date'];

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$ri = intval($_POST['ri']);

// // Check for duplicate date and matching room_id
// $checkDuplicateBookingSQL = "SELECT * FROM transaction WHERE checkin = '$dateInput' AND room_id = '$ri'";
// $result = $conn->query($checkDuplicateBookingSQL);

// if ($result->num_rows > 0) {
// 	$row = $result->fetch_assoc();
// 	if ($row['status'] == 'Check Out') {
// 	} else if ($row['room_id'] == $ri) {
// 		// Redirect with an error if the status is not 'Checked Out' and the room_id matches
// 		exit();
// 	}
// }

$insertGuestSQL = "INSERT INTO guest (firstname, middlename, lastname, address, contactno, gmail) 
                    VALUES ('$firstname', '$middlename', '$lastname', '$address', '$contactno', '$gmail')";

if ($conn->query($insertGuestSQL) === TRUE) {
	$guest_id = $conn->insert_id;

	$days = intval($_POST['days']);
	$extra_beds = intval($_POST['extra_beds']);

	if ($_FILES['proof']['error'] === 0) {
		$uploadDir = '../admin/proof/';
		$proof_filename = basename($_FILES['proof']['name']);
		$proof_path = $uploadDir . $proof_filename;

		if (move_uploaded_file($_FILES['proof']['tmp_name'], $proof_path)) {
		} else {
			$proof_filename = "default.png";
			exit;
		}
	}

	$price = str_replace('₱', '', $_POST['bill']);

	$updateRoomSQL = "UPDATE room SET available = available - 1 WHERE room_id = '$ri'";

	if ($conn->query($updateRoomSQL) === TRUE) {
		$insertTransactionSQL = "INSERT INTO transaction (guest_id, room_id, room_no, extra_bed, status, 
                        days, checkin, checkin_time, checkout, checkout_time, bill, proof) 
                        VALUES ('$guest_id', '$ri', '0', '$extra_beds', 'Pending', '$days', 
                        '$dateInput', '00:00:00', '0000-00-00', '00:00:00', '$price', '$proof_filename')";

		if ($conn->query($insertTransactionSQL) === TRUE) {
			$conn->close();
			header("Location: message.php");
			exit();
		} else {
			echo "Error: " . $insertTransactionSQL . "<br>" . $conn->error;
		}
	} else {
		echo "Error updating room availability: " . $updateRoomSQL . "<br>" . $conn->error;
	}
} else {
	echo "Error: " . $insertGuestSQL . "<br>" . $conn->error;
}
?>