<?php
if (isset($_POST['add_room'])) {
	$room_type = $_POST['room_type'];
	$price = $_POST['price'];
	$available = $_POST['available'];
	$description = $_POST['description'];
	$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$photo_name = addslashes($_FILES['photo']['name']);
	$photo_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES['photo']['tmp_name'], "photo/" . $_FILES['photo']['name']);

	$query = "INSERT INTO `room` (room_type, price, description, photo, available) VALUES ('$room_type', '$price', '$description', '$photo_name', '$available')";
	$result = $conn->query($query) or die(mysqli_error());

	header("location:room.php");
}
?>