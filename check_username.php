<?php
// Database connection
require_once 'db_connect.php';

if(isset($_POST['username'])){
    $username = $_POST['username'];

    // Use prepared statements to avoid SQL injection
    $sql_tblusers = "SELECT * FROM tblusers WHERE username = ?";
    $stmt_tblusers = $conn->prepare($sql_tblusers);
    $stmt_tblusers->bind_param("s", $username);
    $stmt_tblusers->execute();
    $result_tblusers = $stmt_tblusers->get_result();

    $sql_registration = "SELECT * FROM registration WHERE firstname = ? OR fathername = ? OR grandfathername = ?";
    $stmt_registration = $conn->prepare($sql_registration);
    $stmt_registration->bind_param("sss", $username, $username, $username);
    $stmt_registration->execute();
    $result_registration = $stmt_registration->get_result();

    if ($result_tblusers->num_rows > 0 || $result_registration->num_rows > 0) {
        echo 'exists';
    } else {
        echo 'not exists';
    }

    $stmt_tblusers->close();
    $stmt_registration->close();
} else {
    echo 'No username provided';
}
?>
