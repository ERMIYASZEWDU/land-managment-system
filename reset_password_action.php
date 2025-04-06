<?php
require_once 'db_connect.php';

if(isset($_POST['username']) && isset($_POST['new_password'])) {
    $username = $_POST['username'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Hash the new password

    // Use prepared statements to avoid SQL injection
    $sql_update = "UPDATE tblusers SET password = ? WHERE username = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("ss", $new_password, $username);

    if($stmt_update->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }

    $stmt_update->close();
} else {
    echo 'error';
}
?>
