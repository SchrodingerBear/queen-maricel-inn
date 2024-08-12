<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Hotel Online Reservation</title>
	<link rel="stylesheet" href="css/plugins.css" />
	<link rel="icon" href="img/logo.png" type="image/png">
	<link rel="stylesheet" href="css/style.css" />
	<style>
		#paymentButton:hover {
			background-color: black;
			color: white;
		}

		input[type="text"],
		input[type="number"],
		input[type="email"],
		select,
		input[type="file"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
		}

		input[type="date"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
		}

		.overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 1;
		}

		.error-message {
			position: fixed;
			top: 0;
			left: 0;
			background-color: #FEE7E1;
			color: #C86E56;
			width: 100%;
			margin: 0;
			padding: 16px;
			text-align: center;
			z-index: 9999;
		}

		.hotel-description {
			padding: 50px;
			background-color: #F8F5F0
		}

		.small-input {
			font-size: 14px;
			padding: 5px;
		}

		.small-button {
			font-size: 14px;
			padding: 5px 10px;
		}

		.progress-wrap {
			display: none !important;
		}
	</style>
</head>

<body>



	<div class="progress-wrap cursor-pointer">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>



	<?php
	if (isset($_GET['error']) && $_GET['error'] === 'true') {
		echo '<div class="error-message">Date Already Booked</div>';
	}
	?>

	<?php
	require_once '../admin/connect.php';
	$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
	$fetch = $query->fetch_array();
	?>


	<div class="col">
		<div class="rooms2 mb-90 left animate-box fadeInUp animated" data-animate-effect="fadeInUp"
			style="margin-bottom: 0px !important;">
			<div class="image-container">
				<img style="height: 70vh;" src="../client/img/rooms/<?php echo $fetch['photo'] ?>" alt=""
					class="img-fluid">
			</div>



		</div>

		<div class="booking-box">
			<?php
			if (!empty($errorMsg)) {
				echo '<div class="error-message">' . $errorMsg . '</div>';
			}
			?>
			<form method="POST" enctype="multipart/form-data" action="formaction.php">
				<div class="row">
					<h2>Room Description</h2>
					<p>
						<?php echo $fetch['description']; ?>
					</p>

					<div class="form-group">
						<br>
						<h5>Gmail *</h5>
						<input name="gmail" type="email" required class="small-input">
					</div>

					<div class="form-group" style="display: none;">
						<br>
						<h5>Room Id</h5>
						<input name="ri" type="text" value="<?php echo $_REQUEST['room_id'] ?>" readonly
							class="small-input">
					</div>

					<div class="form-group">
						<br>
						<h5>First Name *</h5>
						<input type="text" name="firstname" required="required" class="small-input" />
					</div>

					<div class="form-group">
						<br>
						<h5>Middle Name *</h5>
						<input type="text" name="middlename" required="required" class="small-input" />
					</div>

					<div class="form-group">
						<br>
						<h5>Last Name *</h5>
						<input type="text" name="lastname" required="required" class="small-input" />
					</div>

					<div class="form-group">
						<br>
						<h5>Address *</h5>
						<input type="text" name="address" required="required" class="small-input" />
					</div>

					<div class="form-group">
						<br>
						<h5>Contact No *</h5>
						<input type="text" name="contactno" required="required" class="small-input" />
					</div>

					<div class="form-group">
						<br>
						<h5>Check in *</h5>
						<input type="date" name="date" required="required" class="small-input" />
					</div>

					<div class="form-group">
						<br>
						<h5>Days to Book *</h5>
						<input id="daysSelect" name="days" required="required" type="number" value="1"
							class="small-input">
					</div>

					<div class="form-group">
						<br>
						<h5>Hours</h5>
						<select id="hoursSelect" class="small-input">
							<option value="12">12 hours</option>
							<option value="24">24 hours</option>
						</select>
					</div>

					<div class="form-group">
						<br>
						<h5>Extra Beds *</h5>
						<select id="extraBedsSelect" name="extra_beds" required="required" class="small-input">
							<option value="0">No Extra Beds</option>
							<option value="1">1 Extra Bed (₱800)</option>
							<option value="2">2 Extra Beds (₱1600)</option>
							<option value="3">3 Extra Beds (₱2400)</option>
						</select>
					</div>

					<div class="form-group">
						<h5>Price</h5>
						<input name="bill" id="roomPrice" type="text"
							value="<?php echo "₱. " . $fetch['price'] . ".00"; ?>" readonly class="small-input">
					</div>

					<div class="form-group">
						<br>
						<h5>Kindly Pay: </h5>
						<?php
						$downPayment = $fetch['price'] * 0.5;
						?>
						<input name="down" type="text" value="<?php echo number_format($downPayment, 2); ?>" readonly
							class="small-input">
					</div>

					<div class="form-group">
						<input type="checkbox" id="termsCheckbox" name="acceptTerms" required>
						<label for="termsCheckbox">I accept the <a style="color: blue;" href="terms.php"
								target="_blank">Terms and Conditions</a></label>
					</div>

					<div class="form-group">
						<a id="paymentButton" class="btn-form1-submit mt-15 small-button"
							style="text-align: center;">Make Payment</a>
					</div>

					<div class="form-group">
						<button class="btn-form1-submit mt-15 small-button" type="button"
							id="submitButton">Submit</button>
					</div>
				</div>
			</form>
		</div>



	</div>

