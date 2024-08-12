

<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection
require_once 'connect.php';

if (isset($_REQUEST['room_id'])) {
    $room_id = $_REQUEST['room_id'];

    // Create a prepared statement
    $stmt = $conn->prepare("DELETE FROM `room` WHERE `room_id` = ?");
    $stmt->bind_param("i", $room_id);

    // Execute the statement
    if ($stmt->execute()) {
        $stmt->close();

        // Debugging output
        echo "Deletion successful. Redirecting...";

        // Add a delay of 1 second before redirection
        sleep(1);

        // Redirect using JavaScript
        echo '<script>window.location.href = "room.php";</script>';
    } else {
        die("Error executing query: " . $stmt->error);
    }
} else {
    die("Missing room_id parameter");
}
?>

