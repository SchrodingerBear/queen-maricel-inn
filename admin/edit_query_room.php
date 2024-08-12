<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'connect.php';
if (isset($_POST['edit_room'])) {
	$room_type = $_POST['room_type'];
	$price = $_POST['price'];
	$roomav = $_POST['roomav'];
	$room_id = $_POST['id'];
	$description = $_POST['description'];
	if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'], "images/" . $_FILES['photo']['name']);
		$result = $conn->query("UPDATE `room` SET `room_type` = '$room_type', `price` = '$price', `available` = '$roomav', `photo` = '$photo_name' WHERE `room_id` = '$room_id'");
		if (!$result) {
			die(mysqli_error($conn));
		}
		header("location:room.php");
	} else {
		$result = $conn->query("UPDATE `room` SET `room_type` = '$room_type', `price` = '$price', `available` = '$roomav' WHERE `room_id` = '$room_id'");
		if (!$result) {
			die(mysqli_error($conn));
		}
		header("location:room.php");

	}
}
?>