</body>

<script>
	const dateInput = document.querySelector('input[name="date"]');
	const today = new Date();
	today.setHours(0, 0, 0, 0);

	dateInput.addEventListener('change', function () {
		const selectedDate = new Date(this.value);
		if (selectedDate < today) {
			alert('Selected date must be today or later.');
			this.value = '';
		}
	});

	const daysSelect = document.getElementById('daysSelect');
	const hoursSelect = document.getElementById('hoursSelect');
	const priceInput = document.querySelector('input[name="bill"]');
	const downpaymentInput = document.querySelector('input[name="down"]');

	const twentyFourHoursMultiplier = 2;
	let originalPrice = parseFloat(priceInput.value.replace('₱. ', '').replace(' .00', ''));
	const extraBedsSelect = document.getElementById('extraBedsSelect');
	const extraBedPrice = 800;

	function updatePrice() {
		const selectedDays = parseInt(daysSelect.value);
		const selectedHours = parseInt(hoursSelect.value);
		const selectedExtraBeds = parseInt(extraBedsSelect.value);
		let newPrice = originalPrice;

		if (selectedDays !== 1) {
			hoursSelect.value = '24';
			hoursSelect.disabled = true;
		} else {
			hoursSelect.disabled = false;
		}

		if (selectedHours === 24) {
			newPrice *= twentyFourHoursMultiplier;
		}
		newPrice *= selectedDays;
		newPrice += selectedExtraBeds * extraBedPrice;
		priceInput.value = '₱ ' + newPrice.toLocaleString('en-US', { minimumFractionDigits: 2 });
		var downpaymentString = '₱ ' + (newPrice * 0.50).toLocaleString('en-US', { minimumFractionDigits: 2 });
		downpaymentInput.value = downpaymentString;
	}

	extraBedsSelect.addEventListener('change', updatePrice);
	daysSelect.addEventListener('change', updatePrice);
	hoursSelect.addEventListener('change', updatePrice);
	updatePrice();

	setTimeout(function () {
		var errorMessage = document.querySelector('.error-message');
		if (errorMessage) {
			errorMessage.style.transition = 'opacity 1s'; // Add a smooth transition
			errorMessage.style.opacity = '0'; // Fade out the error message
			setTimeout(function () {
				errorMessage.style.display = 'none'; // Hide the error message after fading out
			}, 1000); // 1000 milliseconds = 1 second
		}
	}, 2000); // 2000 milliseconds = 2 seconds
</script>



<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.isotope.v3.0.2.js"></script>
<script src="js/pace.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollIt.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/YouTubePopUp.js"></script>
<script src="js/select2.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
	document.getElementById('paymentButton').addEventListener('click', function () {
		Swal.fire({
			imageUrl: '../admin/images/info.jpg', // Set the URL of the image
			imageAlt: 'Payment QR Code', // Alt text for the image
			showCancelButton: false, // Remove the "Cancel" button
			showConfirmButton: true, // Show the "OK" button
			confirmButtonText: 'OK', // Change the text of the "OK" button
			confirmButtonColor: '#3085d6', // Change the color of the "OK" button
		});
	});

	document.getElementById('submitButton').addEventListener('click', function () {
		// Check if the "Terms and Conditions" checkbox is checked
		const termsCheckbox = document.getElementById('termsCheckbox');
		if (!termsCheckbox.checked) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please accept the Terms and Conditions.',
			});
			return; // Don't submit the form
		}

		// Get all the required fields
		const requiredFields = document.querySelectorAll('[required]');
		let allFieldsFilled = true;

		requiredFields.forEach(function (field) {
			if (field.value.trim() === '') {
				allFieldsFilled = false;
				field.classList.add('error'); // Add a visual indication to empty required fields
			} else {
				field.classList.remove('error'); // Remove the visual indication
			}
		});

		if (allFieldsFilled) {
			Swal.fire({
				title: 'Confirmation',
				text: 'Are you sure you want to submit this form?',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Yes, submit it!',
				cancelButtonText: 'Cancel',
			}).then((result) => {
				if (result.isConfirmed) {
					document.querySelector('form').submit();
				}
			});
		} else {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please fill in all the required fields.',
			});
		}
	});
</script>



</html>