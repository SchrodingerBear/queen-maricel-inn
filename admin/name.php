<!-- <?php
	require 'connect.php';
	$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$name = $fetch['name'];
?> -->

<?php
require 'connect.php';

if (isset($_SESSION['admin_id'])) {
    $admin_id = $_SESSION['admin_id'];

    // Assuming 'admin_id' is an integer, you should use prepared statements
    $stmt = $conn->prepare("SELECT * FROM `admin` WHERE `admin_id` = ?");
    $stmt->bind_param("i", $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $fetch = $result->fetch_array();
        $name = $fetch['name'];
    } else {
        $name = "Unknown"; // Default value if admin_id is not found
    }

    $stmt->close();
} else {
    $name = "Unknown"; // Default value if admin_id is not set
}
?>
