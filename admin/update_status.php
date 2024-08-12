<?php
require 'connect.php'; // Include your database connection code

if (isset($_GET['transaction_id']) && isset($_GET['new_status'])) {
    $transaction_id = $_GET['transaction_id'];
    $new_status = $_GET['new_status'];

    // Prepare and execute the SQL update statement
    $sql = "UPDATE `transaction` SET status = '$new_status' WHERE transaction_id = $transaction_id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Successfully updated the status
        header("Location: reserve.php"); // Redirect back to the reservation page
        exit();
    } else {
        // Handle any errors if the update fails
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Handle invalid or missing parameters
    echo "Invalid or missing parameters.";
}
?>