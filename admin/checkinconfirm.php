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
	<style>
		.left-panel {
			float: left;
			width: 60%;
		}

		.proof-image {
			max-width: 100%;
			height: auto;
		}

		img {
			float: right;
			width: 30%;
			height: 50%;
		}
	</style>
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
			<li class="active"><a href="reserve.php">Reservation</a></li>
			<li><a href="room.php">Room</a></li>
		</ul>
	</div>
	<br />

	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="left-panel">

					<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
					?>
					<br />

					<form method="POST" enctype="multipart/form-data"
						action="save_form.php?transaction_id=<?php echo $fetch['transaction_id']; ?>&gmail=<?php echo $fetch['gmail'] ?>&price=<?php echo $fetch['bill'] ?>&name=<?php echo $fetch['firstname'] ?>">
						<div class="form-group">
							<label for="firstname">Firstname</label>
							<input type="text" id="firstname" name="firstname" value="<?php echo $fetch['firstname'] ?>"
								class="form-control" disabled="disabled">
						</div>
						<div class="form-group">
							<label for="middlename">Middlename</label>
							<input type="text" id="middlename" name="middlename"
								value="<?php echo $fetch['middlename'] ?>" class="form-control" disabled="disabled">
						</div>
						<div class="form-group">
							<label for="lastname">Lastname</label>
							<input type="text" id="lastname" name="lastname" value="<?php echo $fetch['lastname'] ?>"
								class="form-control" disabled="disabled">
						</div>
						<div class="form-group">
							<label for="room_type">Room Type</label>
							<input type="text" id="room_type" name="room_type" value="<?php echo $fetch['room_type'] ?>"
								class="form-control" disabled="disabled">
						</div>
						<div class="form-group">
							<label for="bill">Price</label>
							<input type="text" id="bill" name="bill" value="<?php echo $fetch['bill'] ?>"
								class="form-control">
						</div>
						<div class="form-group">
							<label for="room_no">Room No</label>
							<input type="number" id="room_no" name="room_no" min="0" max="999" class="form-control"
								required="required">
						</div>
						<div class="form-group">
							<label for="days">Days</label>
							<input type="text" id="days" name="days" value="<?php echo $fetch['days'] ?>"
								class="form-control" disabled="disabled">
						</div>
						<div class="form-group">
							<label for="extra_bed">Extra Bed</label>
							<input type="text" id="extra_bed" name="extra_bed" value="<?php echo $fetch['extra_bed'] ?>"
								class="form-control" disabled="disabled">
						</div>
						<button type="submit" name="add_form" class="btn btn-primary"><i
								class="glyphicon glyphicon-save"></i>
							Submit</button>
					</form>


				</div>

				<div class="right-panel">
					<img src="../admin/proof/<?php echo $fetch['proof'] ?>">
					<br style="clear:both;" />
					<br />
				</div>
			</div>
			<br />
			<br />
		</div>
	</div>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</html>