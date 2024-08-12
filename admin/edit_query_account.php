<?php
require_once 'connect.php';
if (isset($_POST['edit_account'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "UPDATE `admin` SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE `admin_id` = '$_REQUEST[admin_id]'";
    
    // Execute the query
    if ($conn->query($query) === TRUE) {
        header("location:account.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
