
<?php
session_start();

// Include your database connection file
require_once 'db_connect.php';

// Check if user is logged in
if(isset($_SESSION['username'])) {
    // User is logged in
    $username = $_SESSION['username'];
    
    // Get current timestamp
    $currentTime = date('Y-m-d H:i:s');
    
    // Update logout time in the database for the last login entry with null logout time
    $sql = "UPDATE tblusers SET logout_time = '$currentTime' WHERE username = '$username' AND logout_time IS NULL ORDER BY login_time DESC LIMIT 1";
    $conn->query($sql);
}

// Redirect the user to the logout page or any other appropriate page
header("Location: logout_page.php");
exit();
?>
<?php
session_start();
include 'history-log.php'; // Include the logging function

if (isset($_SESSION['username'])) {
    $session_id = $_SESSION['id']; // Get the session ID
    logLogout($session_id); // Log the logout event
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

