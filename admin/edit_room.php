<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="en">

<head>
	<title>Hotel Online Reservation</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css " />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">Hotel Online Reservation</a>
			</div>
			<ul class="nav navbar-nav pull-right ">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false"><i class="glyphicon glyphicon-user"></i>
						<?php echo $name; ?>
					</a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<ul class="nav nav-pills">
			<li><a href="home.php">Home</a></li>
			<li><a href="account.php">Accounts</a></li>
			<li><a href="reserve.php">Reservation</a></li>
			<li><a href="room.php">Room</a></li>
		</ul>
	</div>
	<br />
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="alert alert-info">Transaction / Room / Change Room</div>
				<br />
				<div class="col-md-4">
					<?php
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
					?>
					<form action="edit_query_room.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Room Type </label>
							<select class="form-control" required=required name="room_type">
								<option value="">Choose an option</option>
								<option value="Single Room" <?php if ($fetch['room_type'] == "Single Room") {
									echo "selected";
								} ?>>Single Room</option>
								<option value="Twin Bed" <?php if ($fetch['room_type'] == "Twin Bed") {
									echo "selected";
								} ?>>
									Twin Bed</option>
								<option value="Twin Single Bed" <?php if ($fetch['room_type'] == "Twin Single Bed") {
									echo "selected";
								} ?>>Twin Single Bed</option>
								<option value="Queen Size Bed Room A" <?php if ($fetch['room_type'] == "Queen Size Bed Room A") {
									echo "selected";
								} ?>>Queen Size Bed Room A</option>
								<option value="Queen Size Bed Room B" <?php if ($fetch['room_type'] == "Queen Size Bed Room B") {
									echo "selected";
								} ?>>Queen Size Bed Room B</option>
								<option value="Family Room A" <?php if ($fetch['room_type'] == "Family Room A") {
									echo "selected";
								} ?>>Family Room A</option>
								<option value="Family Room B" <?php if ($fetch['room_type'] == "Family Room B") {
									echo "selected";
								} ?>>Family Room B</option>
								<option value="Double Deck Bed" <?php if ($fetch['room_type'] == "Double Deck Bed") {
									echo "selected";
								} ?>>Double Deck Bed</option>
							</select>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control"
								name="description"><?php echo $fetch['description']; ?></textarea>
						</div>

						<div class="form-group">
							<label>Room Id </label>
							<input type="number" min="0" max="999999999" value="<?php echo $_REQUEST['room_id']; ?>"
								class=" form-control" name="id" readonly />
						</div>

						<div class="form-group">
							<label>Price </label>
							<input type="number" min="0" max="999999999" value="<?php echo $fetch['price'] ?>"
								class="form-control" name="price" />
						</div>

						<div class="form-group">
							<label>Photo </label>
							<div id="preview" style="width:150px; height :150px; border:1px solid #000;">
								<img src="images/<?php echo $fetch['photo'] ?>" id="lbl" width="100%" height="100%" />
							</div>
							<br>

							<input type="file" id="photo" name="photo" />
						</div>
						<br />

						<div class="form-group">
							<label>Availabe Room</label>
							<input type="number" min="0" max="999999999" value="<?php echo $fetch['available'] ?>"
								class="form-control" name="roomav" />
						</div>

						<div class="form-group">
							<button name="edit_room" class="btn btn-warning form-control"><i
									class="glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style="text-align:right; margin-right:10px;" class="navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright HOR 2017 </label>
	</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function () {
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if (!files.length || !window.FileReader) {
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if (/^image/.test(files[0].type)) {
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function () {
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>

</html>